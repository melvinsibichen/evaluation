<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>


<nav class="navbar navbar-expand-lg navbar-dark x bg-dark">
    <div class="container-fluid">
      <img src="photos\logo.png" height="40" alt="">
      <a class="navbar-brand" href="#">LakeWood College</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/aboutus">About Us</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/course">Academics</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Quick Links
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="gallery.php">Photo Gallery</a></li>
              <li><a class="dropdown-item" href="/signin">Sign In</a></li>
                          
              <li><a class="dropdown-item" href="">Moodle</a></li>
              <li><a class="dropdown-item" href="">Federna</a></li>
              <li><a class="dropdown-item" href="">Exam Registration</a></li>
              <li><a class="dropdown-item" href="/viewresult">View Results</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">IQAC</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/contactus">Contact Us</a>
          </li>
          
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/userlogout">Logout</a>
          </li>
</ul>
        </form>
      </div>
    </div>
  </nav>
 <marquee style="background-color: black;color: aliceblue;"><i>Admissions are open for undergraduate cources (2020-22)</i></marquee>                               
 Welcome->{{session('emailid')}}
<body background="https://images.pexels.com/photos/395198/pexels-photo-395198.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"  style="height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">

@yield("title")

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>