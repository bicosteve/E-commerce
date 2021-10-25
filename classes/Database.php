<?php

require_once 'config/config.php';

class Database {
  private $host = DB_HOST;
  private $dbname = DB_NAME;
  private $username = DB_USER;
  private $password = DB_PASSWORD;

  private $connection;
  private $db_connection = false;

  private $options = [
  PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES=>false
  ];

  function __construct()
  {
    $dsn = "mysql:host=$this->host;dbname=$this->dbname";
    
    try{
      $this->connection = new PDO($dsn,$this->username,$this->password,$this->options);
      $this->db_connection = true;
    }catch(PDOException $er){
      echo 'Connection failed ...'.$er->getMessage();
      $this->db_connection = false;
    }
  }
}