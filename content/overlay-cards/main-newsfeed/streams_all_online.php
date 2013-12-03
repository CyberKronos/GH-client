<?php include($_SERVER['DOCUMENT_ROOT'].'/GH-client/assets/inc/incfiles/client-header.inc.php'); ?>

<?php
$json = file_get_contents("http://api.justin.tv/api/stream/list.json?category=gaming&meta_game=League%20of%20Legends");

$elements = json_decode($json);
?>

<div class="client-pin">
  <h4 class="title"><b>Online Channels</b></h4>
  <h5><b>Live Streams</b></h5>
  <p class="info">
    <img src="assets/images/website_sources/twitchtv.png" height="18px" width="18px">
    Twitch TV
  </p>
  <div class="client-pin-content-holder">
    <hr/>
    <?php foreach ($elements as $element): ?>
      <div class="streams-container">
        <!-- $channel = get_object_vars($element->channel);
        print_r(array_keys($channel)); // Use this to print out all available keys for the channel array -->

        <h5 class="streams-header"><a target="_blank" href="<?php echo $element->channel->channel_url; ?>"><?php echo $element->title; ?></a></h5>
        <div class="streams-subheader"><?php echo $element->stream_count; ?> Viewers on <?php echo $element->channel->title; ?></div>
        <div class="streams-image">
          <a target="_blank" href="<?php echo $element->channel->channel_url; ?>">
            <img src="<?php echo $element->channel->screen_cap_url_large; ?>" />
          </a>
        </div>
        <hr/>
      </div>
    <?php endforeach; ?>
    
    <!-- <div class="accordion" id="accordion2">
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
    </div> -->
  </div>
</div>

</body>
</html>
  

