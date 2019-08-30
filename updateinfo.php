<table border='1' align='center' width="50%" style='padding:10; margin-top=5; padding-top:5; background-color:#66ff99;'>
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
</body>
</html>

<?php
if(isset($_POST['submit'])){
	include "../dbconnect.php";
	$id=$_POST['id'];
	$q="SELECT * FROM `hall` WHERE id='$id'";
	$result=mysqli_query($con,$q);
	$row=mysqli_num_rows($result);
	if($row>0){
		$q=mysqli_fetch_assoc($result);
		echo "<table border='1' align='center' width='50%' style='padding:10; margin-top=5; padding-top:5; background-color:#66ff99;'>";
		echo "<tr colspan='3'>";
		echo "<td><h3>Student information<h3></td>";
		echo "</tr><tr>";
		echo "<td><input type='text' name='id' value=";?><?php echo $q['id']; ?>
		<?php echo "></td></tr><tr>";
		echo "<td><input type='text' name='semester' value=";?><?php echo $q['semester']; ?>
		<?php echo "></td></tr><tr>";
		echo "<td><input type='text' name='floor' value=";?><?php echo $q['floor']; ?>
		<?php echo "></td></tr><tr>";
		echo "<td><input type='text' name='room' value=";?><?php echo $q['room']; ?>
		<?php echo "></td></tr><tr>";
		echo "<td><input type='text' name='dept' value=";?><?php echo $q['dept']; ?> 
		<?php echo "></td></tr></table>";?>