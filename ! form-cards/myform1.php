<?php
if(isset($_POST['formSubmit']) == "Submit")
{
	$errorMessage = "";
	
	if(empty($_POST['formFileName']))
	{
		$errorMessage .= "<li>You forgot to enter a file name!</li>";
	}
	if(empty($_POST['formTitle']))
	{
		$errorMessage .= "<li>You forgot to enter a title!</li>";
	}
	if(empty($_POST['formSubTitle']))
	{
		$errorMessage .= "<li>You forgot to enter a sub-title!</li>";
	}
	if(empty($_POST['formSource']))
	{
		$errorMessage .= "<li>You forgot to enter a source!</li>";
	}
	if(empty($_POST['formImage']))
	{
		$errorMessage .= "<li>You forgot to enter an image!</li>";
	}
	if(empty($_POST['formBody']))
	{
		$errorMessage .= "<li>You forgot to enter a body!</li>";
	}
	
	$varFileName = $_POST['formFileName'];
	$varTitle = $_POST['formTitle'];
	$varSubTitle = $_POST['formSubTitle'];
	$varSource = $_POST['formSource'];
	$varImage = $_POST['formImage'];
	$varBody = $_POST['formBody'];

	$newPost = <<<EOD
<div class="container">
  <div class="row-fluid">

    <div class="span8">
      <div class="pin-web">
        <h4 class="title"><b>$varTitle</b></h4> 
        <h5 class="sub-title"><b>varSubTitle</b></h5>
        <p class="info">
          <img src="images/website_sources/varSource.png" height="18px" width="18px">
          League of Legends
        </p>
        <div class="client-pin-content-holder">
          <p>
            <img src="images/news_pics/$varImage.jpg">
          </p>
          <p>
          	$varBody
          </p>
        </div>
      </div>
    </div>

  </div>
</div>
EOD;

	$NewsUpdate = <<<EOD
<div class="pin-web">
    <!-- ID FOR SCRIPT TO LOAD - TITLE-->
    <a href="news/$varFileName.php">
      <div id="$varFileName-title">
        <script type="text/javascript">
          $('#$varFileName-title').load('news/$varFileName.php .title');
        </script>
      </div>
    </a>
    
    <!-- ID FOR SCRIPT TO LOAD - SUB-TITLE -->
    <a href="news/$varFileName.php">
      <div id="$varFileName-sub-title">
        <script type="text/javascript">
          $('#$varFileName-sub-title').load('news/$varFileName.php .sub-title');
        </script>
      </div>
    </a>

    <p class="info">
    <!-- ID FOR SCRIPT TO LOAD - INFO SOURCE-->
    <div id="$varFileName-info">
      <script type="text/javascript">
        $('#$varFileName-info').load('news/$varFileName.php .info');
      </script>
    </div>
    </p>

    <div class="client-pin-content-holder">
    <!-- ID FOR SCRIPT TO LOAD - CONTENT-->
      <div id="$varFileName-content">
      <script type="text/javascript">
          $('#$varFileName-content').load('news/$varFileName.php .client-pin-content-holder');
      </script>
      </div>
    </div>

    <p class="info">
      <a href="news/$varFileName.php"><i><b>View Full Post!</b></i></a>
    </p>
</div>
EOD;

	if(empty($errorMessage)) 
	{
		$fs = fopen("news/".$varFileName.".php","w");
		fwrite($fs,$newPost);
		fclose($fs);

		$fu = fopen("news.php","a");
		fwrite($fu,$NewsUpdate);
		fclose($fu);
		
		header("Location: thankyou.html");
		exit;
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>My Form</title>
</head>

<body>
	<?php
		if(!empty($errorMessage)) 
		{
			echo("<p>There was an error with your form:</p>\n");
			echo("<ul>" . $errorMessage . "</ul>\n");
		} 
	?>
	<form action="myform1.php" method="post">
		<p>
			Enter File Name<br>
			<input type="text" name="formFileName" maxlength="50" value="<?=$varFileName;?>" />
		</p>
		<p>
			Enter Title<br>
			<input type="text" name="formTitle" maxlength="50" value="<?=$varTitle;?>" />
		</p>
		<p>
			Enter Sub-Title<br>
			<input type="text" name="formSubTitle" maxlength="50" value="<?=$varSubTitle;?>" />
		</p>	
		<p>
			Enter Source<br>
			<input type="text" name="formSource" maxlength="50" value="<?=$varMovie;?>" />
		</p>
		<p>
			Enter Image<br>
			<input type="text" name="formImage" maxlength="100" value="<?=$varImage;?>" />
		</p>
		<p>
			Enter Body<br>
			<textarea name="formBody" rows="20" cols="100" value="<?=$varBody;?>"></textarea>
		</p>		
		<input type="submit" name="formSubmit" value="Submit" />
	</form>
</body>
</html>