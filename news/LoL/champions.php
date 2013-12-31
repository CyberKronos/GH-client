<?php include($_SERVER['DOCUMENT_ROOT'].'/GH-client/assets/inc/incfiles/client-header-with-navbar.inc.php');

$champions = array(
              // Consumable Items
              array("title" => "Aatrox",
                    "pic" => "assets/images/champion_pics/Aatrox_Square_0.png",
        
                ),
              array("title" => "Ahri",
                    "pic" => "assets/images/champion_pics/Ahri_Square_0.png",
    
                ),
              array("title" => "Akali",
                    "pic" => "assets/images/champion_pics/Akali_Square_0.png",
      
                ),
              array("title" => "Alistar",
                    "pic" => "assets/images/champion_pics/Alistar_Square_0.png",
    
                ),
              array("title" => "Amumu",
                    "pic" => "assets/images/champion_pics/Amumu_Square_0.png",
    
                ),
              array("title" => "Anivia",
                    "pic" => "assets/images/champion_pics/Anivia_Square_0.png",
      
                ),
              array("title" => "Annie",
                    "pic" => "assets/images/champion_pics/Annie_Square_0.png",
        
                ),
              array("title" => "Ashe",
                    "pic" => "assets/images/champion_pics/Ashe_Square_0.png",
          
                ),
              array("title" => "Blitzcrank",
                    "pic" => "assets/images/champion_pics/Blitzcrank_Square_0.png",
      
                ),
              array("title" => "Brand",
                    "pic" => "assets/images/champion_pics/Brand_Square_0.png",
        
                ),
              array("title" => "Caitlyn",
                    "pic" => "assets/images/champion_pics/Caitlyn_Square_0.png",
  
                ),              
              array("title" => "Cassiopeia",
                    "pic" => "assets/images/champion_pics/Cassiopeia_Square_0.png",
      
                ),                            
              array("title" => "Cho'Gath",
                    "pic" => "assets/images/champion_pics/Chogath_Square_0.png",
    
                ),             
              array("title" => "Corki",
                    "pic" => "assets/images/champion_pics/Corki_Square_0.png",
      
                ),                                     
              array("title" => "Darius",
                    "pic" => "assets/images/champion_pics/Darius_Square_0.png",
        
                ),
              array("title" => "Diana",
                    "pic" => "assets/images/champion_pics/Diana_Square_0.png",
        
                ),
              array("title" => "Draven",
                    "pic" => "assets/images/champion_pics/Draven_Square_0.png",
        
                ),
              array("title" => "Dr. Mundo",
                    "pic" => "assets/images/champion_pics/DrMundo_Square_0.png",
        
                ),
              array("title" => "Elise",
                    "pic" => "assets/images/champion_pics/Elise_Square_0.png",
        
                ),
              array("title" => "Evelynn",
                    "pic" => "assets/images/champion_pics/Evelynn_Square_0.png",
        
                ),
              array("title" => "Ezreal",
                    "pic" => "assets/images/champion_pics/Ezreal_Square_0.png",
        
                ),
              array("title" => "Fiora",
                    "pic" => "assets/images/champion_pics/Fiora_Square_0.png",
        
                ),
              array("title" => "Fiddle Sticks",
                    "pic" => "assets/images/champion_pics/FiddleSticks_Square_0.png",
        
                ),
              array("title" => "Fizz",
                    "pic" => "assets/images/champion_pics/Fizz_Square_0.png",
        
                ),
              array("title" => "Galio",
                    "pic" => "assets/images/champion_pics/Galio_Square_0.png",
        
                ),
              array("title" => "Gangplank",
                    "pic" => "assets/images/champion_pics/Gangplank_Square_0.png",
        
                ),
              array("title" => "Garen",
                    "pic" => "assets/images/champion_pics/Garen_Square_0.png",
        
                ),
              array("title" => "Gragas",
                    "pic" => "assets/images/champion_pics/Gragas_Square_0.png",
        
                ),
              array("title" => "Graves",
                    "pic" => "assets/images/champion_pics/Graves_Square_0.png",
        
                ),
              array("title" => "Hecarim",
                    "pic" => "assets/images/champion_pics/Hecarim_Square_0.png",
        
                ),
              array("title" => "Heimerdinger",
                    "pic" => "assets/images/champion_pics/Heimerdinger_Square_0.png",
        
                ),
              array("title" => "Irelia",
                    "pic" => "assets/images/champion_pics/Irelia_Square_0.png",
        
                ),
              array("title" => "Janna",
                    "pic" => "assets/images/champion_pics/Janna_Square_0.png",
        
                ),
              array("title" => "Jarvan IV",
                    "pic" => "assets/images/champion_pics/JarvanIV_Square_0.png",
        
                ),
              array("title" => "Jax",
                    "pic" => "assets/images/champion_pics/Jax_Square_0.png",
        
                ),
              array("title" => "Jayce",
                    "pic" => "assets/images/champion_pics/Jayce_Square_0.png",
        
                ),
              array("title" => "Karma",
                    "pic" => "assets/images/champion_pics/Karma_Square_0.png",
        
                ),
              array("title" => "Karthus",
                    "pic" => "assets/images/champion_pics/Karthus_Square_0.png",
        
                ),
              array("title" => "Kassadin",
                    "pic" => "assets/images/champion_pics/Kassadin_Square_0.png",
        
                ),
              array("title" => "Katarina",
                    "pic" => "assets/images/champion_pics/Katarina_Square_0.png",
        
                ),
              array("title" => "Kayle",
                    "pic" => "assets/images/champion_pics/Kayle_Square_0.png",
        
                ),
              array("title" => "Kennen",
                    "pic" => "assets/images/champion_pics/Kennen_Square_0.png",
        
                ),
              array("title" => "Khazix",
                    "pic" => "assets/images/champion_pics/Khazix_Square_0.png",
        
                ),
              array("title" => "Kog'Maw",
                    "pic" => "assets/images/champion_pics/KogMaw_Square_0.png",
        
                ),
              array("title" => "Leblanc",
                    "pic" => "assets/images/champion_pics/Leblanc_Square_0.png",
        
                ),
              array("title" => "Lee Sin",
                    "pic" => "assets/images/champion_pics/LeeSin_Square_0.png",
        
                ),
              array("title" => "Leona",
                    "pic" => "assets/images/champion_pics/Leona_Square_0.png",
        
                ),
              array("title" => "Lissandra",
                    "pic" => "assets/images/champion_pics/Lissandra_Square_0.png",
        
                ),
              array("title" => "Lulu",
                    "pic" => "assets/images/champion_pics/Lulu_Square_0.png",
        
                ),
              array("title" => "Lux",
                    "pic" => "assets/images/champion_pics/Lux_Square_0.png",
        
                ),
              array("title" => "Malphite",
                    "pic" => "assets/images/champion_pics/Malphite_Square_0.png",
        
                ),
              array("title" => "Malzahar",
                    "pic" => "assets/images/champion_pics/Malzahar_Square_0.png",
        
                ),
              array("title" => "Maokai",
                    "pic" => "assets/images/champion_pics/Maokai_Square_0.png",
        
                ),
              array("title" => "Master Yi",
                    "pic" => "assets/images/champion_pics/MasterYi_Square_0.png",
        
                ),
              array("title" => "Miss Fortune",
                    "pic" => "assets/images/champion_pics/MissFortune_Square_0.png",
        
                ),
              array("title" => "Wukong",
                    "pic" => "assets/images/champion_pics/MonkeyKing_Square_0.png",
        
                ),
              array("title" => "Mordekaiser",
                    "pic" => "assets/images/champion_pics/Mordekaiser_Square_0.png",
        
                ),
              array("title" => "Morgana",
                    "pic" => "assets/images/champion_pics/Morgana_Square_0.png",
        
                ),
              array("title" => "Nami",
                    "pic" => "assets/images/champion_pics/Nami_Square_0.png",
        
                ),
              array("title" => "Nasus",
                    "pic" => "assets/images/champion_pics/Nasus_Square_0.png",
        
                ),
              array("title" => "Nautilus",
                    "pic" => "assets/images/champion_pics/Nautilus_Square_0.png",
        
                ),
              array("title" => "Nidalee",
                    "pic" => "assets/images/champion_pics/Nidalee_Square_0.png",
        
                ),
              array("title" => "Nocturne",
                    "pic" => "assets/images/champion_pics/Nocturne_Square_0.png",
        
                ),
              array("title" => "Nunu",
                    "pic" => "assets/images/champion_pics/Nunu_Square_0.png",
        
                ),
              array("title" => "Olaf",
                    "pic" => "assets/images/champion_pics/Olaf_Square_0.png",
        
                ),
              array("title" => "Orianna",
                    "pic" => "assets/images/champion_pics/Orianna_Square_0.png",
        
                ),
              array("title" => "Pantheon",
                    "pic" => "assets/images/champion_pics/Pantheon_Square_0.png",
        
                ),
              array("title" => "Poppy",
                    "pic" => "assets/images/champion_pics/Poppy_Square_0.png",
        
                ),
              array("title" => "Quinn",
                    "pic" => "assets/images/champion_pics/Quinn_Square_0.png",
        
                ),
              array("title" => "Rammus",
                    "pic" => "assets/images/champion_pics/Rammus_Square_0.png",
        
                ),
              array("title" => "Renekton",
                    "pic" => "assets/images/champion_pics/Renekton_Square_0.png",
        
                ),
              array("title" => "Rengar",
                    "pic" => "assets/images/champion_pics/Rengar_Square_0.png",
        
                ),
              array("title" => "Riven",
                    "pic" => "assets/images/champion_pics/Riven_Square_0.png",
        
                ),
              array("title" => "Rumble",
                    "pic" => "assets/images/champion_pics/Rumble_Square_0.png",
        
                ),
              array("title" => "Ryze",
                    "pic" => "assets/images/champion_pics/Ryze_Square_0.png",
        
                ),
              array("title" => "Sejuani",
                    "pic" => "assets/images/champion_pics/Sejuani_Square_0.png",
        
                ),
              array("title" => "Shaco",
                    "pic" => "assets/images/champion_pics/Shaco_Square_0.png",
        
                ),
              array("title" => "Shen",
                    "pic" => "assets/images/champion_pics/Shen_Square_0.png",
        
                ),
              array("title" => "Shyvana",
                    "pic" => "assets/images/champion_pics/Shyvana_Square_0.png",
        
                ),
              array("title" => "Singed",
                    "pic" => "assets/images/champion_pics/Singed_Square_0.png",
        
                ),
              array("title" => "Sion",
                    "pic" => "assets/images/champion_pics/Sion_Square_0.png",
        
                ),
              array("title" => "Sivir",
                    "pic" => "assets/images/champion_pics/Sivir_Square_0.png",
        
                ),
              array("title" => "Skarner",
                    "pic" => "assets/images/champion_pics/Skarner_Square_0.png",
        
                ),
              array("title" => "Sona",
                    "pic" => "assets/images/champion_pics/Sona_Square_0.png",
        
                ),
              array("title" => "Soraka",
                    "pic" => "assets/images/champion_pics/Soraka_Square_0.png",
        
                ),
              array("title" => "Swain",
                    "pic" => "assets/images/champion_pics/Swain_Square_0.png",
        
                ),
              array("title" => "Syndra",
                    "pic" => "assets/images/champion_pics/Syndra_Square_0.png",
        
                ),
              array("title" => "Talon",
                    "pic" => "assets/images/champion_pics/Talon_Square_0.png",
        
                ),
              array("title" => "Taric",
                    "pic" => "assets/images/champion_pics/Taric_Square_0.png",
        
                ),
              array("title" => "Teemo",
                    "pic" => "assets/images/champion_pics/Teemo_Square_0.png",
        
                ),
              array("title" => "Thresh",
                    "pic" => "assets/images/champion_pics/Thresh_Square_0.png",
        
                ),
              array("title" => "Tristana",
                    "pic" => "assets/images/champion_pics/Tristana_Square_0.png",
        
                ),
              array("title" => "Trundle",
                    "pic" => "assets/images/champion_pics/Trundle_Square_0.png",
        
                ),
              array("title" => "Tryndamere",
                    "pic" => "assets/images/champion_pics/Tryndamere_Square_0.png",
        
                ),
              array("title" => "Twisted Fate",
                    "pic" => "assets/images/champion_pics/TwistedFate_Square_0.png",
        
                ),
              array("title" => "Twitch",
                    "pic" => "assets/images/champion_pics/Twitch_Square_0.png",
        
                ),
              array("title" => "Udyr",
                    "pic" => "assets/images/champion_pics/Udyr_Square_0.png",
        
                ),
              array("title" => "Urgot",
                    "pic" => "assets/images/champion_pics/Urgot_Square_0.png",
        
                ),
              array("title" => "Varus",
                    "pic" => "assets/images/champion_pics/Varus_Square_0.png",
        
                ),
              array("title" => "Vayne",
                    "pic" => "assets/images/champion_pics/Vayne_Square_0.png",
        
                ),
              array("title" => "Veigar",
                    "pic" => "assets/images/champion_pics/Veigar_Square_0.png",
        
                ),
              array("title" => "Vi",
                    "pic" => "assets/images/champion_pics/Vi_Square_0.png",
        
                ),
              array("title" => "Viktor",
                    "pic" => "assets/images/champion_pics/Viktor_Square_0.png"
        
                ),
              array("title" => "Vladimir",
                    "pic" => "assets/images/champion_pics/Vladimir_Square_0.png",
        
                ),
              array("title" => "Volibear",
                    "pic" => "assets/images/champion_pics/Volibear_Square_0.png",
        
                ),
              array("title" => "Warwick",
                    "pic" => "assets/images/champion_pics/Warwick_Square_0.png",
        
                ),
              array("title" => "Xerath",
                    "pic" => "assets/images/champion_pics/Xerath_Square_0.png",
        
                ),
              array("title" => "Xin Zhao",
                    "pic" => "assets/images/champion_pics/XinZhao_Square_0.png",
        
                ),
              array("title" => "Yorick",
                    "pic" => "assets/images/champion_pics/Yorick_Square_0.png",
        
                ),
              array("title" => "Zac",
                    "pic" => "assets/images/champion_pics/Zac_Square_0.png",
        
                ),
              array("title" => "Zed",
                    "pic" => "assets/images/champion_pics/Zed_Square_0.png",
        
                ),
              array("title" => "Ziggs",
                    "pic" => "assets/images/champion_pics/Ziggs_Square_0.png",
        
                ),
              array("title" => "Zilean",
                    "pic" => "assets/images/champion_pics/Zilean_Square_0.png",
        
                ),
              array("title" => "Zyra",
                    "pic" => "assets/images/champion_pics/Zyra_Square_0.png",
        
                ),
);

$sort = array();
foreach($champions as $k=>$v) {
    $sort['title'][$k] = $v['title'];
    //$sort['url'][$k] = $v['event_type'];
}
# sort by title asc
array_multisort($sort['title'], SORT_ASC, $champions);
?>

<div class="container">
  <div class="row-fluid">
    <div class="span8">
      <div class="pin-web">
        <h4 class="title">Champions</h4> 
        <p class="info">
          <img src="assets/images/website_sources/lol.png" height="18px" width="18px">
          League of Legends
        </p>
        <br/>
        <?php
        for ($row=0; $row < count($champions) ; $row++) //prints the array elements
          echo '
          <div class="champions_holder">
            <a href="#">
              <img id="champions_img_size" class="rounded_pics" src="'.$champions[$row]["pic"].'">
            </a>
            <h5><a href="#">'.$champions[$row]["title"].'</a></h5>
          </div>'; 
        ?>
      </div>
    </div>

    <div class="span4">
      <div class="pin-web">
        <h4>Other Stuff</h4> 
      </div>
    </div>
  </div>
</div>

</div>
</body>
</html>