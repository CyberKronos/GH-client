<?php include($_SERVER['DOCUMENT_ROOT'].'/GH-client/assets/inc/incfiles/client-header.inc.php'); ?>

<div class="client-pin">
  <h4 class="title"><b>LoL Scouter</b></h4>
  <p class="info">
    <img src="assets/images/website_sources/lolnexus.png" height="18px" width="18px">
    LoL Nexus
  </p>
  <div class="client-pin-content-holder">

    <form class="navbar-search" role="form" action="content/overlay-cards/main-newsfeed/lolscouter_popup.php" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW');">
      <input name="search" type="text" class="search-query" placeholder="Enter a player currently in match">
      
      <div class="lolscouter-region-container">

        <input type="radio" id="NA" name="region" value="NA" checked>
        <label for="NA">NA</label>

        <input type="radio" id="EUW" name="region"value="EUW">
        <label for="EUW">EUW</label>

        <input type="radio" id="EUNE" name="region" value="EUNE">
        <label for="EUNE">EUNE</label>

        <input type="radio" id="BR" name="region" value="BR">
        <label for="BR">BR</label>

        <input type="radio" id="TR" name="region"value="TR">
        <label for="TR">TR</label>

        <input type="radio" id="RU" name="region" value="RU">
        <label for="RU">RU</label>

        <input type="radio" id="LAN" name="region" value="LAN">
        <label for="LAN">LAN</label>

        <input type="radio" id="LAS" name="region"value="LAS">
        <label for="LAS">LAS</label>

        <input type="radio" id="OCE" name="region" value="OCE">
        <label for="OCE">OCE</label>

      </div>
    </form>

  </div>
</div>

</body>
</html>


  

