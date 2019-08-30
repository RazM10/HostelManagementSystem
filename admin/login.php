<?php
session_start();
if(isset($_SESSION['uid'])){
	header("location:control.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<link rel='stylesheet' href='../css/style.css'>
	<link rel='stylesheet' href='css/stylel.css'>
</head>
<body>

<?php include 'home/header.php'; ?>
<?php include 'home/nav.php'; ?>
<?php include 'home/section.php'; ?>

<div class='d4'>
<?php include 'home/footer.php'; ?>
</div>

</body>
</html>

