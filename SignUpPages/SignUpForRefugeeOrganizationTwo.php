<?php
require ('../dbFiles/PushDataIntoDB.php');
require ('../dbFiles/RefugeeOrganizationAccountObject.php');
$sessionCook = session_set_cookie_params(0, "../CookieInfo");
session_start();
if(!isset($_SESSION["Username"]) || !isset($_SESSION["Password"])) {
    header("Location: SignUpForRefugeeOrganizationOne.php");
}
$usernameFromForm = $_POST["Username"];
$passwordFromForm = $_POST["Password"];

if(getAccountObject($usernameFromForm, "ROA") != FALSE){
    header("Location: SignUpErrorPage.php");
}else{

    $_SESSION["Username"] = $usernameFromForm;
    $_SESSION["Password"] = $passwordFromForm;
    print("You are good");
}


$firstNameFromForm = $_POST["AdminFirstName"];
$lastNameFromForm = $_POST["AdminLastName"];
$organizationFromForm = $_POST["Organization"];
$addressFromForm = $_POST["Address"];

$refugeeObject = new RefugeeOrganizationAccountObject();
$refugeeObject ->setUsername($usernameFromForm);
$refugeeObject->setPassword($passwordFromForm);
$refugeeObject ->setAdminFirstName($firstNameFromForm);
$refugeeObject ->setAdminLastName($lastNameFromForm);
$refugeeObject ->setOrganization($organizationFromForm);
$refugeeObject ->setAddress($addressFromForm);
$refugeeObject ->setAccountType("ROA");

/*
echo $refugeeObject ->getUsername();
echo $refugeeObject->getPassword();
echo $refugeeObject ->getAdminFirstName();
echo $refugeeObject ->getAdminLastName();
echo $refugeeObject ->getOrganization();
echo $refugeeObject ->getAddress();
echo $refugeeObject ->getAccountType();
*/

//pushAccountObjectIntoDB($refugeeObject->getUsername(),$refugeeObject->getAccountType(),$refugeeObject);
