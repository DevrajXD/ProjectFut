<div>
  <?php include('top.php');?>
</div>

<div>
<?php  include('sidebar.php');?>
</div>

<style>

body {
  background-image: url("rooney.jpg");
}

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}


.img-gallery {
  width: 80%;
  margin: 5rem;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  grid-auto-rows: minmax(300px, 1fr);
  gap: 30px;
}

.img-gallery > img {
  display: block;
  margin-left: 60px;
  max-width: 100%;
  height: 80%;
  object-fit: cover;
  border-radius: 8px;
  transition: 0.6s ease;
}

.img-gallery img:hover {
  scale: 0.85;
  box-shadow: 10px 26px 60px rgba(68, 77, 136, 0.3);
}


</style>

<!DOCTYPE html>
<html lang = "en">

<div class="img-gallery">
      <img src="https://images.unsplash.com/photo-1553778263-73a83bab9b0c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8OHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60">
      <img src="https://images.unsplash.com/photo-1571754472834-677ab0a62ba7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8bWVzc2l8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60">
      <img src="https://images.unsplash.com/photo-1526495959496-614af90aec86?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NzV8fGZvb3RiYWxsJTIwcGxheWVyfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60">
      <img src="https://images.unsplash.com/photo-1624280157150-4d1ed8632989?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mzh8fGZvb3RiYWxsJTIwcGxheWVyfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60">
      <img src="https://images.unsplash.com/photo-1600250395178-40fe752e5189?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzV8fGZvb3RiYWxsJTIwcGxheWVyfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60">
      <img src="https://images.unsplash.com/photo-1601992991989-3b710b759094?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDR8fGZvb3RiYWxsJTIwcGxheWVyfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60">
    </div>