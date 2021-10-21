<?php require_once 'admin_includes/admin_header.php' ?>
    <div class="container" id="page">
      <div class="auth">
        <p>Register</p>
        <form class="auth-form" action="">
          <div class="form-group">
            <label for="username">Username</label>
            <input
              type="text"
              name="username"
              class="form-control"
              placeholder="Username"
            />
          </div>
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
            <label for="username">Confirm Password</label>
            <input
              type="password"
              name="password2"
              class="form-control"
              placeholder="Confirm Your Password"
            />
          </div>
          <div class="form-group">
            <button
              id="auth-button"
              class="btn form-control"
              type="submit"
              name="register"
            >
              Register
            </button>
          </div>
        </form>
      </div>
      <footer>
        <div class="row pad">
          <div class="col-lg-12 text-center">
            Copyright &copy; 2017 <strong>Trendy Fashion Store</strong>
          </div>
        </div>
      </footer>
    </div>

<?php require_once 'admin_includes/admin_footer.php' ?>
