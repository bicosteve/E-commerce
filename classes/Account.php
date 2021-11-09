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

      if(empty($this->errorArray)){
        try{
          $hashed_password = password_hash($password,PASSWORD_DEFAULT);
          $stmt = $this->db->connection->prepare('INSERT INTO users() VALUES (?,?,?)');
          return $stmt->execute([$username,$email,$hashed_password]);
        } catch(PDOException $er){
          echo $er->getMessage();
          return false;
        }
      }
    }

    public function login($email,$password){
      $isAuthenticated = false;
      
      $this->validateEmail($email);
      $this->validatePassword($password);

      $hashed_password = password_hash($password,PASSWORD_DEFAULT);

      if(empty($this->errorArray)){
        try{
          $q = 'SELECT * FROM users WHERE email = ? AND password = ?';
          $stmt = $this->db->connection->prepare($q);
          $stmt->execute([$email,$hashed_password]);
          $row = $stmt->fetch(PDO::FETCH_ASSOC);

          if($stmt->rowCount === 0){
            array_push($this->errorArray,Constants::$userDoesNotExistError);
            $isAuthenticated = false;
            return;
          } else { 
            $isAuthenticated = true; 
          }
        }catch(PDOException $er){
          echo $er->getMessage();
          $isAuthenticated = false;
          return false;
        }
      } else {
        $isAuthenticated = false;
        return;
      }

      return $isAuthenticated;

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