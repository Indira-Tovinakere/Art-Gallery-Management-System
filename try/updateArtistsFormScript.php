
<?php

$artist_id = $_POST["artist_id"];
$artist_name = $_POST["artist_name"];
$artist_age = $_POST["artist_age"];
$artist_nationality = $_POST["artist_nationality"];
$artist_contactnumber = $_POST["artist_contactnumber"];

$user = 'root';
$password = '';
 
// Database name is geeksforgeeks
$database = 'indira';
 
// Server is localhost with
// port number 3306
$servername='localhost:3306';
$conn = new mysqli($servername, $user, $password, $database);

//$mysqli = new mysqli($servername, $user, $password, $database);
 
if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}


// Checking for connections
/*
if ($mysqli->connect_error) 
{
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
} */

$sql = "update artists set artist_name='$artist_name', artist_age='$artist_age', artist_nationality='$artist_nationality', artist_contactnumber='$artist_contactnumber'  where artist_id='$artist_id'";

if ($conn->query($sql) === TRUE) 
{
	echo "Records updated for ".$artist_name." - ".$artist_contactnumber;
}
else {
	echo "Error: ".$sql."<br>".$conn->error;
}
$sqll = " SELECT artist_contactnumber FROM artists where artist_id='$artist_id'";
echo $artist_id;
$result = $conn->query($sqll);
echo "Records Fetched"; 
//$rows=$result->fetch_assoc();
//echo $rows['artist_contactnumber'];
while($rows=$result->fetch_assoc())
                {
                    echo "Hello";
                    echo $rows['artist_contactnumber'];
                }
    //header("Location: http://localhost/artists/artists.php");
 

$conn->close();

?>