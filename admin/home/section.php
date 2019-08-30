<div class="d3i">
<form method="post" action="login.php">
<table border='1' align='center' width="50%">
<tr colspan="3">
<td><h3>Login for Admin control panel<h3></td>
</tr>
<tr>
<td><input type='text' name='name' placeholder='Enter Name' required></td>
</tr>
<tr>
<td><input type='password' name='pass' placeholder='Enter password' required></td></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="login" required></td>
</tr>
</table>
</form>
</div>
<?php
if(isset($_POST['submit']))
{
	include "../dbconnect.php";
	$n=$_POST['name'];
	$p=$_POST['pass'];
	$q="SELECT * FROM `admin` WHERE `name`='$n' AND `pass`='$p'";
	$r=mysqli_query($con,$q);
	$rq=mysqli_num_rows($r);
	if($rq>0){
		$data=mysqli_fetch_assoc($r);
		$id=$data['id'];
		session_start();
		$_SESSION['uid']=$id;
		header("location:control.php");
	}
	else{
		echo "<script> alert('not match'); </script>";
	}
}
?>
