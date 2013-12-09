<?php 
include($_SERVER['DOCUMENT_ROOT'].'/GH-client/assets/inc/incfiles/client-header.inc.php'); 

$champions = array(
    array("name" => "Aatrox",
        "pic" => "assets/images/champion_thumbnails/aatrox.png",

    ),
    array("name" => "Ahri",
        "pic" => "assets/images/champion_thumbnails/ahri.png",

    ),
    array("name" => "Akali",
        "pic" => "assets/images/champion_thumbnails/akali.png",

    ),
    array("name" => "Alistar",
        "pic" => "assets/images/champion_thumbnails/alistar.png",

    ),
    array("name" => "Amumu",
        "pic" => "assets/images/champion_thumbnails/amumu.png",

    ),
    array("name" => "Anivia",
        "pic" => "assets/images/champion_thumbnails/anivia.png",

    ),
    array("name" => "Annie",
        "pic" => "assets/images/champion_thumbnails/annie.png",

    ),
    array("name" => "Ashe",
        "pic" => "assets/images/champion_thumbnails/ashe.png",

    ),
    array("name" => "Blitzcrank",
        "pic" => "assets/images/champion_thumbnails/blitzcrank.png",

    ),
    array("name" => "Brand",
        "pic" => "assets/images/champion_thumbnails/brand.png",

    ),
    array("name" => "Caitlyn",
        "pic" => "assets/images/champion_thumbnails/caitlyn.png",

    ),              
    array("name" => "Cassiopeia",
        "pic" => "assets/images/champion_thumbnails/cassiopeia.png",

    ),                            
    array("name" => "Cho'Gath",
        "pic" => "assets/images/champion_thumbnails/chogath.png",

    ),             
    array("name" => "Corki",
        "pic" => "assets/images/champion_thumbnails/corki.png",

    ),                                     
    array("name" => "Darius",
        "pic" => "assets/images/champion_thumbnails/darius.png",

    ),
    array("name" => "Diana",
        "pic" => "assets/images/champion_thumbnails/diana.png",

    ),
    array("name" => "Draven",
        "pic" => "assets/images/champion_thumbnails/draven.png",

    ),
    array("name" => "Dr. Mundo",
        "pic" => "assets/images/champion_thumbnails/drmundo.png",

    ),
    array("name" => "Elise",
        "pic" => "assets/images/champion_thumbnails/elise.png",

    ),
    array("name" => "Evelynn",
        "pic" => "assets/images/champion_thumbnails/evelynn.png",

    ),
    array("name" => "Ezreal",
        "pic" => "assets/images/champion_thumbnails/ezreal.png",

    ),
    array("name" => "Fiora",
        "pic" => "assets/images/champion_thumbnails/fiora.png",

    ),
    array("name" => "Fiddle Sticks",
        "pic" => "assets/images/champion_thumbnails/fiddleSticks.png",

    ),
    array("name" => "Fizz",
        "pic" => "assets/images/champion_thumbnails/fizz.png",

    ),
    array("name" => "Galio",
        "pic" => "assets/images/champion_thumbnails/galio.png",

    ),
    array("name" => "Gangplank",
        "pic" => "assets/images/champion_thumbnails/gangplank.png",

    ),
    array("name" => "Garen",
        "pic" => "assets/images/champion_thumbnails/garen.png",

    ),
    array("name" => "Gragas",
        "pic" => "assets/images/champion_thumbnails/gragas.png",

    ),
    array("name" => "Graves",
        "pic" => "assets/images/champion_thumbnails/graves.png",

    ),
    array("name" => "Hecarim",
        "pic" => "assets/images/champion_thumbnails/hecarim.png",

    ),
    array("name" => "Heimerdinger",
        "pic" => "assets/images/champion_thumbnails/heimerdinger.png",

    ),
    array("name" => "Irelia",
        "pic" => "assets/images/champion_thumbnails/irelia.png",

    ),
    array("name" => "Janna",
        "pic" => "assets/images/champion_thumbnails/janna.png",

    ),
    array("name" => "Jarvan IV",
        "pic" => "assets/images/champion_thumbnails/jarvanIV.png",

    ),
    array("name" => "Jax",
        "pic" => "assets/images/champion_thumbnails/jax.png",

    ),
    array("name" => "Jayce",
        "pic" => "assets/images/champion_thumbnails/jayce.png",

    ),
    array("name" => "Jinx",
        "pic" => "assets/images/champion_thumbnails/jinx.png",

    ),
    array("name" => "Karma",
        "pic" => "assets/images/champion_thumbnails/karma.png",

    ),
    array("name" => "Karthus",
        "pic" => "assets/images/champion_thumbnails/karthus.png",

    ),
    array("name" => "Kassadin",
        "pic" => "assets/images/champion_thumbnails/kassadin.png",

    ),
    array("name" => "Katarina",
        "pic" => "assets/images/champion_thumbnails/katarina.png",

    ),
    array("name" => "Kayle",
        "pic" => "assets/images/champion_thumbnails/kayle.png",

    ),
    array("name" => "Kennen",
        "pic" => "assets/images/champion_thumbnails/kennen.png",

    ),
    array("name" => "Khazix",
        "pic" => "assets/images/champion_thumbnails/khazix.png",

    ),
    array("name" => "Kog'Maw",
        "pic" => "assets/images/champion_thumbnails/kogmaw.png",

    ),
    array("name" => "Leblanc",
        "pic" => "assets/images/champion_thumbnails/leblanc.png",

    ),
    array("name" => "Lee Sin",
        "pic" => "assets/images/champion_thumbnails/leeSin.png",

    ),
    array("name" => "Leona",
        "pic" => "assets/images/champion_thumbnails/leona.png",

    ),
    array("name" => "Lissandra",
        "pic" => "assets/images/champion_thumbnails/lissandra.png",

    ),
    array("name" => "Lucian",
        "pic" => "assets/images/champion_thumbnails/lucian.png",

    ),
    array("name" => "Lulu",
        "pic" => "assets/images/champion_thumbnails/lulu.png",

    ),
    array("name" => "Lux",
        "pic" => "assets/images/champion_thumbnails/lux.png",

    ),
    array("name" => "Malphite",
        "pic" => "assets/images/champion_thumbnails/malphite.png",

    ),
    array("name" => "Malzahar",
        "pic" => "assets/images/champion_thumbnails/malzahar.png",

    ),
    array("name" => "Maokai",
        "pic" => "assets/images/champion_thumbnails/maokai.png",

    ),
    array("name" => "Master Yi",
        "pic" => "assets/images/champion_thumbnails/masterYi.png",

    ),
    array("name" => "Miss Fortune",
        "pic" => "assets/images/champion_thumbnails/missFortune.png",

    ),
    array("name" => "Wukong",
        "pic" => "assets/images/champion_thumbnails/wukong.png",

    ),
    array("name" => "Mordekaiser",
        "pic" => "assets/images/champion_thumbnails/mordekaiser.png",

    ),
    array("name" => "Morgana",
        "pic" => "assets/images/champion_thumbnails/morgana.png",

    ),
    array("name" => "Nami",
        "pic" => "assets/images/champion_thumbnails/nami.png",

    ),
    array("name" => "Nasus",
        "pic" => "assets/images/champion_thumbnails/nasus.png",

    ),
    array("name" => "Nautilus",
        "pic" => "assets/images/champion_thumbnails/nautilus.png",

    ),
    array("name" => "Nidalee",
        "pic" => "assets/images/champion_thumbnails/nidalee.png",

    ),
    array("name" => "Nocturne",
        "pic" => "assets/images/champion_thumbnails/nocturne.png",

    ),
    array("name" => "Nunu",
        "pic" => "assets/images/champion_thumbnails/nunu.png",

    ),
    array("name" => "Olaf",
        "pic" => "assets/images/champion_thumbnails/olaf.png",

    ),
    array("name" => "Orianna",
        "pic" => "assets/images/champion_thumbnails/orianna.png",

    ),
    array("name" => "Pantheon",
        "pic" => "assets/images/champion_thumbnails/pantheon.png",

    ),
    array("name" => "Poppy",
        "pic" => "assets/images/champion_thumbnails/poppy.png",

    ),
    array("name" => "Quinn",
        "pic" => "assets/images/champion_thumbnails/quinn.png",

    ),
    array("name" => "Rammus",
        "pic" => "assets/images/champion_thumbnails/rammus.png",

    ),
    array("name" => "Renekton",
        "pic" => "assets/images/champion_thumbnails/renekton.png",

    ),
    array("name" => "Rengar",
        "pic" => "assets/images/champion_thumbnails/rengar.png",

    ),
    array("name" => "Riven",
        "pic" => "assets/images/champion_thumbnails/riven.png",

    ),
    array("name" => "Rumble",
        "pic" => "assets/images/champion_thumbnails/rumble.png",

    ),
    array("name" => "Ryze",
        "pic" => "assets/images/champion_thumbnails/ryze.png",

    ),
    array("name" => "Sejuani",
        "pic" => "assets/images/champion_thumbnails/sejuani.png",

    ),
    array("name" => "Shaco",
        "pic" => "assets/images/champion_thumbnails/shaco.png",

    ),
    array("name" => "Shen",
        "pic" => "assets/images/champion_thumbnails/shen.png",

    ),
    array("name" => "Shyvana",
        "pic" => "assets/images/champion_thumbnails/shyvana.png",

    ),
    array("name" => "Singed",
        "pic" => "assets/images/champion_thumbnails/singed.png",

    ),
    array("name" => "Sion",
        "pic" => "assets/images/champion_thumbnails/sion.png",

    ),
    array("name" => "Sivir",
        "pic" => "assets/images/champion_thumbnails/sivir.png",

    ),
    array("name" => "Skarner",
        "pic" => "assets/images/champion_thumbnails/skarner.png",

    ),
    array("name" => "Sona",
        "pic" => "assets/images/champion_thumbnails/sona.png",

    ),
    array("name" => "Soraka",
        "pic" => "assets/images/champion_thumbnails/soraka.png",

    ),
    array("name" => "Swain",
        "pic" => "assets/images/champion_thumbnails/swain.png",

    ),
    array("name" => "Syndra",
        "pic" => "assets/images/champion_thumbnails/syndra.png",

    ),
    array("name" => "Talon",
        "pic" => "assets/images/champion_thumbnails/talon.png",

    ),
    array("name" => "Taric",
        "pic" => "assets/images/champion_thumbnails/taric.png",

    ),
    array("name" => "Teemo",
        "pic" => "assets/images/champion_thumbnails/teemo.png",

    ),
    array("name" => "Thresh",
        "pic" => "assets/images/champion_thumbnails/thresh.png",

    ),
    array("name" => "Tristana",
        "pic" => "assets/images/champion_thumbnails/tristana.png",

    ),
    array("name" => "Trundle",
        "pic" => "assets/images/champion_thumbnails/trundle.png",

    ),
    array("name" => "Tryndamere",
        "pic" => "assets/images/champion_thumbnails/tryndamere.png",

    ),
    array("name" => "Twisted Fate",
        "pic" => "assets/images/champion_thumbnails/twistedFate.png",

    ),
    array("name" => "Twitch",
        "pic" => "assets/images/champion_thumbnails/twitch.png",

    ),
    array("name" => "Udyr",
        "pic" => "assets/images/champion_thumbnails/udyr.png",

    ),
    array("name" => "Urgot",
        "pic" => "assets/images/champion_thumbnails/urgot.png",

    ),
    array("name" => "Varus",
        "pic" => "assets/images/champion_thumbnails/varus.png",

    ),
    array("name" => "Vayne",
        "pic" => "assets/images/champion_thumbnails/vayne.png",

    ),
    array("name" => "Veigar",
        "pic" => "assets/images/champion_thumbnails/veigar.png",

    ),
    array("name" => "Vi",
        "pic" => "assets/images/champion_thumbnails/vi.png",

    ),
    array("name" => "Viktor",
        "pic" => "assets/images/champion_thumbnails/viktor.png"

    ),
    array("name" => "Vladimir",
        "pic" => "assets/images/champion_thumbnails/vladimir.png",

    ),
    array("name" => "Volibear",
        "pic" => "assets/images/champion_thumbnails/volibear.png",

    ),
    array("name" => "Warwick",
        "pic" => "assets/images/champion_thumbnails/warwick.png",

    ),
    array("name" => "Xerath",
        "pic" => "assets/images/champion_thumbnails/xerath.png",

    ),
    array("name" => "Xin Zhao",
        "pic" => "assets/images/champion_thumbnails/xinZhao.png",

    ),
    array("name" => "Yasuo",
        "pic" => "assets/images/champion_thumbnails/yasuo.png",

    ),
    array("name" => "Yorick",
        "pic" => "assets/images/champion_thumbnails/yorick.png",

    ),
    array("name" => "Zac",
        "pic" => "assets/images/champion_thumbnails/zac.png",

    ),
    array("name" => "Zed",
        "pic" => "assets/images/champion_thumbnails/zed.png",

    ),
    array("name" => "Ziggs",
        "pic" => "assets/images/champion_thumbnails/ziggs.png",

    ),
    array("name" => "Zilean",
        "pic" => "assets/images/champion_thumbnails/zilean.png",

    ),
    array("name" => "Zyra",
        "pic" => "assets/images/champion_thumbnails/zyra.png",

    )
);

$sort = array();
foreach($champions as $k=>$v) {
    $sort['name'][$k] = $v['name'];
}

# sort by title asc
array_multisort($sort['name'], SORT_ASC, $champions);

?>

<div class="client-pin">
  <h4 class="title"><b>Champion Guides</b></h4>
  <p class="info">
    <img src="assets/images/website_sources/solomid.png" height="18px" width="18px">
    Solomid
  </p>
  <div class="client-pin-content-holder">

    <form id="test" role="form" action="content/overlay-cards/main-newsfeed/champ_guides_popup.php" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW');">
      <input name="search" type="text" class="search-query" placeholder="Search for a Champion by Name">
    </form>
    <div class="champion-imgs-holder">
      <?php for ($row=0; $row < count($champions) ; $row++):  //prints the array elements ?>
        <div class="champion-holder">
          <a href="#">
            <img src="<?php echo $champions[$row]["pic"]; ?>">
          </a>
          <div><?php echo $champions[$row]["name"] ?></div>
        </div>
      <?php endfor; ?>
    </div>

  </div>
</div>

</body>
</html>
