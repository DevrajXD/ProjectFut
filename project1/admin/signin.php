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
  margin: 0;
  box-sizing: border-box;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
}
body {
  padding: 15px 10px;
}
form {
  margin: auto;
  text-align: center;
  background-color: rgb(0, 0, 0);
  width: 400px;
  height: 100%;
  padding: 15px 20px;
  max-width: 100%;
  border-radius: 10px;
  font-size: small;
}
h1,
p {
  margin-bottom: 3px;
  color: white;
}
div {
  display: flex;
  flex-direction: column;
  text-align: left;
  margin: 5px;
}
input[type="checkbox"] {
  margin: 0 5px;
}
input[type="submit"] {
  margin: 0 auto;
  padding: 10px 15px;
  background-color: rgb(0, 204, 0);
  border: 1px solid white;
}
input[type="submit"]:hover {
  cursor: pointer;
  background-color: white;
  color: rgb(255, 255, 255);
}
label {
  margin: 5px;
  cursor: pointer;
}
input {
  padding: 10px;
  outline: none;
  border: 1px solid transparent;
  border-radius: 8px;
  cursor: pointer;
}


body {
  background-image: url("tuff.jpg");
  
}
body>

* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
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
  color: black;

}
button {
  font-size: 16px;
  margin: 8px 4px;
  cursor: pointer;
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
.fontclor{ 
  text-decoration: none;
  color: whitesmoke;}

</style>
</head>
<body
class="fontclor"
>



  
<div class="container">


  <form action ="dosignin.php" method="post">
  <h1>Sign in</h1>
  <div class="form-group">
      
    <div class="form-group">
      <label for="ename">e-mail:</label>
      <input type="text" class="form-control" id="ename" placeholder="Enter e-mail " name="email">
    </div>
    <div class="form-group">
      <label for="pname">password:</label>
      <input type="password" class="form-control" id="pname" placeholder="Enter password " name="password">
    </div>
  


  

  <br><input type="submit" id="submit" name="submit" class ="submit"><br><br>
</form>
    



</div>
</body>
</html>

