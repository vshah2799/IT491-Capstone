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
</html>
<?php
//Need to get Name, Gender, Age, Grade Level Going Off Of Current WireFrame For RefugeeList
//Figure Out How To Include Headshot of Refugee
// has to be $accountType = Refugee
session_start();
include (__DIR__ . "database_placeholder.php");
include(__DIR__ . "StudentOrRefugeeAccountObject.php"); //Unsure if both of these are needed, included for now.

$result = $db->query("SELECT $firstname,$lastname,$gender,$age FROM users where 'refugee'=$accountType");  // we dont have a private int $grade variable so I didnt include it for now

while ($row = mysql_fetch_assoc($result)) {
    echo $row['firstname'];
    echo $row['lastname'];
    echo $row['gender'];
    echo $row['age'];
    //echo $row['grade'];
}

//Never worked with images/profile pictures in PHP but a quick google search shows we have to store the image path in the DB and then call it like so
// SELECT imgpath FROM imgpathstable WHERE userid = $loggedInUser["id"]
// and then display it with something like :
// echo "<img href='$imgPath' ...

?>
