<?php include($_SERVER['DOCUMENT_ROOT'].'/GH-client/assets/inc/incfiles/client-header-with-navbar.inc.php');

$items = array(
              // Consumable Items
              array("title" => "Crystalline Flask",
                    "pic" => "assets/images/item_pics/Crystalline_Flask_item.png",
        
                ),
              array("title" => "Elixir of Brilliance",
                    "pic" => "assets/images/item_pics/Elixir_of_Brilliance_item.png",
    
                ),
              array("title" => "Elixir of Fortitude",
                    "pic" => "assets/images/item_pics/Elixir_of_Fortitude_item.png",
      
                ),
              array("title" => "Explorer's Ward",
                    "pic" => "assets/images/item_pics/Explorer's_Ward_item.png",
    
                ),
              array("title" => "Health Potion",
                    "pic" => "assets/images/item_pics/Health_Potion_item.png",
    
                ),
              array("title" => "Ichor of Illumination",
                    "pic" => "assets/images/item_pics/Ichor_of_Illumination_item.png",
      
                ),
              array("title" => "Ichor of Rage",
                    "pic" => "assets/images/item_pics/Ichor_of_Rage_item.png",
        
                ),
              array("title" => "Mana Potion",
                    "pic" => "assets/images/item_pics/Mana_Potion_item.png",
          
                ),
              array("title" => "Oracle's Elixir",
                    "pic" => "assets/images/item_pics/Oracle's_Elixir_item.png",
      
                ),
              array("title" => "Oracle's Extract",
                    "pic" => "assets/images/item_pics/Oracle's_Extract_item.png",
        
                ),
              array("title" => "Poro-Snax",
                    "pic" => "assets/images/item_pics/Poro-Snax_item.png",
  
                ),              
              array("title" => "Ruby Sightstone",
                    "pic" => "assets/images/item_pics/Ruby_Sightstone_item.png",
      
                ),                            
              array("title" => "Sight Ward",
                    "pic" => "assets/images/item_pics/Sight_Ward_item.png",
    
                ),             
              array("title" => "Sightstone",
                    "pic" => "assets/images/item_pics/Sightstone_item.png",
      
                ),             
              array("title" => "Total Biscuit of Rejuvenation",
                    "pic" => "assets/images/item_pics/Total_Biscuit_of_Rejuvenation_item.png",
      
                ),                          
              array("title" => "Vision Ward",
                    "pic" => "assets/images/item_pics/Vision_Ward_item.png",
        
                ),

              // Basic Items

              array("title" => "Amplifying Tome",
                    "pic" => "assets/images/item_pics/Amplifying_Tome_item.png",
        
                ),
              array("title" => "B.F. Sword",
                    "pic" => "assets/images/item_pics/B._F._Sword_item.png",
        
                ),
              array("title" => "Blasting Wand",
                    "pic" => "assets/images/item_pics/Blasting_Wand_item.png",
        
                ),
              array("title" => "Bonetooth Necklace",
                    "pic" => "assets/images/item_pics/Bonetooth_Necklace_item.png",
        
                ),
              array("title" => "Boots of Speed",
                    "pic" => "assets/images/item_pics/Boots_of_Speed_item.png",
        
                ),
              array("title" => "Brawler's Gloves",
                    "pic" => "assets/images/item_pics/Brawler's_Gloves_item.png",
        
                ),
              array("title" => "Chain Vest",
                    "pic" => "assets/images/item_pics/Chain_Vest_item.png",
        
                ),
              array("title" => "Cloak of Agility",
                    "pic" => "assets/images/item_pics/Cloak_of_Agility_item.png",
        
                ),
              array("title" => "Cloth Armor",
                    "pic" => "assets/images/item_pics/Cloth_Armor_item.png",
        
                ),
              array("title" => "Dagger",
                    "pic" => "assets/images/item_pics/Dagger_item.png",
        
                ),
              array("title" => "Doran's Ring",
                    "pic" => "assets/images/item_pics/Doran's_Ring_item.png",
        
                ),
              array("title" => "Doran's Blade",
                    "pic" => "assets/images/item_pics/Doran's_Blade_item.png",
        
                ),
              array("title" => "Doran's Shield",
                    "pic" => "assets/images/item_pics/Doran's_Shield_item.png",
        
                ),
              array("title" => "Faerie Charm",
                    "pic" => "assets/images/item_pics/Faerie_Charm_item.png",
        
                ),
              array("title" => "Giant's Belt",
                    "pic" => "assets/images/item_pics/Giant's_Belt_item.png",
        
                ),
              array("title" => "Hunter's Machete",
                    "pic" => "assets/images/item_pics/Hunter's_Machete_item.png",
        
                ),
              array("title" => "Needlessly Large_Rod",
                    "pic" => "assets/images/item_pics/Needlessly_Large_Rod_item.png",
        
                ),
              array("title" => "Long Sword",
                    "pic" => "assets/images/item_pics/Long_Sword_item.png",
        
                ),
              array("title" => "Negatron Cloak",
                    "pic" => "assets/images/item_pics/Negatron_Cloak_item.png",
        
                ),
              array("title" => "Null-Magic Mantle",
                    "pic" => "assets/images/item_pics/Null-Magic_Mantle_item.png",
        
                ),
              array("title" => "Pickaxe",
                    "pic" => "assets/images/item_pics/Pickaxe_item.png",
        
                ),
              array("title" => "Prospector's Blade",
                    "pic" => "assets/images/item_pics/Prospector's_Blade_item.png",
        
                ),
              array("title" => "Prospector's Ring",
                    "pic" => "assets/images/item_pics/Prospector's_Ring_item.png",
        
                ),
              array("title" => "Recurve Bow",
                    "pic" => "assets/images/item_pics/Recurve_Bow_item.png",
        
                ),
              array("title" => "Rejuvenation Bead",
                    "pic" => "assets/images/item_pics/Rejuvenation_Bead_item.png",
        
                ),
              array("title" => "Ruby Crystal",
                    "pic" => "assets/images/item_pics/Ruby_Crystal_item.png",
        
                ),
              array("title" => "Sapphire Crystal",
                    "pic" => "assets/images/item_pics/Sapphire_Crystal_item.png",
        
                ),
              array("title" => "The Hex Core",
                    "pic" => "assets/images/item_pics/The_Hex_Core_item.png",
        
                ),

              // Advanced Items

              array("title" => "Abyssal Scepter",
                    "pic" => "assets/images/item_pics/Abyssal_Scepter_item.png",
        
                ),
              array("title" => "Warden's Mail",
                    "pic" => "assets/images/item_pics/Warden's_Mail_item.png",
        
                ),
              array("title" => "Void Staff",
                    "pic" => "assets/images/item_pics/Void_Staff_item.png",
        
                ),
              array("title" => "Vampiric Scepter",
                    "pic" => "assets/images/item_pics/Vampiric_Scepter_item.png",
        
                ),
              array("title" => "Tiamat",
                    "pic" => "assets/images/item_pics/Tiamat_item.png",
        
                ),
              array("title" => "Thornmail",
                    "pic" => "assets/images/item_pics/Thornmail_item.png",
        
                ),
              array("title" => "The Brutalizer",
                    "pic" => "assets/images/item_pics/The_Brutalizer_item.png",
        
                ),
              array("title" => "Tear of the Goddess",
                    "pic" => "assets/images/item_pics/Tear_of_the_Goddess_item.png",
        
                ),
              array("title" => "Sword of the Occult",
                    "pic" => "assets/images/item_pics/Sword_of_the_Occult_item.png",
        
                ),
              array("title" => "Sword of the Divine",
                    "pic" => "assets/images/item_pics/Sword_of_the_Divine_item.png",
        
                ),
              array("title" => "Stinger",
                    "pic" => "assets/images/item_pics/Stinger_item.png",
        
                ),
              array("title" => "Spirit Stone",
                    "pic" => "assets/images/item_pics/Spirit_Stone_item.png",
        
                ),
              array("title" => "Sorcerer's Shoes",
                    "pic" => "assets/images/item_pics/Sorcerer's_Shoes_item.png",
        
                ),
              array("title" => "Sheen",
                    "pic" => "assets/images/item_pics/Sheen_item.png",
        
                ),
              array("title" => "Seeker's Armguard",
                    "pic" => "assets/images/item_pics/Seeker's_Armguard_item.png",
        
                ),
              array("title" => "Rylai's Crystal Scepter",
                    "pic" => "assets/images/item_pics/Rylai's_Crystal_Scepter_item.png",
        
                ),
              array("title" => "Runaan's Hurricane",
                    "pic" => "assets/images/item_pics/Runaan's_Hurricane_item.png",
        
                ),
              array("title" => "Rabadon's Deathcap",
                    "pic" => "assets/images/item_pics/Rabadon's_Deathcap_item.png",
        
                ),
              array("title" => "Quicksilver Sash",
                    "pic" => "assets/images/item_pics/Quicksilver_Sash_item.png",
        
                ),
              array("title" => "Philosopher's Stone",
                    "pic" => "assets/images/item_pics/Philosopher's_Stone_item.png",
        
                ),
              array("title" => "Phage",
                    "pic" => "assets/images/item_pics/Phage_item.png",
        
                ),
              array("title" => "Overlord's Bloodmail",
                    "pic" => "assets/images/item_pics/Overlord's_Bloodmail_item.png",
        
                ),
              array("title" => "Ninja Tabi",
                    "pic" => "assets/images/item_pics/Ninja_Tabi_item.png",
        
                ),
              array("title" => "Mercury's_ Treads",
                    "pic" => "assets/images/item_pics/Mercury's_Treads_item.png",
        
                ),
              array("title" => "Mejai's Soulstealer",
                    "pic" => "assets/images/item_pics/Mejai's_Soulstealer_item.png",
        
                ),
              array("title" => "Mana Manipulator",
                    "pic" => "assets/images/item_pics/Mana_Manipulator_item.png",
        
                ),
              array("title" => "Madred's Razors",
                    "pic" => "assets/images/item_pics/Madred's_Razors_item.png",
        
                ),
              array("title" => "Last Whisper",
                    "pic" => "assets/images/item_pics/Last_Whisper_item.png",
        
                ),
              array("title" => "Kitae's Bloodrazor",
                    "pic" => "assets/images/item_pics/Kitae's_Bloodrazor_item.png",
        
                ),
              array("title" => "Kindlegem",
                    "pic" => "assets/images/item_pics/Kindlegem_item.png",
        
                ),
              array("title" => "Kage's Lucky Pick",
                    "pic" => "assets/images/item_pics/Kage's_Lucky_Pick_item.png",
        
                ),
              array("title" => "Kitae's Bloodrazor",
                    "pic" => "assets/images/item_pics/Kitae's_Bloodrazor_item.png",
        
                ),
              array("title" => "Ionian Boots of Lucidity",
                    "pic" => "assets/images/item_pics/Ionian_Boots_of_Lucidity_item.png",
        
                ),
              array("title" => "Infinity Edge",
                    "pic" => "assets/images/item_pics/Infinity_Edge_item.png",
        
                ),
              array("title" => "Hextech Revolver",
                    "pic" => "assets/images/item_pics/Hextech_Revolver_item.png",
        
                ),
              array("title" => "Hexdrinker",
                    "pic" => "assets/images/item_pics/Hexdrinker_item.png",
        
                ),
              array("title" => "Haunting Guise",
                    "pic" => "assets/images/item_pics/Haunting_Guise_item.png",
        
                ),
              array("title" => "Guinsoo's Rageblade",
                    "pic" => "assets/images/item_pics/Guinsoo's_Rageblade_item.png",
        
                ),
              array("title" => "Guardian's Horn",
                    "pic" => "assets/images/item_pics/Guardian's_Horn_item.png",
        
                ),
              array("title" => "Guardian Angel",
                    "pic" => "assets/images/item_pics/Guardian_Angel_item.png",
        
                ),
              array("title" => "Glacial Shroud",
                    "pic" => "assets/images/item_pics/Glacial_Shroud_item.png",
        
                ),
              array("title" => "Fiendish Codex",
                    "pic" => "assets/images/item_pics/Fiendish_Codex_item.png",
        
                ),
              array("title" => "Emblem of Valor",
                    "pic" => "assets/images/item_pics/Emblem_of_Valor_item.png",
        
                ),
              array("title" => "Chalice of Harmony",
                    "pic" => "assets/images/item_pics/Chalice_of_Harmony_item.png",
        
                ),
              array("title" => "Catalyst the Protector",
                    "pic" => "assets/images/item_pics/Catalyst_the_Protector_item.png",
        
                ),
              array("title" => "Boots of Mobility",
                    "pic" => "assets/images/item_pics/Boots_of_Mobility_item.png",
        
                ),
              array("title" => "Berserker's Greaves",
                    "pic" => "assets/images/item_pics/Berserker's_Greaves_item.png",
        
                ),
              array("title" => "Avarice Blade",
                    "pic" => "assets/images/item_pics/Avarice_Blade_item.png",
        
                ),
              array("title" => "Zeal",
                    "pic" => "assets/images/item_pics/Zeal_item.png",
        
                ),
              array("title" => "Wooglet's Witchcap",
                    "pic" => "assets/images/item_pics/Wooglet's_Witchcap_item.png",
        
                ),
              array("title" => "Wit's End",
                    "pic" => "assets/images/item_pics/Wit's_End_item.png",
        
                ),
              array("title" => "Warmog's Armor",
                    "pic" => "assets/images/item_pics/Warmog's_Armor_item.png",
        
                ),
              array("title" => "Head of Kha'Zix",
                    "pic" => "assets/images/item_pics/Head_of_Kha'Zix_item.png",
        
                ),
              array("title" => "Augment-Power",
                    "pic" => "assets/images/item_pics/Augment-_Power_item.png",
        
                ),
              array("title" => "Augment-Gravity",
                    "pic" => "assets/images/item_pics/Augment-_Gravity_item.png",
        
                ),
              array("title" => "Augment-Death",
                    "pic" => "assets/images/item_pics/Augment-_Death_item.png",
        
                ),

              // Legendary Items

              array("title" => "Aegis of the Legion",
                    "pic" => "assets/images/item_pics/Aegis_of_the_Legion_item.png",
        
                ),
              array("title" => "Archangel's Staff",
                    "pic" => "assets/images/item_pics/Archangel's_Staff_item.png",
        
                ),
              array("title" => "Atma's Impaler",
                    "pic" => "assets/images/item_pics/Atma's_Impaler_item.png",
        
                ),
              array("title" => "Athene's Unholy Grail",
                    "pic" => "assets/images/item_pics/Athene's_Unholy_Grail_item.png",
        
                ),
              array("title" => "Zhonya's Hourglass",
                    "pic" => "assets/images/item_pics/Zhonya's_Hourglass_item.png",
        
                ),
              array("title" => "Banner of Command",
                    "pic" => "assets/images/item_pics/Banner_of_Command_item.png",
        
                ),
              array("title" => "Zephyr",
                    "pic" => "assets/images/item_pics/Zephyr_item.png",
        
                ),
              array("title" => "Zeke's Herald",
                    "pic" => "assets/images/item_pics/Zeke's_Herald_item.png",
        
                ),
              array("title" => "Youmuu's Ghostblade",
                    "pic" => "assets/images/item_pics/Youmuu's_Ghostblade_item.png",
        
                ),
              array("title" => "Wriggle's Lantern",
                    "pic" => "assets/images/item_pics/Wriggle's_Lantern_item.png",
        
                ),
              array("title" => "Will of the Ancients",
                    "pic" => "assets/images/item_pics/Will_of_the_Ancients_item.png",
        
                ),
              array("title" => "Twin Shadows",
                    "pic" => "assets/images/item_pics/Twin_Shadows_item.png",
        
                ),
              array("title" => "Trinity Force",
                    "pic" => "assets/images/item_pics/Trinity_Force_item.png",
        
                ),
              array("title" => "The Bloodthirster",
                    "pic" => "assets/images/item_pics/The_Bloodthirster_item.png",
        
                ),
              array("title" => "The Black Cleaver",
                    "pic" => "assets/images/item_pics/The_Black_Cleaver_item.png",
        
                ),
              array("title" => "Statikk Shiv",
                    "pic" => "assets/images/item_pics/Statikk_Shiv_item.png",
        
                ),
              array("title" => "Spirit Visage",
                    "pic" => "assets/images/item_pics/Spirit_Visage_item.png",
        
                ),
              array("title" => "Spirit of the Spectral Wraith",
                    "pic" => "assets/images/item_pics/Spirit_of_the_Spectral_Wraith_item.png",
        
                ),
              array("title" => "Spirit of the Elder Lizard",
                    "pic" => "assets/images/item_pics/Spirit_of_the_Elder_Lizard_item.png",
        
                ),
              array("title" => "Spirit of the Ancient Golem",
                    "pic" => "assets/images/item_pics/Spirit_of_the_Ancient_Golem_item.png",
        
                ),
              array("title" => "Shurelya's Reverie",
                    "pic" => "assets/images/item_pics/Shurelya's_Reverie_item.png",
        
                ),
              array("title" => "Shard of True Ice",
                    "pic" => "assets/images/item_pics/Shard_of_True_Ice_item.png",
        
                ),
              array("title" => "Sanguine Blade",
                    "pic" => "assets/images/item_pics/Sanguine_Blade_item.png",
        
                ),
              array("title" => "Rod of Ages",
                    "pic" => "assets/images/item_pics/Rod_of_Ages_item.png",
        
                ),
              array("title" => "Ravenous Hydra",
                    "pic" => "assets/images/item_pics/Ravenous_Hydra_item.png",
        
                ),
              array("title" => "Randuin's Omen",
                    "pic" => "assets/images/item_pics/Randuin's_Omen_item.png",
        
                ),
              array("title" => "Phantom Dancer",
                    "pic" => "assets/images/item_pics/Phantom_Dancer_item.png",
        
                ),
              array("title" => "Ohmwrecker",
                    "pic" => "assets/images/item_pics/Ohmwrecker_item.png",
        
                ),
              array("title" => "Odyn's Veil",
                    "pic" => "assets/images/item_pics/Odyn's_Veil_item.png",
        
                ),
              array("title" => "Nashor's Tooth",
                    "pic" => "assets/images/item_pics/Nashor's_Tooth_item.png",
        
                ),
              array("title" => "Morellonomicon",
                    "pic" => "assets/images/item_pics/Morellonomicon_item.png",
        
                ),
              array("title" => "Mikael's Crucible",
                    "pic" => "assets/images/item_pics/Mikael's_Crucible_item.png",
        
                ),
              array("title" => "Mercurial Scimitar",
                    "pic" => "assets/images/item_pics/Mercurial_Scimitar_item.png",
        
                ),
              array("title" => "Maw of Malmortius",
                    "pic" => "assets/images/item_pics/Maw_of_Malmortius_item.png",
        
                ),
              array("title" => "Manamune",
                    "pic" => "assets/images/item_pics/Manamune_item.png",
        
                ),
              array("title" => "Locket of the Iron Solari",
                    "pic" => "assets/images/item_pics/Locket_of_the_Iron_Solari_item.png",
        
                ),
              array("title" => "Lich Bane",
                    "pic" => "assets/images/item_pics/Lich_Bane_item.png",
        
                ),
              array("title" => "Liandry's Torment",
                    "pic" => "assets/images/item_pics/Liandry's_Torment_item.png",
        
                ),
              array("title" => "Iceborn Gauntlet",
                    "pic" => "assets/images/item_pics/Iceborn_Gauntlet_item.png",
        
                ),
              array("title" => "Hextech Sweeper",
                    "pic" => "assets/images/item_pics/Hextech_Sweeper_item.png",
        
                ),
              array("title" => "Grez's Spectral Lantern",
                    "pic" => "assets/images/item_pics/Grez's_Spectral_Lantern_item.png",
        
                ),
              array("title" => "Frozen Mallet",
                    "pic" => "assets/images/item_pics/Frozen_Mallet_item.png",
        
                ),
              array("title" => "Frozen Heart",
                    "pic" => "assets/images/item_pics/Frozen_Heart_item.png",
        
                ),
              array("title" => "Executioner's Calling",
                    "pic" => "assets/images/item_pics/Executioner's_Calling_item.png",
        
                ),
              array("title" => "Entropy",
                    "pic" => "assets/images/item_pics/Entropy_item.png",
        
                ),
              array("title" => "Eleisa's Miracle",
                    "pic" => "assets/images/item_pics/Eleisa's_Miracle_item.png",
        
                ),
              array("title" => "Deathfire Grasp",
                    "pic" => "assets/images/item_pics/Deathfire_Grasp_item.png",
        
                ),
              array("title" => "Blackfire Torch",
                    "pic" => "assets/images/item_pics/Blackfire_Torch_item.png",
        
                ),
              array("title" => "Bilgewater Cutlass",
                    "pic" => "assets/images/item_pics/Bilgewater_Cutlass_item.png",
        
                ),
              array("title" => "Banshee's Veil",
                    "pic" => "assets/images/item_pics/Banshee's_Veil_item.png",
        
                ),

              // Mythical Items

              array("title" => "The Lightbringer",
                    "pic" => "assets/images/item_pics/The_Lightbringer_item.png",
        
                ),
              array("title" => "Seraph's Embrace",
                    "pic" => "assets/images/item_pics/Seraph's_Embrace_item.png",
        
                ),
              array("title" => "Runic Bulwark",
                    "pic" => "assets/images/item_pics/Runic_Bulwark_item.png",
        
                ),
              array("title" => "Muramana",
                    "pic" => "assets/images/item_pics/Muramana_item.png",
        
                ),
              array("title" => "Hextech Gunblade",
                    "pic" => "assets/images/item_pics/Hextech_Gunblade_item.png",
        
                ),
              array("title" => "Blade of the Ruined King",
                    "pic" => "assets/images/item_pics/Blade_of_the_Ruined_King_item.png",
        
                )
);

$sort = array();
foreach($items as $k=>$v) {
    $sort['title'][$k] = $v['title'];
    //$sort['url'][$k] = $v['event_type'];
}
# sort by title asc
array_multisort($sort['title'], SORT_ASC, $items);
?>

<div class="container">
  <div class="row-fluid">
    <div class="span8">
      <div class="pin-web">
        <h4 class="title">Items</h4> 
        <p class="info">
          <img src="assets/images/website_sources/lol.png" height="18px" width="18px">
          League of Legends
        </p>
        <br/>
        <?php
        for ($row=0; $row < count($items); $row++) //prints the array elements
          echo '
          <div class="item_holder">
            <a href="#">
              <img class="rounded_pics" src="'.$items[$row]["pic"].'">
            </a>
            <h6 class="item_name"><a href="#">'.$items[$row]["title"].'</a></h6>
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