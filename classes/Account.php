<?php
  require_once 'includes/header.php';

  class Account{
    private $db;
    private $errorArray = array();

    public function __construct()
    {
      $this->db = new Database();
    }

    public function registerUser($username,$email,$password,$password2){
      $this->validateUsername($username);
      $this->validateEmail($email);
      $this->validatePassword($password);
      $this->validateConfirmPassword($password2);
      $this->validateComparePasswords($password,$password2);
    }

    private function validateUsername($username){
      if(strlen($username) > 20 || strlen($username) < 2){
        array_push($this->errorArray,Constants::$usernameLengthError);
      } else if(!preg_match('/^[a-zA-Z]+$/',$username)){
        array_push($this->errorArray,Constants::$usernameCorrectLettersError);
      }
    }

    private function validateEmail($email){
      if(empty($email)){
        array_push($this->errorArray,Constants::$emailEmptyError);
      } else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        array_push($this->errorArray,Constants::$invalidEmailError);
      }
    }

    private function validatePassword($password){
      if(empty($password)){
        array_push($this->errorArray,Constants::$emptyPasswordError);
      }
    }

    private function validateConfirmPassword($password2){
      if(empty($password2)){
        array_push($this->errorArray,Constants::$emptyConfirmPasswordError);
      }
    }

    private function validateComparePasswords($password,$password2){
      if($password != $password2){
        array_push($this->errorArray,Constants::$passwordMismatchError);
      }
    }

    public function getValidateErrors($error){
      if(in_array($error,$this->errorArray)){
        return "<span class='errorMessage'>$error</span>";
      }
    }

  }