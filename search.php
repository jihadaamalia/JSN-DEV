<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="asset/images/logo.png">

    <title>Search Universitas</title>

    <?php require('head.php'); ?>

  </head>

  <body>
<!-- header -->
    <nav class="navbar navbar-light" style="background-color: #f7c331;">
      <div class="input-group">
        <a class="navbar-brand" href="home.php">
          <img src="asset/images/logo.png" width="50" height="50" alt="">
        </a>
        <input type="text" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn btn-secondary" type="button">Go</button>
        </span>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div style="float:right">
            <div class="dropdown" style="margin:15px; width:300px;">
        <button class="btn btn-secondary dropdown-toggle" style="width:300px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Universitas  </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Universitas Binus</a>
          <a class="dropdown-item" href="#">Universitas Trisaksi</a>
          <a class="dropdown-item" href="#">Universitas Tarumanegara</a>
        </div></div>
          </div>
        </div>
        <div class="col-md-6">
          <div style="float:left">
            <div class="dropdown" style="margin:15px; width:300px;">
        <button class="btn btn-secondary dropdown-toggle" style="width:300px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Jurusan  </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Universitas Binus</a>
          <a class="dropdown-item" href="#">Universitas Trisaksi</a>
          <a class="dropdown-item" href="#">Universitas Tarumanegara</a>
        </div></div>
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
            <li>
              <figure>
                <img src="asset/images/universitas/trisakti.jpg" alt="img02">
                <figcaption>
                  <h5>Universitas Trisakti</h5>
                  <a class="d-flex justify-content-center" href="trisakti.php">Selengkapnya</a>
                </figcaption>
              </figure>
              </li>
            <li>
              <figure>
                <img src="asset/images/universitas/binus.jpg" alt="img02">
                <figcaption>
                  <h5>Universitas Bina Nusantara</h5>
                  <a class="d-flex justify-content-center" href="binus.php">Selengkapnya</a>
                </figcaption>
              </figure>
              </li>
            <li>
              <figure>
                <img src="asset/images/universitas/umn.jpg" alt="img02">
                <figcaption>
                  <h5>Universitas Multimedia Nusantara</h5>
                  <a class="d-flex justify-content-center" href="umn.php">Selengkapnya</a>
                </figcaption>
              </figure>
              </li>
            <li>
              <figure>
                <img src="asset/images/universitas/untar.jpg" alt="img02">
                <figcaption>
                  <h5>Universitas Tarumanegara</h5>
                  <a class="d-flex justify-content-center" href="untar.php">Selengkapnya</a>
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
          <h2 class="logo"><a href="#"><img src="asset/images/logo.png" style="width:120px; height: 120px; margin: 30px 0px;"></a></h2>
        </div>
        <div class="col-sm-2">
          <h5>Navigate</h5>
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="search.php">University</a></li>
          </ul>
        </div>
        <div class="col-sm-4">
          <h5>Supported By</h5>
          <div class="row">
            <div class="col-sm-6">
              <img src="asset/images/logo WDC.png" style="width:100px; height: 100px; padding:10px;">
            </div>
            <div class="col-sm-6">
              <img src="asset/images/logo HIMSISFO.png" style="width:100px; height: 100px; padding:10px;">
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="social-networks">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
          </div>
          <button href="mailto:contact@jsn-dev.com?subject=Information%2E%2E%2E%20%28DD%2FMM%2FYYYY%29" type="button" class="btn btn-default">Contact us</button>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <center><p>© 2017 JSN Developers </p></center>
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
