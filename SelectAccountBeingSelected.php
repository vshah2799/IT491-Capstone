<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="mx-auto" style="width: 200px;">
    <a href="SignUpRefugeeOne.php" type="button" class="btn btn-primary" >Refugee</a>
    <a href="SignUpStudentOne.php" type="button" class="btn btn-primary" >Student</a>
    <a href="SignUpForRefugeeOrganization.php" type="button" class="btn btn-primary" >Refugee Organization</a>
    <a href="SignUpForSchool.php" type="button" class="btn btn-primary" >School</a>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
session_start();

if(isset($_SESSION["Username"])){
    header("Location: SignIn.php");
}
