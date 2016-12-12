<?php
    error_reporting(0);
    require_once('./FireFlyLogin.php');

    $username = strtolower($_POST['username']);
    $password = $_POST['password'];

    $loginPage = "https://firefly.clevedonschool.org.uk/login/login.aspx?prelogin=https%3a%2f%2ffirefly.clevedonschool.org.uk%2fdashboard&kr=ActiveDirectoryKeyRing";
    $nextPage = "https://firefly.clevedonschool.org.uk/dashboard";
    $firefly = new FireflyUserLogin($username, $password, $loginPage, $nextPage);

    if ($firefly->loginSuccess) {
    		// Kill the old session.
    		session_start();
    		session_unset();
    		session_destroy();

    		// Create the new session
    		session_start();
        $_SESSION['avatar'] = $firefly->avatar;       // Base64 image
    		$_SESSION['username'] = $firefly->username;   // Inputted String
    		$_SESSION['fullname'] = $firefly->fullname;   // String from Firefly
    		$_SESSION['isStaff'] = $firefly->staff;       // Boolean from Firefly

        header("Location: ./dashboard.php");
        exit();
    } else {
    		// Incorrect password so kill the session
        session_start();
    		session_unset();
    		session_destroy();

        header("Location: ./index.php?error=Incorrect username or password.");
        exit();
    }

    unlink("COOKIE_JAR");
?>
