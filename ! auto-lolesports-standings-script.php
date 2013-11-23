<?php include($_SERVER['DOCUMENT_ROOT'].'/GH-client/inc/incfiles/client-header.inc.php'); ?>

<?php 

	$regions = simplexml_load_file('crawlers/lolesports/esportstandings.xml');


	foreach ($regions->item as $regioninfo):
    $europe=$regioninfo->europe->value;
    $na=$regioninfo->na->value;
    $lpl=$regioninfo->lpl->value;
    $ogn=$regioninfo->ogn->value;
    $gpl=$regioninfo->gpl->value;
    $tesl=$regioninfo->tesl->value;
    $tlc=$regioninfo->tlc->value;

    $newCard = <<<EOD

<div class='client-pin'>
  <h4 class='title'><b>League Standings</b></h4>
  <h5 class='sub-title'><b>Featured Leagues</b></h5>
  
  <div class='client-pin-content-holder'>
  	<div class="tabbable"> <!-- Only required for left/right tabs -->

      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab1" data-toggle="tab">LCS</a></li>
        <li><a href="#tab2" data-toggle="tab">LPL</a></li>
        <li><a href="#tab3" data-toggle="tab">OGN</a></li>
        <li><a href="#tab4" data-toggle="tab">GPL</a></li>
        <li><a href="#tab5" data-toggle="tab">TeSL</a></li>
        <li><a href="#tab6" data-toggle="tab">TLC</a></li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane active" id="tab1">

          $europe
          <br/>
          $na

        </div>

        <div class="tab-pane" id="tab2">
          $lpl
        </div>

        <div class="tab-pane" id="tab3">
          $ogn
        </div>

        <div class="tab-pane" id="tab4">
          $gpl
        </div>

        <div class="tab-pane" id="tab5">
          $tesl
        </div>

        <div class="tab-pane" id="tab6">
          $tlc
        </div>
      </div>

    </div>
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
          <p class='info'>
            <a href='#'><b>View Full Post</b></a>
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

    $openfile = "overlay-cards/header.php";
	  $newcopiedfile = "overlay-cards/esports-league-standings.".date('Y.m.d-ha').".php";

		if (file_exists($newcopiedfile)) {
      echo "file exists";
      file_put_contents("esportstandings.xml", "");
    }
    else {
      if (!copy($openfile, $newcopiedfile)) {
		    echo "failed to copy $file...\n";
      }
      $fs = fopen($newcopiedfile,"a");

      fwrite($fs,$newCard);
      fclose($fs);
      file_put_contents("esportstandings.xml", "");
		}

  endforeach;



?>