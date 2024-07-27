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
$sql = " SELECT * FROM exhibitions_artworks";
$result = $mysqli->query($sql);
//echo "Artists Table Data Fetched";
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Exhibitions Details</title>
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

  
       
 </style>
</head>
 
<body>
<body style="background-image:url('IMG_0450.jpg');background-repeat:no-repeat;background-size:100% 100% ;background-attachment:fixed;">

<div class="tit">
<ul style="font-size:20px">
<!----<li><a href="Sales.html"><b>Sales</b></a></li>---->
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

    <section>
        <h1>Exhibitions Artworks</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Exhibition ID</th>
                <th>Artwork ID</th>
        
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
                <td><?php echo $rows['exhibition_id'];?></td>
                <td><?php echo $rows['artwork_id'];?></td>
                
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 
</html>