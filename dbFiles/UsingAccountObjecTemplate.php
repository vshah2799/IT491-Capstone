<?php
include("PushDataIntoDB.php");
include("StudentOrRefugeeAccountObject.php");

//Create a new Account Object. For the ROA or School, replace StudentOrRefugeeAccountObject with
//the name of the respective class
$testObject = new StudentOrRefugeeAccountObject();

//These are a requirement when creating the object. If at least 1 of these is not there
//You must through and error. This check will be done on the FE
$testObject->setUsername("vshah");
$testObject->setPassword("1234");
$testObject->setAccountType("Student");
//////////////////////////////////////////////////

//This is how you would set the other attributes.
//Subjects and Hobbies/Interests are arrays
$testObject->setAge(2);
$testObject->setSubjects(["Math", "English"]);



//This object is already in the DB so can't push it again
//pushAccountObjectIntoDB($testObject->getUsername(), $testObject->getAccountType(), $testObject, "sql2.njit.edu", "vs598", "7p984^KTdv@M8o^");

//Gets an account object with the specified Username and Account Type
$testObjectTwo = getAccountObject("vshah", "Student", "sql2.njit.edu", "vs598", "7p984^KTdv@M8o^");

//All fields of the Object can now be accessed like this
//For signing in, get the password from this and make sure they match for verification
print($testObjectTwo->getUsername());