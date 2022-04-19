<?php
include ('../dbFiles/PushDataIntoDB.php');
include ('../dbFiles/StudentOrRefugeeAccountObject.php');
include ('../dbFiles/SchoolAccountObject.php');
include ('../dbFiles/RefugeeOrganizationAccountObject.php');
$sessionCook = session_set_cookie_params(0, "../CookieInfo");
session_start();

if(!isset($_SESSION["AccountObject"]) || !isset($_SESSION["Username"])){
    header("Location: sign_in.php");
}

$accountObject = $_SESSION["AccountObject"];

if(!($accountObject instanceof StudentOrRefugeeAccountObject)){
    header("Location: home.php");
}

if($accountObject->getAccountType() == "Refugee"){
    $emailSubject = $accountObject->getUsername() . " would like to connect to a student";
    $emailBody = $accountObject->getUsername() . " would like to connect to a student. 
    Please contact " . $accountObject->getOrganizationOrSchool() . " to have them get in touch!";
}else{
    $emailSubject = $accountObject->getUsername() . " would like to connect to a refugee";
    $emailBody = $accountObject->getUsername() . " would like to connect to a refugee. 
    Please contact " . $accountObject->getOrganizationOrSchool() . " to have them get in touch!";
}

if($_SESSION["AccountType"] == "Refugee"){
    mail("vs598@njit.edu", $emailSubject, $emailBody);
}else{
    mail("refugeeorg@gmail.com", $emailSubject, $emailBody);
}


header("Location: home.php");

