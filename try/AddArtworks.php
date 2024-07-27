<!-- PHP code to establish connection with the localserver -->

 <?php
 require_once "config.php";
 $result = mysqli_query($connect, "SELECT * FROM artworks");
 ?>



<?php   
if (isset($_POST['submit'])) {
    //$userId=$_POST['userId'];
  $artwork_id=$_POST['artwork_id'];
  $title=$_POST['title'];
  $artist_id=$_POST['artist_id'];
  $medium=$_POST['medium'];
  $year_created=$_POST['year_created'];
  $price=$_POST['price'];

  $sql="INSERT INTO `artworks`(  `artwork_id`, `title`, `artist_id`, `medium`,`year_created`,`price`) VALUES ('$artwork_id','$title','$artist_id','$medium','$year_created','$price')";
  $con=mysqli_query($connect,$sql);
  if ($con) {
    echo "<script>alert('Insert Data');</script>";
  }else{
    echo "error";
  }
}
?>


<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Add Artworks</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
<script language="javascript" src="user.js" type="text/javascript"></script>
</head>

    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: black;
            font-size: x-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
   
   li{
    float:right;
	display:inline-block;
	margin: 20px 20px;
	}
.tit{ float:right;
      color:white;
	  margin:10px;
	  }
	ul li a{
 color:black;
 }
 .div1{ 
        width:150;
		height:150;
		float:left;
		margin:2px;
		}
.div2 { 
        width:1050;
        height:150;
        margin:0 auto;
  } 
.div3{ 
        width:150;
		height:150;
		float:left;
		margin:2px;
		}
.div4{ 
        width:1050;
        height:150;
        margin:0 auto;
  } 
 .div5{ 
        width:150;
		height:150;
		float:left;
		margin:2px;
		}
.div6{ 
        width:1050;
        height:150;
        margin:0 auto;
  }  
  
  a{text-decoration:none;
   color:white;
   }
   .button-link {
  display: block;
  text-align: center;
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border-radius: 4px;
  text-decoration: none;
}
  
       
 </style>
</head>
 
<body>
<body style="background-image:url('exhibition-room-art-gallery-600nw-2278230369.webp');background-repeat:no-repeat;background-size:100% 100% ;background-attachment:fixed;">

<div class="tit">
<ul style="font-size:20px">
<!----<li><a href="Sales.html"><b>Sales</b></a></li>
<li><a href="order now.html"><b>Order now</b></a></li>
<li><a href="http://localhost/try/gallery-staff.php"><b>Gallery Staff</b></a></li>
<li><a href="http://localhost/try/exhibition-artworks.php"><b>Exhibitions_Artworks</b></a></li>
<li><a href="http://localhost/try/exhibitions.php"><b>Exhibition</b></a></li>
<li><a href="http://localhost/try/artworks.php"><b>Artworks</b></a></li>---->
<li><a href="http://localhost/try/loginpage.php"><b><i>Logout</b></a></li>
<li><a href="http://localhost/try/gallery-staff.php"><b>Gallery Staff</b></a></li>
<li><a href="http://localhost/try/exhibition-artworks.php"><b>Exhibitions_Artworks</b></a></li>
<li><a href="http://localhost/try/exhibitions.php"><b>Exhibition</b></a></li>
<li><a href="http://localhost/try/AddArtworks.php"><b>Add Artworks</b></a></li>
<li><a href="http://localhost/try/Artworks.php"><b>Artworks</b></a></li>
<!--<li><a href="http://localhost/try/loginpage.php"><b>Logout</b></a></li>-->
<li><a href="http://localhost/try/AddArtists.php"><b>Add Artists</b></a></li>
<li><a href="http://localhost/try/artists.php"><b>Artists</b></a></li>
<li><a href="about US.html"><b>About us</b></a></li>
<li><a href="http://localhost/try/homepage.html"><b>Home</b></a></li>
</ul>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


    <section>
    <div class="insert">
	<h1>Enter New Artworks Information</h1>
<form method="post" action="#">
<table border="1" cellpadding="5" cellspacing="1" class="tblListForm">
<tr>
	<td >Enter Artwork id</td>
	<td><input type="text" name="artwork_id"></td>
</tr>
<tr>
	<td >Enter Title</td>
	<td><input type="text" name="title"></td>
</tr>
<tr>
	<td >Enter Artist Id</td>
	<td><input type="text" name="artist_id"></td>
</tr>
<tr>
	<td >Enter Artwork medium</td>
	<td><input type="text" name="medium"></td>
</tr>
<tr>
	<td >Enter Year Created</td>
	<td><input type="text" name="year_created"></td>
</tr>
<tr>
	<td >Enter Artwork price</td>
	<td><input type="text" name="price"></td>
</tr>
<tr style="background: yellow; text-align: center;">
	<td colspan="2"><input type="submit" name="submit" ></td>
</tr>
</table>
</form>

</div> 
    </section>
     
    <section>
    <div>
      <br>
      
      <button type="button" style="background-color:black;margin:auto;display:block"><a href="artworks.php"><center>Show Artworks List </center></a></button>
      
</br>
    </div>

   <!-- <div>
<button><a href="artists.php">Show Your Data</a></button>
</div> -->
    </section>
</body>
 
</html>