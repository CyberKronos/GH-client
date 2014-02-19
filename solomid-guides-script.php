<?php 

$json = file_get_contents("https://dash.scrapinghub.com/api/items.json?project=1940&apikey=e8a5b202b1704affa252a10f6d88b003&spider=lol_guides");

$items = json_decode($json, true);	

foreach ($items as $key => $val):
    $title = $val['title'][0];
    $author = $val['author'][0];
    $updated_date = $val['updated_date'][0];
    $view_count = $val['view_count'][0];
    $like_percent = $val['like_percent'][0];

    $champselect_url = $val['champselect_url'][0];
    $counterpicks_url = $val['counterpicks_url'][0];
    $probuilds_url = $val['probuilds_url'][0];

    $rune1 = $val['rune1'][0];
    $rune2 = $val['rune2'][0];
    $rune3 = $val['rune3'][0];
    $rune4 = $val['rune4'][0];
    $rune5 = $val['rune5'][0];
    $rune6 = $val['rune6'][0];

    $summoner_skill1 = $val['summoner_skill1'][0];
    $summoner_skill2 = $val['summoner_skill2'][0];

    $offense_mastery_img = $val['offense_mastery_img'][0];
    $offense_mastery_points= $val['offense_mastery_points'][0];
    $defense_mastery_img = $val['defense_mastery_img'][0];
    $defense_mastery_points = $val['defense_mastery_points'][0];
    $utility_mastery_img = $val['utility_mastery_img'][0];
    $utility_mastery_points = $val['utility_mastery_points'][0];

    $skill_order = $val['skill_order'][0];

    $url = $val['url'];

    $newCard = <<<EOD

<?php include('C:/xampp/htdocs/GH-client/assets/includes/client-header.php'); ?>
<div class='client-pin'>
  <h4 class='title'>
  	<a href='$url'>
  		<b>$title</b>
  	</a>
  </h4>
  <h5 class='sub-title'><b>Guides</b></h5>
  <p class="info">
    <img src="assets/images/website_sources/solomid.png" height="18px" width="18px">
    <span class="website-source">Solomid</span>
  </p>

  <div class='client-pin-content-holder'>
    <div>$updated_date</div>
    <div>$view_count</div>
    <div>$like_percent</div>
  	<div>
      <div>$rune1</div>
      <div>$rune2</div>
      <div>$rune3</div>
      <div>$rune4</div>
      <div>$rune5</div>
      <div>$rune6</div>
    </div>
    <div>
      <div><img src="$summoner_skill1"></div>
      <div><img src="$summoner_skill2"></div>
    </div>
    <div>
      <div>
        <div><img src="$offense_mastery_img"></div>
        <div>$offense_mastery_points</div>
      </div>
      <div>
        <div><img src="$defense_mastery_img"></div>
        <div>$defense_mastery_points</div>
      </div>
      <div>
        <div><img src="$utility_mastery_img"></div>
        <div>$utility_mastery_points</div>
      </div>
    </div>
    <div>
      $skill_order
    </div>
  </div>
  <br/>
  <div class="viewmore">
    <div><a href="$probuilds_url">Probuilds</a></div>
    <div><a href="$counterpicks_url">Counterpicks</a></div>
    <div><a href="$champselect_url">ChampSelect</a></div>
  </div>
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

	$newfile = "cards/LoL/guides/".$string.".php";

	$fs = fopen($newfile,"w");

	fwrite($fs,$newCard);
	fclose($fs);

  echo "The card have been transferred successfully";
  echo "<br/>";
	

endforeach;

?>