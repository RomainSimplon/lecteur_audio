<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="js/hover.js"></script>
  <link href="css/stylecss.css" rel="stylesheet">
</head>

<body>

<?php if (isset($_GET["message"])) : ?>
<div style="padding:10px;background:green;color:#fff;">
<?=$_GET["message"]?>
</div>
<?php endif; ?>

<div class="jumbotron text-center" id="jumbo">
  <h1>Welcome to Simplify</h1>
  <p>If you can listen <br>You can be happy </p> 
</div>

<div class="container_block">
  <div class="card-deck" id="registerlog"> 
    <div class="card mb-3" style="max-width: 18rem;" id="register">
      <div class="card-header">Register</div>
      <div class="card-body text-primary">
        <h5 class="card-title">Go sign up</h5><br>
        <center><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button></center>
      </div>
    </div>
    <div class="card  mb-3" style="max-width: 18rem;" id="login">
      <div class="card-header">Login</div>
      <div class="card-body text-danger">
        <h5 class="card-title">GO on your account</h5><br>
        <center><button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login</button></center>
      </div>
    </div>
  </div>  
</div>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01')". class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="login/process/insertregister.php" method="post">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>

      <label for="email"><b>pseudo</b></label>
      <input type="text" placeholder="pseudo" name="user_name" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="user_email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="user_pass" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="password_confirm" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" > Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" >Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button><br><br><br>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</head>

<body>

<div id="id02" class="modal">
  
<form class="modal-content" action="login/process/login_exec.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="user_name" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="user_pass" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>               


