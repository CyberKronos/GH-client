<!DOCTYPE html>

<html lang="en">
<head>
  <title>Gamehub</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <base href="http://localhost/GH-client/" />

  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-responsive.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="assets/css/champions.css">
  <link rel="stylesheet" type="text/css" href="assets/css/items.css">
  <link rel="stylesheet" type="text/css" href="assets/css/streams.css">
  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $(".hidden-content").hide();
      //toggle the componenet with class msg_body
      $("#hidden-header").click(function()
      {
        $(this).next(".hidden-content").slideToggle(100);
      });
    });
  </script>
</head>
<body>

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">

      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-th-list"></span>
      </a>

      <a href="#" class="brand">Gamehub</a>
      
      <div class="nav-collapse collapse">
        <ul class="nav pull-right">

          <li><a href="#">Home</a></li>

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">
              Discover
              <b class="caret"></b>
            </a>

            <ul class="dropdown-menu">
              <li><a href="content/news.php">News</a></li>
              <li><a href="">Events</a></li>
              <li><a href="#">Streams</a></li>
              <li><a href="content/champions.php">Champions</a></li>
              <li><a href="content/items.php">Items</a></li>
              <li class="divider"></li>
              <li><a href="">Games</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">
              CyberKronos
              <b class="caret"></b>
            </a>

            <ul class="dropdown-menu">
              <li><a href="#">Profile</a></li>
              <li><a href="#">Dashboard</a></li>
              <li><a href="#">Find Friends</a></li>
              <li class="divider"></li>
              <li><a href="#">Help Center</a></li>
              <li><a href="#">Settings</a></li>
              <li><a href="#">Log Out</a></li>
            </ul>
          </li>

        </ul> 
      </div>

    </div>      
  </div>
</div>