

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

// SQL query to select data from database'
$artist_id = $_POST["artist_id"];
$sql = " SELECT * FROM artists where artist_id = '$artist_id'";
$result = $mysqli->query($sql);
$mysqli->close();


?>

<section>
        <h1>ARTISTS</h1>
       <!--  <form name="f1" action = "updateArtistsFormScript.php" onsubmit = "return validation()" method = "POST"> -->
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
               <!-- <th>Artist ID</th> -->
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
                    <form name="f1" action = "updateArtistsFormScript.php" onsubmit = "return validation()" method = "POST">  
                    <input type='hidden' name='artist_id' value=<?php echo $rows['artist_name'];?>>
                    <td><input type='text' name='artist_name' value=<?php echo $rows['artist_name'];?>></td>
                    <td><input type='text' name='artist_age' value=<?php echo $rows['artist_age'];?>></td>
                    <td><input type='text' name='artist_nationality' value=<?php echo $rows['artist_nationality'];?>></td>
                    <td><input type='text' name='artist_contactnumber' value=<?php echo $rows['artist_contactnumber'];?>></td>
                    <td><input type =  "submit" id = "btn" value = "Update" /></td>
                </form>

                <!-- <td><?php echo $rows['artist_name'];?></td>
                <td><?php echo $rows['artist_age'];?></td>
                <td><?php echo $rows['artist_nationality'];?></td>
                <td><?php echo $rows['artist_contactnumber'];?></td>-->
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
           <!-- </form> -->
    </section>





