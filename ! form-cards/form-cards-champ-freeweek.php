<?php
if(isset($_POST['formSubmit']) == "Submit")
{
	$errorMessage = "";
	
	if(empty($_POST['formFileName']))
	{
		$errorMessage .= "<li>You forgot to enter a file name!</li>";
	}
	if(empty($_POST['formStorageLocation']))
	{
		$errorMessage .= "<li>You forgot to enter a post storage location!</li>";
	}
	if(empty($_POST['formWeekNum']))
	{
		$errorMessage .= "<li>You forgot to enter a week number!</li>";
	}
	if(empty($_POST['formBannerImageName']))
	{
		$errorMessage .= "<li>You forgot to enter the banner image name!</li>";
	}
	
	$varFileName = $_POST['formFileName'];
	$varStorageLocation = $_POST['formStorageLocation'];
	$varWeekNum = $_POST['formWeekNum'];
	$varBannerImageName = $_POST['formBannerImageName'];

	$varChamp1 = $_POST['formChamp1'];
	$varChamp2 = $_POST['formChamp2'];
	$varChamp3 = $_POST['formChamp3'];
	$varChamp4 = $_POST['formChamp4'];
	$varChamp5 = $_POST['formChamp5'];
	$varChamp6 = $_POST['formChamp6'];
	$varChamp7 = $_POST['formChamp7'];
	$varChamp8 = $_POST['formChamp8'];
	$varChamp9 = $_POST['formChamp9'];
	$varChamp10 = $_POST['formChamp10'];


	$newCard = <<<EOD


<div class="client-pin">
  <h4 class="title"><b>Season Three: Week $varWeekNum</b></h4>
  <h5 class="sub-title"><b>New Free Champion Rotation</b></h5>
  
  <div class="client-pin-content-holder">
  	<img class="rounded_pics" src="images/news_pics/champ_freeweek/$varBannerImageName.jpg">
  </div>
  <br/>
  <div class="accordion" id="accordion2">
    <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
          View More
        </a>
      </div>
      <div id="collapseOne" class="accordion-body collapse">
        <div class="accordion-inner">
          <p><b>Champions:</b></p>
          <ol>
            <li>$varChamp1</li>
            <li>$varChamp2</li>
            <li>$varChamp3</li>
            <li>$varChamp4</li>
            <li>$varChamp5</li>
            <li>$varChamp6</li>
            <li>$varChamp7</li>
            <li>$varChamp8</li>
            <li>$varChamp9</li>
            <li>$varChamp10</li>
          </ol>
          
          <p class="info">
            <a href="$varStorageLocation/$varFileName.php"><b>View Full Post</b></a>
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

	$newPost = <<<EOD


<div class="container">
  <div class="row-fluid">

    <div class="span8">
      <div class="pin-web">
        <h4 class="title"><b>Season Three: Week $varWeekNum</b></h4> 
        <h5 class="sub-title"><b>New Free Champion Rotation</b></h5>
        <div class="client-pin-content-holder">
          <p> 
      	  	<img class="rounded_pics" src="images/news_pics/champ_freeweek/$varBannerImageName.jpg">
    	  </p>
          <p><b>Champions:</b></p>
          <ol>
            <li>$varChamp1</li>
            <li>$varChamp2</li>
            <li>$varChamp3</li>
            <li>$varChamp4</li>
            <li>$varChamp5</li>
            <li>$varChamp6</li>
            <li>$varChamp7</li>
            <li>$varChamp8</li>
            <li>$varChamp9</li>
            <li>$varChamp10</li>
          </ol>
        </div>
      </div>
    </div>

    <div class="span4">

    </div>

  </div>
</div>
EOD;

	if(empty($errorMessage)) 
	{
		$fs = fopen("overlay-cards/".$varFileName."_".date("m.d.Y_gia").".php","w");
		fwrite($fs,$newCard);
		fclose($fs);

		$fp = fopen($varStorageLocation."/".$varFileName."_".date("m.d.Y_gia").".php","w");
		fwrite($fp,$newPost);
		fclose($fp);
		
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
	<form action="form-cards-champ-freeweek.php" method="post">
		<p>
			Enter File Name<br>
			<input type="text" name="formFileName" maxlength="50" value="<?=$varFileName;?>" />
		</p>
		<p>
			Enter Post Storage Location<br>
			<input type="text" name="formStorageLocation" maxlength="50" value="<?=$varStorageLocation;?>" />
		</p>
		<p>
			Enter Week Number<br>
			<input type="text" name="formWeekNum" maxlength="50" value="<?=$varWeekNum;?>" />
		</p>
		<p>
			Enter Banner Image Name<br>
			<input type="text" name="formBannerImageName" maxlength="50" value="<?=$varBannerImageName;?>" />
		</p>
		<p>
			Enter Champ 1<br>
			<input type="text" name="formChamp1" maxlength="50" value="<?=$varChamp1;?>" />
		</p>
		<p>
			Enter Champ 2<br>
			<input type="text" name="formChamp2" maxlength="50" value="<?=$varChamp2;?>" />
		</p>
		<p>
			Enter Champ 3<br>
			<input type="text" name="formChamp3" maxlength="50" value="<?=$varChamp3;?>" />
		</p>
		<p>
			Enter Champ 4<br>
			<input type="text" name="formChamp4" maxlength="50" value="<?=$varChamp4;?>" />
		</p>
		<p>
			Enter Champ 5<br>
			<input type="text" name="formChamp5" maxlength="50" value="<?=$varChamp5;?>" />
		</p>
		<p>
			Enter Champ 6<br>
			<input type="text" name="formChamp6" maxlength="50" value="<?=$varChamp6;?>" />
		</p>
		<p>
			Enter Champ 7<br>
			<input type="text" name="formChamp7" maxlength="50" value="<?=$varChamp7;?>" />
		</p>
		<p>
			Enter Champ 8<br>
			<input type="text" name="formChamp8" maxlength="50" value="<?=$varChamp8;?>" />
		</p>
		<p>
			Enter Champ 9<br>
			<input type="text" name="formChamp9" maxlength="50" value="<?=$varChamp9;?>" />
		</p>
		<p>
			Enter Champ 10<br>
			<input type="text" name="formChamp10" maxlength="50" value="<?=$varChamp10;?>" />
		</p>
		
		<input type="submit" name="formSubmit" value="Submit" />
	</form>
</body>
</html>