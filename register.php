<?php $pageTitle = 'Register';  ?>
<?php  require_once 'includes/header.php'; ?>

<?php
 

  $account = new Account();

  if(isset($_POST['register'])){
    
    $username = FormSanitizer::sanitizeUsername($_POST['username']);
    $email = FormSanitizer::sanitizeEmail($_POST['email']);
    $password = FormSanitizer::sanitizePassword($_POST['password']);
    $password2 = FormSanitizer::sanitizePassword($_POST['password2']);

    $account->registerUser($username,$email,$password,$password2);

  }


?>

<div class="container" id="page">
  <div class="auth">
    <p>Register</p>

    <form class="auth-form" action="register.php" method="POST">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" placeholder="Username" autocomplete="off" />
        <!--Error Messages-->
        <?php echo $account->getValidateErrors(Constants::$usernameLengthError); ?>
        <?php echo $account->getValidateErrors(Constants::$usernameCorrectLettersError); ?>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Your Email" autocomplete="off" />
        <!--Error Messages-->
        <?php echo $account->getValidateErrors(Constants::$emailEmptyError); ?>
        <?php echo $account->getValidateErrors(Constants::$invalidEmailError); ?>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter Your Password"
          autocomplete="off" />
        <!--Error Messages-->
        <?php echo $account->getValidateErrors(Constants::$emptyPasswordError); ?>
      </div>

      <div class="form-group">
        <label for="username">Confirm Password</label>
        <input type="password" name="password2" class="form-control" placeholder="Confirm Your Password"
          autocomplete="off" />
        <!--Error Messages-->
        <?php echo $account->getValidateErrors(Constants::$emptyConfirmPasswordError); ?>
        <?php echo $account->getValidateErrors(Constants::$passwordMismatchError); ?>
      </div>

      <div class="form-group">
        <button id="auth-button" class="btn form-control" type="submit" name="register">
          Register
        </button>
      </div>
    </form>
    <small class="text-muted"><a style="text-decoration: none; float:right;" href="login.php">Already Registered
        ?</a></small>
  </div>
  <?php require_once 'includes/footer_date.php'; ?>
</div>

<?php require_once 'includes/footer.php' ?>