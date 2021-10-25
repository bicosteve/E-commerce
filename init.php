<?php namespace classes;

  session_start();

  spl_autoload_register(function($classname){
    require_once('classes/Database.php');
    require_once('classes/AddProductFormProvider.php');
    require_once('classes/FormSanitizer.php');
    require_once('classes/Account.php');
    require_once('classes/Constants.php');

  });
