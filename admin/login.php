<?php require_once 'admin_includes/admin_header.php'; ?>
    <div class="container" id="page">
      <div class="auth">
        <p>Admin Login</p>
        <form class="auth-form" action="">
          <div class="form-group">
            <label for="email">Email</label>
            <input
              type="email"
              name="email"
              class="form-control"
              placeholder="Your Email"
            />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input
              type="password"
              name="password"
              class="form-control"
              placeholder="Enter Your Password"
            />
          </div>
          <div class="form-group">
            <button
              id="auth-button"
              class="btn form-control"
              type="submit"
              name="login"
            >
              Login
            </button>
          </div>
        </form>
      </div>
      <?php require_once '../includes/footer_date.php'; ?>
    </div>
<?php require_once 'admin_includes/admin_footer.php'; ?>
