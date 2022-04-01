
<?php
require 'TestPuttingObjectIntoDB.php';
$servername = "sql2.njit.edu";
$username = "vs598";
$password = "";


// Create connection
$conn = mysqli_connect($servername, $username, $password, "vs598");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$testObject = new TestPuttingObjectIntoDB("Vishal", "22");
$seriliazeobject = serialize($testObject);
$basesixtyfourobject = base64_encode($seriliazeobject);
print($basesixtyfourobject);

// sql to create table
$sql = "INSERT INTO MyGuests (id, objectTest)
VALUES ('000001', '$basesixtyfourobject')";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();