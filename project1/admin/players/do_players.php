<?php
//database connection setting
include_once('../db.php');                                                                                                                                                                                                
$sql = "INSERT INTO add_players (`player_name`, `age`, `position`,`country`)
VALUES ('" . str_replace("'", "''", $_POST['player_name']) . "', '" . str_replace("'", "''", $_POST['age']) . "', '" . $_POST['position'] . "','" . $_POST['country'] . "')";

 

// echo $sql;die;
if ($conn->query($sql) === TRUE) {
// echo "New record created successfully";
header("Location:/project1/admin/players/players.php?msg=Sucessfully Created");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




?>
