<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  background-color: #757bff;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Container for flexboxes */
section {
  display: -webkit-flex;
  display: flex;
}

/* Style the navigation menu */
nav {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  background: #000080;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

/* Style the content */
article {
  -webkit-flex: 3;
  -ms-flex: 3;
  flex: 3;
  background-color: #f8eeed;
  padding: 10px;
}

/* Style the footer */
footer {
  background-color: #725;
  padding: 10px;
  text-align: center;
  color: white;

}
button {
  font-size: 16px;
  margin: 8px 4px;
  cursor: pointer;
  float:right
}

form{
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size : 16px;
text-align: center
}







/* Responsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
@media (max-width: 600px) {
  section {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}

</style>
</head>
<body>




<header>
  <h2>USERS</h2>
</header>


  
<div class="container">
  <h2>Users Table</h2>         
  <table class="table">
    <thead>
      <tr>

        <th>Firstname</th>
        <th>Lastname</th>
        <th>Gender</>th
         <th>City</th>
         <th>Age</th>
         <th>Email</th>
        
      </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM user_table";

        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
        ?>
      <tr>
        <td><?php echo $row['firstname'];?></td>
        <td><?php echo $row['lastname'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['city'];?></td>
        <td><?php echo $row['age'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><a href="edituser.php?id=<?php echo $row['id']?>"><button type="button">Edit
            
        </button></a?>
    
    </td>


        
        
    
      </tr>
      <?php } ?>
     
    </tbody>
  </table>
</div>

</body>
</html>

