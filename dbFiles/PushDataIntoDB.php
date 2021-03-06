<?php

//This function inserts the Account Object into the database.
//The username and Account Type must be included
function pushAccountObjectIntoDB($accountUsername, $accountType, $accountObject){
    $conn = mysqli_connect("sql2.njit.edu", "vs598", "7p984^KTdv@M8o^", "vs598");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $serializeObject = serialize($accountObject);
    $baseSixtyFourAccountObject = base64_encode($serializeObject);

    if(!(getAccountObject($accountUsername, $accountType))){
        $sql = "INSERT INTO Accounts (Username, AccountObject, AccountType)
        VALUES ('$accountUsername', '$baseSixtyFourAccountObject', '$accountType')";
        try{
            $conn->query($sql);
            mysqli_close($conn);
            return TRUE;
        } catch(Exception $e) {
            mysqli_close($conn);
            return "Error has occurred creating account 1";
        }
    }else{
        $sql = "UPDATE Accounts SET AccountObject='$baseSixtyFourAccountObject' WHERE Username='$accountUsername'";
        try{
            $conn->query($sql);
            mysqli_close($conn);
            return TRUE;
        } catch(Exception $e) {
            mysqli_close($conn);
            return "Error has occurred creating account 2";
        }
    }
}

//This function gets an Account Object where the username and Account Type match
//This does not check if the password is correct,that must done in the logic after calling this function
function getAccountObject($accountUsername, $accountType){
    $conn = mysqli_connect("sql2.njit.edu", "vs598", "7p984^KTdv@M8o^", "vs598");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $sql = "SELECT AccountObject FROM Accounts Where Username='$accountUsername' AND AccountType='$accountType'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
        $accountObject = base64_decode($row["AccountObject"]);
        return unserialize($accountObject);
    } else {
        return FALSE;
    }
}

function getAllAccounts($accountType){
    $conn = mysqli_connect("sql2.njit.edu", "vs598", "7p984^KTdv@M8o^", "vs598");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT AccountObject FROM Accounts Where AccountType='$accountType'";

    $result = $conn->query($sql);

    if ($result->num_rows >= 0) {
        return $result;
    } else {
        return FALSE;
    }

}