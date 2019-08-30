<div class="d3i">
<form method="post" action="info.php">
<table border='1' align='center' width="60%">
<tr colspan="3">
<td><h3>Insert id for student info<h3></td>
</tr>
<tr>
<td><input type='text' name='id' placeholder='Enter id' required></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="info" required></td>
</tr>
</table>
</form>
<form method="post" action="info.php">
<table border='1' align='center' width="60%">
<tr colspan="3">
<td><h3>Insert room no. and hall name for student info<h3></td>
</tr>
<tr>
<td><input type='text' name='room' placeholder='Enter room no.' required></td>
</tr>
<tr>
<td><input type='text' name='hall_name' placeholder='Enter hall name' required></td>
</tr>
<tr>
<td><input type="submit" name="submit2" value="info" required></td>
</tr>
</table>
</form>
</div>
<?php
if(isset($_POST['submit'])){
	include "../dbconnect.php";
	$id=$_POST['id'];
	$q="SELECT * FROM `hall` WHERE id='$id'";
	$result=mysqli_query($con,$q);
	$row=mysqli_num_rows($result);
	if($row>0){
		$q=mysqli_fetch_assoc($result);
		echo "<table border='1' align='center' width='60%'>";
		echo "<tr>";
		echo "<td colspan='3'><h3>Student information<h3></td>";
		echo "</tr><tr>";
		echo "<td>ID"; ?>
		<?php echo "</td><td>";?><?php echo $q['id']; ?>
		<?php echo "</td></tr><tr><td>Semester:"; ?>
		<?php echo "</td><td>";?><?php echo $q['semester']; ?>
		<?php echo "</td></tr><tr><td>Room:"; ?>
		<?php echo "</td><td>";?><?php echo $q['room']; ?>
		<?php echo "</td></tr><tr><td>Floor:"; ?>
		<?php echo "</td><td>";?><?php echo $q['floor']; ?>
		<?php echo "</td></tr><tr><td>Department:"; ?>
		<?php echo "</td><td>";?><?php echo $q['dept']; ?> 
		<?php echo "</td></tr><tr><td>E-mail:"; ?>
		<?php echo "</td><td>";?><?php echo $q['email']; ?>
		<?php echo "</td></tr><tr><td>Hall Name:"; ?>
		<?php echo "</td><td>";?><?php echo $q['hall_name']; ?>
		<?php echo "</td></tr></table>";
	}
	else{
		echo "<script> alert('Not found'); </script>";
	}
}
else if(isset($_POST['submit2'])){
	include "../dbconnect.php";
	$room=$_POST['room'];
	$hall_name=$_POST['hall_name'];
	$q="SELECT * FROM `hall` WHERE room='$room' AND hall_name='$hall_name'";
	$result=mysqli_query($con,$q);
	$row=mysqli_num_rows($result);
	if($row>0){
		echo "<table border='1' align='center' width='60%'>";
		echo "<tr>";
		echo "<td colspan='3'><h3>Student information<h3></td>";
		echo "</tr><tr>";
		while($q=mysqli_fetch_array($result)){
			echo "<table border='1' align='center' width='60%'>";
			echo "<tr>";
			echo "<td>ID"; ?>
			<?php echo "</td><td>";?><?php echo $q['id']; ?>
			<?php echo "</td></tr><tr><td>Semester:"; ?>
			<?php echo "</td><td>";?><?php echo $q['semester']; ?>
			<?php echo "</td></tr><tr><td>Department:"; ?>
			<?php echo "</td><td>";?><?php echo $q['dept']; ?> 
			<?php echo "</td></tr><tr><td>E-mail:"; ?>
			<?php echo "</td><td>";?><?php echo $q['email']; ?>
			<?php echo "</td></tr></table>";
		}
	}
	else{
		echo "<script> alert('Not found'); </script>";
	}
}
?>