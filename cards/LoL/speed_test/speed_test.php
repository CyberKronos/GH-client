<?php include('C:/xampp/htdocs/GH-client/assets/inc/incfiles/client-header.inc.php'); ?>

<div class="client-pin">
  <h4 class="title"><b>Internet Speed Test</b></h4>
  <h5><b>Speedtest.net</b></h5>
  <p class="info">
    <img src="assets/images/website_sources/twitchtv.png" height="18px" width="18px">
    Ookla
  </p>
  <div class="client-pin-content-holder">

    <!-- BEGIN SPEED TEST - DO NOT ALTER BELOW-->
    <script type="text/javascript" src="cards/LoL/speed_test/speedtest/swfobject.js?v=2.2"></script>
        <div id="mini-demo">
          Speedtest.net Mini requires at least version 8 of Flash. Please <a href="http://get.adobe.com/flashplayer/">update your client</a>.
        </div><!--/mini-demo-->
      <script type="text/javascript">
        var flashvars = {
          upload_extension: "php"
        };
        var params = {
          wmode: "transparent",
          quality: "high",
          menu: "false",
          allowScriptAccess: "always"
        };
        var attributes = {};
        swfobject.embedSWF("cards/LoL/speed_test/speedtest.swf?v=2.1.8", "mini-demo", "300", "200", "9.0.0", "speedtest/expressInstall.swf", flashvars, params, attributes);
      </script>
    <!-- END SPEED TEST - DO NOT ALTER ABOVE -->

  </div>
</div>

</body>
</html>
  

