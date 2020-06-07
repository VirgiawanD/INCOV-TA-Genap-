<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

      <link rel="stylesheet" href="style.css" type="text/css">


    <title>INCOV</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-info bg-transparent fixed-top" id="mainTop">
      <div class="container">
    <a class="navbar-brand font-weight-bold text-white" href="#">INCOV</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link js-scroll-trigger text-white" href="{{ url('/homepage') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Feature
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item text-black" href="{{ url('/covid') }}">Data Terjangkit COVID-19</a>
            <a class="dropdown-item text-black" href="{{ url('/icovid')}}">Data Pemantauan</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-black" href="3">Coming Soon</a>
          </div>
        </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger text-white" href="{{ url('/about') }}">About</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Contact Us
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item text-black" href="">Twitter</a>
            <a class="dropdown-item text-black" href="">Facebook</a>
            <a class="dropdown-item text-black" href="">Gmail</a>
            <div class="dropdown-divider"></div>

          </div>
    </ul>
  </div>
  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 navbar-info bg-light" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0 " type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="jumbotron">
  <div class="container">
    <h1 class="display-4">Welcome to Our Website</h1>
    <p class="lead">Website ini menampilkan data mengenai jumlah orang yang terpapar Covid-19 di Indonesia.</p>
    <hr class="my-4">
    <p class="lead">Severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) yang lebih dikenal dengan nama virus corona adalah jenis baru
      dari coronavirus yang menular ke manusia.</p>
    <a class="btn btn-primary btn-lg font-weight-bold" href="{{ url('/covid') }}" role="button">Data Terjangkit Covid-19</a> <br>
    <a class="btn btn-primary btn-lg font-weight-bold" href="{{ url('/icovid') }}" role="button">Data Pemantauan</a>
  </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </body>
</html>
