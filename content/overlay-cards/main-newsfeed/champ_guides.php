<?php 
include($_SERVER['DOCUMENT_ROOT'].'/GH-client/assets/inc/incfiles/client-header.inc.php'); 

$champions = array(
    array("name" => "Aatrox",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=aatrox",
        "pic" => "assets/images/champion_thumbnails/aatrox.png"
    ),
    array("name" => "Ahri",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=ahri",
        "pic" => "assets/images/champion_thumbnails/ahri.png"
    ),
    array("name" => "Akali",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=akali",
        "pic" => "assets/images/champion_thumbnails/akali.png"
    ),
    array("name" => "Alistar",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=alistar",
        "pic" => "assets/images/champion_thumbnails/alistar.png"
    ),
    array("name" => "Amumu",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=amumu",
        "pic" => "assets/images/champion_thumbnails/amumu.png"
    ),
    array("name" => "Anivia",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=anivia",
        "pic" => "assets/images/champion_thumbnails/anivia.png"
    ),
    array("name" => "Annie",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=annie",
        "pic" => "assets/images/champion_thumbnails/annie.png"
    ),
    array("name" => "Ashe",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=ashe",
        "pic" => "assets/images/champion_thumbnails/ashe.png"
    ),
    array("name" => "Blitzcrank",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=blitzcrank",
        "pic" => "assets/images/champion_thumbnails/blitzcrank.png"
    ),
    array("name" => "Brand",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=brand",
        "pic" => "assets/images/champion_thumbnails/brand.png"
    ),
    array("name" => "Caitlyn",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=caitlyn",
        "pic" => "assets/images/champion_thumbnails/caitlyn.png"
    ),              
    array("name" => "Cassiopeia",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=cassiopeia",
        "pic" => "assets/images/champion_thumbnails/cassiopeia.png"
    ),                            
    array("name" => "Cho'Gath",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=chogath",
        "pic" => "assets/images/champion_thumbnails/chogath.png"
    ),             
    array("name" => "Corki",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=corki",
        "pic" => "assets/images/champion_thumbnails/corki.png"
    ),                                     
    array("name" => "Darius",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=darius",
        "pic" => "assets/images/champion_thumbnails/darius.png"
    ),
    array("name" => "Diana",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=diana",
        "pic" => "assets/images/champion_thumbnails/diana.png"
    ),
    array("name" => "Draven",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=draven",
        "pic" => "assets/images/champion_thumbnails/draven.png"
    ),
    array("name" => "Dr. Mundo",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=drmundo",
        "pic" => "assets/images/champion_thumbnails/drmundo.png"
    ),
    array("name" => "Elise",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=elise",
        "pic" => "assets/images/champion_thumbnails/elise.png"
    ),
    array("name" => "Evelynn",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=evelynn",
        "pic" => "assets/images/champion_thumbnails/evelynn.png"
    ),
    array("name" => "Ezreal",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=ezreal",
        "pic" => "assets/images/champion_thumbnails/ezreal.png"
    ),
    array("name" => "Fiora",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=fiora",
        "pic" => "assets/images/champion_thumbnails/fiora.png"
    ),
    array("name" => "Fiddle Sticks",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=fiddleSticks",
        "pic" => "assets/images/champion_thumbnails/fiddleSticks.png"
    ),
    array("name" => "Fizz",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=fizz",
        "pic" => "assets/images/champion_thumbnails/fizz.png"
    ),
    array("name" => "Galio",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=galio",
        "pic" => "assets/images/champion_thumbnails/galio.png"
    ),
    array("name" => "Gangplank",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=gangplank",
        "pic" => "assets/images/champion_thumbnails/gangplank.png"
    ),
    array("name" => "Garen",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=garen",
        "pic" => "assets/images/champion_thumbnails/garen.png"
    ),
    array("name" => "Gragas",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=gragas",
        "pic" => "assets/images/champion_thumbnails/gragas.png"
    ),
    array("name" => "Graves",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=graves",
        "pic" => "assets/images/champion_thumbnails/graves.png"
    ),
    array("name" => "Hecarim",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=hecarim",
        "pic" => "assets/images/champion_thumbnails/hecarim.png"
    ),
    array("name" => "Heimerdinger",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=heimerdinger",
        "pic" => "assets/images/champion_thumbnails/heimerdinger.png"
    ),
    array("name" => "Irelia",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=irelia",
        "pic" => "assets/images/champion_thumbnails/irelia.png"
    ),
    array("name" => "Janna",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=janna",
        "pic" => "assets/images/champion_thumbnails/janna.png"
    ),
    array("name" => "Jarvan IV",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=jarvaniv",
        "pic" => "assets/images/champion_thumbnails/jarvanIV.png"
    ),
    array("name" => "Jax",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=jax",
        "pic" => "assets/images/champion_thumbnails/jax.png"
    ),
    array("name" => "Jayce",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=jayce",
        "pic" => "assets/images/champion_thumbnails/jayce.png"
    ),
    array("name" => "Jinx",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=jinx",
        "pic" => "assets/images/champion_thumbnails/jinx.png"
    ),
    array("name" => "Karma",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=karma",
        "pic" => "assets/images/champion_thumbnails/karma.png"
    ),
    array("name" => "Karthus",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=karthus",
        "pic" => "assets/images/champion_thumbnails/karthus.png"
    ),
    array("name" => "Kassadin",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=kassadin",
        "pic" => "assets/images/champion_thumbnails/kassadin.png"
    ),
    array("name" => "Katarina",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=katarina",
        "pic" => "assets/images/champion_thumbnails/katarina.png"
    ),
    array("name" => "Kayle",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=kayle",
        "pic" => "assets/images/champion_thumbnails/kayle.png"
    ),
    array("name" => "Kennen",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=kennen",
        "pic" => "assets/images/champion_thumbnails/kennen.png"
    ),
    array("name" => "Khazix",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=khazix",
        "pic" => "assets/images/champion_thumbnails/khazix.png"
    ),
    array("name" => "Kog'Maw",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=kogmaw",
        "pic" => "assets/images/champion_thumbnails/kogmaw.png"
    ),
    array("name" => "Leblanc",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=leblanc",
        "pic" => "assets/images/champion_thumbnails/leblanc.png"
    ),
    array("name" => "Lee Sin",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=leeSin",
        "pic" => "assets/images/champion_thumbnails/leeSin.png"
    ),
    array("name" => "Leona",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=leona",
        "pic" => "assets/images/champion_thumbnails/leona.png"
    ),
    array("name" => "Lissandra",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=lissandra",
        "pic" => "assets/images/champion_thumbnails/lissandra.png"
    ),
    array("name" => "Lucian",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=lucian",
        "pic" => "assets/images/champion_thumbnails/lucian.png"
    ),
    array("name" => "Lulu",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=lulu",
        "pic" => "assets/images/champion_thumbnails/lulu.png"
    ),
    array("name" => "Lux",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=lux",
        "pic" => "assets/images/champion_thumbnails/lux.png"
    ),
    array("name" => "Malphite",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=malphite",
        "pic" => "assets/images/champion_thumbnails/malphite.png"
    ),
    array("name" => "Malzahar",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=malzahar",
        "pic" => "assets/images/champion_thumbnails/malzahar.png"
    ),
    array("name" => "Maokai",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=maokai",
        "pic" => "assets/images/champion_thumbnails/maokai.png"
    ),
    array("name" => "Master Yi",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=masterYi",
        "pic" => "assets/images/champion_thumbnails/masterYi.png"
    ),
    array("name" => "Miss Fortune",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=missFortune",
        "pic" => "assets/images/champion_thumbnails/missFortune.png"
    ),
    array("name" => "Wukong",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=wukong",
        "pic" => "assets/images/champion_thumbnails/wukong.png"
    ),
    array("name" => "Mordekaiser",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=mordekaiser",
        "pic" => "assets/images/champion_thumbnails/mordekaiser.png"
    ),
    array("name" => "Morgana",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=morgana",
        "pic" => "assets/images/champion_thumbnails/morgana.png"
    ),
    array("name" => "Nami",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=nami",
        "pic" => "assets/images/champion_thumbnails/nami.png"
    ),
    array("name" => "Nasus",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=nasus",
        "pic" => "assets/images/champion_thumbnails/nasus.png"
    ),
    array("name" => "Nautilus",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=nautilus",
        "pic" => "assets/images/champion_thumbnails/nautilus.png"
    ),
    array("name" => "Nidalee",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=nidalee",
        "pic" => "assets/images/champion_thumbnails/nidalee.png"
    ),
    array("name" => "Nocturne",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=nocturne",
        "pic" => "assets/images/champion_thumbnails/nocturne.png"
    ),
    array("name" => "Nunu",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=nunu",
        "pic" => "assets/images/champion_thumbnails/nunu.png"
    ),
    array("name" => "Olaf",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=olaf",
        "pic" => "assets/images/champion_thumbnails/olaf.png"
    ),
    array("name" => "Orianna",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=orianna",
        "pic" => "assets/images/champion_thumbnails/orianna.png"
    ),
    array("name" => "Pantheon",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=pantheon",
        "pic" => "assets/images/champion_thumbnails/pantheon.png"
    ),
    array("name" => "Poppy",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=poppy",
        "pic" => "assets/images/champion_thumbnails/poppy.png"
    ),
    array("name" => "Quinn",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=quinn",
        "pic" => "assets/images/champion_thumbnails/quinn.png"
    ),
    array("name" => "Rammus",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=rammus",
        "pic" => "assets/images/champion_thumbnails/rammus.png"
    ),
    array("name" => "Renekton",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=renekton",
        "pic" => "assets/images/champion_thumbnails/renekton.png"
    ),
    array("name" => "Rengar",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=rengar",
        "pic" => "assets/images/champion_thumbnails/rengar.png"
    ),
    array("name" => "Riven",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=riven",
        "pic" => "assets/images/champion_thumbnails/riven.png"
    ),
    array("name" => "Rumble",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=rumble",
        "pic" => "assets/images/champion_thumbnails/rumble.png"
    ),
    array("name" => "Ryze",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=ryze",
        "pic" => "assets/images/champion_thumbnails/ryze.png"
    ),
    array("name" => "Sejuani",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=sejuani",
        "pic" => "assets/images/champion_thumbnails/sejuani.png"
    ),
    array("name" => "Shaco",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=shaco",
        "pic" => "assets/images/champion_thumbnails/shaco.png"
    ),
    array("name" => "Shen",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=shen",
        "pic" => "assets/images/champion_thumbnails/shen.png"
    ),
    array("name" => "Shyvana",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=shyvana",
        "pic" => "assets/images/champion_thumbnails/shyvana.png"
    ),
    array("name" => "Singed",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=singed",
        "pic" => "assets/images/champion_thumbnails/singed.png"
    ),
    array("name" => "Sion",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=sion",
        "pic" => "assets/images/champion_thumbnails/sion.png"
    ),
    array("name" => "Sivir",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=sivir",
        "pic" => "assets/images/champion_thumbnails/sivir.png"
    ),
    array("name" => "Skarner",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=skarner",
        "pic" => "assets/images/champion_thumbnails/skarner.png"
    ),
    array("name" => "Sona",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=sona",
        "pic" => "assets/images/champion_thumbnails/sona.png"
    ),
    array("name" => "Soraka",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=soraka",
        "pic" => "assets/images/champion_thumbnails/soraka.png"
    ),
    array("name" => "Swain",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=swain",
        "pic" => "assets/images/champion_thumbnails/swain.png"
    ),
    array("name" => "Syndra",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=syndra",
        "pic" => "assets/images/champion_thumbnails/syndra.png"
    ),
    array("name" => "Talon",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=talon",
        "pic" => "assets/images/champion_thumbnails/talon.png"
    ),
    array("name" => "Taric",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=taric",
        "pic" => "assets/images/champion_thumbnails/taric.png"
    ),
    array("name" => "Teemo",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=teemo",
        "pic" => "assets/images/champion_thumbnails/teemo.png"
    ),
    array("name" => "Thresh",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=thresh",
        "pic" => "assets/images/champion_thumbnails/thresh.png"
    ),
    array("name" => "Tristana",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=tristana",
        "pic" => "assets/images/champion_thumbnails/tristana.png"
    ),
    array("name" => "Trundle",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=trundle",
        "pic" => "assets/images/champion_thumbnails/trundle.png"
    ),
    array("name" => "Tryndamere",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=tryndamere",
        "pic" => "assets/images/champion_thumbnails/tryndamere.png"
    ),
    array("name" => "Twisted Fate",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=twistedfate",
        "pic" => "assets/images/champion_thumbnails/twistedFate.png"
    ),
    array("name" => "Twitch",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=twitch",
        "pic" => "assets/images/champion_thumbnails/twitch.png"
    ),
    array("name" => "Udyr",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=udyr",
        "pic" => "assets/images/champion_thumbnails/udyr.png"
    ),
    array("name" => "Urgot",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=urgot",
        "pic" => "assets/images/champion_thumbnails/urgot.png"
    ),
    array("name" => "Varus",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=varus",
        "pic" => "assets/images/champion_thumbnails/varus.png"
    ),
    array("name" => "Vayne",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=vayne",
        "pic" => "assets/images/champion_thumbnails/vayne.png"
    ),
    array("name" => "Veigar",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=veigar",
        "pic" => "assets/images/champion_thumbnails/veigar.png"
    ),
    array("name" => "Vi",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=vi",
        "pic" => "assets/images/champion_thumbnails/vi.png"
    ),
    array("name" => "Viktor",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=viktor",
        "pic" => "assets/images/champion_thumbnails/viktor.png"
    ),
    array("name" => "Vladimir",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=vladimir",
        "pic" => "assets/images/champion_thumbnails/vladimir.png"
    ),
    array("name" => "Volibear",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=volibear",
        "pic" => "assets/images/champion_thumbnails/volibear.png"
    ),
    array("name" => "Warwick",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=warwick",
        "pic" => "assets/images/champion_thumbnails/warwick.png"
    ),
    array("name" => "Xerath",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=xerath",
        "pic" => "assets/images/champion_thumbnails/xerath.png"
    ),
    array("name" => "Xin Zhao",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=xinzhao",
        "pic" => "assets/images/champion_thumbnails/xinZhao.png"
    ),
    array("name" => "Yasuo",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=yasuo",
        "pic" => "assets/images/champion_thumbnails/yasuo.png"
    ),
    array("name" => "Yorick",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=yorick",
        "pic" => "assets/images/champion_thumbnails/yorick.png"
    ),
    array("name" => "Zac",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=zac",
        "pic" => "assets/images/champion_thumbnails/zac.png"
    ),
    array("name" => "Zed",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=zed",
        "pic" => "assets/images/champion_thumbnails/zed.png"
    ),
    array("name" => "Ziggs",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=ziggs",
        "pic" => "assets/images/champion_thumbnails/ziggs.png"
    ),
    array("name" => "Zilean",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=zilean",
        "pic" => "assets/images/champion_thumbnails/zilean.png"
    ),
    array("name" => "Zyra",
        "link" => "content/overlay-cards/main-newsfeed/champ_guides_popup.php?search=zyra",
        "pic" => "assets/images/champion_thumbnails/zyra.png"
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
          <a target="_blank" href="<?php echo $champions[$row]["link"]; ?>">
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
