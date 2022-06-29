<?php 
$server="localhost";
$username="root";
$password="";
$database="zalego";
$conn= mysqli_connect($server,$username,$password,$database);
if(isset($_POST['subscribeButton']))  
{
    //1. Fetch form data
$email=$_POST["email"];
  //2. submit form data
  $insertData = mysqli_query($conn, "INSERT INTO subscribers(email) VALUES( '$email')");

if($insertData)
{
  echo "successful";
}
else{
  echo "error occurred";
}

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Bootstrap2-main/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
</head>
<body>
navigation bar 
    <nav class="navbar navbar-expand-lg bg-light shadow fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Zalego Academy</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarDisplayNavigations">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              <a class="nav-link" href="/aboutus.php">About Us</a>
              <a class="nav-link" href="/contact.php">Contact Us</a>
            </div>
          </div>
        </div>
      </nav>
 
<div class="row-pt-5 bg-light">
      <h2>About us</h2>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod omnis mollitia consequuntur deserunt quis, ea voluptas amet at eligendi laboriosam vel sequi ad aspernatur aliquid, corporis, numquam ab? Voluptatibus, minima.</p>
     
    </div>
    <br>
    <br>
    
    <div class="row">
        <div class="col-lg-6">
          <h2>Our Program</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptate illum soluta reiciendis, et reprehenderit. Maxime voluptas facere magnam mollitia alias praesentium dignissimos, earum eum accusantium repellendus totam, quis rerum.</p>

        </div>
        <div class="col-lg-4">
          <img src="/Bootstrap2-main/images/background.jpg" alt="cd">

        </div>
      </div>
     
     
    <div class="container">
      <h3>The Program</h3>
      <br>
      <br>
      <div class="row">
        <div class="col-lg-4 card">
          <h1>Upskilling Program</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias voluptas cum corporis minus! Magnam eum, suscipit consequatur ullam voluptates ea voluptatum doloribus provident maxime blanditiis ad perspiciatis exercitationem earum harum!</p>
          <button class="btn btn-primary">View Details</button>
        </div>
        <div class="col-lg-4 card">
          <h1>Skills Discovery</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias voluptas cum corporis minus! Magnam eum, suscipit consequatur ullam voluptates ea voluptatum doloribus provident maxime blanditiis ad perspiciatis exercitationem earum harum!</p>
          <button class="btn btn-primary">View Details</button>
        </div>
        <div class="col-lg-4 card">
          <h1>Pathfinding Program</h1>
          <p>Exploring hoping to get something you can like to do. You are not lost !Visit us and get to know what is needed of you in different fields.  Get to know the different courses we offer. </p>
          <button class="btn btn-primary">View Details</button>
        </div>
    
    
    
    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <!-- <script src="/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
<div class="card-body">
    <form action="aboutus.php" method="POST">
   
     <div class="text-centre">
      <p>
        Subscribe to get latest news About Zalego Academy
      </p>
      <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address">
     <button type="submit" name="subscribeButton" class="btn btn-primary">Subscribe</button>
    
    </div>
    </form>

</div>
</body>
</html>

