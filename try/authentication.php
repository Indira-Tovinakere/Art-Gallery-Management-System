<?php      
    // Username is root
$dbuser = 'root';
$dbpass = '';
 
// Database name is geeksforgeeks
$dbname = 'indira';
 
// Server is localhost with
// port number 3306
$dbhost='localhost';
$conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname) or die("Connect failed: %s\n". $conn -> error);
//return $conn;
 
// Checking for connections
/*if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}*/

//echo "Connected Successfully Established with Indira DB";
 
    $uname = $_POST['uname'];  
    $psw = $_POST['psw'];  
      
        //to prevent from mysqli injection  
        $uname = stripcslashes($uname);  
        $psw = stripcslashes($psw);  
        $uname = mysqli_real_escape_string($conn, $uname);  
        $psw = mysqli_real_escape_string($conn, $psw);  
      
        $sql = "select * from login where username = '$uname' and password = '$psw'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
            header("Location: http://localhost/try/homepage.html");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }   
        //$conn -> close();  
?>  