<?php

//This function inserts the Account Object into the database.
//The username and Account Type must be included
function pushAccountObjectIntoDB($accountUsername, $accountType, $accountObject, $servername,$dbUsername,$password){
    $conn = mysqli_connect($servername, $dbUsername, $password, "vs598");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $serializeObject = serialize($accountObject);
    $baseSixtyFourAccountObject = base64_encode($serializeObject);

    $sql = "INSERT INTO Accounts (Username, AccountObject, AccountType)
    VALUES ('$accountUsername', '$baseSixtyFourAccountObject', '$accountType')";

    if ($conn->query($sql) === TRUE) {
        mysqli_close($conn);;
        return TRUE;
    } else {
        mysqli_close($conn);
        return FALSE;
    }
}

//This function gets an Account Object where the username and Account Type match
//This does not check if the password is correct,that must done in the logic after calling this function
function getAccountObject($accountUsername, $accountType, $servername,$dbUsername,$password){
    $conn = mysqli_connect($servername, $dbUsername, $password, "Accounts");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT AccountObject FROM Accounts Where Username='$accountUsername' AND AccountType='$accountType'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
        return $row["AccountObject"];
    } else {
        return FALSE;
    }
}