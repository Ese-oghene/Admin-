<?php

include 'class/user.class.php';

$edit = new Record();
$id = $_GET['id'];
$edit->setId($id);

if (isset($_POST['edit'])) {
 $edit->setNum($_POST['num']);
 $edit->setAb($_POST['ab']);
 $edit->setTw($_POST['tw']);

 echo $edit->update($id, $num, $ab, $tw);
}

$record->fetchone();
$val=$record(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script src="script.js"></script>
    <title>First Php script</title>
</head>
<body>
    <div class="container">
    
<form action="" method="post">
    <h3>Register form</h3>
    
    <br> <label for="name">Name</label>
    <input type="text" name="num" value="<?php echo $var['number']; ?>" placeholder="Acount num> <br>


    <br> <label for="name">Name</label>
    <input type="text" name="ab" value="<?php echo $var['balance']; ?>" placeholder="Accout Balance"> <br>

    <br> <label for="password">Password</label>

    <input type="password" name="tw" value="<?php echo $var['withdrawal']; ?>" placeholder="Total withdrawal"> <br>

    <!-- <input type="submit" name="submit" value="Login"> -->
    <br> 
    <input type="hidden" name="hid" value="<?php echo $myRecord['id']; ?>">
    <button type="submit" name="update">update</button>
   </form>
    
   <!-- <p>Already have an account? <a href="login.php">Login here</a></p> -->
   </div>
</body>
</html>