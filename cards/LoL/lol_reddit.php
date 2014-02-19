<?php 
include('C:/xampp/htdocs/GH-client/assets/includes/client-header.php');
// $cachefile = "C:/xampp/htdocs/GH-client/cache/". basename(__FILE__, '.php') ."_cache.php";
// include('C:/xampp/htdocs/GH-client/assets/includes/cache-open.php');

$json = file_get_contents("http://www.reddit.com/r/leagueoflegends/hot.json?limit=10");
$items = json_decode($json,true);

$items = $items['data']['children'];
?>

<div class="client-pin">
  <h4 class="title"><b>Hot 15 on r/LeagueofLegends</b></h4>
  <p class="info">
    <img src="assets/images/website_sources/reddit.png" height="18px" width="18px">
    Reddit
  </p>
  <div class="client-pin-content-holder" id="client-pin-livestreams">
    <?php foreach ($items as $key => $val): ?>
    	<div class="reddit-article-container">
    		<div class="reddit-score">
    			<?php echo $items[$key]['data']['score']; ?> <span>Points</span>
    		</div>
    		<div>
		    	<div class="reddit-thumbnail">
		    		<img src="<?php 
		    			$image = $items[$key]['data']['thumbnail'];
		    			if ($image == "self") {
		    				echo "assets/images/reddit-placeholder.png";
		    			} else {
		    				echo $image;
		    			} 
		    		?>">
		    	</div>
		    	<div class="reddit-info1">
			     	<h5 class="reddit-title">
			     		<a href="<?php echo $items[$key]['data']['url']; ?>">
			     			<?php echo $items[$key]['data']['title']; ?>
			     		</a>
			     	</h5>
			     	<div class="reddit-author">
			     		By <span><?php echo $items[$key]['data']['author']; ?></span>
			     	</div>
			    </div>
		    </div>
		    <div class="reddit-info2">
		    	<div class="reddit-votes">
		    		<div class="reddit-rating-up">
		    			<span><?php echo $items[$key]['data']['ups']; ?></span> Upvotes
		    		</div>
		    		<div class="reddit-rating-down">
		    			<span><?php echo $items[$key]['data']['downs']; ?></span> Downvotes
		    		</div>
		     	</div>
		     	<div class="reddit-comments">
		     		<a href="<?php echo $items[$key]['data']['permalink']; ?>">
		     			<span><?php echo $items[$key]['data']['num_comments']; ?></span> comments
		     		</a>
		     	</div>
		    </div>
		</div>
    <?php endforeach; ?>
  </div>
</div>

<?php 
// include('C:/xampp/htdocs/GH-client/assets/includes/cache-close.php');
include('C:/xampp/htdocs/GH-client/assets/includes/client-footer.php'); 
?>

