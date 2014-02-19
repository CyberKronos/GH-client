<?php 

$json = file_get_contents("https://dash.scrapinghub.com/api/items.json?project=1940&apikey=e8a5b202b1704affa252a10f6d88b003&spider=surrenderat20");

$items = json_decode($json, true);	

foreach ($items as $key => $val):
    $title = $val['title'][0];
    $image = $val['image'][0];
    $url = $val['url'];

    $newCard = <<<EOD

<?php include('C:/xampp/htdocs/GH-client/assets/includes/client-header.php'); ?>
<div class='client-pin'>
  <h4 class='title'>
  	<a href='$url'>
  		<b>$title</b>
  	</a>
  </h4>
  <p class="info">
    <img src="assets/images/website_sources/surrenderat20.png" height="18px" width="18px">
    <span class="website-source">Surrender @ 20</span>
  </p>

  <div class='client-pin-content-holder'>
  	<img src='$image'/>
  </div>
  <br/>
  <div class="viewmore">
    <a href='$url'>View More<a/>
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

	$newfile = "cards/LoL/lol_general_news/surrenderat20/".$string.".php";

	if (file_exists($newfile)) {
		echo "file exists";
	}
	else {
		$fs = fopen($newfile,"a");

		fwrite($fs,$newCard);
		fclose($fs);

    echo "The card have been transferred successfully";
    echo "<br/>";
	}

endforeach;

?>