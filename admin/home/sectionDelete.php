<div class="d3i">
<form method="post" action="delete.php">
<table border='1' align='center' width="50%">
<tr colspan="3">
<td><h3>Insert id for delete<h3></td>
</tr>
<tr>
<td><input type='text' name='id' placeholder='Enter id' required></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Delete" required></td>
</tr>
</table>
</form>
</div>

<?php
if(isset($_POST['submit'])){
	include "../dbconnect.php";
	$id=$_POST['id'];
	$q="DELETE FROM `hall` WHERE id='$id' ";
	mysqli_query($con,$q);
	echo "<script> alert('Data delete successful'); window.open('control.php','_self') </script>";
}
?>