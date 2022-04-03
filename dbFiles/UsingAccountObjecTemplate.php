<?php
include("PushDataIntoDB.php");
include("StudentOrRefugeeAccountObject.php");

$testObject = new StudentOrRefugeeAccountObject();
$testObject->setAge(2);
$testObject->setSubjects(["Math", "English"]);

//These are a requirement when creating the object. If at least 1 of these is not there
//You must through and error. This check will be done on the FE
$testObject->setUsername("vshah");
$testObject->setPassword("1234");
$testObject->setAccountType("Student");

//Don't wanna try and push the same object twice so this part is just to see
//pushAccountObjectIntoDB($testObject->getUsername(), $testObject->getAccountType(), $testObject, "sql2.njit.edu", "vs598", "7p984^KTdv@M8o^");

//Gets an account object with the specified Username and Account Type
$testObjectTwo = getAccountObject("vshah", "Student", "sql2.njit.edu", "vs598", "7p984^KTdv@M8o^");

//All field of the Object can now be accessed
print($testObjectTwo->getUsername());