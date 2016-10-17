<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>My Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
    $(function(){
      $("#includedContent").load("top_bar.php");
    });
    $("#pic").mouseover(function() {
      $('.text').css("visibility","visible");
    });

    $("#pic").mouseout(function() {
      $('.text').css("visibility","hidden");
    });

  </script>
  <style>
    body {
      font: 20px Montserrat, sans-serif;
      color: #f5f6f7;
    }
    .container-fluid {
      padding-bottom: 10px;
      padding-top: 10px;
    }
    .bg-1 {
      background-color: #A7DBDB; /* Green */
      color: #ffffff;
    }
    .bg-2 {
      background-color: #F38630; /* Dark Blue */
      color: #ffffff;
      padding-top: 75px;
      padding-bottom: 20px;
    }
    #footer{
      background-color: #F38630; /* Dark Blue */
      color: #ffffff;
      padding-top: 15px;
      padding-bottom: 20px;
    }
    #title{
      padding-bottom: 50px;
    }
    .thumbnail{
      border: thick;
      border-color: #111111;
    }


  </style>
</head>
<body>

<!-- Navbar -->
<div class="container-fluid bg-1 text-center" id="row0">
  <div id="includedContent"></div>
</div>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <div>
  <img src="default.jpg" id="pic" class="img-responsive img-circle margin" style="display:inline" alt="default" width="350" height="350">
  <p class="text">text</p>
  </div>

  <h2 id="fname">Mark</h2>
  <h2 id="lname">Madden</h2>
  <h2 id="School">University of Missouri</h2>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center ">
  <h2 class="margin" id="title">Current Listings</h2>
  <div class="row">


    <div class="col-sm-4 col-md-4">
      <div class="thumbnail">
        <img src="de.svg" alt="..." width="242" height="200">
        <div class="caption">
          <h3>Math Book</h3>
          <p>ISBN#</p>
          <p><a href="#" class="btn btn-primary" role="button">Contact</a> <a href="#" class="btn btn-default" role="button">Buy</a></p>
        </div>
      </div>
    </div>

  <div class="col-sm-4 col-md-4">
    <div class="thumbnail">
      <img src="de.svg" alt="..." width="242" height="200">
      <div class="caption">
        <h3>Chemestry Book</h3>
        <p>ISBN#</p>
        <p><a href="#" class="btn btn-primary" role="button">Contact</a> <a href="#" class="btn btn-default" role="button">Buy</a></p>
      </div>
    </div>
  </div>

    <div class="col-sm-4 col-md-4">
      <div class="thumbnail">
        <img src="de.svg" alt="..." width="242" height="200">
        <div class="caption">
          <h3>Art Book</h3>
          <p>ISBN#</p>
          <p><a href="#" class="btn btn-primary" role="button">Contact</a> <a href="#" class="btn btn-default" role="button">Buy</a></p>
        </div>
      </div>
    </div>

</div>

  <div class="row" id="footer">
    <div class="col-sm-4 col-md-4"></div>
    <div class="col-sm-4 col-md-4">
    </div>
    <div class="col-sm-4 col-md-4"></div>
  </div>

<!-- Footer -->
  <div class="row" id="footer">
    <div class="col-sm-4 col-md-4"></div>
    <div class="col-sm-4 col-md-4">
      <h3>Book Trader</h3>
      <h4>CopyRight Team 5</h4>
      <h4>All Rights Reserved</h4>
    </div>
    <div class="col-sm-4 col-md-4"></div>
    </div>


</body>
</html>
