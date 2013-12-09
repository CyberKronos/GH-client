<?php 
include($_SERVER['DOCUMENT_ROOT'].'/GH-client/assets/inc/incfiles/client-header.inc.php'); 

if (!empty($_GET['search'])) {
  $champName = $_GET['search'];
  $url = "http://loldb.gameguyz.com/analyze/search?search_text=" . $champName . "&c_server=1_10_6_2_3_4_5_7_8_9";
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
