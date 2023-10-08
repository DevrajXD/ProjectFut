<div>
  <?php include('../top.php');?>
</div>

<div>
<?php  include('../sidebar.php');?>
</div>

<?php include('../db.php');?>

<link rel="stylesheet" href="style.css">

<!-- --- -->

<style>




@import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  background-image: url("rooney.jpg");
  /* background: linear-gradient(to bottom right, #92c5fe 0%, #cbc2fb 100%); */
  font-family: "Open Sans", sans-serif;
  min-height: 90vh;
}
img {
  width: 100%;
  border-bottom-left-radius: 10px;
  border-top-left-radius: 10px;
  display: block;
}
a {
  margin-left: 30px;
  color: #3c63cc;
  font-weight: 600;
}
a:hover {
  margin-left: 30px;
  color: #2fa1fd;
}
.modernForm {
  max-width: 1200px;
  display: flex;
  margin: 100px auto;
  background-color: #fff;
  border-radius: 10px;
}
.imageSection {
  flex-basis: 50%;
  position: relative;
  color: white;
}
.overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: rgba(96, 30, 150, 0.507);
  border-bottom-left-radius: 10px;
  border-top-left-radius: 10px;
  z-index: 0;
}
.textInside,
.service {
  position: absolute;
}
.textInside {
  bottom: 200px;
  right: 120px;
}
.tagLine {
  font-size: 1.4rem;
  font-weight: 600;
}
.price {
  font-size: 2rem;
  font-weight: 700;
}
.service {
  bottom: 30px;
  right: 50px;
}
.service p {
  font-weight: 700;
}
.contactForm {
  flex-basis: 45%;
  margin: auto;
  color: #555;
  padding-left: 30px;
}
.contactForm h1 {
  padding: 15px 0;
}
input[type="email"],
input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: rgb(177, 177, 177) 1px solid;
  margin-top: 10px;
}
.name {
  position: relative;
  margin-bottom: 20px;
}
.iconName {
  position: absolute;
  right: 10px;
  bottom: 10px;
}

input[type="checkbox"] {
  margin-right: 10px;
}
input[type="submit"] {
  background-color: #3c63cc;
  font-size: 1rem;
  border: none;
  color: white;
  padding: 10px 50px;
  border-radius: 5px;
  text-decoration: none;
  margin: 30px 0;
  cursor: pointer;
  float: left;
}
input[type="submit"]:hover {
  background-color: #2fa1fd;
}

@media only screen and (max-width: 768px) {
  .modernForm {
    flex-wrap: wrap;
  }
  .imageSection,
  .contactForm {
    flex-basis: 100%;
  }
  .overlay,
  img {
    border-bottom-left-radius: 0;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }
  .contactForm {
    padding-right: 30px;
  }
}
</style>




<!Doctype html>
<html lang="en">


<body>
    <div class="modernForm">
      <div class="imageSection">
        <div class="image">
          <div class="overlay"></div>
          <img src="https://images.unsplash.com/photo-1434648957308-5e6a859697e8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="pexels-yuri-manei-2272854">
        </div>
        <div class="textInside">
          <h1>Match Schedule</h1>
          <p class="tagLine">FootballXD</p>
        </div>
      </div>
      <div class="contactForm">
        <h1>Match Fixtures</h1>
        
        <form action ="do_fixtures.php" method="post" enctype="multipart/form-data">
            <label for="">Home Team:</label>
          <div class="name" style = "padding:0.625rem;
          border:2px solid;
          width :500px;
          height:45px;">
            <input type="file" name="user_image" id="home_team" required/>
            <div class="iconName"><i class="fa-solid fa-user"></i></div>
          </div>
          <label for="">Away Team:</label>
          <div class="name" style = "padding:0.625rem;
          border:2px solid;
          width :500px;
          height:45px;">
            <input type="file" name="away_team" id="away_team" />
            <div class="iconName"><i class="fa-solid fa-user"></i></div>
          </div>

          
          
          <input type="submit" value="Schedule">
        </form>
      </div>
    </div>
  </body>


  <!-- ------- -->

  

  
  