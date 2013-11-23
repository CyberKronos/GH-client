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
	if(empty($_POST['formTitle']))
	{
		$errorMessage .= "<li>You forgot to enter a title!</li>";
	}
	if(empty($_POST['formBannerImageName']))
	{
		$errorMessage .= "<li>You forgot to enter the banner image name!</li>";
	}

	
	$varFileName = $_POST['formFileName'];
	$varStorageLocation = $_POST['formStorageLocation'];
	$varTitle = $_POST['formTitle'];

	$varBannerImageName = $_POST['formBannerImageName'];

	$varSkin1ImageName = $_POST['formSkin1ImageName'];
	$varSkin2ImageName = $_POST['formSkin2ImageName'];
	$varSkin3ImageName = $_POST['formSkin3ImageName'];
	$varChamp1ImageName = $_POST['formChamp1ImageName'];
	$varChamp2ImageName = $_POST['formChamp2ImageName'];
	$varChamp3ImageName = $_POST['formChamp3ImageName'];

	$varSkin1 = $_POST['formSkin1'];
	$varSkin2 = $_POST['formSkin2'];
	$varSkin3 = $_POST['formSkin3'];
	$varChamp1 = $_POST['formChamp1'];
	$varChamp2 = $_POST['formChamp2'];
	$varChamp3 = $_POST['formChamp3'];

	$varSkin1Cost = $_POST['formSkin1Cost'];
	$varSkin2Cost = $_POST['formSkin2Cost'];
	$varSkin3Cost = $_POST['formSkin3Cost'];
	$varChamp1Cost = $_POST['formChamp1Cost'];
	$varChamp2Cost = $_POST['formChamp2Cost'];
	$varChamp3Cost = $_POST['formChamp3Cost'];


	$newCard = <<<EOD


