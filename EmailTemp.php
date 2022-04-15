
<?php
include ('dbFiles/PushDataIntoDB.php');
include ('dbFiles/StudentOrRefugeeAccountObject.php');
session_start();
if(!isset($_SESSION['username']))
{
    header("location: index.php");
}
$name=$_SESSION['username'];

//current issue, not sure how to grab the identity of the person they want to conenct with

$to = "xyz@somedomain.com"; //whatever the organization domain or our domain is
$subject = "This is subject";

$message = "<b>This is HTML message.</b>";

$header = "From:$name@somedomain.com \r\n";

$retval = mail($to,$subject,$message,$header);

if( $retval == true ) {
    echo "The mail was sent";
}else {
    echo "The mail could not be sent";
}
?>

