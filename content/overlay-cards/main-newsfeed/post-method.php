<?php
    function processForm() { 
      $search = $_POST['annie'];
      $url = "http://www.lolnexus.com/NA/search?name=" . $search;
      header("Location: $url");
      exit;
    }

    var_dump(processForm());
?>