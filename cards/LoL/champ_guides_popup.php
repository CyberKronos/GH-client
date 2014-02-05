<?php 
include('C:/xampp/htdocs/GH-client/assets/includes/client-header.php'); 

if (!empty($_GET['search'])) {
  $champName = $_GET['search'];
  $url = "http://solomid.net/guide?champ=" . $champName;
}
?>

<div class="container">
  <div class="row-fluid">

    <div class="span11">
      <div class="pin-web">

        <div class="client-pin-content-holder">
          <iframe class="champ-guides-popup" align="top" seamless="seamless" scrolling="yes" src="<?php echo $url; ?>"></iframe>    
        </div>
      
      </div>
    </div>

  </div>
</div>

<?php include('C:/xampp/htdocs/GH-client/assets/includes/client-footer.php'); ?>