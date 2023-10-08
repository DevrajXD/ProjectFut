<?php
include_once "db.php";

// print_r($_POST);
// die;

$sql = "INSERT INTO `user_table` (`firstname`, `lastname`, `gender`, `city`, `age`, `email`, `password`)
VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['gender']."','".$_POST['city']."','".$_POST['age']."','".$_POST['email']."','".md5($_POST['password'])."')";
// print_r($sql); die;
$ss = mysqli_query($conn, $sql);

if (!$ss) {
    echo "error";
  } else {
   //echo  "success";
   header('Location: signin.php');
  }
  ?>