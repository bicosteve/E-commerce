<?php require_once 'includes/header.php' ?>

    <div class="container" id="page">
      <div class="auth">
        <p>Register</p>
        <?php
          $registerFormProvider = new RegisterationFormProvider();

          echo $registerFormProvider->createRegisterationForm();
         ?>
      </div>
      <?php require_once 'includes/footer_date.php'; ?>
    </div>

<?php require_once 'includes/footer.php' ?>
