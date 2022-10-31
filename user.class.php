<?php 

require_once 'db.php';


class Login{
// method or function
    
    public function getUser($uid, $pwd){

        if(($uid == "bernard") && ($pwd == "12345")){
            header("location:upload.php");
         }else{
         header("location:login.php");
         }
    }
 
}


class Record extends Dbh{

    
  public $db;
  


  public function __construct()
  {
  
    $this->db = new Dbh();
    $this->db = $this->connect();
  }

  



  public function insert($num,$ab,$tw)
  {
   $sql = "INSERT INTO account(number, balance, withdrawal) VALUES('$num', '$ab','$tw')";
   $stmt = $this->db->prepare($sql);
   $stmt->execute();
   if ($stmt) {
  header("location:display.php?erro=msg=ins");
   }
  }

  public function displayRecord()
  {
   $sql = "SELECT * FROM account";
   $stmt =$this->db->prepare($sql);
   $stmt->execute();
   return $stmt;
  }
  

  public function update($ac, $ab, $tw, $id){
 try{
    $sql = "UPDATE account SET number= $ac, balance=$ab, withdrwal = $tw  Where id= '$id'";
    $stmt = $this->db->prepare($sql);
   // $stmt->execute([$ac,$ab, $tw,$id]);
   
  }
  catch(Exception $e){
    return $e;
  }
}

  public function delete($id){
    $query = "DELETE FROM account WHERE id = $id";
    $sql = $this->db->prepare($query);
    $sql ->execute([$id]);
    return true;
  // if ($sql = $this->db->prepare($query)) {
  //   return true;
  // }else {
  //   return false;
  // }
   }
  
}



// public function deleteVacancy($id)
// {
//   $sql = "DELETE FROM vacancy WHERE id = ?";
//   $stmt = $this->db->prepare($sql);
//   $stmt->execute([$id]);
//   return true;
// }





// public function insertImage($image, $id)
// {
//   $sql = "UPDATE vacancy SET agent_image = ? WHERE id = ?";
//   $stmt = $this->db->prepare($sql);
//   $stmt->execute([$image, $id]);
//   return true;
// }

// A class

// class Model{

//   // properties
//    private $servername = 'localhost';
//    private $username = 'root';
//    private $password = '';
//    private $dbname = 'bank';
//    private $conn;


// //database connection
//    function __construct()
//    {
//     $this->conn = null;

//     $this->conn = new mysqli($this->servername,$this->username, $this->password, $this->dbname);
//     if ($this->conn->connect_error) {
//     echo 'connection';
//     } 
//     return;
//   }

//    // insert function
// public function insertRecord($post){
//    $num =$post['num'];
//    $ab = $post['ab'];
//    $tw = $post['tw']; 
   

//    //upload function
//    $sql = "INSERT INTO account (number, balance,withdrawal) VALUES ('$num','$ab','$tw')";
//    $result = $this->conn->query( $sql);
//    if ($result) {
//    // echo "hi";
 
//    header("location:display.php?msg=ins");
//    }else {
//     echo "Error ".$sql."<br>".$this->conn->error;
//    }
   
// }

// //update function
// public function updateRecord($post){
//   $num =$post['num'];
//   $ab = $post['ab']; 
//   $tw = $post['tw']; 
//   $editid = $post['hid']; 
  
//   $sql = "UPDATE account SET num= '$num', ab= '$ab', tw='$tw' WHERE id ='$editid'";
//   $result = $this->conn->query( $sql);
//   if ($result) {
//   header("location:display.php?msg=ups");
//   }else {
//    echo "Error ".$sql."<br>".$this->conn->error;
//   }
  
// }


// //delete function
// public function deleteRecord($delid){
//   $sql = "DELETE * FROM account WHERE id ='$delid'";
//   $result = $this->conn->query($sql);
//   if($result){
//   header("location:display.php?msg=del");
//   }else {
//     echo "Error ".$sql."<br>".$this->conn->error;
//   }

// }

// // display function
// public function displayRecord(){
//   $sql = "SELECT * FROM account";
//   $result = $this->conn->query($sql);
//   if ($result->num_rows > 0) {
//    while ($row = $result->fetch_assoc()) {
//    $data[] = $row;
//    }
//    return $data;
//   }
// }

// //delee function
// public function displayRecordById($editid){
//   $sql = "SELECT * FROM account WHERE id = '$editid' ";
//   $result = $this->conn->query($sql);
//   if ($result->num_rows == 1) {
//    $row = $result->fetch_assoc();
//    return $row;
//   }
// }
   
// }
