<?php
function processForm() { 
    $lolName = $_GET['name'];
    $url = "http://www.lolnexus.com/NA/search?name=" . $lolName;
    header("Location: $url");
    exit;
}

// var_dump(processForm('cyb3rkronos'));
?>