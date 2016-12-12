<?php
error_reporting(0); // Remove CURL error messages

class FireflyUserLogin {
   var $username;
   var $password;

   var $loginPage;
   var $nextPage;

   var $result;
   var $fullname;
   var $avatar;
   var $staff;
   var $loginSuccess;

   function FireflyUserLogin($username, $password, $loginPage, $nextPage) {
      $this->username = $username;
      $this->password = $password;
      $this->loginPage = $loginPage;
      $this->nextPage = $nextPage;
      $this->loginSuccess = false;

      $this->Login();
      $this->EvaluateResult();
   }

   private function Login() {
      // Clear the COOKIE_JAR for the user and create POST data.
      unlink("COOKIE_JAR");
      $data = "username=" . $this->username . "&password=" . $this->password . "";

      // Obtain fake session and assign it to the COOKIE_JAR
      $post = curl_init();
      curl_setopt($post, CURLOPT_URL, $this->loginPage);
      curl_setopt($post, CURLOPT_POST, true);
      curl_setopt($post, CURLOPT_POSTFIELDS, $data);
      curl_setopt($post, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($post, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($post, CURLOPT_COOKIEJAR, "COOKIE_JAR");
      curl_exec($post);
      curl_close($post);

      // Access the nextPage using the COOKIE_JAR
      $post = curl_init();
      curl_setopt($post, CURLOPT_URL, $this->nextPage);
      curl_setopt($post, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($post, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($post, CURLOPT_COOKIEFILE, "COOKIE_JAR");
      $this->result = curl_exec($post);
      curl_close($post);
   }

   private function EvaluateResult() {
      $page = new DomDocument;
      $page->validateOnParse = true;
      $page->loadHtml($this->result);
      $selector = new DOMXPath($page);
      $fullname = $selector->query('//span[@class="ff-ub-username-text"]');

      if ($fullname->item(0) !== NULL) {
          $this->fullname = $fullname->item(0)->nodeValue;
          $this->username = strtolower($this->username);
          $this->avatar = $this->GetAvatar($selector);
          $this->staff = $this->IsUserAStaffMember();
      }

      if ($this->fullname !== NULL) {
          // The new page has the users fullname, so assume logged in.
          $this->loginSuccess = true;
      } else {
          $this->loginSuccess = false;
      }
   }

   private function GetAvatar($selector) {
       $avatar = $selector->query('//img[@class="ff-ub-username-profilepic"]');
       if ($avatar->length > 0) {
           $avatarURL = $avatar->item(0)->attributes->item(1)->nodeValue;
           $avatarURL = "https://firefly.clevedonschool.org.uk/".$avatarURL;
       }

       // Access the avatar image and return a Base64 Image
       $post = curl_init();
       curl_setopt($post, CURLOPT_URL, $avatarURL);
       curl_setopt($post, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($post, CURLOPT_SSL_VERIFYPEER, false);
       curl_setopt($post, CURLOPT_COOKIEFILE, "COOKIE_JAR");
       $avatar = curl_exec($post);
       $avatar = base64_encode($avatar);
       curl_close($post);

       if (($avatar == NULL) || ($avatar == "") || ($avatar == "PGh0bWw+PGhlYWQ+PHRpdGxlPk9iamVjdCBtb3ZlZDwvdGl0bGU+PC9oZWFkPjxib2R5Pg0KPGgyPk9iamVjdCBtb3ZlZCB0byA8YSBocmVmPSIvUmVzb3VyY2VJY29ucy9wZXJzb24uanBnIj5oZXJlPC9hPi48L2gyPg0KPC9ib2R5PjwvaHRtbD4NCg==")) {
           $avatar = "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";
       }

       return $avatar;
   }

   private function IsUserAStaffMember() {
       // This would be custom to the Firefly page in question. It looks for
       // HTML in a page that would only be visible to staff members.
       $staff = (!strpos($this->result, '<div class="ff-navigationcomponent-meta"><span class="ff-navigationcomponent-title"><span class="ff-navigationcomponent-title-text">Key Information for Staff</span></span></div>') === false);
       return $staff;
   }
}

?>
