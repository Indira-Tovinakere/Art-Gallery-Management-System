<html>

<head>

//css

<style>

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

  
       
 </style>
 <body style="background-image:url('exhibition-room-art-gallery-600nw-2278230369.webp');background-repeat:no-repeat;background-size:100% 100% ;background-attachment:fixed;">

<div class="tit">
<ul style="font-size:20px">
  <li><a href="add details.html"><b>Add details</b></a></li>
  <li><a href="feedback.html"><b>Feedback</b></a></li>
<li><a href="order now.html"><b>Order now</b></a></li>
<li><a href="Sales.html"><b>Sales</b></a></li>
<li><a href="Gallery staff.html"><b>Gallery Staff</b></a></li>
<li><a href="Exhibition Artworks.html"><b>Exhibitions_Artworks</b></a></li>
<li><a href="Exhibition.html"><b>Exhibition</b></a></li>
<li><a href="Artworks.html"><b>Artworks</b></a></li>
<li><a href="Artists.html"><b>Artists</b></a></li>
<li><a href="about US.html"><b>About us</b></a></li>
<li><a href="home page (1).html"><b>Home</b></a></li>
</ul>
</div>
<br>
<br>
<br>
<br>
<br>

<h1 style="font-family:freestyle script;font-size:80px;color:white;" align="center"></h1>
<!DOCTYPE html>
  <html>
  <head>
  <style>
 table, th, td {
    border: 1px solid black;
  }
  </style>
  </head>
  <body bgcolor="#EEFDEF">
  <br>
  <br>
  <h2><center>ARTIST DETAILS</center> </h2>



<?php
include 'db_connection.php';
$con = OpenCon();

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

echo "Connected Successfully Established with Indira DB";

//mysql_select_db("indira", $con);
$sql = "SELECT * FROM artists";
$result = $mysqli->query($sql);
echo "Artists Table data fetched";
$mysqli->close();
//$result = mysql_query("SELECT * FROM artists");

echo "<table>
<tr>
  <th>Artist-ID</th>
  <th>Artist-Name</th> 
  <th>Artist-Age</th>
  <th>Artist-Nationality</th>
  <th>Artist-Contact Number</th>
  
</tr>";

while($row = mysql_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['artist_id'] . "</td>";

  echo "<td>" . $row['artist_name'] . "</td>";

  echo "<td>" . $row['artist_age'] . "</td>";

  echo "<td>" . $row['artist_nationality'] . "</td>";

  echo "<td>" . $row['artist_contactnumber'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

mysql_close($con);

?>

</body>

</html>