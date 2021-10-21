<?php

class LoginFormProvider{

  function createLoginForm(){
    $email = $this->createEmailInput();
    $password = $this->createPasswordInput();
    $loginButton = $this->createLoginButton();

    return "<form class="auth-form" action="">
      $email
      $password
      $loginButton
    </form>";
  }


  function createEmailInput(){
    return "<div class="form-group">
            <label for="email">Email</label>
            <input
              type="email"
              name="email"
              class="form-control"
              placeholder="Your Email"
            />
          </div>";
  }

  function createPasswordInput(){
    return "<div class="form-group">
            <label for="password">Password</label>
            <input
              type="password"
              name="password"
              class="form-control"
              placeholder="Enter Your Password"
            />
          </div>";
  }



  function createLoginButton(){
    return "<div class="form-group">
            <button
              id="auth-button"
              class="btn form-control"
              type="submit"
              name="login"
            >
              Login
            </button>
          </div>
    ";
  }

}
