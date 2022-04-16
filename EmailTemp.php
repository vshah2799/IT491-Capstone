
<?php
include ('dbFiles/PushDataIntoDB.php');
include ('dbFiles/StudentOrRefugeeAccountObject.php');
/* //uncomment this code to use with current session
session_start();

$_SESSION['username'] = $_POST['username'];

if(!isset($_SESSION['username']))
{
    header("location: index.php");
}
$name=$_SESSION['username'];
*/

//current issue, not sure how to grab the identity of the person they want to connect with

$to = "forschool1424@gmail.com"; //whatever the organization domain or our domain is
$subject = "This is subject";

$message = "this is a message";

$header = "From:something@gmail.com \r\n";

$retval = mail($to,$subject,$message,$header);

if( $retval == true ) {
    echo "The mail was sent";
}else {
    echo "The mail could not be sent";
}


?>

