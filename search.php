<!DOCTYPE html>
<html ng-app="SortApp" ng-controller="SortCtrl">
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="asset/images/Untitled-1.png">

    <title>Search Universitas</title>

    <?php require('head.php'); ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

    <script type="text/javascript">
        var App = angular.module('SortApp', []);
        App.controller('SortCtrl', [ '$scope','$http',function($scope, $http) {

          $scope.displayData = function(){  //data ts
                  $http.get("get_all_uni.php")
                  .then(function (response){  
                    $scope.unis = response.data;
                  console.log($scope.unis);
                  });  
              };
              $scope.displayData();
      }]);
      </script>

  </head>

  <body>
<!-- header -->
    <nav class="navbar navbar-light" style="background-color: #f7c331;">
      <div class="input-group">
        <a class="navbar-brand" href="home.php">
          <img src="asset/images/Untitled-1.png" width="50" height="50" alt="">
        </a>
        <input ng-model="myFilter" type="text" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn btn-secondary" type="button">Go</button>
        </span>
      </div>
      <div class="row">
      <div class="dropdown" style="margin:15px; width:300px;">
        <button class="btn btn-secondary dropdown-toggle" style="width:300px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Universitas  </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Universitas Binus</a>
          <a class="dropdown-item" href="#">Universitas Trisaksi</a>
          <a class="dropdown-item" href="#">Universitas Tarumanegara</a>
        </div>
      </div>
      <div class="dropdown" style="margin:15px; width:300px;">
        <button class="btn btn-secondary dropdown-toggle" style="width:300px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Jurusan  </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Universitas Binus</a>
          <a class="dropdown-item" href="#">Universitas Trisaksi</a>
          <a class="dropdown-item" href="#">Universitas Tarumanegara</a>
        </div>
      </div>
      </div>
    </nav>
  <!-- header -->
<!-- 
    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Album example</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
        <p>
          <a href="#" class="btn btn-primary">Main call to action</a>
          <a href="#" class="btn btn-secondary">Secondary action</a>
        </p>
      </div>
    </section>
 -->
    <main>

      <section>
        <div class="container">
          <h2 class="section-title">Hasil Pencarian</h2>
          <ul class="grid cs-style-3"> 
            <div ng-repeat ='uni in unis | filter: myFilter' >
            <li>
              <figure>
                <img ng-src="{{uni['foto_univ']}}">
                <figcaption>
                  <h5>{{uni['nama_univ']}}</h5>
                  <a class="d-flex justify-content-center" href="view.php">Selengkapnya</a>
                </figcaption>
              </figure>
            </li>
            </div>
          </ul>
              
      </section>

      <section >
        <div class="container">
          <h2 class="section-title">Hasil Pencarian</h2>
          <ul class="grid cs-style-3">
            <li>
              <figure>
                <img src="asset/images/universitas/trisakti.jpg" alt="img02">
                <figcaption>
                  <h5>Universitas Trisakti</h5>
                  <a class="d-flex justify-content-center" href="view.php">Selengkapnya</a>
                </figcaption>
              </figure>
              </li>
            <li>
              <figure>
                <img src="asset/images/universitas/binus.jpg" alt="img02">
                <figcaption>
                  <h5>Universitas Bina Nusantara</h5>
                  <a class="d-flex justify-content-center" href="view.php">Selengkapnya</a>
                </figcaption>
              </figure>
              </li>
            <li>
              <figure>
                <img src="asset/images/universitas/umn.jpg" alt="img02">
                <figcaption>
                  <h5>Universitas Multimedia Nusantara</h5>
                  <a class="d-flex justify-content-center" href="view.php">Selengkapnya</a>
                </figcaption>
              </figure>
              </li>
            <li>
              <figure>
                <img src="asset/images/universitas/untar.jpg" alt="img02">
                <figcaption>
                  <h5>Universitas Tarumanegara</h5>
                  <a class="d-flex justify-content-center" href="view.php">Selengkapnya</a>
                </figcaption>
              </figure>
              </li>
          </ul>
              </div>
      </section>
      <br><br><br>
    </main>

<footer>
  <section>
    <div id= "myFooter" class="container">
      <div class="row">
        <div class="col-sm-3">
          <h2 class="logo"><a href="#"> LOGO </a></h2>
        </div>
        <div class="col-sm-2">
          <h5>Get started</h5>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Sign up</a></li>
            <li><a href="#">Downloads</a></li>
          </ul>
        </div>
        <div class="col-sm-2">
          <h5>About us</h5>
          <ul>
            <li><a href="#">Company Information</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Reviews</a></li>
          </ul>
        </div>
        <div class="col-sm-2">
          <h5>Support</h5>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Help desk</a></li>
            <li><a href="#">Forums</a></li>
          </ul>
        </div>
        <div class="col-sm-3">
          <div class="social-networks">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
          </div>
        <button type="button" class="btn btn-default">Contact us</button>
        </div>
      </div>
    </div>
      <div class="footer-copyright">
        <center>  <p>Supported by JSN-Dev © 2017</p></center>
      </div>
  </section>
</footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>

    </script>
    <script src="dist/js/toucheffects.js"></script>
  </body>
</html>
