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
	if(empty($_POST['formVideoLink']))
	{
		$errorMessage .= "<li>You forgot to enter the video link!</li>";
	}
	if(empty($_POST['formHiddenBody']))
	{
		$errorMessage .= "<li>You forgot to enter the hidden body!</li>";
	}
	
	$varFileName = $_POST['formFileName'];
	$varStorageLocation = $_POST['formStorageLocation'];
	$varTitle = $_POST['formTitle'];
	$varVideoLink = $_POST['formVideoLink'];
	$varTopBody = $_POST['formTopBody'];
	$varHiddenBody = $_POST['formHiddenBody'];



	$newCard = <<<EOD

<div class="client-pin">
  <h4 class="title"><b>$varTitle</b></h4>
  <h5 class="sub-title"><b>Champion Spotlight</b></h5>
  
  <div class="client-pin-content-holder">
  	<p> 
      $varVideoLink
    </p>
    $varTopBody
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
          $varHiddenBody
          
          <p class="info">
            <a href="#"><b>View Full Post</b></a>
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
        <h5 class="sub-title"><b>Champion Spotlight</b></h5>
        <p class="info">
          <img src="images/website_sources/lol.png" height="18px" width="18px">
          League of Legends
        </p>
        <div class="client-pin-content-holder">
          <p> 
      	  	$varVideoLink
    	  </p>
          $varTopBody
          $varHiddenBody
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
	<form action="form-cards-champ-spotlight.php" method="post">
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
			Enter Video Link<br>
			<textarea name="formVideoLink" rows="20" cols="50" value="<?=$varVideoLink;?>"></textarea>
		</p>
		<p>
			Enter Top Body<br>
			<textarea name="formTopBody" rows="20" cols="100" value="<?=$varTopBody;?>"></textarea>
		</p>
		<p>
			Enter Hidden Body<br>
			<textarea name="formHiddenBody" rows="20" cols="100" value="<?=$varHiddenBody;?>"></textarea>
		</p>		
		<input type="submit" name="formSubmit" value="Submit" />
	</form>
</body>
</html>