<?php include($_SERVER['DOCUMENT_ROOT'].'/GH-client/inc/incfiles/client-header-with-navbar.inc.php'); ?>


<h1>Athene</h1>
<br>

<div class="pin_streamer">
  <div class="holder">
    <object type="application/x-shockwave-flash" height="400" width="642" id="live_embed_player_flash" 
    data="http://www.twitch.tv/widgets/live_embed_player.swf?channel=athenelive" bgcolor="#000000">
      <param name="allowFullScreen" value="true" />
      <param name="allowScriptAccess" value="always" />
      <param name="allowNetworking" value="all" />
      <param name="movie" value="http://www.twitch.tv/widgets/live_embed_player.swf" />
      <param name="flashvars" value="hostname=www.twitch.tv&channel=athenelive&auto_play=true&start_volume=25" />
    </object>
  </div>
  <p class="info">
      <span>1 likes</span>
  </p>
</div>

<div class="pin_streamer">
  <div class="holder">
    <iframe frameborder="0" scrolling="no" id="chat_embed" 
    src="http://twitch.tv/chat/embed?channel=athenelive&amp;popout_chat=true" height="400" width="449"></iframe>
  </div>
  <p class="info">
      <span>1 likes</span>
  </p>
</div>

</body>
</html>