<?php include('C:/xampp/htdocs/GH-client/assets/includes/client-header.php'); ?>

<div class="client-pin">
  <h4 class="title"><b>Summoner Statistics</b></h4>
  <p class="info">
    <img src="assets/images/website_sources/gameguyz.png" height="18px" width="18px">
    LoLDB Gameguyz
  </p>
  <div class="client-pin-content-holder">

    <form class="navbar-search" role="form" action="cards/LoL/summoner_stats_popup.php" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW');">
      <input name="search" type="text" class="form-control" placeholder="Enter a summoner name">
      <!-- <div class="btn-toolbar">
        <div class="btn-group">
          <button name="NA" class="btn">NA</button>
          <button name="EUW" class="btn">EUW</button>
          <button name="EUNE" class="btn">EUNE</button>
          <button name="BR" class="btn">BR</button>
          <button name="TR" class="btn">TR</button>
        </div>
        <div class="btn-group">
          <button name="RU" class="btn">RU</button>
          <button name="LAN" class="btn">LAN</button>
          <button name="LAS" class="btn">LAS</button>
          <button name="OCE" class="btn">OCE</button>
        </div>
      </div> -->
    </form>
    

  </div>
</div>

<?php include('C:/xampp/htdocs/GH-client/assets/includes/client-footer.php'); ?>


  

