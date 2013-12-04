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
