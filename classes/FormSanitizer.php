<?php
  class FormSanitizer{
    
    public static function sanitizeUsername($username){
      $username = trim($username);
      $username = strip_tags($username);
      $input = strtolower($username);
      $input = ucfirst($username);
      return $username;
    }

    public static function sanitizeEmail($email){
      $email = trim($email);
      $email = strip_tags($email);
      return $email;
    }

    public static function sanitizePassword($password){
      $password = trim($password);
      $password = strip_tags($password);
      return $password;
    }
  }