<?php include($_SERVER['DOCUMENT_ROOT'].'/GH-client/assets/inc/incfiles/client-header.inc.php'); ?>

<?php 
	if (!empty($_GET['search'])) {
		$lolName = $_GET['search'];
		$url = "http://www.lolnexus.com/NA/search?name=" . $lolName;
	}
?>

<div class="container">
  <div class="row-fluid">

    <div class="span12">
      <div class="pin-web">

        <div class="client-pin-content-holder">
          <iframe class="lolscouter-popup" align="top" seamless="seamless" scrolling="no" src="<?php echo $url; ?>"></iframe>    
        </div>
      
      </div>
    </div>

  </div>
</div>

</body>
</html>