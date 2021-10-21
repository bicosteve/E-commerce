<?php namespace classes;

  session_start();

  spl_autoload_register(function($classname){
    require_once('classes/Database.php');
    require_once('classes/RegisterationFormProvider.php');
    require_once('classes/LoginFormProvider.php');
  });
