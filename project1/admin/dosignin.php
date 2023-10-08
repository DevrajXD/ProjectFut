<?php
$siteUrl = 'http://localhost/Project1/';
session_start();
include_once 'db.php';


$sql = "SELECT * FROM user_table WHERE `email`='".$_POST['email']."' AND `password`='".md5($_POST['password'])."' ";
// print_r($sql);die;
$result = $conn->query($sql);


if ($result->num_rows > 0) {
 // echo 'if';die;
  $_SESSION['email']= $_POST['email'];
  header("Location:".$siteUrl."admin/index.php?msg=successfully created");

}
else {
  //echo "Error: " . $sql . "<br>" . $conn->error;
  //echo 'else';die;
  header("Location:".$siteUrl."admin/signin.php?msg=error!!");
}

?>
?>