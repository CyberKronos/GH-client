<?php 

$json = file_get_contents("https://dash.scrapinghub.com/api/items.json?project=1940&apikey=e8a5b202b1704affa252a10f6d88b003&spider=leaguepedia");
$items = json_decode($json,true);

$title = "Global Tournament Schedule";

foreach ($items as $key => $val):
  $content = $val['global_tournament_schedule'][0];
  $url = $val['global_tournament_schedule_url'][0];

  // $b = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $b);

  $newCard = <<<EOD
<?php include('C:/xampp/htdocs/GH-client/assets/includes/client-header.php'); ?>
<div class='client-pin'>
  <h4 class='title'>
    <a href="$url">  
      <b>$title</b>
    </a>
  </h4>
  <p class="info">
    <img src="assets/images/website_sources/leaguepedia.png" height="18px" width="18px">
    Leaguepedia
  </p>
  <div class='client-pin-content-holder' id="tournaments-card">
    $content
  </div>
  <br/>
  <div class="viewmore">
    <a href="$url">View More<a/>
  </div>
</div>
<?php include('C:/xampp/htdocs/GH-client/assets/includes/client-footer.php'); ?>
EOD;

	//lower case everything
  $string = strtolower($title);
  //make alphaunermic
  $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
  //Clean multiple dashes or whitespaces
  $string = preg_replace("/[\s-]+/", " ", $string);
  //Convert whitespaces and underscore to dash
  $string = preg_replace("/[\s]/", "_", $string);

  $newfile = "cards/LoL/".$string.".php";

  $fs = fopen($newfile,"w");

  fwrite($fs,$newCard);
  fclose($fs);

  echo "The card have been transferred successfully";
  echo "<br/>";

endforeach;
?>