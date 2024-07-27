<?php
require_once "config.php";
$result = mysqli_query($connect, "SELECT * FROM users");
?>
<html>
<head>
<title>Users Show Data List</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script language="javascript" src="users.js" type="text/javascript"></script>
</head>
<body>
<div class="show">
	<h1>Show your DATA</h1>
<form name="frmUser" method="post" action="">
<table border="1" cellpadding="5" cellspacing="1" class="tblListForm">
<tr class="listheader">
<td></td> 
<td>Username</td>
<td>First Name</td>
<td>Last Name</td>
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
<td><input type="checkbox" name="users[]" value="<?php echo $row["userId"]; ?>" ></td> 
<td><?php echo $row["userName"]; ?></td>
<td><?php echo $row["firstName"]; ?></td>
<td><?php echo $row["lastName"]; ?></td>
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
</div>
</body>
</html>