<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['name'];
	$designation=$_POST['designation'];
	$file=$_POST['file'];
	$status=$_POST['status'];
	
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE papersubmission SET name='$name',designation='$designation',status='$status' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: paperview.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM papersubmission WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$designation = $user_data['designation'];
	
	$status = $user_data['status'];
	
}
?>
		
		
			<form name="update_user" method="post" action="edit1.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>designation</td>
				<td><input type="text" name="designation" value=<?php echo $designation;?>></td>
			</tr>
			<tr> 
				
			<tr> 
				<td>status</td>
				<td><input type="text" name="status" value=<?php echo $status;?>></td>
			</tr>
			
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
				
<html>
<head>	
	<title>Edit User Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>designation</td>
				<td><input type="text" name="designation" value=<?php echo $designation;?>></td>
			</tr>
			<tr> 
				
			<tr> 
				<td>status</td>
				<td><input type="text" name="status" value=<?php echo $status;?>></td>
			</tr>
			
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

