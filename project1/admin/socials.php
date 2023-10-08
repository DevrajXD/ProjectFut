<div><?php include('top.php');?></div>

<div>
<?php  include('sidebar.php');?></div>
</style>

<html>
<style>
    body {
  background-image: url("rooney.jpg");
}

.social-menu ul{
    position: absolute;
    top: 50%;
    left: 50%;
    padding: 0;
    margin: 0;
    transform: translate(-50%, -50%);
    display: flex;
}

.social-menu ul li{
    list-style: none;
    margin: 0 15px;
}

.social-menu ul li .fab{
    font-size: 30px;
    line-height: 60px;
    transition: .3s;
    color: #000;
}

.social-menu ul li .fab:hover{
    color: #fff;
}

.social-menu ul li a{
    position: relative;
    display: block;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background-color: #fff;
    text-align: center;
    transition: .6s;
    box-shadow: 0 5px 4px rgba(0,0,0,.5);
}

.social-menu ul li a:hover{
    transform: translate(0, -10%);
}

.social-menu ul li:nth-child(1) a:hover{
    background-color: rgba(0, 0, 0, 0.829);
}
.social-menu ul li:nth-child(2) a:hover{
    background-color: #E4405F;
}
.social-menu ul li:nth-child(3) a:hover{
    background-color: #0077b5;
}
.social-menu ul li:nth-child(4) a:hover{
    background-color: #000;
}
</style>
/* // */


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Icons</title>
    <link rel="stylesheet" href="./social-media-icons.css">
    <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="social-menu">
        <ul>
            <li><a href="https://github.com/Devrajxd" target="blank"><i class="fab fa-github"></i></i></a></li>
            <li><a href="https://www.instagram.com/robertdowneyjr/" target="blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/in/devraj-singh-shekhawat-221512268/" target="blank"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="https://codepen.io/"><i class="fab fa-codepen" target="blank"></i></a></li>
        </ul>
    </div>
</body>
</html>

