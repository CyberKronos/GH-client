<?php 

	$json = file_get_contents("https://dash.scrapinghub.com/api/items.json?project=1940&apikey=e8a5b202b1704affa252a10f6d88b003&spider=season_rankings");
  $items = json_decode($json,true);

  // League 1
  $title1 = $items[0]['title1'][0];
  $subtitle1 = $items[0]['subtitle1'][0];
  $date1 = $items[0]['date1'][0];
  $content1 = $items[0]['content1'][0];
  $url1 = $items[0]['url1'][0];

  // League 2
  $title2 = $items[0]['title2'][0];
  $subtitle2 = $items[0]['subtitle2'][0];
  $date2 = $items[0]['date2'][0];
  $content2 = $items[0]['content2'][0];
  $url2 = $items[0]['url2'][0];

  // League 3
  $title3 = $items[0]['title3'][0];
  $subtitle3 = $items[0]['subtitle3'][0];
  $date3 = $items[0]['date3'][0];
  $content3 = $items[0]['content3'][0];
  $url3 = $items[0]['url3'][0];

  // League 4
  $title4 = $items[0]['title4'][0];
  $subtitle4 = $items[0]['subtitle4'][0];
  $date4 = $items[0]['date4'][0];
  $content4 = $items[0]['content4'][0];
  $url4 = $items[0]['url4'][0];

  // League 5
  $title5 = $items[0]['title5'][0];
  $subtitle5 = $items[0]['subtitle5'][0];
  $date5 = $items[0]['date5'][0];
  $content5 = $items[0]['content5'][0];
  $url5 = $items[0]['url5'][0];

  // League 6
  $title6 = $items[0]['title6'][0];
  $subtitle6 = $items[0]['subtitle6'][0];
  $date6 = $items[0]['date6'][0];
  $content6 = $items[0]['content6'][0];
  $url6 = $items[0]['url6'][0];

  $arrayName = array(
    'league1' => array(
      'title' => $title1,
      'subtitle' => $subtitle1,
      'date' => $date1,
      'content' => $content1,
      'url' => $url1,
    ),
    'league2' => array(
      'title' => $title2,
      'subtitle' => $subtitle2,
      'date' => $date2,
      'content' => $content2,
      'url' => $url2,
    ),
    'league3' => array(
      'title' => $title3,
      'subtitle' => $subtitle3,
      'date' => $date3,
      'content' => $content3,
      'url' => $url3,
    ),
    'league4' => array(
      'title' => $title4,
      'subtitle' => $subtitle4,
      'date' => $date4,
      'content' => $content4,
      'url' => $url4,
    ),
    'league5' => array(
      'title' => $title5,
      'subtitle' => $subtitle5,
      'date' => $date5,
      'content' => $content5,
      'url' => $url5,
    ),
    'league6' => array(
      'title' => $title6,
      'subtitle' => $subtitle6,
      'date' => $date6,
      'content' => $content6,
      'url' => $url6,
    )
  );

  foreach ($arrayName as $key => $val):

    $title = $val['title'];
    $subtitle = $val['subtitle'];
    $date = $val['date'];
    $content = $val['content'];
    $url = $val['url'];

    $newCard = <<<EOD
<?php include('C:/xampp/htdocs/GH-client/assets/includes/client-header.php'); ?>
<div class='client-pin'>
  <h4 class='title'>
    <a href="$url">  
      <b>$title</b>
    </a>
  </h4>
  <h5 class='sub-title'><b>$subtitle</b></h5>
  <h5><i>$date</i></h5>
  <p class="info">
    <img src="assets/images/website_sources/leaguepedia.png" height="18px" width="18px">
    <span class="website-source">Leaguepedia</span>
  </p>
  
  <div class='client-pin-content-holder'>
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

    $newfile = "cards/LoL/season_rankings/".$string.".php";

    $fs = fopen($newfile,"w");

    fwrite($fs,$newCard);
    fclose($fs);

    echo "The card have been transferred successfully";
    echo "<br/>";

  endforeach;

?>