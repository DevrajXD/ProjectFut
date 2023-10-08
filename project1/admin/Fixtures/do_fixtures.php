<?php 
include_once '../db.php';

//fetch data from form
// echo '<pre>';print_r($_POST);die;
//Save data into DB...
// echo '<pre>';print_r($_POST);
// echo '<pre>';print_r($_FILES);die;


 $sql = "INSERT INTO  add_fixtures (`user_image`,`away_team`)
VALUES (  '".$_FILES['user_image']['name']."','".$_FILES['away_team']['name']."')";

// echo $sql;die;

// echo $sql;die;
if ($conn->query($sql) === TRUE) {
header("Location:/project1/admin/fixtures/add_fixtures.php?msg=Sucessfully Created");} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


// for image

 
$target_dir = "../../uploads/";
$target_file = $target_dir . basename($_FILES["user_image"]["name"],$_FILES["away_team"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
 $check = getimagesize($_FILES["user_image"]["tmp_name"],$_FILES["away_team"]["name"]);
 if($check !== false) {
   echo "File is an image - " . $check["mime"] . ".";
   $uploadOk = 1;
 } else {
   echo "File is not an image.";
   $uploadOk = 0;
 }
}

// // Check if file already exists
if (file_exists($target_file)) {
 echo "Sorry, file already exists.";
 $uploadOk = 0;
}

// // Check file size
if ($_FILES["user_image"]["size"] > 50000000000) {
 echo "Sorry, your file is too large.";
 $uploadOk = 0;
}

// // Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
 echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
 $uploadOk = 0;
}

// // Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["user_image"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["away_team"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES['user_image']['name']))." ".htmlspecialchars(basename( $_FILES['away']['name'])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
//////////////////////////////////

?>
