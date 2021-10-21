<?php

class Database {
  private $_dsn = 'mysql:host=localhost;dbname=oop_crud';
  private $_user = 'root';
  private $_password = '';
  public  $_connection;
  private $_options = [
  PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES=>false
  ];

  function __construct()
  {
    try{
      $this->_connection = new PDO($this->_dsn,$this->_user,$this->_password,$this->_options);
    }catch(PDOException $er){
      echo $er->getMessage();
    }
  }

  function insert(string $firstname,string $lastname,string $email,string $telephone) :bool{
    try{
      $query = 'INSERT INTO users(firstname,lastname,email,telephone) VALUES (?,?,?,?)';
      $stmt = $this->_connection->prepare($query);
      $result = $stmt->execute([$firstname,$lastname,$email,$telephone]);
      return $result;
    } catch(PDOException $er){
      echo $er->getMessage();
    }
  }

  function read() :array{
    try{
      $data = [];
      $stmt = $this->_connection->prepare('SELECT * FROM users');
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      if($result){
        foreach($result as $row){
          $data[] = $row;
        }
        return $data;
      } else{
        return $data[] = null;
      }
    }catch(PDOException $er){
      echo $er->getMessage();
    }
  }

  function getUserById(int $userid){
    try{
      $stmt = $this->_connection->prepare('SELECT * FROM users WHERE userid = :userid');
      $stmt->execute(['userid'=>$userid]);
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result;
    }catch(PDOException $er){
      echo $er->getMessage();
    }
    
  }

  function update($id,$firstname,$lastname,$email,$telephone):bool{
    try{
      $sql = 'UPDATE users SET firstname = ?,lastname = ?,email = ?,telephone = ? WHERE userid = ?';
      $stmt = $this->_connection->prepare($sql);
      $stmt->execute([$firstname,$lastname,$email,$telephone,$id]);
      return true;
    }catch(PDOException $er){
      echo $er->getMessage();
    }
  }

  function delete(int $id) :bool{
    try{
      $stmt = $this->_connection->prepare('DELETE FROM users WHERE userid = :userid');
      $stmt->execute(['userid'=>$id]);
      return true;
    }catch(PDOException $er){
      echo $er->getMessage();
    }
  }

  function rowCount(){
    $stmt = $this->_connection->prepare('SELECT * FROM users');
    $stmt->execute();
    $rows = $stmt->rowCount();
    return $rows;
  }

}

//$obj = new Database();
//var_dump($obj->rowCount());
// var_dump($obj->getUserById(1));

//chanjo password -> gsMk6M_@55ra+BE