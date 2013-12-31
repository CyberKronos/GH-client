<?php include($_SERVER['DOCUMENT_ROOT'].'/GH-client/assets/inc/incfiles/client-header.inc.php'); ?>

<?php 

	$articles = simplexml_load_file('crawlers/gameupdates/lolNews.xml');


	foreach ($articles->item as $articleinfo):
    $t=$articleinfo->title->value;
    $b=$articleinfo->body->value;
    $pi=$articleinfo->preview_image->value;
    $pv=$articleinfo->preview_video->value;
    $ct=$articleinfo->category_tag->value;

    $b = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $b);

    $newCard = <<<EOD

<div class='client-pin'>
  <h4 class='title'><b>$t</b></h4>
  <h5 class='sub-title'><b>$ct</b></h5>
  
  <div class='client-pin-content-holder'>
  	<div>
      <img src="$pi">
    </div>
    <div> $pv </div>
  </div>
  <br/>
  <div class='accordion' id='accordion2'>
    <div class='accordion-group'>
      <div class='accordion-heading'>
        <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapseOne'>
          View More
        </a>
      </div>
      <div id='collapseOne' class='accordion-body collapse'>
        <div class='accordion-inner'>
          $b
        </div>
      </div>
    </div>
  </div>

</div>

</div>
</body>
</html>
EOD;

		//lower case everything
    $string = strtolower($t);
    //make alphaunermic
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    //Clean multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);
    //Convert whitespaces and underscore to dash
    $string = preg_replace("/[\s]/", "_", $string);

    $openfile = "content/overlay-cards/header.php";
	  $newcopiedfile = "content/overlay-cards/main-newsfeed/lol_general_news/".$string.".php";

		if (file_exists($newcopiedfile)) {
      echo "file exists";
      file_put_contents("crawlers/gameupdates/lolNews.xml", "");
    }
    else {
      if (!copy($openfile, $newcopiedfile)) {
		    echo "failed to copy $file...\n";
      }
      $fs = fopen($newcopiedfile,"a");

      fwrite($fs,$newCard);
      fclose($fs);
      file_put_contents("crawlers/gameupdates/lolNews.xml", "");
		}

  endforeach;



?>