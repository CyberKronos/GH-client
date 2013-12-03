<?php include($_SERVER['DOCUMENT_ROOT'].'/GH-client/assets/inc/incfiles/client-header.inc.php'); ?>

<?php
$streamers = array(
              array("name" => "MLG LoL",
                    "pic" => "assets/images/streamer_pics/#.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=mlglol"),true),
                    "link" => "streams/#.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=mlglol"),true)['viewers_count']
                ),
              array("name" => "KaosTV",
                    "pic" => "assets/images/streamer_pics/#.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=kaostv"),true),
                    "link" => "streams/#.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=kaostv"),true)['viewers_count']
                ),
              array("name" => "Trick2g",
                    "pic" => "assets/images/streamer_pics/#.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=trick2g"),true),
                    "link" => "streams/#.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=trick2g"),true)['viewers_count']
                ),
              array("name" => "TheOddOne",
                    "pic" => "assets/images/streamer_pics/theoddone.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=tsm_theoddone"),true),
                    "link" => "streams/theoddone_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=tsm_theoddone"),true)['viewers_count']
                ),
              array("name" => "Edward",
                    "pic" => "assets/images/streamer_pics/edward.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=edwardlol"),true),
                    "link" => "streams/edward_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=edwardlol"),true)['viewers_count']
                ),
              array("name" => "Alex Ich",
                    "pic" => "assets/images/streamer_pics/alexich.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=alexich"),true),
                    "link" => "streams/alexich_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=alexich"),true)['viewers_count']
                ),
              array("name" => "Voyboy",
                    "pic" => "assets/images/streamer_pics/voyboy.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=voyboy"),true),
                    "link" => "streams/voyboy_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=voyboy"),true)['viewers_count']
                ),
              array("name" => "xPeke",
                    "pic" => "assets/images/streamer_pics/xpeke.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=xpeke"),true),
                    "link" => "streams/xpeke_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=xpeke"),true)['viewers_count']
                ),
              array("name" => "Imaqtpie",
                    "pic" => "assets/images/streamer_pics/imaqtpie.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=imaqtpie"),true),
                    "link" => "streams/imaqtpie_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=imaqtpie"),true)['viewers_count']
                ),
              array("name" => "Athene Live",
                    "pic" => "assets/images/streamer_pics/athenelive.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=athenelive"),true),
                    "link" => "streams/athenelive_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=athenelive"),true)['viewers_count']
                ),
              #array("name" => "KaosTV",
              #      "pic" => "assets/images/streamer_pics/kaostv.jpg",
              #      "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=tsm_theoddone"),true),
              #      "link" => "streams/kaostv_stream.php",
              #      "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=#"),true)['viewers_count']
              #  ),
              array("name" => "Guardsman Bob",
                    "pic" => "assets/images/streamer_pics/guardsmanbob.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=guardsmanbob"),true),
                    "link" => "streams/guardsmanbob_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=guardsmanbob"),true)['viewers_count']
                ),
              array("name" => "Cyanide",
                    "pic" => "assets/images/streamer_pics/cyanide.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=fnaticcyanide"),true),
                    "link" => "streams/cyanide_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=fnaticcyanide"),true)['viewers_count']
                ),
              array("name" => "Phreak",
                    "pic" => "assets/images/streamer_pics/phreak.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=phreakstream"),true),
                    "link" => "streams/riotphreak_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=phreakstream"),true)['viewers_count']
                ),
              array("name" => "sOAZ",
                    "pic" => "assets/images/streamer_pics/soaz.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=soazed"),true),
                    "link" => "streams/soaz_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=soazed"),true)['viewers_count']
                ),              
              array("name" => "Aphromoo",
                    "pic" => "assets/images/streamer_pics/aphromoo.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=aphromoo"),true),
                    "link" => "streams/aphromoo_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=aphromoo"),true)['viewers_count']
                ),               
              #array("name" => "Best Riven NA",
              #      "pic" => "assets/images/streamer_pics/bestrivenna.jpg",
              #      "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=tsm_theoddone"),true),
              #      "link" => "streams/bestrivenna_stream.php",
              #      "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=#"),true)['viewers_count']
              #  ),              
              array("name" => "Chaox",
                    "pic" => "assets/images/streamer_pics/chaox.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=chaoxlol"),true),
                    "link" => "streams/chaox_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=chaoxlol"),true)['viewers_count']
                ),             
              array("name" => "Crumbzz",
                    "pic" => "assets/images/streamer_pics/crumbzz.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=crumbzz"),true),
                    "link" => "streams/crumbzz_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=crumbzz"),true)['viewers_count']
                ),             
              array("name" => "Dan Dinh",
                    "pic" => "assets/images/streamer_pics/dandinh.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=dandinh"),true),
                    "link" => "streams/dandinh_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=dandinh"),true)['viewers_count']
                ),              
              #array("name" => "Destiny",
              #      "pic" => "assets/images/streamer_pics/destiny.jpg",
              #      "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=tsm_theoddone"),true),
              #      "link" => "streams/destiny_stream.php",
              #      "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=#"),true)['viewers_count']
              #  ),              
              array("name" => "Doublelift",
                    "pic" => "assets/images/streamer_pics/doublelift.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=clgdoublelift"),true),
                    "link" => "streams/doublelift_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=clgdoublelift"),true)['viewers_count']
                ),              
              array("name" => "Dyrus",
                    "pic" => "assets/images/streamer_pics/dyrus.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=tsm_dyrus"),true),
                    "link" => "streams/dyrus_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=tsm_dyrus"),true)['viewers_count']
                ),              
              array("name" => "Froggen",
                    "pic" => "assets/images/streamer_pics/froggen.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=froggen"),true),
                    "link" => "streams/froggen_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=froggen"),true)['viewers_count']
                ),              
              array("name" => "HotshotGG",
                    "pic" => "assets/images/streamer_pics/hotshotgg.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=hotshotgg"),true),
                    "link" => "streams/hotshotgg_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=hotshotgg"),true)['viewers_count']
                ),              
              array("name" => "Krepo",
                    "pic" => "assets/images/streamer_pics/krepo.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=skumbagkrepo"),true),
                    "link" => "streams/krepo_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=skumbagkrepo"),true)['viewers_count']
                ),              
              // array("name" => "Lilballz",
              //       "pic" => "assets/images/streamer_pics/lilballz.jpg",
              #        "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=tsm_theoddone"),true),
              //       "link" => "streams/lilballz_stream.php",
              //       "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=chaoxlol"),true)['viewers_count']
              //   ),              
              array("name" => "Nhat Nguyen",
                  "pic" => "assets/images/streamer_pics/nhatnguyen.jpg",
                  "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=nhatn"),true),
                  "link" => "streams/nhatnguyen_stream.php",
                  "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=nhatn"),true)['viewers_count']
                ),              
              array("name" => "Nyjacky",
                  "pic" => "assets/images/streamer_pics/nyjacky.jpg",
                  "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=nyjacky"),true),
                  "link" => "streams/nyjacky_stream.php",
                  "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=nyjacky"),true)['viewers_count']
                ),              
              array("name" => "Reginald",
                    "pic" => "assets/images/streamer_pics/reginald.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=tsm_reginald"),true),
                    "link" => "streams/reginald_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=tsm_reginald"),true)['viewers_count']
                ),
              array("name" => "Saintvicious",
                    "pic" => "assets/images/streamer_pics/saintvicious.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=crs_saintvicious"),true),
                    "link" => "streams/saintvicious_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=crs_saintvicious"),true)['viewers_count']
                ),              
              array("name" => "Scarra",
                    "pic" => "assets/images/streamer_pics/scarra.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=scarra"),true),
                    "link" => "streams/scarra_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=scarra"),true)['viewers_count']
                ),
              array("name" => "Snoopeh",
                    "pic" => "assets/images/streamer_pics/snoopeh.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=snoopeh"),true),
                    "link" => "streams/snoopeh_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=snoopeh"),true)['viewers_count']
                ),
              // array("name" => "Stanley",
              //       "pic" => "assets/images/streamer_pics/stanley.jpg",
              #        "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=tsm_theoddone"),true),
              //       "link" => "streams/stanley_stream.php",
              //       "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=chaoxlol"),true)['viewers_count']
              //   ),
              array("name" => "The Rain Man",
                    "pic" => "assets/images/streamer_pics/therainman.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=therainman"),true),
                    "link" => "streams/therainman_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=therainman"),true)['viewers_count']
                ),
              // array("name" => "Toyz",
              //       "pic" => "assets/images/streamer_pics/toyz.jpg",
              #        "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=tsm_theoddone"),true),
              //       "link" => "streams/toyz_stream.php",
              //       "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=chaoxlol"),true)['viewers_count']
              //   ),
              array("name" => "Westrice",
                    "pic" => "assets/images/streamer_pics/westrice.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=westrice"),true),
                    "link" => "streams/westrice_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=westrice"),true)['viewers_count']
                ),
              array("name" => "Wingsofdeath",
                    "pic" => "assets/images/streamer_pics/wingsofdeath.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=wingsofdeath"),true),
                    "link" => "streams/wingsofdeath_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=wingsofdeath"),true)['viewers_count']
                ),
              array("name" => "Xpecial",
                    "pic" => "assets/images/streamer_pics/xpecial.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=tsm_xpecial"),true),
                    "link" => "streams/xpecial_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=tsm_xpecial"),true)['viewers_count']
                ),
              array("name" => "Yellowpete",
                    "pic" => "assets/images/streamer_pics/yellowpete.jpg",
                    "liveAPI" => json_decode(file_get_contents("http://api.justin.tv/api/stream/list.json?channel=yellowpete"),true),
                    "link" => "streams/yellowpete_stream.php",
                    "viewers" => json_decode(file_get_contents("http://api.justin.tv/api/stream/summary.json?channel=yellowpete"),true)['viewers_count']
                )
);

$sort = array();
foreach($streamers as $k=>$v) {
    $sort['name'][$k] = $v['name'];
    $sort['viewers'][$k] = $v['viewers'];
}
# sort by viewers desc and then name asc
array_multisort($sort['viewers'], SORT_DESC, $sort['name'], SORT_ASC, $streamers);
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
    <?php
    for ($row=0; $row < count($streamers) ; $row++) { //prints the array elements
      if($streamers[$row]["liveAPI"] != NULL) {
        foreach($streamers[$row]["liveAPI"] as $item) {
          echo '
            <h5><a href="'.$streamers[$row]["link"].'">'.$streamers[$row]["name"].'</a></h5>
            <div><a href="'.$streamers[$row]["link"].'">'.$item['title'].'</a></div>
            <div>'.$streamers[$row]["viewers"].' Viewers on '.$item['channel']['login'].'</div>
            <hr/>';
        }
      }
    } 
    ?>
  </div>
  <div class="accordion" id="accordion2">
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
  </div>

</div>


</div>
</body>
</html>