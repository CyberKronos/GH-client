<?php include($_SERVER['DOCUMENT_ROOT'].'/GH-client/assets/inc/incfiles/client-header.inc.php'); ?>

<?php 

	$champs = simplexml_load_file('crawlers/lolchamps/champwiki.xml');


	foreach ($champs->item as $champwiki):
    $name=$champwiki->champ_name->value;
    $picture=$champwiki->champ_pic->value;
    $title=$champwiki->champ_title->value;
    $tags=$champwiki->champ_tags->value;
    $ipcost=$champwiki->champ_ip_cost->value;
    $rpcost=$champwiki->champ_rp_cost->value;
    $releasedate=$champwiki->champ_release_date->value;

    $health=$champwiki->champ_stats_health->value;
    $healthregen=$champwiki->champ_stats_health_regen->value;
    $mana=$champwiki->champ_stats_mana->value;
    $manaregen=$champwiki->champ_stats_mana_regen->value;
    $range=$champwiki->champ_stats_range->value;
    $ad=$champwiki->champ_stats_ad->value;
    $as=$champwiki->champ_stats_as->value;
    $armor=$champwiki->champ_stats_armor->value;
    $mr=$champwiki->champ_stats_mr->value;
    $ms=$champwiki->champ_stats_ms->value;

    $passive_name=$champwiki->skill_passive_name->value;
    $passive_picture=$champwiki->skill_passive_picture->value;
    $passive_stats=$champwiki->skill_passive_stats->value;
    $passive_description=$champwiki->skill_passive_description->value;

    $q_name=$champwiki->skill_q_name->value;
    $q_picture=$champwiki->skill_q_picture->value;
    $q_stats=$champwiki->skill_q_stats->value;
    $q_description=$champwiki->skill_q_description->value;
    
    $w_name=$champwiki->skill_w_name->value;
    $w_picture=$champwiki->skill_w_picture->value;
    $w_stats=$champwiki->skill_w_stats->value;
    $w_description=$champwiki->skill_w_description->value;
    
    $e_name=$champwiki->skill_e_name->value;
    $e_picture=$champwiki->skill_e_picture->value;
    $e_stats=$champwiki->skill_e_stats->value;
    $e_description=$champwiki->skill_e_description->value;
    
    $r_name=$champwiki->skill_r_name->value;
    $r_picture=$champwiki->skill_r_picture->value;
    $r_stats=$champwiki->skill_r_stats->value;
    $r_description=$champwiki->skill_r_description->value;

    $passive_stats = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $passive_stats);
    $q_stats = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $q_stats);
    $w_stats = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $w_stats);
    $e_stats = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $e_stats);
    $r_stats = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $r_stats);

    $passive_description = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $passive_description);
    $q_description = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $q_description);
    $w_description = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $w_description);
    $e_description = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $e_description);
    $r_description = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $r_description);

    $newCard = <<<EOD

<div class="client-pin">
  <h4 class="title"><b>$name</b></h4>
  <h5 class="sub-title"><b>Champion Wiki</b></h5> 
  <div class="client-pin-content-holder">

    <p class="champion-wiki-side-by-side-image">
      $picture
    </p>
    <div class="champion-wiki-side-by-side-text">
      <p>
        <b>Cost:</b> <img src="assets/images/website_sources/ip_logo.png" style="width:20px;"> $ipcost or <img src="images/website_sources/rp_logo.png" style="width:20px;"> $rpcost
      </p>
      <p>
        <b>Release date</b> $releasedate
      </p>
      <p>s
        $tags
      </p>
    </div>
    <br/><br/>
    <table class="table table-condensed" style="background-color: #d9edf7; border-radius: 3px;">
      <tbody>
        <tr>
          <th>Health</th>
          <td>$health</td>
          <th>Attack Damage</th>
          <td>$ad</td>
        </tr>
        <tr>
          <th>Health regen.</th>
          <td>$healthregen</td>
          <th>Attack speed</th>
          <td>$as</td>
        </tr>
        <tr>
          <th>Uses Health</th>
          <td></td>
          <th>Armor</th>
          <td>$armor</td>
        </tr>
        <tr>
          <th></th>
          <td></td>
          <th>Magic res.</th>
          <td>$mr</td>
        </tr>
        <tr>
          <th>Range</th>
          <td>$range</td>
          <th>Mov. speed</th>
          <td>$ms</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="accordion" id="accordion2">
    <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
          View More
        </a>
      </div>
      <div id="collapseOne" class="accordion-body collapse">
        <div class="accordion-inner">
          <h6>$passive_name</h6>
          <div class="champion-wiki-side-by-side-image">
            <img class="rounded_pics" src="$passive_picture">
          </div>
          <div class="champion-wiki-side-by-side-text">
            $passive_stats
          </div>
          <p>
            $passive_description
          </p>

          <h6>$q_name</h6>
          <div class="champion-wiki-side-by-side-image">
            <img class="rounded_pics" src="$q_picture">
          </div>
          <div class="champion-wiki-side-by-side-text">
            $q_stats
          </div>
          <p>
            $q_description
          </p>

          <h6>$w_name</h6>
          <div class="champion-wiki-side-by-side-image">
            <img class="rounded_pics" src="$w_picture">
          </div>
          <div class="champion-wiki-side-by-side-text">
            $w_stats
          </div>
          <p>
            $w_description
          </p>

          <h6>$e_name</h6>
          <div class="champion-wiki-side-by-side-image">
            <img class="rounded_pics" src="$e_picture">
          </div>
          <div class="champion-wiki-side-by-side-text">
            $e_stats
          </div>
          <p>
            $e_description
          </p>

          <h6>$r_name</h6>
          <div class="champion-wiki-side-by-side-image">
            <img class="rounded_pics" src="$r_picture">
          </div>
          <div class="champion-wiki-side-by-side-text">
            $r_stats
          </div>
          <p>
            $r_description
          </p>
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
    $string = strtolower($name);
    //make alphaunermic
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    //Clean multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);
    //Convert whitespaces and underscore to dash
    $string = preg_replace("/[\s]/", "_", $string);

    $openfile = "content/overlay-cards/header.php";
	  $newcopiedfile = "content/overlay-cards/lol-champ-wiki/".$string.".php";

		if (file_exists($newcopiedfile)) {
      echo "file exists";
      file_put_contents("champwiki.xml", "");
    }
    else {
      if (!copy($openfile, $newcopiedfile)) {
		    echo "failed to copy $file...\n";
      }
      $fs = fopen($newcopiedfile,"a");

      fwrite($fs,$newCard);
      fclose($fs);
      file_put_contents("champwiki.xml", "");
		}

  endforeach;



?>