<?php require_once 'includes/header.php'; ?>
<div class="container" id="page">
  <div class="auth">
    <p>Login</p>
    <form class="auth-form" action="">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Your Email" autocomplete="off" />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter Your Password"
          autocomplete="off" />
      </div>
      <div class="form-group">
        <button id="auth-button" class="btn form-control" type="submit" name="login">
          Login
        </button>
      </div>
    </form>
    <small class="text-muted"><a style="text-decoration: none; float:right;" href="register.php">Need An Account
        ?</a></small>
  </div>
  <?php require_once 'includes/footer_date.php'; ?>
</div>

<?php require_once 'includes/footer.php'; ?>