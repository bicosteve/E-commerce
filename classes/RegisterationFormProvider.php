<?php

class RegisterationFormProvider{

  public function createRegisterationForm(){
    $username = $this->createUsernameInput();
    $email = $this->createEmailInput();
    $password = $this->createPasswordInput();
    $password2 = $this->createConfirmPasswordInput();
    $registerButton = $this->createSubmitButton();

    return "<form class='auth-form' action='#'>
        $username
        $email
        $password
        $password2
        $registerButton
    </form>";
  }


  private function createUsernameInput(){
    return "<div class='form-group'>
            <label for='username'>Username</label>
            <input
              type='text'
              name='username'
              class='form-control'
              placeholder='Username'
            />
          </div>";
  }

  private function createEmailInput(){
    return '<div class="form-group">
            <label for="email">Email</label>
            <input
              type="email"
              name="email"
              class="form-control"
              placeholder="Your Email"
            />
          </div>';
  }

  private function createPasswordInput(){
    return '<div class="form-group">
            <label for="password">Password</label>
            <input
              type="password"
              name="password"
              class="form-control"
              placeholder="Enter Your Password"
            />
          </div>';
  }

  private function createConfirmPasswordInput(){
    return '<div class="form-group">
            <label for="username">Confirm Password</label>
            <input
              type="password"
              name="password2"
              class="form-control"
              placeholder="Confirm Your Password"
            />
          </div>
    ';
  }

  private function createSubmitButton(){
    return '<div class="form-group">
            <button
              id="auth-button"
              class="btn form-control"
              type="submit"
              name="register"
            >
              Register
            </button>
          </div>
    ';
  }

}
