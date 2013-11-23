<?php
if(isset($_POST['formSubmit']) == "Submit")
{
	$errorMessage = "";

	$varLCSNATeam1 = $_POST['formLCSNATeam1'];
	$varLCSNATeam2 = $_POST['formLCSNATeam2'];
	$varLCSNATeam3 = $_POST['formLCSNATeam3'];
	$varLCSNATeam4 = $_POST['formLCSNATeam4'];
	$varLCSNATeam5 = $_POST['formLCSNATeam5'];
	$varLCSNATeam6 = $_POST['formLCSNATeam6'];
	$varLCSNATeam7 = $_POST['formLCSNATeam7'];
	$varLCSNATeam8 = $_POST['formLCSNATeam8'];

	$varLCSEUTeam1 = $_POST['formLCSEUTeam1'];
	$varLCSEUTeam2 = $_POST['formLCSEUTeam2'];
	$varLCSEUTeam3 = $_POST['formLCSEUTeam3'];
	$varLCSEUTeam4 = $_POST['formLCSEUTeam4'];
	$varLCSEUTeam5 = $_POST['formLCSEUTeam5'];
	$varLCSEUTeam6 = $_POST['formLCSEUTeam6'];
	$varLCSEUTeam7 = $_POST['formLCSEUTeam7'];
	$varLCSEUTeam8 = $_POST['formLCSEUTeam8'];

	$varLPLTeam1 = $_POST['formLPLTeam1'];
	$varLPLTeam2 = $_POST['formLPLTeam2'];
	$varLPLTeam3 = $_POST['formLPLTeam3'];
	$varLPLTeam4 = $_POST['formLPLTeam4'];
	$varLPLTeam5 = $_POST['formLPLTeam5'];
	$varLPLTeam6 = $_POST['formLPLTeam6'];
	$varLPLTeam7 = $_POST['formLPLTeam7'];
	$varLPLTeam8 = $_POST['formLPLTeam8'];

	$varOGNGrpATeam1 = $_POST['formOGNGrpATeam1'];
	$varOGNGrpATeam2 = $_POST['formOGNGrpATeam2'];
	$varOGNGrpATeam3 = $_POST['formOGNGrpATeam3'];
	$varOGNGrpATeam4 = $_POST['formOGNGrpATeam4'];

	$varOGNGrpBTeam5 = $_POST['formOGNGrpBTeam1'];
	$varOGNGrpBTeam6 = $_POST['formOGNGrpBTeam2'];
	$varOGNGrpBTeam7 = $_POST['formOGNGrpBTeam3'];
	$varOGNGrpBTeam8 = $_POST['formOGNGrpBTeam4'];

	$varOGNGrpCTeam1 = $_POST['formOGNGrpCTeam1'];
	$varOGNGrpCTeam2 = $_POST['formOGNGrpCTeam2'];
	$varOGNGrpCTeam3 = $_POST['formOGNGrpCTeam3'];
	$varOGNGrpCTeam4 = $_POST['formOGNGrpCTeam4'];

	$varOGNGrpDTeam5 = $_POST['formOGNGrpDTeam1'];
	$varOGNGrpDTeam6 = $_POST['formOGNGrpDTeam2'];
	$varOGNGrpDTeam7 = $_POST['formOGNGrpDTeam3'];
	$varOGNGrpDTeam8 = $_POST['formOGNGrpDTeam4'];

	$varGPLTeam1 = $_POST['formGPLTeam1'];
	$varGPLTeam2 = $_POST['formGPLTeam2'];
	$varGPLTeam3 = $_POST['formGPLTeam3'];
	$varGPLTeam4 = $_POST['formGPLTeam4'];
	$varGPLTeam5 = $_POST['formGPLTeam5'];
	$varGPLTeam6 = $_POST['formGPLTeam6'];
	$varGPLTeam7 = $_POST['formGPLTeam7'];
	$varGPLTeam8 = $_POST['formGPLTeam8'];

	$varTeSLTeam1 = $_POST['formTeSLTeam1'];
	$varTeSLTeam2 = $_POST['formTeSLTeam2'];
	$varTeSLTeam3 = $_POST['formTeSLTeam3'];
	$varTeSLTeam4 = $_POST['formTeSLTeam4'];
	$varTeSLTeam5 = $_POST['formTeSLTeam5'];
	$varTeSLTeam6 = $_POST['formTeSLTeam6'];

	$varTLCTeam1 = $_POST['formTLCTeam1'];
	$varTLCTeam2 = $_POST['formTLCTeam2'];
	$varTLCTeam3 = $_POST['formTLCTeam3'];
	$varTLCTeam4 = $_POST['formTLCTeam4'];
	$varTLCTeam5 = $_POST['formTLCTeam5'];
	$varTLCTeam6 = $_POST['formTLCTeam6'];
  $varTLCTeam7 = $_POST['formTLCTeam7'];
  $varTLCTeam8 = $_POST['formTLCTeam8'];


	$newCard = <<<EOD

<div class="client-pin">
  <h4 class="title"><b>League Standings</b></h4> 
  <h5><b>Featured Leagues</b></h5>
  <div class="client-pin-content-holder">

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

          <table class="table table-condensed">
            <caption>North America</caption>
            <thead>
              <tr>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-C9logo_std.png"></td>
                <td>Cloud 9</td>
                <td>$varLCSNATeam1</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Teamvulcunlogo_std.png"></td>
                <td>Team Vulcun</td>
                <td>$varLCSNATeam2</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Clglogo_std.png"></td>
                <td>Counter Logic Gaming</td>
                <td>$varLCSNATeam3</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Dignitaslogo_std.png"></td>
                <td>Team Dignitas</td>
                <td>$varLCSNATeam4</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Clogo_std.png"></td>
                <td>Team Coast</td>
                <td>$varLCSNATeam5</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Tsmlogo_std.png"></td>
                <td>Team Solomid</td>
                <td>$varLCSNATeam6</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Crslogo_std.png"></td>
                <td>Team Curse</td>
                <td>$varLCSNATeam7</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Velocity_eSportsLogo_std.png"></td>
                <td>Velocity eSports</td>
                <td>$varLCSNATeam8</td>
              </tr>
            </tbody>
          </table>

          <table class="table table-condensed">
            <caption>Europe</caption>
            <thead>
              <tr>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Atnlogo_std.png"></td>
                <td>Team ALTERNATE</td>
                <td>$varLCSEUTeam1</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-GambitLogo_std.png"></td>
                <td>Gambit Gaming</td>
                <td>$varLCSEUTeam2</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-NiPlogo_std.png"></td>
                <td>Ninjas in Pyjamas</td>
                <td>$varLCSEUTeam3</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Fnaticlogo_std.png"></td>
                <td>Fnatic</td>
                <td>$varLCSEUTeam4</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Lemondogslogo_std.png"></td>
                <td>Lemondogs</td>
                <td>$varLCSEUTeam5</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Eglogo_std.png"></td>
                <td>Evil Geniuses</td>
                <td>$varLCSEUTeam6</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Sklogo_std.png"></td>
                <td>SK Gaming</td>
                <td>$varLCSEUTeam7</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Mymlogo_std.png"></td>
                <td>MeetYourMakers</td>
                <td>$varLCSEUTeam8</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="tab-pane" id="tab2">
          <table class="table table-condensed">
            <tbody>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-RoyalClubLogo_std.png"></td>
                <td>Royal HZ</td>
                <td>$varLPLTeam1</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-LMQ_TClogo_std.png"></td>
                <td>LMQ TC</td>
                <td>$varLPLTeam2</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-OMGlogo_std.png"></td>
                <td>OMG</td>
                <td>$varLPLTeam3</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Welogo_std.png"></td>
                <td>WE</td>
                <td>$varLPLTeam4</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-IGlogo_std.png"></td>
                <td>iG</td>
                <td>$varLPLTeam5</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-PositiveEnergyLogo_std.png"></td>
                <td>PE</td>
                <td>$varLPLTeam6</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-YGlogo_std.png"></td>
                <td>YG</td>
                <td>$varLPLTeam7</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Energy_Pacemakerlogo_std.png"></td>
                <td>EP</td>
                <td>$varLPLTeam8</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="tab-pane" id="tab3">
          <table class="table table-condensed">
            <caption>Group A</caption>
            <thead>
              <tr>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-MVPlogo_std.png"></td>
                <td>MVP Ozone</td>
                <td>$varOGNGrpATeam1</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-JAGlogo_std.png"></td>
                <td>Jin Air Greenwings Falcons</td>
                <td>$varOGNGrpATeam2</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Xenics_Blastlogo_std.png"></td>
                <td>Xenics Blast</td>
                <td>$varOGNGrpATeam3</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Xenicslogo_std.png"></td>
                <td>Xenics Storm</td>
                <td>$varOGNGrpATeam4</td>
              </tr>
            </tbody>
          </table>

          <table class="table table-condensed">
            <caption>Group B</caption>
            <thead>
              <tr>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-CTUlogo_std.png"></td>
                <td>Chunnam Techno University </td>
                <td>$varOGNGrpBTeam1</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-CJElogo_std.png"></td>
                <td>CJ Entus Blaze</td>
                <td>$varOGNGrpBTeam2</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-NJ_SWDlogo_std.png"></td>
                <td>NaJin Black Sword</td>
                <td>$varOGNGrpBTeam3</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-JAGlogo_std.png"></td>
                <td>Jin Air Greenwings Stealths</td>
                <td>$varOGNGrpBTeam4</td>
              </tr>
            </tbody>
          </table>

          <table class="table table-condensed">
            <caption>Group C</caption>
            <thead>
              <tr>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-SKT1Logo_std.png"></td>
                <td>SK Telecom T1</td>
                <td>$varOGNGrpCTeam1</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-MVPlogo_std.png"></td>
                <td>MVP Blue </td>
                <td>$varOGNGrpCTeam2</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-NJ_SHDlogo_std.png"></td>
                <td>NaJin White Shield</td>
                <td>$varOGNGrpCTeam3</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-IMlogo_std.png"></td>
                <td>Incredible Miracle 2</td>
                <td>$varOGNGrpCTeam4</td>
              </tr>
            </tbody>
          </table>

          <table class="table table-condensed">
            <caption>Group D</caption>
            <thead>
              <tr>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-KTRolsterLogo_std.png"></td>
                <td>KT Rolster Bullets</td>
                <td>$varOGNGrpDTeam1</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-CJElogo_std.png"></td>
                <td>CJ Entus Frost</td>
                <td>$varOGNGrpDTeam2</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-MiGlogo_std.png"></td>
                <td>MiG Blitz</td>
                <td>$varOGNGrpDTeam3</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-IMlogo_std.png"></td>
                <td>Incredible Miracle</td>
                <td>$varOGNGrpDTeam4</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="tab-pane" id="tab4">
          <table class="table table-condensed">
            <tbody>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-AHQLogo_std.png"></td>
                <td>ahq</td>
                <td>$varGPLTeam1</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Ssentinelslogo_std.png"></td>
                <td>SGS</td>
                <td>$varGPLTeam2</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Tpa_std.png"></td>
                <td>TPA</td>
                <td>$varGPLTeam3</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Sjlogo_std.png"></td>
                <td>SAJ</td>
                <td>$varGPLTeam4</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Klhlogo_std.png"></td>
                <td>KLH</td>
                <td>$varGPLTeam5</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Btlogo_std.png"></td>
                <td>BKT</td>
                <td>$varGPLTeam6</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Malogo_std.png"></td>
                <td>MLE</td>
                <td>$varGPLTeam7</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-FantasticFiveLogo_std.png"></td>
                <td>SF5</td>
                <td>$varGPLTeam8</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="tab-pane" id="tab5">
          <table class="table table-condensed">
            <tbody>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-TaipeiSnipersLogo_std.png"></td>
                <td>TPS</td>
                <td>$varTeSLTeam1</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-AHQLogo_std.png"></td>
                <td>ahq</td>
                <td>$varTeSLTeam2</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Wayispiderlogo_std.png"></td>
                <td>Spider</td>
                <td>$varTeSLTeam3</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Gamanialogo_std.png"></td>
                <td>Gamania</td>
                <td>$varTeSLTeam4</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-EDPlogo_std.png"></td>
                <td>EDP</td>
                <td>$varTeSLTeam5</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Yoe.IMlogo_std.png"></td>
                <td>yoe.IM</td>
                <td>$varTeSLTeam6</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="tab-pane" id="tab6">
          <table class="table table-condensed">
            <tbody>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Ssentinelslogo_std.png"></td>
                <td>SGS</td>
                <td>$varTLCTeam1</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-Allogo_std.png"></td>
                <td>aL SG</td>
                <td>$varTLCTeam2</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-InsidiousGaminglogo_std.png"></td>
                <td>iSO</td>
                <td>$varTLCTeam3</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-JKSlogo_std.png"></td>
                <td>JKS</td>
                <td>$varTLCTeam4</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-InsidiousGaminglogo_std.png"></td>
                <td>iSE</td>
                <td>$varTLCTeam5</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-TIFlogo_std.png"></td>
                <td>TIF</td>
                <td>$varTLCTeam6</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-NGSlogo_std.png"></td>
                <td>nGS</td>
                <td>$varTLCTeam7</td>
              </tr>
              <tr>
                <td><img src="images/pro_teams_thumbnails/50px-TKNlogo_std.png"></td>
                <td>TKN</td>
                <td>$varTLCTeam8</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>

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

        </div>
      </div>
    </div>
  </div>

</div>


</div>
</body>
</html>
EOD;

	if(empty($errorMessage)) 
	{
		$fs = fopen("overlay-cards/esports-league-standings_".date("m.d.Y_gia").".php","w");
		fwrite($fs,$newCard);
		fclose($fs);
		
		header("Location: thankyou.html");
		exit;
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>New Skin Form</title>
</head>

<body>
	<?php
		if(!empty($errorMessage)) 
		{
			echo("<p>There was an error with your form:</p>\n");
			echo("<ul>" . $errorMessage . "</ul>\n");
		} 
	?>
	<form action="form-cards-esports-league-standings.php" method="post">
    <h2>LCS NA</h2>
		<p>
			Enter C9<br>
			<input type="text" name="formLCSNATeam1" maxlength="50" value="<?=$varLCSNATeam1;?>" />
		</p>
		<p>
			Enter Vulcun<br>
			<input type="text" name="formLCSNATeam2" maxlength="50" value="<?=$varLCSNATeam2;?>" />
		</p>
		<p>
			Enter CLG<br>
			<input type="text" name="formLCSNATeam3" maxlength="50" value="<?=$varLCSNATeam3;?>" />
		</p>
		<p>
			Enter Dignitas<br>
			<input type="text" name="formLCSNATeam4" maxlength="50" value="<?=$varLCSNATeam4;?>" />
		</p>
		<p>
			Enter Coast<br>
			<input type="text" name="formLCSNATeam5" maxlength="50" value="<?=$varLCSNATeam5;?>" />
		</p>
		<p>
			Enter TSM<br>
			<input type="text" name="formLCSNATeam6" maxlength="50" value="<?=$varLCSNATeam6;?>" />
		</p>
		<p>
			Enter Curse<br>
			<input type="text" name="formLCSNATeam7" maxlength="50" value="<?=$varLCSNATeam7;?>" />
		</p>
		<p>
			Enter Velocity<br>
			<input type="text" name="formLCSNATeam8" maxlength="50" value="<?=$varLCSNATeam8;?>" />
		</p>

    <h2>LCS EU</h2>
		<p>
			Enter TeamALT<br>
			<input type="text" name="formLCSEUTeam1" maxlength="50" value="<?=$varLCSEUTeam1;?>" />
		</p>
		<p>
			Enter Gambit<br>
			<input type="text" name="formLCSEUTeam2" maxlength="50" value="<?=$varLCSEUTeam2;?>" />
		</p>
    <p>
      Enter NiP<br>
      <input type="text" name="formLCSEUTeam3" maxlength="50" value="<?=$varLCSEUTeam3;?>" />
    </p>
    <p>
      Enter Fnatic<br>
      <input type="text" name="formLCSEUTeam4" maxlength="50" value="<?=$varLCSEUTeam4;?>" />
    </p>
    <p>
      Enter Lemondogs<br>
      <input type="text" name="formLCSEUTeam5" maxlength="50" value="<?=$varLCSEUTeam5;?>" />
    </p>
    <p>
      Enter EG<br>
      <input type="text" name="formLCSEUTeam5" maxlength="50" value="<?=$varLCSEUTeam6;?>" />
    </p>
    <p>
      Enter SK<br>
      <input type="text" name="formLCSEUTeam7" maxlength="50" value="<?=$varLCSEUTeam7;?>" />
    </p>
    <p>
      Enter MYM<br>
      <input type="text" name="formLCSEUTeam8" maxlength="50" value="<?=$varLCSEUTeam8;?>" />
    </p>

    <h2>LPL</h2>
    <p>
      Enter Royal HZ<br>
      <input type="text" name="formLPLTeam1" maxlength="50" value="<?=$varLPLTeam1;?>" />
    </p>
    <p>
      Enter LMQ TC<br>
      <input type="text" name="formLPLTeam2" maxlength="50" value="<?=$varLPLTeam2;?>" />
    </p>
    <p>
      Enter OMG<br>
      <input type="text" name="formLPLTeam3" maxlength="50" value="<?=$varLPLTeam3;?>" />
    </p>
    <p>
      Enter WE<br>
      <input type="text" name="formLPLTeam4" maxlength="50" value="<?=$varLPLTeam4;?>" />
    </p>
    <p>
      Enter iG<br>
      <input type="text" name="formLPLTeam5" maxlength="50" value="<?=$varLPLTeam5;?>" />
    </p>
    <p>c
      Enter PE<br>
      <input type="text" name="formLPLTeam6" maxlength="50" value="<?=$varLPLTeam6;?>" />
    </p>
    <p>
      Enter YG<br>
      <input type="text" name="formLPLTeam7" maxlength="50" value="<?=$varLPLTeam7;?>" />
    </p>
    <p>
      Enter EP<br>
      <input type="text" name="formLPLTeam8" maxlength="50" value="<?=$varLPLTeam8;?>" />
    </p>

    <h2>OGN</h2>
    <h4>Grp A</h4>
    <p>
      Enter MVP Ozone<br>
      <input type="text" name="formOGNGrpATeam1" maxlength="50" value="<?=$varOGNGrpATeam1;?>" />
    </p>
    <p>
      Enter JAGF<br>
      <input type="text" name="formOGNGrpATeam2" maxlength="50" value="<?=$varOGNGrpATeam2;?>" />
    </p>
    <p>
      Enter Blast<br>
      <input type="text" name="formOGNGrpATeam3" maxlength="50" value="<?=$varOGNGrpATeam3;?>" />
    </p>
    <p>
      Enter Storm<br>
      <input type="text" name="formOGNGrpATeam4" maxlength="50" value="<?=$varOGNGrpATeam4;?>" />
    </p>

    <h4>Grp B</h4>
    <p>
      Enter CTU<br>
      <input type="text" name="formOGNGrpBTeam1" maxlength="50" value="<?=$varOGNGrpBTeam1;?>" />
    </p>
    <p>
      Enter Blaze<br>
      <input type="text" name="formOGNGrpBTeam2" maxlength="50" value="<?=$varOGNGrpBTeam2;?>" />
    </p>
    <p>
      Enter Black Sword<br>
      <input type="text" name="formOGNGrpBTeam3" maxlength="50" value="<?=$varOGNGrpBTeam3;?>" />
    </p>
    <p>
      Enter JAGS<br>
      <input type="text" name="formOGNGrpBTeam4" maxlength="50" value="<?=$varOGNGrpBTeam4;?>" />
    </p>

    <h4>Grp C</h4>
    <p>
      Enter SK Telecom<br>
      <input type="text" name="formOGNGrpCTeam1" maxlength="50" value="<?=$varOGNGrpCTeam1;?>" />
    </p>
    <p>
      Enter MVP Blue<br>
      <input type="text" name="formOGNGrpCTeam2" maxlength="50" value="<?=$varOGNGrpCTeam2;?>" />
    </p>
    <p>
      Enter White Sheild<br>
      <input type="text" name="formOGNGrpCTeam3" maxlength="50" value="<?=$varOGNGrpCTeam3;?>" />
    </p>
    <p>
      Enter Miracle 2<br>
      <input type="text" name="formOGNGrpCTeam4" maxlength="50" value="<?=$varOGNGrpCTeam4;?>" />
    </p>

    <h4>Grp D</h4>
    <p>
      Enter KT Rolster<br>
      <input type="text" name="formOGNGrpDTeam1" maxlength="50" value="<?=$varOGNGrpDTeam1;?>" />
    </p>
    <p>
      Enter Frost<br>
      <input type="text" name="formOGNGrpDTeam2" maxlength="50" value="<?=$varOGNGrpDTeam2;?>" />
    </p>
    <p>
      Enter MiG<br>
      <input type="text" name="formOGNGrpDTeam3" maxlength="50" value="<?=$varOGNGrpDTeam3;?>" />
    </p>
    <p>
      Enter Miracle<br>
      <input type="text" name="formOGNGrpDTeam4" maxlength="50" value="<?=$varOGNGrpDTeam4;?>" />
    </p>

    <h2>GPL</h2>
    <p>
      Enter ahq<br>
      <input type="text" name="formGPLTeam1" maxlength="50" value="<?=$varGPLTeam1;?>" />
    </p>
    <p>
      Enter SGS<br>
      <input type="text" name="formGPLTeam2" maxlength="50" value="<?=$varGPLTeam2;?>" />
    </p>
    <p>
      Enter TPA<br>
      <input type="text" name="formGPLTeam3" maxlength="50" value="<?=$varGPLTeam3;?>" />
    </p>
    <p>
      Enter SAJ<br>
      <input type="text" name="formGPLTeam4" maxlength="50" value="<?=$varGPLTeam4;?>" />
    </p>
    <p>
      Enter KLH<br>
      <input type="text" name="formGPLTeam5" maxlength="50" value="<?=$varGPLTeam5;?>" />
    </p>
    <p>c
      Enter BKT<br>
      <input type="text" name="formGPLTeam6" maxlength="50" value="<?=$varGPLTeam6;?>" />
    </p>
    <p>
      Enter MLE<br>
      <input type="text" name="formGPLTeam7" maxlength="50" value="<?=$varGPLTeam7;?>" />
    </p>
    <p>
      Enter SF5<br>
      <input type="text" name="formGPLTeam8" maxlength="50" value="<?=$varGPLTeam8;?>" />
    </p>

    <h2>TeSL</h2>
    <p>
      Enter TPS<br>
      <input type="text" name="formTeSLTeam1" maxlength="50" value="<?=$varTeSLTeam1;?>" />
    </p>
    <p>
      Enter ahq<br>
      <input type="text" name="formTeSLTeam2" maxlength="50" value="<?=$varTeSLTeam2;?>" />
    </p>
    <p>
      Enter Spider<br>
      <input type="text" name="formTeSLTeam3" maxlength="50" value="<?=$varTeSLTeam3;?>" />
    </p>
    <p>
      Enter Gamania<br>
      <input type="text" name="formTeSLTeam4" maxlength="50" value="<?=$varTeSLTeam4;?>" />
    </p>
    <p>
      Enter EDP<br>
      <input type="text" name="formTeSLTeam5" maxlength="50" value="<?=$varTeSLTeam5;?>" />
    </p>
    <p>c
      Enter yoe.IM<br>
      <input type="text" name="formTeSLTeam6" maxlength="50" value="<?=$varTeSLTeam6;?>" />
    </p>

    <h2>TLC</h2>
    <p>
      Enter SGS<br>
      <input type="text" name="formTLCTeam1" maxlength="50" value="<?=$varTLCTeam1;?>" />
    </p>
    <p>
      Enter aL SG<br>
      <input type="text" name="formTLCTeam2" maxlength="50" value="<?=$varTLCTeam2;?>" />
    </p>
    <p>
      Enter iSO<br>
      <input type="text" name="formTLCTeam3" maxlength="50" value="<?=$varTLCTeam3;?>" />
    </p>
    <p>
      Enter JKS<br>
      <input type="text" name="formTLCTeam4" maxlength="50" value="<?=$varTLCTeam4;?>" />
    </p>
    <p>
      Enter iSE<br>
      <input type="text" name="formTLCTeam5" maxlength="50" value="<?=$varTLCTeam5;?>" />
    </p>
    <p>c
      Enter TIF<br>
      <input type="text" name="formTLCTeam6" maxlength="50" value="<?=$varTLCTeam6;?>" />
    </p>
    <p>
      Enter nGS<br>
      <input type="text" name="formTLCTeam7" maxlength="50" value="<?=$varTLCTeam7;?>" />
    </p>
    <p>
      Enter TKN<br>
      <input type="text" name="formTLCTeam8" maxlength="50" value="<?=$varTLCTeam8;?>" />
    </p>
		
		<input type="submit" name="formSubmit" value="Submit" />
	</form>
</body>
</html>