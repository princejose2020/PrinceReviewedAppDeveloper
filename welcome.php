<?php
session_start();
if(isset($_POST["submit"])) {
	session_destroy();
	header('Location: index.php');
}
if(!isset($_SESSION['Username'])) {
  header('Location: index.php');
}
$username = $_SESSION['Username'];
$message = "Hello ".$username. " Welcome to the WIS";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to WIS</title>
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="css/style.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
</head>
<body class="bg-home overly">

<div class="container">
	<div class="row">
        <div class="center-box">
             <h2 style="color: #FFF">Welcome to WIS</h2> <br><br><h3 style="color: #FFF">Thank You <?php echo $username; ?></h3>  
             <br><br><br>
             <form method="POST" action="">
             	<input type="submit" name="submit" class="btn btn-primary" value="Logout" />
             </form>
        </div>
	</div>
</div>

</body>
</html>
