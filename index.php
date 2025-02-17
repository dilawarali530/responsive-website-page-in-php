<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Dilawar Ali</title>
      <link rel="stylesheet" href="style.css">
      <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" method="post">
         <a class="navbar-brand" href="#">Dilawar Ali</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Services</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
               </li>
            </ul>
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
         </div>
      </nav>
      <div id="demo" class="carousel slide" data-ride="carousel">
         <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
         </ul>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="images/los angles.jpeg" alt="Los Angeles pic.jpeg" width="1100" height="500">
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
               <img src="images/new york.jpg "alt="New York" width="1100" height="500">
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
         <div class="py-5">
            <h2 class="text-center">About Us</h2>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-12">
                  <img class="img-fluid" src="images/rabit.jpg" alt="man with goat">
               </div>
               <div class="col-lg-6 col-md-6 col-12">
                  <h2 class="text-center">I am Dilawar Ali Sarwar</h2>
                  <p class="py-5" style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut debitis architecto odit non vel reprehenderit nulla consequatur magni. Aliquid repellendus nemo impedit veritatis, neque excepturi iure. Molestiae ad minus nihil natus, pariatur iste quod porro quo error ea voluptate voluptates. </p>
                  <a class="btn btn-success"href="about.php">Check More</a>
               </div>
            </div>
         </div>
      </section>
      <section class="my-5">
         <div class="py-5">
            <h3 class="text-center">Our Services</h3>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-4 col-md-4 col-12">
                  <div class="card">
                     <img class="card-img-top" src="images/night.jpg" alt="Card image">
                     <div class="card-body">
                        <h4 class="card-title">Beautifull Nature :)</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-12">
                  <div class="card">
                     <img class="card-img-top" src="images/night.jpg" alt="Card image">
                     <div class="card-body">
                        <h4 class="card-title">Beautifull Nature :)</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-12">
                  <div class="card">
                     <img class="card-img-top" src="images/night.jpg" alt="Card image">
                     <div class="card-body">
                        <h4 class="card-title">Beautifull Nature :)</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="my-5">
         <div class="py-5">
            <h3 class="text-center">Gallery</h3>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-4 col-md-4 col-12">
                  <img src="images/nature.jpg" alt="" class="img-fluid pb-4">
               </div>
               <div class="col-lg-4 col-md-4 col-12">
                  <img src="images/nature2.jpg" alt="" class="img-fluid pb-4">
               </div>
               <div class="col-lg-4 col-md-4 col-12">
                  <img src="images/nature1.jpg" alt="" class="img-fluid pb-4">
               </div>
               <div class="col-lg-4 col-md-4 col-12">
                  <img src="images/nature2.jpg" alt="" class="img-fluid pb-4">
               </div>
               <div class="col-lg-4 col-md-4 col-12">
                  <img src="images/nature.jpg" alt="" class="img-fluid pb-4">
               </div>
               <div class="col-lg-4 col-md-4 col-12">
                  <img src="images/nature2.jpg" alt="" class="img-fluid pb-4">
               </div>
               <div class="col-lg-4 col-md-4 col-12">
                  <img src="images/nature1.jpg" alt="" class="img-fluid pb-4">
               </div>
               <div class="col-lg-4 col-md-4 col-12">
                  <img src="images/nature2.jpg" alt="" class="img-fluid pb-4">
               </div>
               <div class="col-lg-4 col-md-4 col-12">
                  <img src="images/nature.jpg" alt="" class="img-fluid pb-4">
               </div>
            </div>
         </div>
      </section>
      <div class="py-5 " >
      <h3 class="text-center" >Contact</h3>
      <form action="userinfo.php" method="POST">
      <div class="w-50 m-auto my_5">
         <div class="form-group">
            <label>User</label>
            <input type="text" name="user" class="form-control">
         </div>
      </div>
      <div class="w-50 m-auto my_5">
         <div class="form-group">
            <label name="email">Email</label>
            <input name="email" type="text" class="form-control">
         </div>
      </div>
      <div class="w-50 m-auto my_5">
         <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" class="form-control">
         </div>
         <div class="form-group">
            <label>Comment</label>
            <textarea class="form-control" name="comment" method="post" ></textarea>
         </div>
         <button type="submit" name="submit" class="btn btn-success mb-5">submit</button>
      </div>
      </form>
      <footer>
         <p class="py-3 bg-dark text-white text-center">@DilawarAliSarwar.Com.pk</p>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   </body>
</html>