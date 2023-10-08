<!DOCTYPE html>
<html lang = "en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-compatible" content="IE=edge">
<meta name = "viewport" content="width=device-width,initial-scale=1.0">
<title> Navbaar With Flexbox HTML CSS</title>
<link rel ="stylesheet" href="style.css">

</head>

<body>
<header  class ="header">
  <a href="" class="logo"></a>
  <nav class="navbar">
    
    <a href ="http://localhost/project1/admin/index.php">Home</a>
    <a href ="http://localhost/project1/admin/about.php">About</a>
    <a href ="http://localhost/project1/admin/socials.php">Socials</a>
    <a href ="http://localhost/project1/admin/gallery.php">Gallery</a>
    <a href ="http://localhost/project1/admin/contact.php">Contact</a>
  </nav>
</header>
</body>
</html>
<style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

* {
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family: "Poppins",sans-serif;
}

 
.header{
  margin-left: 50px;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 100px;
    background: transparent;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
}

.logo{
    font-size: 32px;
    color: #000;
    text-decoration: none;
    font: weight 700px;
    ;
}

.navbar a{
  position: relative;
  font-size: 18px;
  color:#fff;
  font-weight: 500 ;
  text-decoration: white;
  margin-left: 40px;
}
.navbar a::before{
  content:'';
  position: absolute;
  top:100%;
  left:0;
  width: 0;
  height: 2px;
  background: #fff;
  transition: .3s;
}

.navbar a:hover::before{
  width: 100%;

}
</style>

