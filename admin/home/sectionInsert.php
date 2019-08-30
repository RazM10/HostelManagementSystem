<div class="d3i">
<form method="post" action="insert.php">
<table border='1' align='center' width="50%">
<tr colspan="3">
<td><h3>Insert student information<h3></td>
</tr>
<tr>
<td><input type='text' name='id' placeholder='Enter id' required></td>
</tr>
<tr>
<td><input type='text' name='semester' placeholder='Enter semester' required></td>
</tr>
<tr>
<td><input type='text' name='floor' placeholder='Enter floor' required></td>
</tr>
<tr>
<td><input type='text' name='room' placeholder='Enter room' required></td>
</tr>
<tr>
<td><input type='text' name='dept' placeholder='Enter dept.' required></td>
</tr>
<tr>
<td><input type='text' name='email' placeholder='Enter email' required></td>
</tr>
<tr>
<td><input type='text' name='hall_name' placeholder='Enter hall name' required></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="submit" required></td>
</tr>
</table>
</form>
</div>

<?php
include "../dbconnect.php";
if(isset($_POST['submit'])){
	$id=$_POST['id'];
	$semester=$_POST['semester'];
	$floor=$_POST['floor'];
	$room=$_POST['room'];
	$dept=$_POST['dept'];
	$email=$_POST['email'];
	$hall_name=$_POST['hall_name'];

	$q="INSERT INTO `hall`(`id`, `semester`, `floor`, `room`, `dept`,`email`,`hall_name`) VALUES ('$id','$semester','$floor','$room','$dept','$email','$hall_name')";
	mysqli_query($con,$q);
	echo "<script> alert('Data insert successful'); window.open('control.php','_self') </script>";
}
?>