<?php include('C:/xampp/htdocs/GH-client/assets/includes/client-header.php'); ?>

<?php 
	if (!empty($_GET['search'])) {
		$lolName = $_GET['search'];
    $lolRegion = $_GET['region'];
		$url = "http://www.lolnexus.com/" . $lolRegion . "/search?name=" . $lolName;
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

<?php include('C:/xampp/htdocs/GH-client/assets/includes/client-footer.php'); ?>