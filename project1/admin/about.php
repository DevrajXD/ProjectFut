<div><?php include('top.php');?></div>

<div>
<?php  include('sidebar.php');?></div>

<!Doctype html>
<html lang="en">
  <body>
    


<div class="about-section">
  <div class="inner-container">
    <h1>About Us</h1>
    <p class="text">
    Welcome to FootballXD, the ultimate platform tailored exclusively for football managers. If you're a passionate manager looking to take charge of football clubs and players, you've come to the right place.
    </p>
    <div class="skills">
      <span>Football Club</span>
      <span>Players</span>
      <span>Fixtures</span>
    </div>
  </div>
</div>



<style>
  body{
    background-image: url("windowwall.jpg");
  }

*{
    margin: 0;
    padding: 0;
    font-family: "Open Sans",sans-serif;
    box-sizing: border-box;
}

body{
    min-height: 100vh;
    margin-bottom: 10px;
    align-items: center;
    justify-content: center;
}

.about-section{
    background: url(https://images.unsplash.com/photo-1551590192-8070a16d9f67?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80) no-repeat left;
    background-size: 55%;
    background-color: black;
    overflow: hidden;
    padding: 100px 0;
}

.inner-container{
    width: 55%;
    float: right;
    background-color: #fdfdfd;
    padding: 150px;
}

.inner-container h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
}

.text{
    font-size: 13px;
    color: #545454;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
}

.skills{
    display: flex;
    justify-content: space-between;
    font-weight: 700;
    font-size: 13px;
}

@media screen and (max-width:1200px){
    .inner-container{
        padding: 80px;
    }
}

@media screen and (max-width:1000px){
    .about-section{
        background-size: 100%;
        padding: 100px 40px;
    }
    .inner-container{
        width: 100%;
    }
}

@media screen and (max-width:600px){
    .about-section{
        padding: 0;
    }
    .inner-container{
        padding: 60px;
    }
}


