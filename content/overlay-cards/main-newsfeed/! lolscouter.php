<?php include($_SERVER['DOCUMENT_ROOT'].'/GH-client/assets/inc/incfiles/client-header.inc.php'); ?>

<div class="client-pin">
  <h4 class="title"><b>LoL Scouter</b></h4>
  <p class="info">
    <img src="assets/images/website_sources/twitchtv.png" height="18px" width="18px">
    LoL Nexus
  </p>
  <div class="client-pin-content-holder">

    <form class="navbar-search" role="form">
      <input name="search" type="text" class="search-query" placeholder="Enter a player currently in match">
      <!-- <div class="btn-toolbar">
        <div class="btn-group">
          <button class="btn">NA</button>
          <button class="btn">EUW</button>
          <button class="btn">EUNE</button>
          <button class="btn">BR</button>
          <button class="btn">TR</button>
        </div>
        <div class="btn-group">
          <button class="btn">RU</button>
          <button class="btn">LAN</button>
          <button class="btn">LAS</button>
          <button class="btn">OCE</button>
        </div>
      </div> -->
    </form>
    

  </div>
</div>

</body>
</html>

<script type="text/javascript">
  // Contact Form Email
        
  // variable to hold request
  var request;
  
  // bind to the submit event of our form
  $(".navbar-search").submit(function(event){
      // abort any pending request
      if (request) {
          request.abort();
      }
      // setup some local variables
      var $form = $(this);
      // let's select and cache all the fields
      var $inputs = $form.find("input, select, button, textarea");
      // serialize the data in the form
      var serializedData = $form.serialize();

      // let's disable the inputs for the duration of the ajax request
      $inputs.prop("disabled", true);

      // fire off the request to /form.php
      request = $.ajax({
          url: "content/overlay-cards/main-newsfeed/post-method.php",
          type: "POST",
          data: serializedData
      });

      // callback handler that will be called on success
      request.done(function (response, textStatus, jqXHR){
          // Clear form fields
          $("input, textarea").val('');

          // Display message for user
          $(".navbar-search").append('Your request has been sent!');

          // log a message to the console
          console.log("Hooray, it worked!");
      });

      // callback handler that will be called on failure
      request.fail(function (jqXHR, textStatus, errorThrown){
          // log the error to the console
          console.error(
              "An error occured"
              // textStatus, errorThrown
          );
      });

      // callback handler that will be called regardless
      // if the request failed or succeeded
      request.always(function () {
          // reenable the inputs
          $inputs.prop("disabled", false);
      });

      // prevent default posting of form
      event.preventDefault();
  });
</script>


  

