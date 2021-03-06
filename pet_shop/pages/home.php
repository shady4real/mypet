<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../style.css">
<script src="../main.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <a class="navbar-brand mt-2 mt-lg-0" href="home.php">
        <img
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpdK_TIhgNkl5BziZ_jFr4qRN74exsNEiZPA&usqp=CAU"
          height="30"
          alt=" Logo"
          loading="lazy"
        />
      </a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">Dashboard</a>
        </li>  
      </ul>
    </div>

    <div id="cart" class="d-flex align-items-center">
      <a class="text-reset me-3" href="cart.php">
        <i class="fas fa-shopping-cart"></i>
      </a>
    </div>

    <div class="user">
      <a class="text-reset me-3" href="../login/login.php">
        <i class="fa fa-user" aria-hidden="true"></i>
      </a>
    </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></l  i>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">    
      <img class="d-block w-100" src="https://sc01.alicdn.com/kf/Hee3ee354742946eebcefd73b0d48f637U/248294968/Hee3ee354742946eebcefd73b0d48f637U.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5suGW6D8DWcB6wbKqZzxOJy1B1HTK0bHTtQ&usqp=CAU">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://arapahoelibraries.org/wp-content/uploads/sites/28/2017/10/Blog-Banner-Image-1000x300-Arapahoe-Libraries-2.png">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<h2 class="bg-primary text-white position-relative">catergories</h2>
<main>
  <!-- <h1 class="btn btn-primary">categories</h1> -->
    <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
            <div class="col">
                <div class="card h-100 shadow-sm"> <img src="../images/pet_products.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <!-- <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-primary">3 left</span> <span class="float-end price-hp">800.00</span> </div> -->
                        <h5 class="card-title align-center">PET PRODUCTS</h5>
                        <div class="text-center my-4"> <a href="pet_products.php" class="btn btn-warning">Check All</a> </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlwrPQEbubdNvz-yc4cayTwn4c8QtmK9lLiw&usqp=CAU" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-success"></span> <span class="float-end"></span> </div>
                            <h5 class="card-title">PETS</h5>
                        <div class="d-grid gap-2 my-4"> <a href="pets.php" class="btn btn-warning">Check All</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


</body>


</html> 
