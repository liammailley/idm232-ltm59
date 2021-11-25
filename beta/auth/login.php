<?php 

$page_title = 'Login';
include '../global/header.php';

?>

<?php include '../includes/header.php'; ?>

<div class="container">
  <h1 class="body">Login</h1>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/_components/alert.php'; ?>
  <form action="" method="post">
    <label for="emailField">Email</label>
    <input type="email" name="email" id="emailField" value="" required>

    <label for="passwordField">Password</label>
    <input type="password" name="password" id="passwordField" value="" >

    <label for="rememberMeField">Remember Me</label>
    <input type="checkbox" name="remember_me" id="rememberMeField">
    <br>
    <br>
    <input type="submit" value="Log in" name="submit" class="btn btn-primary">
  </form>
</div>