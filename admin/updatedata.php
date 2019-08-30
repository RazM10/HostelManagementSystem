<?php
if(isset($_POST['submit'])){
	include "../dbconnect.php";
	$id=$_POST['id'];
	$semester=$_POST['semester'];
	$floor=$_POST['floor'];
	$room=$_POST['room'];
	$dept=$_POST['dept'];
	$email=$_POST['email'];
	$hall_name=$_POST['hall_name'];

	$q="UPDATE `hall` SET `semester`='$semester',`floor`='$floor',`room`='$room' ,`dept`='$dept' ,`email`='$email',`hall_name`='$hall_name'  WHERE id='$id'";
	mysqli_query($con,$q);
	echo "<script> alert('Data update successful'); window.open('update.php','_self') </script>";
}
?>