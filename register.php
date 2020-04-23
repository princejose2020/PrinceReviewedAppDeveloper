<?php
if(isset($_POST["submit"])) {
include('db/connection.php');
$result = register($_POST);
$message = null;
if($result['success'] != 0) {
    header('Location: index.php');
} else {
    $message = $result['message'];
}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Register to WIS</title>
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="css/style.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
    <script type="application/javascript">
        let message = <?php echo $message; ?>
        if(message != null) {
            alert(message);
        }
    </script>
</head>
<body class="bg-home">
    <div class="container login-container" >
      <div class="row justify-content-center">
          <div class="col-md-8 login-form-2 ">
              <h3>Register</h3>
              <form action="" method="post">
                  <div class="form-group">
                      <input type="text" id="username" class="form-control" name="username" placeholder="Username *" value="" required/>
                  </div>
                  <div class="form-group">
                      <input type="password" id="password" class="form-control" name="password" placeholder="Your Password *" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" value="" required/>
                  </div>
                  <div class="form-group">
                      <input type="email" id="email" class="form-control" name="email" placeholder="Email *" value="" required/>
                  </div>
                  <div class="form-group">
                      <input type="text" id="firstName" class="form-control" name="firstName" placeholder="First Name *" value="" required/>
                  </div>
                  <div class="form-group">
                      <input type="text" id="lastName" class="form-control" name="lastName" placeholder="Last Name *" value="" required/>
                  </div>
                  <div class="form-group">
                      <input type="submit" id="registerClick" name="submit" class="btnSubmit" value="Register" />
                  </div>
                  <div class="form-group">
                      <a href="index.php" class="register-login" value="Login">Already Account Login Now!</a>
                  </div>
              </form>
          </div>
      </div>
    </div>
</body>
</html>
