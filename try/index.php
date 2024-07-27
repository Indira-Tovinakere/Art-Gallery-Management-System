<?php
require_once "config.php";
$result = mysqli_query($connect, "SELECT * FROM users");
?>


<?php   
if (isset($_POST['submit'])) {
    //$userId=$_POST['userId'];
  $userName=$_POST['userName'];
  $password=$_POST['password'];
  $firstName=$_POST['firstName'];
  $lastName=$_POST['lastName'];

  $sql="INSERT INTO `users`(  `userName`, `password`, `firstName`, `lastName`) VALUES ('$userName','$password','$firstName','$lastName')";
  $con=mysqli_query($connect,$sql);
  if ($con) {
    echo "<script>alert('Insert Data');</script>";
  }else{
    echo "error";
  }
}
?>


<html>
<head>
<title>Insert Data</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script language="javascript" src="users.js" type="text/javascript"></script>
</head>
<body>
 
<div class="insert">
	<h1>Insert Your Data</h1>
<form method="post" action="#">
<table border="1" cellpadding="5" cellspacing="1" class="tblListForm">

<tr>
	<td >Enter Your UserName</td>
	<td><input type="text" name="userName"></td>
</tr>
<tr>
	<td >Enter Your Password</td>
	<td><input type="text" name="password"></td>
</tr>
<tr>
	<td >Enter Your FirstName</td>
	<td><input type="text" name="firstName"></td>
</tr>
<tr>
	<td >Enter Your LastName</td>
	<td><input type="text" name="lastName"></td>
</tr>
<tr style="background: yellow; text-align: center;">
	<td colspan="2"><input type="submit" name="submit" ></td>
</tr>
</table>
</form>

<button><a href="show_data.php">Show Your Data</a></button>
</div> 
 

</body></html>