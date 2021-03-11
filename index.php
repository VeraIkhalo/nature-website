<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>  </title>
  <link rel="stylesheet" href="css/style.css"/>
</head>   
<body>

<?php 

include "menu.php"

?>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/LA.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/chicago.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/ny.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
   <div class=py-5>
      <h2 class="text-center">Introduction</h2> 
   </div>
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6 col-md-6 col-12">
            <img src="images/country0.jpg" class="img-fluid aboutimg">
         </div>
         <div class="col-lg-6 col-md-6 col-12">
            <h2 class="display-2">Beautiful Places</h2>
            <p class="py-3">Most beautiful places in the world include international destinations like Greece,
               Croatia, Chile and Italy, as well as U.S. places such as Colorado, Washington, South Carolina
                and many other states. Visitors get to choose among spectacular mountain ranges, sparkling 
                emerald lakes, thundering waterfalls, dreamy ancient towns perched on high cliffs, and parks
                 that attract millions of people from all over the world. CDC information for travelers. 
                 Hours/availability may have changed.</p>
            <a href="about.php" class="btn btn-success">Check more</a>   
         </div>
      </div>
    </div>  
</section>
<section class="my-5">
   <div class=py-3>
      <h2 class="text-center">Experiencing Nature</h2> 
   </div>
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
               <img class="card-img-top" src="images/nature1.jpeg" alt="Card image">
               <div class="card-body">
                  <h4 class="card-title">Beautiful Nature :)</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
         </div>  
         <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
               <img class="card-img-top" src="images/nature2.jpg" alt="Card image">
               <div class="card-body">
                  <h4 class="card-title">Beautiful Nature :)</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
         </div> 
         <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
               <img class="card-img-top" src="images/nature3.jpg" alt="Card image">
               <div class="card-body">
                  <h4 class="card-title">Beautiful Nature :)</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
         </div>   
      </div>   
   </div> 
</section>

<section class="my-5">
   <div class=py-5>
      <h2 class="text-center">Amazing View</h2> 
   </div>
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-4 col-md-4 col-12">
            <img class="card-img-top img-fluid pb-4" src="images/country1.jpg">
         </div>
         <div class="col-lg-4 col-md-4 col-12">
            <img class="card-img-top img-fluid pb-4" src="images/country2.jpg">
         </div>
         <div class="col-lg-4 col-md-4 col-12">
            <img class="card-img-top img-fluid pb-4" src="images/country3.jpg">
         </div>
         <div class="col-lg-4 col-md-4 col-12">
            <img class="card-img-top img-fluid pb-4" src="images/country7.jpg">
         </div>
         <div class="col-lg-4 col-md-4 col-12">
            <img class="card-img-top img-fluid pb-4" src="images/country5.jpg">
         </div>
         <div class="col-lg-4 col-md-4 col-12">
            <img class="card-img-top img-fluid pb-4" src="images/country6.jpg">
         </div>
         <div class="col-lg-4 col-md-4 col-12">
            <img class="card-img-top img-fluid pb-4" src="images/country6.jpg">
         </div>
         <div class="col-lg-4 col-md-4 col-12">
            <img class="card-img-top img-fluid pb-4" src="images/country8.jpg">
         </div>
         <div class="col-lg-4 col-md-4 col-12">
            <img class="card-img-top img-fluid pb-4" src="images/country9.jpg">
         </div>   
      </div> 
    </div>  
</section>   

<section class="my-5">
   <div class=py-5>
      <h2 class="text-center">Our Gallery</h2> 
   </div>

   <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
         <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" auto-complete="off" class="form-control">    
         </div>  
         <div class="form-group">
            <label>Email Id</label>
            <input type="email" name="email" auto-complete="off" class="form-control">    
         </div>  
         <div class="form-group">
            <label>Mobile</label>
            <input type="number" name="mobile" auto-complete="off" class="form-control">    
         </div>  
         <div class="form-group">
            <label>Comments</label>
            <textarea class="form-control" name="comments"></textarea>  
         </div>  
         <button type="submit" class="btn btn-success">Submit</button>
      </form>
   </div>
</section>   

<footer>
   <p class="p-3 text-white text-center bg-dark">@VeraIkhalo</p>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



