<?php
include('connection.php');
session_start();
?>
<html>
<head>
 
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" href="css/login_style.css">
</head>
 
<body>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- Navbar -->
<nav class="navbar sticky-top navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color:white;font-size:20px;">Recipies</a>
  </div>
</nav>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://w0.peakpx.com/wallpaper/467/393/HD-wallpaper-food-dessert-still-life.jpg" alt="First slide" style="height:350px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://wallpapercave.com/wp/wp8365304.jpg" alt="Second slide" style="height:350px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://static.toiimg.com/thumb/56115945/ThinkstockPhotos-545286388.jpg?width=1200&height=900" alt="Third slide" style="height:350px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="row mt-5">
    <?php
    $sql="select * from recipe where creator_id=1";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
    ?>
    <div class="col-md-3">
<div class="card">
  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
    <img src=<?php echo $row['image_url'];?> class="img-fluid" style="height:300px;"/>
    <a href="#!">
      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
    </a>
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $row["name"]; ?></h5>
    <p class="card-text"><?php echo substr($row["desc"], 0,110);?></p>
    <a href="fullinfo.php?id=<?php echo $row['id']; ?>&name=<?php echo $row["name"]; ?>&img=<?php echo $row["image_url"]; ?>" class="text-dark ">Read More</a>
  </div>
</div>
</div>
<?php }?>
 
 

</div>
</body>
</html>