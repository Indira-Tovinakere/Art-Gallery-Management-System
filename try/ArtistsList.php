<!-- PHP code to establish connection with the localserver -->
<?php
 
// Username is root
$user = 'root';
$password = '';
 
// Database name is geeksforgeeks
$database = 'indira';
 
// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}

//echo "Connected Successfully Established with Indira DB";

// SQL query to select data from database
$sql = " SELECT * FROM artists";
$result = $mysqli->query($sql);
//echo "Artists Table Data Fetched";
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Artists Details</title>
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
            font-size: xx-large;
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

  
       
 </style>
</head>
 
<body>
<body style="background-image:url('exhibition-room-art-gallery-600nw-2278230369.webp');background-repeat:no-repeat;background-size:100% 100% ;background-attachment:fixed;">

<div class="tit">
<ul style="font-size:20px">
<!----<li><a href="Sales.html"><b>Sales</b></a></li>---->
<li><a href="order now.html"><b>Order now</b></a></li>
<li><a href="http://localhost/artists/gallery-staff.php"><b>Gallery Staff</b></a></li>
<li><a href="http://localhost/artists/exhibition-artworks.php"><b>Exhibitions_Artworks</b></a></li>
<li><a href="http://localhost/artists/exhibitions.php"><b>Exhibition</b></a></li>
<li><a href="http://localhost/artists/artworks.php"><b>Artworks</b></a></li>
<li><a href="http://localhost/artists/artists.php"><b>Artists</b></a></li>
<li><a href="about US.html"><b>About us</b></a></li>
<li><a href="http://localhost/artists/homepage.html"><b>Home</b></a></li>
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
        <h1>ARTISTS</h1>
        <form name="f1" action = "updateArtists.php" onsubmit = "return validation()" method = "POST">  
        <!-- TABLE CONSTRUCTION -->
        <table>
        
            <tr>
                <th>Artist ID</th>
                <th>Artist Name</th>
                <th>Artist Age</th>
                <th>Artist Nationality</th>
                <th>Artist Contact Number</th>
                <th>Action</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php 
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                    
                <td><?php echo $rows['artist_id'];?></td>
                <td><?php echo $rows['artist_name'];?></td>
                <td><?php echo $rows['artist_age'];?></td>
                <td><?php echo $rows['artist_nationality'];?></td>
                <td><?php echo $rows['artist_contactnumber'];?></td>
                <td><input type =  "submit" id = "btn" value = "Update" /></td>
               

            </tr>
            <?php
                }
            ?>
        </table>
        <p>    
            <!-- <center> 
                <input type =  "submit" id = "btn" value = "Update Artists" /> 
            </center>  -->
            </p> 
            </form>
    </section>
</body>
 
</html>