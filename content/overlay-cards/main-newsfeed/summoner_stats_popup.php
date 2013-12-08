<?php include($_SERVER['DOCUMENT_ROOT'].'/GH-client/assets/inc/incfiles/client-header.inc.php'); ?>

<?php 
  if (!empty($_GET['search'])) {
    $summonerName = $_GET['search'];
    $url = "http://www.lolking.net/summoner/na/" . $summonerName;
  }
?>

<div class="container">
  <div class="row-fluid">

    <div class="span10">
      <div class="pin-web">

        <div class="client-pin-content-holder">
          <iframe class="summoner-stats-popup" align="top" seamless="seamless" scrolling="no" src="<?php echo $url; ?>"></iframe>    
        </div>
      
      </div>
    </div>

  </div>
</div>

</body>
</html>