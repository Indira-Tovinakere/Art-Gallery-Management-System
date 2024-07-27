<!-- PHP code to establish connection with the localserver -->
<?php
 require_once "config.php";
 $result = mysqli_query($connect, "SELECT * FROM artists");
 ?>

<?php

//echo "Connected Successfully Established with Indira DB";

// SQL query to select data from database//
//$sql = " SELECT * FROM artists";
//$result = $mysqli->query($sql);
//echo "Artists Table Data Fetched";
//$mysqli->close();
//?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Artists Details</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
<script language="javascript" src="user.js" type="text/javascript"></script>
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
<body style="background-image:url('exhibition-room-art-gallery-600nw-2278230369.webp');background-repeat:no-repeat;background-size:100% 100% ;background-attachment:fixed;">

<div class="tit">
<ul style="font-size:20px">
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
<!----<li><a href="Sales.html"><b>Sales</b></a></li>
<li><a href="order now.html"><b>Order now</b></a></li>--->



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
        <h1>Artists</h1>
        <form name="frmUser" method="post" action="">
        <!-- TABLE CONSTRUCTION -->
        <table border="1" cellpadding="5" cellspacing="1" class="tblListForm">
        <tr class="listheader">
        <td></td> 
                <!-- <th>Artist ID</th> -->
                <th>Artist Name</th>
                <th>Artist Age</th>
                <th>Artist Nationality</th>
                <th>Artist Contact Number</th>
            </tr>

<?php
$i=1;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><input type="checkbox" name="artists[]" value="<?php echo $row["artist_id"]; ?>" ></td> 
<td><?php echo $row["artist_name"]; ?></td>
<td><?php echo $row["artist_age"]; ?></td>
<td><?php echo $row["artist_nationality"]; ?></td>
<td><?php echo $row["artist_contactnumber"]; ?></td>
</tr>
<?php
$i++;
}
?>
<tr class="listheader">
<td colspan="5"><input type="button" name="update" value="Update" onClick="setUpdateAction();" /> <input type="button" name="delete" value="Delete"  onClick="setDeleteAction();" /></td>
</tr>
</table>
</form>

    </section>
</body>
 
</html>