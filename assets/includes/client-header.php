<!DOCTYPE html>

<html lang="en">
<head>
  <title>Gamehub</title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- <base href="http://www.gamehub.ca/" /> -->
  <base href="http://localhost/GH-client/" />

  <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="assets/css/client-main.css">
  
  <link href="assets/css/fonts.css" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>
<body>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="assets/js/jquery.js"></script>

  <!-- CUSTOM JS SCRIPTS -->
  <script type="text/javascript">
    $(document).ready(function() {

      $(".hidden-content").hide();
      // Toggle the componenet with class msg_body
      $("#hidden-header").click(function()
      {
        $(this).next(".hidden-content").slideToggle(100);
      });
      
    });
  </script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.min.js"></script>
