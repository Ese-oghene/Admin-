<?php

// class Dbh{

//     public $conn;
    
//     public function connect()
//     {
//       $this->conn =null;
//        $host ='localhost';
//        $username ='root';
//        $password ='';
//        $dbname = 'word';
//       try {
//         $this->conn = new PDO('mysql:host=localhost;dbname=word',$username,$password); 
//       } catch (PDOException $e ) {
//         echo 'conntion error:' . $e->getMessage();
//       }
//       return $this->conn;
//     }
    
    
//     }


//include "../class/login.class.php";

//$obj = new Model();

// if (isset($_POST["login"])) {
//    $uid = $_POST["uid"];
//    $pwd = $_POST["pwd"];

   
//     $login = new Login();
//      $login->getUser($uid,$pwd);
// }




 // if the update button is set, then perform the user action(update) by using post method
// if (isset($_POST['update'])) {
//    $obj = new Model();
//    $obj->updateRecord($_POST);
//  }
 
 
 // if the delete button is,then perform the user action(delete) by using get metod
//  if (isset($_GET["deleteid"])) {
//    $delid = $_GET["deleteid"];
//    $obj = new Model();
//    $obj->deleteRecord($delid);
//  }
 
 
 // if the edit button is set, then perform the user action(edit)  by using the get method
//  if (isset($_GET['editid'])) {
//    $editid = $_GET['editid'];
//    $obj = new Model();
//    $myRecord = $obj->displayRecordById($editid);
//  }
 
 
 
//if the register button is set, then perform the user action(register) by using post method
// if (isset($_POST['upload'])) {
//   $obj->insertRecord($_POST);
//    $data = $obj->displayRecord();
// }