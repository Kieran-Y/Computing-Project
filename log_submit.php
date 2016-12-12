<?php
if (isset($_POST["submit"])) {      // Checks to see if the posted submit input is set.
    $companyName = $_POST["companyName"];
    $companyAddress = $_POST["companyAddress"];
    $companyTelephone = $_POST["companyTelephone"];
    $startDate = $_POST["startDate"];
    $endDate = $_POST["endDate"];

    // Write this to the database.

    // if company already exists in the database get the id of the existing one in the employeers table.
    // else add company to employeers table

    var_dump($companyName);
    var_dump($companyAddress);
    var_dump($companyTelephone);

    // add employee reference stuff
    var_dump($startDate);
    var_dump($endDate);
} else {
    // Redirect the page location back to the log page.
    header("Location: ./log.php");
    exit();
}
?>
