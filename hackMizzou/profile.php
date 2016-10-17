<!DOCTYPE html>
<html lang="en">
<head>
  <title>Topbar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
      $(function(){
        $("#includedContent").load("top_bar.php");
      });
  </script>
  <style>
    body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #A7DBDB;
    }
    h3, h4 {
      margin: 10px 0 30px 0;
      font-size: 20px;
      color: #111;
    }
    h2{
      margin: 10px 0 30px 0;
      font-size: 20px;
      color: #111;
      text-align: right;
    }
    .row2{
      border: 2px solid black;
    }
    .container {
      padding: 80px 120px;
    }
    .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white */
      width: 100%; /* Set width to 100% */
      margin: auto;
    }
    .carousel-caption h3 {
      color: #fff !important;
    }
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
      }
    }
    .bg-1 {
      background: #E0E4CC;
      color: #E0E4CC;
    }
    .bg-1 h3 {color: #fff;}
    .bg-1 p {font-style: italic;}
    .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
    }
    .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }
    .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
    }
    .thumbnail p {
      margin-top: 15px;
      color: #555;
    }
    .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
    }
    .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
    }
     h4, #profile, #spacecol {
      background-color: #FA6900;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
    }
    .modal-header, .modal-body {
      padding: 40px 50px;
    }
    .nav-tabs li a {
      color: #777;
    }
    #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
    }
    .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
    }
    .navbar li a, .navbar .navbar-brand {
      color: #d5d5d5 !important;
    }
    .navbar-nav li a:hover {
      color: #fff !important;
    }
    .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
    }
    .navbar-default .navbar-toggle {
      border-color: transparent;
    }
    .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
    }
    .dropdown-menu li a {
      color: #000 !important;
    }
    .dropdown-menu li a:hover {
      background-color: red !important;
    }
  </style>
</head>
<body>
  <div class="row" id="row0">
    <div id="includedContent"></div>
    <hr>
  </div>
    <br>
  <div class="row" id="row1">
    <div class="col-sm-4"></div>
    <div class="col-sm-4" id="spacecol">
      <h4 id="username">FakeUser12</h4>
    </div>
    <div class="col-sm-4"></div>
    </div>

  <div class="row" id="row1">
    <div class="col-sm-4"></div>
    <div class="col-sm-4" id="profile">
      <img class="img-responsive" src="default.jpg" alt="profilepic">
      <h4 id="fname">Mark</h4>
      <h4 id="lname">Madden</h4>
      <h4 id="School">University of Missouri</h4>

    </div>
    <div class="col-sm-4"></div>
  </div>
  <div class="row" id="row2">
    <div class="col-sm-4">
      <h2>Current Listngs</h2>
    </div>
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4"></div>
  </div>

</body>
</html>
