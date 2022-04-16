<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<div id="test2">
    <a href="https://app.axure.cloud/app/project/hynqiv/preview/qg8as9"> Name </a>
</div>
</html>
<?php
//Need to get Name, Gender, Age, School Going Off Of Current WireFrame For StudentList
//Figure Out How To Include Headshot of Student
// has to be $accountType = Student
$sessionCook = session_set_cookie_params(0, "../CookieInfo");
session_start();
include('dbFiles/PushDataIntoDB.php');
include("dbFiles/StudentOrRefugeeAccountObject.php");


$allAccounts = getAllAccounts($accountType = 'Refugee');
$objectList = array();

while($result = $allAccounts->fetch_assoc()) {
    $accountObject = $result["AccountObject"];
    $accountObject = base64_decode($accountObject);
    $accountObject = unserialize($accountObject);
    array_push($objectList, $accountObject);
}

while($objectList = mysqli_fetch_assoc($result)){
    echo $fullName = $objectList[0]->getFirstName() . " " . $objectList[0]->getLastName() . "<br />";
    echo '<a href="StudentIndividual.php"> Name2 </a id="$objectList->getusername()">';
    echo $objectList[0]->getGender() . "<br />";
    echo $objectList[0]->getAge() . "<br />";
    echo $objectList[0]->getOrganizationOrSchool() . "<br />";

}

if (isset($_SESSION[$accountType.'Student']))
{
    echo '<a href="StudentIndividual.php"> Student Page </a id="$objectList->getusername()">';
}
else {
    echo '<a href="StudentList.php" > Student List </a>';
}

?>