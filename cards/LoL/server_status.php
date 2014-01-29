<?php include($_SERVER['DOCUMENT_ROOT'].'/GH-client/assets/inc/incfiles/client-header.inc.php'); ?>


<div class="client-pin">
  <h4 class="title"><b>Server Status</b></h4>

  	<div class="client-pin-content-holder">
<?php

 	// we are going to search for tweets mentioning these keywords
    $keywords = array(
        'na' => 'North America',
        'euw' => 'Europe East',
        'eune' => 'Europe West',
        'pbe' => 'Public Beta Server',
        'kr' => 'Korea'
    );
    // build the requests
    $ch = array();
    $mh = curl_multi_init();
    foreach ($keywords as $key => $value) {
        $ch[$key] = curl_init();
        curl_setopt($ch[$key], CURLOPT_URL, 
                'http://'.$key.'.islolup.com/');
        curl_setopt($ch[$key], CURLOPT_RETURNTRANSFER, true);
        curl_multi_add_handle($mh, $ch[$key]);
    }
    
    // execute the requests simultaneously
    $running = 0;
    do {
        curl_multi_exec($mh, $running);
    } while ($running > 0);
    
    // display the results
    foreach ($keywords as $key => $value) {
    	// $results contains this keyword's tweets as an associative array
        $page = curl_multi_getcontent($ch[$key]);
        $text = strpos($page, "Login Unavailable");
        if ($text == true) {
        	echo "
        		<div class='server-status'>
        			<div class='region-name'> $value </div>
        			<div class='region-status-offline'> Offline </div>
        		</div>
        	";
        } else {
        	echo "
        		<div class='server-status'>
	        		<div class='region-name'> $value </div>
	        		<div class='region-status-online'> Online </div>
	        	</div>
        	";
        }
    }
 ?>
 	</div>
</div>

</body>
</html>


  

