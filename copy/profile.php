<!DOCTYPE html>
<?php include('session.php'); ?>
<html>
  <head>
    <title>Welcome to my Home Page</title>
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">
  </head>
    <header>
        <div class="profile">
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Profile</a></li>
            <li><a href="">Info</a></li>
            <li><b id="welcome"><i><?php echo "<script>alert('$login_session');</script>"; ?></i></b></li>
            <li><b id="logout"><a href="logout.php">Log Out</a></b></li>
          </ul>
        </div>
    </header>
    <body>
      <div id="profile">


        </div>
      <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="images/pic1.jpg" alt="picture1" >
            </div>

            <div class="item">
              <img src="images/pic3.jpg" alt="picture3" >
            </div>

            <div class="item">
              <img src="images/pic4.jpg" alt="picture4" >
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

</html>
