<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body id="page-top">
  
    <section id="home" class="about-mf sect-pt route">
      <div class="" style="background-image: url(img/mosh1.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <video autoplay muted loop id="myVideo">
                <source src="img/background.mp4" type="video/mp4" />
              </video>
              <div id="scene" class="scene col-md-12 viewport-header">
                <div data-depth="1.00">
                  <img src="img/line.png" style="width: 100%" />
                </div>
                <div data-depth-x="0.80" data-depth-y="-0.80">
                  <img src="img/pattern.png" style="width: 100%" />
                </div>
                <div data-depth="0.60">
                  <img src="img/rectangleblue.png" style="width: 100%" />
                </div>
                <div data-depth="0.40">
                  <img src="img/logo.png" style="width: 100%" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script>
      $(function () {
        var scene = document.getElementById("scene");
        var parallax = new Parallax(scene);
      });
    </script>

  </body>
</html>
