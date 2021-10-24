<?php require_once 'includes/header.php'; ?>
    <div class="container" id="page">
      <div class="auth">
        <p>Login</p>
        <?php
          $loginForm = new LoginFormProvider();
          echo $loginForm->createLoginForm();
        ?>
      </div>
      <?php require_once 'includes/footer_date.php'; ?>
    </div>

<?php require_once 'includes/footer.php'; ?>
