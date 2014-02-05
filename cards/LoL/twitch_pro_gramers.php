<?php
include('C:/xampp/htdocs/GH-client/assets/includes/client-header.php');

error_reporting(0);
$cachefile = "C:/xampp/htdocs/GH-client/cache/". basename(__FILE__, '.php') ."_cache.php";
include('C:/xampp/htdocs/GH-client/assets/includes/cache-open.php');

?>

<div class="client-pin">
  <h4 class="title"><b>Featured Channels</b></h4>
  <h5><b>Live Streams</b></h5>
  <p class="info">
    <img src="assets/images/website_sources/twitchtv.png" height="18px" width="18px">
    Twitch TV
  </p>
  <hr/>
  <div class="client-pin-content-holder" id="pro-holder">
  	<div class="pro-name"><strong>Streamer</strong></div>
	<div class="pro-viewer-count"><strong>Viewers</strong></div>
	</br>
<?php
/**
* array with all stream names i.e. www.twitch.tv/"tsm_theoddone".
* To add more users just add their channel names with comma seperation
* This is all there is, no futher editing required
*/
$streamers = array(
			"mlglol",
			"kaostv",
			"trick2g",
			"tsm_theoddone",
			"edwardlol",
			"alexich",
			"voyboy",
			"xpeke",
			"imaqtpie",
			"athenelive",
			"guardsmanbob",
			"fnaticcyanide",
			"phreakstream",
			"soazed",
			"aphromoo",
			"chaoxlol",
			"crumbzz",
			"dandinh",
			"clgdoublelift",
			"tsm_dyrus",
			"froggen",
			"hotshotgg",
			"skumbagkrepo",
			"nhatn",
			"nyjacky",
			"tsm_reginald",
			"crs_saintvicious",
			"scarra",
			"snoopeh",
			"therainman",
			"wingsofdeath",
			"tsm_xpecial",
			"yellowpete",
			"phantoml0rd",
			"trick2g",
			"meteos",
			"espeonbot",
			"roflgator",
			"hail9‎",
			"mushisgosu‎",
			"motroco_87",
			"elementz‎",
			"chausterlol"
			);

// This variable becomes one long url with the channel names stringed up behind it
// This url then fetches a json file from twitch with all the selected channels information
$userGrab = "http://api.justin.tv/api/stream/list.json?channel=";

//I use this array to compare with the steamers array. All users in this array are 
//substracted from the steamers array and hence are "offline"
$checkedOnline = array (); 

foreach($streamers as $i =>$value){
	$userGrab .= ",";
	$userGrab .= $value;
}
unset($value);

//grabs the channel data from twitch.tv streams
$json_file = file_get_contents($userGrab, 0, null, null);
$json_array = json_decode($json_file, true);

//get's member names from stream url's and checks for online steamers
foreach($streamers as $i =>$value) {
	$title = $json_array[$i]['channel']['channel_url'];
	$array = explode('/', $title);
	$member = end($array);
	$viewer = $json_array[$i]['channel_count'];
	onlinecheck($member, $viewer);
	$checkedOnline[] = signin($member);
}

unset($value);
unset($i);

?>

<?php

//checks if player streams are online
function onlinecheck($online, $viewers) {  
	//If the variable online is not equal to null, there is a good chance this person is currently streaming
	if ($online != null)
    {
    	echo '
    		<div class="pro-name">
        		<a target="_blank" href="http://www.twitch.tv/'.$online.'"> 
        			'.$online.'
        		</a>
        	</div>
			<div class="pro-viewer-count">'.$viewers.'</div>
			</br>
    	';		
	}
}
	
//This funcion add's online channel names to the checked online array
function signin($person){
	if($person != null){
		return $person;
	}
	else{
		return null;
	}
}
	
?>

<?php
//This part list all the people currently offline. Here the array with online users is compared 
//with the total users. Online users are then removed from the total users array.
	foreach ($streamers as $i => $value1) {
		foreach($checkedOnline as $ii => $value2){
			if($value1 == $value2){
				unset($streamers[$i]);
			}
		}
			
	}
?>
	
<!-- Print a nice list with people that can't currently be bothered with streaming their games	 -->
<?php foreach ($streamers as $i => $value): ?>
	<!-- <a href="http://www.twitch.tv/<?php echo $value; ?>"> 
		<strong><?php echo $value; ?></strong>
	</a>
	<img src="assets/images/offline.png"> 
	<strong> Status :</strong> Offline! 
	</br> -->
<?php endforeach; ?>

  </div>
</div>

<?php 
include('C:/xampp/htdocs/GH-client/assets/includes/cache-open.php');
include('C:/xampp/htdocs/GH-client/assets/includes/client-footer.php'); 
?>