<div class="d3i">
<form method="post" action="update.php">
<table border='1' align='center' width="50%">
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
		echo "<form method='post' action='updatedata.php'>";
		echo "<table border='1' align='center' width='50%'>";
		echo "<tr colspan='3'>";
		echo "<td><h3>Student information<h3></td>";
		echo "</tr><tr>";
		echo "<td><input type='text' name='id' placeholder='id' value=";?><?php echo $q['id']; ?>
		<?php echo "></td></tr><tr>";
		echo "<td><input type='text' name='semester' placeholder='semester' value=";?><?php echo $q['semester']; ?>
		<?php echo "></td></tr><tr>";
		echo "<td><input type='text' name='floor' placeholder='floor' value=";?><?php echo $q['floor']; ?>
		<?php echo "></td></tr><tr>";
		echo "<td><input type='text' name='room' placeholder='room' value=";?><?php echo $q['room']; ?>
		<?php echo "></td></tr><tr>";
		echo "<td><input type='text' name='dept' placeholder='dept' value=";?><?php echo $q['dept']; ?>
		<?php echo "></td></tr><tr>";
		echo "<td><input type='text' name='email' placeholder='E-mail' value=";?><?php echo $q['email']; ?>
		<?php echo "></td></tr><tr>";
		echo "<td><input type='text' name='hall_name' placeholder='Hall Name' value=";?><?php echo $q['hall_name']; ?>		
		<?php echo "><tr><td><input type='submit' name='submit' value='update'</td>";
		echo "</tr></td></tr></table></form>";
	}
	else{
		echo "<script> alert('Not found'); </script>";
	}
}

?>