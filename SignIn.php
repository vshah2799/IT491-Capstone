<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Login into your account</title>
</head>
<body>

<form action="SignInTwo.php" method="post">

    <div class="mb-3">
        <label class="form-label">Username</label>
        <input class="form-control" name="Username" required >
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input class="form-control" name="Password" required >
    </div>

    <div class="col-auto my-1">
        <label  class="mr-sm-2" for="inlineFormCustomSelect">Account Type</label>
        <select name="AccountType" required class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            <option selected></option>
            <option name="AccountType" >Refugee</option>
            <option name="AccountType" >Student</option>
            <option name="AccountType" >ROA</option>
            <option name="AccountType" >School</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
include ('dbFiles/PushDataIntoDB.php');
include ('dbFiles/StudentOrRefugeeAccountObject.php');
$sessionCook = session_set_cookie_params(0, "../CookieInfo");
session_start();