<div class="client-pin">
  <h4 class="title"><b>$varTitle</b></h4>
  <h5 class="sub-title"><b>Champion & Skin Sale</b></h5>
  
  <div class="client-pin-content-holder">
  	<p> 
      <img class="rounded_pics" src="images/news_pics/cssale/$varFileName/$varBannerImageName.jpg">
    </p>
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
          <p><b>Skins:</b></p>

          <p>$varSkin1 - <img src="images/website_sources/rp_logo.png"  style="width:20px;"> $varSkin1Cost</p>
          <p>
            <img class="rounded_pics" src="images/news_pics/cssale/$varFileName/$varSkin1ImageName.jpg">
          </p>

          <p>$varSkin2 - <img src="images/website_sources/rp_logo.png"  style="width:20px;"> $varSkin2Cost</p>
          <p> 
            <img class="rounded_pics" src="images/news_pics/cssale/$varFileName/$varSkin2ImageName.jpg">
          </p>

          <p>$varSkin3 - <img src="images/website_sources/rp_logo.png"  style="width:20px;"> $varSkin3Cost</p> 
          <p>
            <img class="rounded_pics" src="images/news_pics/cssale/$varFileName/$varSkin3ImageName.jpg">
          </p>
          
          <p><b>Champions:</b></p>

          <p>$varChamp1 - <img src="images/website_sources/rp_logo.png"  style="width:20px;"> $varChamp1Cost</p>
          <p>
            <img class="rounded_pics" src="images/news_pics/cssale/$varFileName/$varChamp1ImageName.jpg">
          </p>

          <p>$varChamp2 - <img src="images/website_sources/rp_logo.png"  style="width:20px;"> $varChamp2Cost</p>
          <p>
            <img class="rounded_pics" src="images/news_pics/cssale/$varFileName/$varChamp2ImageName.jpg">
          </p>

          <p>$varChamp3 - <img src="images/website_sources/rp_logo.png"  style="width:20px;"> $varChamp3Cost</p>
          <p>
            <img class="rounded_pics" src="images/news_pics/cssale/$varFileName/$varChamp3ImageName.jpg">
          </p>
          
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
        <h4 class="title"><b>$varTitle</b></h4> 
        <h5 class="sub-title"><b>Champion & Skin Sale</b></h5>
        <div class="client-pin-content-holder">
          <p> 
      		<img class="rounded_pics" src="images/news_pics/cssale/$varFileName/$varBannerImageName.jpg">
    	  </p>

    	  <p><b>Skins:</b></p>

          <p>$varSkin1 - <img src="images/website_sources/rp_logo.png"  style="width:20px;"> $varSkin1Cost</p>
          <p>
            <img class="rounded_pics" src="images/news_pics/cssale/$varFileName/$varSkin1ImageName.jpg">
          </p>

          <p>$varSkin2 - <img src="images/website_sources/rp_logo.png"  style="width:20px;"> $varSkin2Cost</p>
          <p> 
            <img class="rounded_pics" src="images/news_pics/cssale/$varFileName/$varSkin2ImageName.jpg">
          </p>

          <p>$varSkin3 - <img src="images/website_sources/rp_logo.png"  style="width:20px;"> $varSkin3Cost</p> 
          <p>
            <img class="rounded_pics" src="images/news_pics/cssale/$varFileName/$varSkin3ImageName.jpg">
          </p>
          
          <p><b>Champions:</b></p>

          <p>$varChamp1 - <img src="images/website_sources/rp_logo.png"  style="width:20px;"> $varChamp1Cost</p>
          <p>
            <img class="rounded_pics" src="images/news_pics/cssale/$varFileName/$varChamp1ImageName.jpg">
          </p>

          <p>$varChamp2 - <img src="images/website_sources/rp_logo.png"  style="width:20px;"> $varChamp2Cost</p>
          <p>
            <img class="rounded_pics" src="images/news_pics/cssale/$varFileName/$varChamp2ImageName.jpg">
          </p>

          <p>$varChamp3 - <img src="images/website_sources/rp_logo.png"  style="width:20px;"> $varChamp3Cost</p>
          <p>
            <img class="rounded_pics" src="images/news_pics/cssale/$varFileName/$varChamp3ImageName.jpg">
          </p>
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
	<form action="form-cards-cssale.php" method="post">
		<p>
			Enter File Name<br>
			<input type="text" name="formFileName" maxlength="50" value="<?=$varFileName;?>" />
		</p>
		<p>
			Enter Post Storage Location<br>
			<input type="text" name="formStorageLocation" maxlength="50" value="<?=$varStorageLocation;?>" />
		</p>
		<p>
			Enter Title<br>
			<input type="text" name="formTitle" maxlength="50" value="<?=$varTitle;?>" />
		</p>
		<p>
			Enter Banner Image Name<br>
			<input type="text" name="formBannerImageName" maxlength="50" value="<?=$varBannerImageName;?>" />
		</p>
		<p>
			Enter Skin 1 Image Name<br>
			<input type="text" name="formSkin1ImageName" maxlength="50" value="<?=$varSkin1ImageName;?>" />
		</p>
		<p>
			Enter Skin 2 Image Name<br>
			<input type="text" name="formSkin2ImageName" maxlength="50" value="<?=$varSkin2ImageName;?>" />
		</p>
		<p>
			Enter Skin 3 Image Name<br>
			<input type="text" name="formSkin3ImageName" maxlength="50" value="<?=$varSkin3ImageName;?>" />
		</p>
		<p>
			Enter Champ 1 Image Name<br>
			<input type="text" name="formChamp1ImageName" maxlength="50" value="<?=$varChamp1ImageName;?>" />
		</p>
		<p>
			Enter Champ 2 Image Name<br>
			<input type="text" name="formChamp2ImageName" maxlength="50" value="<?=$varChamp2ImageName;?>" />
		</p>
		<p>
			Enter Champ 3 Image Name<br>
			<input type="text" name="formChamp3ImageName" maxlength="50" value="<?=$varChamp3ImageName;?>" />
		</p>
		<p>
			Enter Skin 1<br>
			<input type="text" name="formSkin1" maxlength="50" value="<?=$varSkin1;?>" />
		</p>
		<p>
			Enter Skin 2<br>
			<input type="text" name="formSkin2" maxlength="50" value="<?=$varSkin2;?>" />
		</p>
		<p>
			Enter Skin 3<br>
			<input type="text" name="formSkin3" maxlength="50" value="<?=$varSkin3;?>" />
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
			Enter Skin 1 Cost<br>
			<input type="text" name="formSkin1Cost" maxlength="50" value="<?=$varSkin1Cost;?>" />
		</p>
		<p>
			Enter Skin 2 Cost<br>
			<input type="text" name="formSkin2Cost" maxlength="50" value="<?=$varSkin2Cost;?>" />
		</p>
		<p>
			Enter Skin 3 Cost<br>
			<input type="text" name="formSkin3Cost" maxlength="50" value="<?=$varSkin3Cost;?>" />
		</p>
		<p>
			Enter Champ 1 Cost<br>
			<input type="text" name="formChamp1Cost" maxlength="50" value="<?=$varChamp1Cost;?>" />
		</p>
		<p>
			Enter Champ 2 Cost<br>
			<input type="text" name="formChamp2Cost" maxlength="50" value="<?=$varChamp2Cost;?>" />
		</p>
		<p>
			Enter Champ 3 Cost<br>
			<input type="text" name="formChamp3Cost" maxlength="50" value="<?=$varChamp3Cost;?>" />
		</p>
			
		<input type="submit" name="formSubmit" value="Submit" />
	</form>
</body>
</html>