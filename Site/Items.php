<?php
	$server = "localhost";
	$username = "S0245819";
	$password = "Nguyen1992";
	$database = "S0245819";

	$db = new mysqli($server,$username,$password,$database);
	if ($db -> connect_error) die ("Connection Failed");
	//echo "Connected ";
?>

<!DOCTYPE HTML>
<HTML>
	<HEAD> 
		<TITLE> League of Climbs </TITLE>
		<link href="Style.css" rel="stylesheet" type="text/css" />
	</HEAD>

	<BODY>

	<header>
	<H1> Welcome to The League of Climbs </H1>
  	</header>
    
	<ul>
		<li><a href="index.php">Home Page</a></li>
   		<li><a href="Champions.php">Champions</a></li>
		<li><a href="Players.php">Players</a></li>
		<li><a href="Items.php">Items</a></li>
		
	</ul>


<div>	
	<form action="ItemsResults.php" method="GET">
	
	<p>Select an Item: </p>

		<button class="button button1" name="ItemName" type="submit" value="3001"><img src = "Abyssal_Scepter.png" width = "120" height = "120" /><BR>Abyssal Scepter</button>
		<button class="button button1" name="ItemName" type="submit" value="3105"><img src = "Aegis_of_the_Legion.png" width = "120" height = "120" /><BR>Aegis of the Legion</button>
		<button class="button button1" name="ItemName" type="submit" value="3113"><img src = "Aether_Wisp.png" width = "120" height = "120" /><BR>Aether Wisp</button>
		<button class="button button1" name="ItemName" type="submit" value="1052"><img src = "Amplifying_Tome.png" width = "120" height = "120" /><BR>Amplifying Tome</button>
		<button class="button button1" name="ItemName" type="submit" value="3301"><img src = "Ancient_Coin.png" width = "120" height = "120" /><BR>	Ancient Coin</button>
		<button class="button button1" name="ItemName" type="submit" value="3348"><img src = "arcane-sweeper.gif" width = "120" height = "120" /><BR>Arcane Sweeper</button>  
<br><br><button class="button button1" name="ItemName" type="submit" value="3003"><img src = "Archangel's_Staff.png" width = "120" height = "120" /><BR>Archangel's Staff</button>
		<button class="button button1" name="ItemName" type="submit" value="3504"><img src = "Ardent_Censer.png" width = "120" height = "120" /><BR>Ardent Censer</button>
		<button class="button button1" name="ItemName" type="submit" value="3174"><img src = "Athene's_Unholy_Grail.png" width = "120" height = "120" /><BR>	Athene's Unholy Grail</button>
		<button class="button button1" name="ItemName" type="submit" value="1038"><img src = "B._F._Sword.png" width = "120" height = "120" /><BR>B. F. Sword</button>
		<button class="button button1" name="ItemName" type="submit" value="3751"><img src = "Bami's_Cinder.png" width = "120" height = "120" /><BR>Bami's Cinder</button>
		<button class="button button1" name="ItemName" type="submit" value="3060"><img src = "Banner_of_Command.png" width = "120" height = "120" /><BR>Banner of Command</button>
		<button class="button button1" name="ItemName" type="submit" value="3102"><img src = "Banshee's_Veil.png" width = "120" height = "120" /><BR>Banshee's Veil</button>
		<button class="button button1" name="ItemName" type="submit" value="3006"><img src = "Berserker's_Greaves.png" width = "120" height = "120" /><BR>Berserker's Greaves</button>
		<button class="button button1" name="ItemName" type="submit" value="3144"><img src = "Bilgewater_Cutlass.png" width = "120" height = "120" /><BR>Bilgewater Cutlass</button>
		<button class="button button1" name="ItemName" type="sumbit" value="3153"><img src = "Blade_of_the_Ruined_King.png" width = "120" height = "120" /><BR>Blade of the Ruined King</button>
		<button class="button button1" name="ItemName" type="submit" value="1026"><img src = "Blasting_Wand.png" width = "120" height = "120" /><BR>Blasting Wand</button>
		<button class="button button1" name="ItemName" type="submit" value="3117"><img src = "Boots_of_Mobility.png" width = "120" height = "120" /><BR>Boots of Mobility</button>
		<button class="button button1" name="ItemName" type="submit" value="1001"><img src = "Boots_of_Speed.png" width = "120" height = "120" /><BR>Boots of Speed</button>
		<button class="button button1" name="ItemName" type="submit" value="3009"><img src = "Boots_of_Swiftness.png" width = "120" height = "120" /><BR>Boots of Swiftness</button>
		<button class="button button1" name="ItemName" type="submit" value="1051"><img src = "Brawler's_Gloves.png" width = "120" height = "120" /><BR>Brawler's Gloves</button>
		<button class="button button1" name="ItemName" type="submit" value="3010"><img src = "Catalyst_of_Aeons.png" width = "120" height = "120" /><BR>Catalyst of Aeons</button>
		<button class="button button1" name="ItemName" type="submit" value="3133"><img src = "Caulfield's_Warhammer_item.png" width = "120" height = "120" /><BR>Caulfield's Warhammer</button>
		<button class="button button1" name="ItemName" type="submit" value="1031"><img src = "Chain_Vest_item.png" width = "120" height = "120" /><BR>Chain Vest</button>
		<button class="button button1" name="ItemName" type="submit" value="3028"><img src = "Chalice_of_Harmony_item.png" width = "120" height = "120" /><BR>Chalice of Harmony</button>
		<button class="button button1" name="ItemName" type="submit" value="1018"><img src = "Cloak_of_Agility_item.png" width = "120" height = "120" /><BR>Cloak of Agility</button>
		<button class="button button1" name="ItemName" type="submit" value="1029"><img src = "Cloth_Armor_item.png" width = "120" height = "120" /><BR>Cloth Armor</button>
		<button class="button button1" name="ItemName" type="submit" value="2055"><img src = "Control_Ward_item.jpg" width = "120" height = "120" /><BR>Control Ward</button>
		<button class="button button1" name="ItemName" type="submit" value="2033"><img src = "Corrupting_Potion_item.png" width = "120" height = "120" /><BR>Corrupting Potion</button>
		<button class="button button1" name="ItemName" type="sumbit" value="3801"><img src = "Crystalline_Bracer_item.png" width = "120" height = "120" /><BR>Crystalline Bracer</button>
		<button class="button button1" name="ItemName" type="submit" value="1083"><img src = "Cull_item.png" width = "120" height = "120" /><BR>Cull</button>
		<button class="button button1" name="ItemName" type="sumbit" value="1042"><img src = "Dagger_item.png" width = "120" height = "120" /><BR>	Dagger</button>
		<button class="button button1" name="ItemName" type="submit" value="3742"><img src = "Dead_Man's_Plate_item.png" width = "120" height = "120" /><BR>Dead Man's Plate</button>
		<button class="button button1" name="ItemName" type="submit" value="3812"><img src = "Death's_Dance_item.png" width = "120" height = "120" /><BR>Death's Dance</button> 
		<button class="button button1" name="ItemName" type="submit" value="3137"><img src = "Dervish_Blade_item.png" width = "120" height = "120" /><BR>Dervish Blade</button> 
		<button class="button button1" name="ItemName" type="submit" value="1055"><img src = "Doran's_Blade_item.png" width = "120" height = "120" /><BR>Doran's Blade</button>
		<button class="button button1" name="ItemName" type="submit" value="1056"><img src = "Doran's_Ring_item.png" width = "120" height = "120" /><BR>Doran's Ring</button>
		<button class="button button1" name="ItemName" type="submit" value="1054"><img src = "Doran's_Shield_item.png" width = "120" height = "120" /><BR>Doran's Shield</button>
		<button class="button button1" name="ItemName" type="submit" value="3147"><img src = "Duskblade_of_Draktharr_item.png" width = "120" height = "120" /><BR>Duskblade of Draktharr</button>
		<button class="button button1" name="ItemName" type="submit" value="3814"><img src = "Edge_of_Night_item.png" width = "120" height = "120" /><BR>Edge of Night</button>
		<button class="button button1" name="ItemName" type="submit" value="2138"><img src = "Elixir_of_Iron_item.png" width = "120" height = "120" /><BR>Elixir of Iron</button>
		<button class="button button1" name="ItemName" type="submit" value="2139"><img src = "Elixir_of_Sorcery_item.png" width = "120" height = "120" /><BR>Elixir of Sorcery</button>
		<button class="button button1" name="ItemName" type="submit" value="2140"><img src = "Elixir_of_Wrath_item.png" width = "120" height = "120" /><BR>Elixir of Wrath</button>
		<button class="button button1" name="ItemName" type="submit" value="3508"><img src = "Essence_Reaver_item.png" width = "120" height = "120" /><BR>Essence Reaver</button>
		<button class="button button1" name="ItemName" type="submit" value="3123"><img src = "Executioner's_Calling_item.png" width = "120" height = "120" /><BR>Executioner's Calling</button>
		<button class="button button1" name="ItemName" type="submit" value="2303"><img src = "Eye_of_the_Equinox_item.png" width = "120" height = "120" /><BR>Eye of the Equinox</button>
		<button class="button button1" name="ItemName" type="sumbit" value="2302"><img src = "Eye_of_the_Oasis_item.png" width = "120" height = "120" /><BR>Eye of the Oasis</button>
		<button class="button button1" name="ItemName" type="submit" value="2301"><img src = "Eye_of_the_Watchers_item.png" width = "120" height = "120" /><BR>Eye of the Watchers</button>
		<button class="button button1" name="ItemName" type="submit" value="3401"><img src = "Face_of_the_Mountain_item.png" width = "120" height = "120" /><BR>Face of the Mountain</button>
		<button class="button button1" name="ItemName" type="sumbit" value="1004"><img src = "Faerie_Charm_item.png" width = "120" height = "120" /><BR>Faerie Charm</button>
		<button class="button button1" name="ItemName" type="submit" value="3363"><img src = "Farsight_Alteration_item.png" width = "120" height = "120" /><BR>Farsight Alteration</button>
		<button class="button button1" name="ItemName" type="submit" value="3108"><img src = "Fiendish_Codex_item.png" width = "120" height = "120" /><BR>Fiendish Codex</button>
		<button class="button button1" name="ItemName" type="submit" value="3114"><img src = "Forbidden_Idol_item.png" width = "120" height = "120" /><BR>Forbidden Idol</button>
		<button class="button button1" name="ItemName" type="submit" value="3092"><img src = "Frost_Queen's_Claim_item.png" width = "120" height = "120" /><BR>Frost Queen's Claim</button>
		<button class="button button1" name="ItemName" type="submit" value="3098"><img src = "Frostfang_item.jpg" width = "120" height = "120" /><BR>Frostfang</button>
		<button class="button button1" name="ItemName" type="submit" value="3110"><img src = "Frozen_Heart_item.png" width = "120" height = "120" /><BR>Frozen Heart</button>
		<button class="button button1" name="ItemName" type="submit" value="3022"><img src = "Frozen_Mallet_item.png" width = "120" height = "120" /><BR>Frozen Mallet</button>
		<button class="button button1" name="ItemName" type="submit" value="3034"><img src = "Giant_Slayer_item.png" width = "120" height = "120" /><BR>Giant Slayer</button>
		<button class="button button1" name="ItemName" type="submit" value="1011"><img src = "Giant's_Belt_item.png" width = "120" height = "120" /><BR>Giant's Belt</button>
		<button class="button button1" name="ItemName" type="submit" value="3024"><img src = "Glacial_Shroud_item.png" width = "120" height = "120" /><BR>Glacial Shroud</button>
		<button class="button button1" name="ItemName" type="submit" value="3361"><img src = "Greater_Stealth_Totem_item.png" width = "120" height = "120" /><BR>Greater Stealth Totem </button>	
		<button class="button button1" name="ItemName" type="sumbit" value="3362"><img src = "Greater_Vision_Totem_item.png" width = "120" height = "120" /><BR>Greater Vision Totem</button>
		<button class="button button1" name="ItemName" type="sumbit" value="3026"><img src = "Guardian_Angel_item.png" width = "120" height = "120" /><BR>Guardian Angel</button>
		<button class="button button1" name="ItemName" type="submit" value="3184"><img src = "Guardian's_Hammer_item.png" width = "120" height = "120" /><BR>Guardian's Hammer</button>
		<button class="button button1" name="ItemName" type="submit" value="2051"><img src = "Guardian's_Horn_item.png" width = "120" height = "120" /><BR>Guardian's Horn</button>
		<button class="button button1" name="ItemName" type="submit" value="3124"><img src = "Guinsoo's_Rageblade_item.png" width = "120" height = "120" /><BR>Guinsoo's Rageblade</button>
		<button class="button button1" name="ItemName" type="submit" value="3136"><img src = "Haunting_Guise_item.png" width = "120" height = "120" /><BR>Haunting Guise</button>
		<button class="button button1" name="ItemName" type="submit" value="2003"><img src = "Health_Potion_item.png" width = "120" height = "120" /><BR>Health Potion</button>
		<button class="button button1" name="ItemName" type="submit" value="3155"><img src = "Hexdrinker_item.png" width = "120" height = "120" /><BR>Hexdrinker</button>
		<button class="button button1" name="ItemName" type="submit" value="3030"><img src = "Hextech_GLP-800_item.png" width = "120" height = "120" /><BR>Hextech GLP-800</button>
		<button class="button button1" name="ItemName" type="submit" value="3146"><img src = "Hextech_Gunblade_item.png" width = "120" height = "120" /><BR>Hextech Gunblade</button>
		<button class="button button1" name="ItemName" type="submit" value="3152"><img src = "Hextech_Protobelt-01_item.png" width = "120" height = "120" /><BR>Hextech Protobelt-01</button>
		<button class="button button1" name="ItemName" type="sumbit" value="3145"><img src = "Hextech_Revolver_item.png" width = "120" height = "120" /><BR>Hextech Revolver</button>
		<button class="button button1" name="ItemName" type="submit" value="1041"><img src = "Hunter's_Machete_item.png" width = "120" height = "120" /><BR>Hunter's Machete</button>
		<button class="button button1" name="ItemName" type="submit" value="2032"><img src = "Hunter's_Potion_item.png" width = "120" height = "120" /><BR>Hunter's Potion</button>
		<button class="button button1" name="ItemName" type="submit" value="1039"><img src = "Hunter's_Talisman_item.png" width = "120" height = "120" /><BR>Hunter's Talisman</button>
		<button class="button button1" name="ItemName" type="submit" value="3025"><img src = "Iceborn_Gauntlet_item.png" width = "120" height = "120" /><BR>Iceborn Gauntlet</button>
		<button class="button button1" name="ItemName" type="submit" value="3031"><img src = "Infinity_Edge_item.png" width = "120" height = "120" /><BR>Infinity Edge</button>
		<button class="button button1" name="ItemName" type="submit" value="3158"><img src = "Ionian_Boots_of_Lucidity_item.png" width = "120" height = "120" /><BR>Ionian Boots of Lucidity</button>
		<button class="button button1" name="ItemName" type="sumbit" value="3052"><img src = "Jaurim's_Fist_item.png" width = "120" height = "120" /><BR>Jaurim's Fist</button>
		<button class="button button1" name="ItemName" type="sumbit" value="3067"><img src = "Kindlegem_item.png" width = "120" height = "120" /><BR>Kindlegem</button>
		<button class="button button1" name="ItemName" type="submit" value="2015"><img src = "Kircheis_Shard_item.png" width = "120" height = "120" /><BR>Kircheis Shard</button>
		<button class="button button1" name="ItemName" type="submit" value="3109"><img src = "Knight's_Vow_item.png" width = "120" height = "120" /><BR>Knight's Vow</button>
		<button class="button button1" name="ItemName" type="submit" value="3035"><img src = "Last_Whisper_item.png" width = "120" height = "120" /><BR>Last Whisper</button>
		<button class="button button1" name="ItemName" type="submit" value="3151"><img src = "Liandry's_Torment_item.png" width = "120" height = "120" /><BR>Liandry's Torment</button>
		<button class="button button1" name="ItemName" type="submit" value="3100"><img src = "Lich_Bane_item.png" width = "120" height = "120" /><BR>Lich Bane</button>
		<button class="button button1" name="ItemName" type="submit" value="3190"><img src = "Locket_of_the_Iron_Solari_item.png" width = "120" height = "120" /><BR>Locket of the Iron Solari</button>
		<button class="button button1" name="ItemName" type="submit" value="1036"><img src = "Long_Sword_item.png" width = "120" height = "120" /><BR>Long Sword</button>
		<button class="button button1" name="ItemName" type="submit" value="3036"><img src = "Lord_Dominik's_Regards_item.png" width = "120" height = "120" /><BR>Lord Dominik's Regards</button>
		<button class="button button1" name="ItemName" type="submit" value="3104"><img src = "Lord_Van_Damm's_Pillager_item.png" width = "120" height = "120" /><BR>Lord Van Damm's Pillager</button>
		<button class="button button1" name="ItemName" type="submit" value="3802"><img src = "Lost_Chapter_item.png" width = "120" height = "120" /><BR>Lost Chapter</button>
		<button class="button button1" name="ItemName" type="submit" value="3285"><img src = "Luden's_Echo_item.png" width = "120" height = "120" /><BR>Luden's Echo</button>
		<button class="button button1" name="ItemName" type="submit" value="3004"><img src = "Manamune_item.png" width = "120" height = "120" /><BR>Manamune</button>
		<button class="button button1" name="ItemName" type="submit" value="3156"><img src = "Maw_of_Malmortius_item.png" width = "120" height = "120" /><BR>Maw of Malmortius</button>	
		<button class="button button1" name="ItemName" type="submit" value="3041"><img src = "Mejai's_Soulstealer_item.png" width = "120" height = "120" /><BR>Mejai's Soulstealer</button>
		<button class="button button1" name="ItemName" type="sumbit" value="3222"><img src = "Mercurial_Scimitar_item.png" width = "120" height = "120" /><BR>Mercurial Scimitar</button> 
		<button class="button button1" name="ItemName" type="submit" value="3111"><img src = "Mercury's_Treads_item.png" width = "120" height = "120" /><BR>Mercury's Treads</button>
		<button class="button button1" name="ItemName" type="submit" value="3222"><img src = "Mikael's_Crucible_item.png" width = "120" height = "120" /><BR>Mikael's Crucible</button>
		<button class="button button1" name="ItemName" type="submit" value="3170"><img src = "Moonflair_Spellblade_item.png" width = "120" height = "120" /><BR>Moonflair Spellblade</button>
		<button class="button button1" name="ItemName" type="submit" value="3165"><img src = "Morellonomicon_item.png" width = "120" height = "120" /><BR>Morellonomicon</button>
		<button class="button button1" name="ItemName" type="submit" value="3033"><img src = "Mortal_Reminder_item.png" width = "120" height = "120" /><BR>Mortal Reminder</button>
		<button class="button button1" name="ItemName" type="submit" value="3042"><img src = "Muramana_item.png" width = "120" height = "120" /><BR>Muramana</button>
		<button class="button button1" name="ItemName" type="submit" value="3115"><img src = "Nashor's_Tooth_item.png" width = "120" height = "120" /><BR>Nashor's Tooth</button>
		<button class="button button1" name="ItemName" type="submit" value="1058"><img src = "Needlessly_Large_Rod_item.png" width = "120" height = "120" /><BR>Needlessly Large Rod</button>
		<button class="button button1" name="ItemName" type="submit" value="1057"><img src = "Negatron_Cloak_item.png" width = "120" height = "120" /><BR>Negatron Cloak</button>
		<button class="button button1" name="ItemName" type="submit" value="3047"><img src = "Ninja_Tabi_item.png" width = "120" height = "120" /><BR>Ninja Tabi</button>
		<button class="button button1" name="ItemName" type="submit" value="3096"><img src = "Nomad's_Medallion_item.png" width = "120" height = "120" /><BR>Nomad's Medallion</button>
		<button class="button button1" name="ItemName" type="submit" value="1033"><img src = "Null-Magic_Mantle_item.png" width = "120" height = "120" /><BR>Null-Magic Mantle</button>
		<button class="button button1" name="ItemName" type="submit" value="3056"><img src = "Ohmwrecker_item.png" width = "120" height = "120" /><BR>Ohmwrecker</button>
		<button class="button button1" name="ItemName" type="sumbit" value="3364"><img src = "Oracle_Alteration_item.png" width = "120" height = "120" /><BR>Oracle Alteration</button>
		<button class="button button1" name="ItemName" type="submit" value="2047"><img src = "Oracle's_Extract_item.png" width = "120" height = "120" /><BR>Oracle's Extract</button>
		<button class="button button1" name="ItemName" type="submit" value="3198"><img src = "Perfect_Hex_Core_item.png" width = "120" height = "120" /><BR>Perfect Hex Core</button>
		<button class="button button1" name="ItemName" type="submit" value="3044"><img src = "Phage_item.png" width = "120" height = "120" /><BR>Phage</button>
		<button class="button button1" name="ItemName" type="submit" value="3046"><img src = "Phantom_Dancer_item.png" width = "120" height = "120" /><BR>Phantom Dancer</button>	
		<button class="button button1" name="ItemName" type="submit" value="1037"><img src = "Pickaxe_item.png" width = "120" height = "120" /><BR>Pickaxe</button>
		<button class="button button1" name="ItemName" type="submit" value="3252"><img src = "Poacher's_Dirk_item.png" width = "120" height = "120" /><BR>Poacher's Dirk</button>
		<button class="button button1" name="ItemName" type="submit" value="3200"><img src = "Prototype_Hex_Core_item.png" width = "120" height = "120" /><BR>Prototype Hex Core</button>
		<button class="button button1" name="ItemName" type="submit" value="3140"><img src = "Quicksilver_Sash_item.png" width = "120" height = "120" /><BR>Quicksilver Sash</button> 
		<button class="button button1" name="ItemName" type="submit" value="3089"><img src = "Rabadon's_Deathcap_item.png" width = "120" height = "120" /><BR>Rabadon's Deathcap</button>
		<button class="button button1" name="ItemName" type="submit" value="3143"><img src = "Randuin's_Omen_item.png" width = "120" height = "120" /><BR>Randuin's Omen</button>
		<button class="button button1" name="ItemName" type="submit" value="3094"><img src = "Rapid_Firecannon_item.png" width = "120" height = "120" /><BR>Rapid Firecannon</button>	
		<button class="button button1" name="ItemName" type="submit" value="2053"><img src = "Raptor_Cloak_item.png" width = "120" height = "120" /><BR>Raptor Cloak</button>
		<button class="button button1" name="ItemName" type="submit" value="3074"><img src = "Ravenous_Hydra_item.png" width = "120" height = "120" /><BR>Ravenous Hydra</button>
		<button class="button button1" name="ItemName" type="submit" value="1043"><img src = "Recurve_Bow_item.png" width = "120" height = "120" /><BR>Recurve Bow</button>
		<button class="button button1" name="ItemName" type="submit" value="3107"><img src = "Redemption_item.png" width = "120" height = "120" /><BR>Redemption</button>
		<button class="button button1" name="ItemName" type="submit" value="2031"><img src = "Refillable_Potion_item.png" width = "120" height = "120" /><BR>Refillable Potion</button>	
		<button class="button button1" name="ItemName" type="submit" value="1006"><img src = "Rejuvenation_Bead_item.png" width = "120" height = "120" /><BR>Rejuvenation Bead</button>
		<button class="button button1" name="ItemName" type="submit" value="3302"><img src = "Relic_Shield_item.png" width = "120" height = "120" /><BR>Relic Shield</button>
		<button class="button button1" name="ItemName" type="submit" value="3800"><img src = "Righteous_Glory_item.png" width = "120" height = "120" /><BR>Righteous Glory</button>
		<button class="button button1" name="ItemName" type="submit" value="3027"><img src = "Rod_of_Ages_item.png" width = "120" height = "120" /><BR>Rod of Ages</button>
		<button class="button button1" name="ItemName" type="submit" value="1028"><img src = "Ruby_Crystal_item.png" width = "120" height = "120" /><BR>Ruby Crystal</button>
		<button class="button button1" name="ItemName" type="submit" value="2045"><img src = "Ruby_Sightstone_item.png" width = "120" height = "120" /><BR>Ruby Sightstone</button>
		<button class="button button1" name="ItemName" type="submit" value="3085"><img src = "Runaan's_Hurricane_item.png" width = "120" height = "120" /><BR>Runaan's Hurricane</button>
		<button class="button button1" name="ItemName" type="submit" value="3116"><img src = "Rylai's_Crystal_Scepter_item.png" width = "120" height = "120" /><BR>Rylai's Crystal Scepter</button> 
		<button class="button button1" name="ItemName" type="sumbit" value="1027"><img src = "Sapphire_Crystal_item.png" width = "120" height = "120" /><BR>Sapphire Crystal</button>	
		<button class="button button1" name="ItemName" type="submit" value="3191"><img src = "Seeker's_Armguard_item.png" width = "120" height = "120" /><BR>Seeker's Armguard</button>
		<button class="button button1" name="ItemName" type="submit" value="3040"><img src = "Seraph's_Embrace_item.png" width = "120" height = "120" /><BR>Seraph's Embrace</button>
		<button class="button button1" name="ItemName" type="submit" value="3134"><img src = "Serrated_Dirk_item.png" width = "120" height = "120" /><BR>Serrated Dirk</button>
		<button class="button button1" name="ItemName" type="submit" value="3057"><img src = "Sheen_item.png" width = "120" height = "120" /><BR>Sheen</button>
		<button class="button button1" name="ItemName" type="sumbit" value="2049"><img src = "Sightstone_item.png" width = "120" height = "120" /><BR>Sightstone</button>
		<button class="button button1" name="ItemName" type="submit" value="3715"><img src = "Skirmisher's_Sabre_item.png" width = "120" height = "120" /><BR>Skirmisher's Sabre</button>
		<button class="button button1" name="ItemName" type="submit" value="3020"><img src = "Sorcerer's_Shoes_item.png" width = "120" height = "120" /><BR>Sorcerer's Shoes</button>
		<button class="button button1" name="ItemName" type="submit" value="3211"><img src = "Spectre's_Cowl_item.png" width = "120" height = "120" /><BR>Spectre's Cowl</button>
		<button class="button button1" name="ItemName" type="submit" value="3303"><img src = "Spellthief's_Edge_item.png" width = "120" height = "120" /><BR>Spellthief's Edge</button>
		<button class="button button1" name="ItemName" type="submit" value="3065"><img src = "Spirit_Visage_item.png" width = "120" height = "120" /><BR>Spirit Visage</button>
		<button class="button button1" name="ItemName" type="submit" value="3706"><img src = "Stalker's_Blade_item.png" width = "120" height = "120" /><BR>Stalker's Blade</button>
		<button class="button button1" name="ItemName" type="sumbit" value="3087"><img src = "Statikk_Shiv_item.png" width = "120" height = "120" /><BR>Statikk Shiv</button>
		<button class="button button1" name="ItemName" type="submit" value="3053"><img src = "Sterak's_Gage_item.png" width = "120" height = "120" /><BR>Sterak's Gage</button>
		<button class="button button1" name="ItemName" type="submit" value="3101"><img src = "Stinger_item.png" width = "120" height = "120" /><BR>Stinger</button>
		<button class="button button1" name="ItemName" type="submit" value="3068"><img src = "Sunfire_Cape_item.png" width = "120" height = "120" /><BR>Sunfire Cape</button>
		<button class="button button1" name="ItemName" type="submit" value="3341"><img src = "Sweeping_Lens_item.png" width = "120" height = "120" /><BR>Sweeping Lens</button>
		<button class="button button1" name="ItemName" type="submit" value="3069"><img src = "Talisman_of_Ascension_item.png" width = "120" height = "120" /><BR>Talisman of Ascension</button>
		<button class="button button1" name="ItemName" type="submit" value="3097"><img src = "Targon's_Brace_item.png" width = "120" height = "120" /><BR>Targon's Brace</button>
		<button class="button button1" name="ItemName" type="sumbit" value="3070"><img src = "Tear_of_the_Goddess_item.png" width = "120" height = "120" /><BR>Tear of the Goddess</button>
		<button class="button button1" name="ItemName" type="submit" value="3071"><img src = "The_Black_Cleaver_item.png" width = "120" height = "120" /><BR>The Black Cleaver</button>
		<button class="button button1" name="ItemName" type="submit" value="3599"><img src = "The_Black_Spear_item.png" width = "120" height = "120" /><BR>The Black Spear</button>
		<button class="button button1" name="ItemName" type="submit" value="3072"><img src = "The_Bloodthirster_item.png" width = "120" height = "120" /><BR>The Bloodthirster</button>
		<button class="button button1" name="ItemName" type="submit" value="1082"><img src = "The_Dark_Seal_item.png" width = "120" height = "120" /><BR>The Dark Seal</button>
		<button class="button button1" name="ItemName" type="submit" value="3196"><img src = "The_Hex_Core_mk-1_item.png" width = "120" height = "120" /><BR>The Hex Core mk-1</button>
		<button class="button button1" name="ItemName" type="submit" value="3197"><img src = "The_Hex_Core_mk-2_item.png" width = "120" height = "120" /><BR>The Hex Core mk-2</button>
		<button class="button button1" name="ItemName" type="sumbit" value="3185"><img src = "The_Lightbringer_item.png" width = "120" height = "120" /><BR>The Lightbringer</button>
		<button class="button button1" name="ItemName" type="submit" value="3075"><img src = "Thornmail_item.png" width = "120" height = "120" /><BR>Thornmail</button>
		<button class="button button1" name="ItemName" type="submit" value="3077"><img src = "Tiamat_item.png" width = "120" height = "120" /><BR>Tiamat</button>
		<button class="button button1" name="ItemName" type="submit" value="3748"><img src = "Titanic_Hydra_item.png" width = "120" height = "120" /><BR>Titanic Hydra</button>
		<button class="button button1" name="ItemName" type="submit" value="3711"><img src = "Tracker's_Knife_item.png" width = "120" height = "120" /><BR>Tracker's Knife</button>
		<button class="button button1" name="ItemName" type="submit" value="3078"><img src = "Trinity_Force_item.png" width = "120" height = "120" /><BR>Trinity Force</button>
		<button class="button button1" name="ItemName" type="submit" value="1053"><img src = "Vampiric_Scepter_item.png" width = "120" height = "120" /><BR>Vampiric Scepter</button>
		<button class="button button1" name="ItemName" type="sumbit" value="3135"><img src = "Void_Staff_item.png" width = "120" height = "120" /><BR>Void Staff</button>	
		<button class="button button1" name="ItemName" type="submit" value="3082"><img src = "Warden's_Mail_item.png" width = "120" height = "120" /><BR>Warden's Mail</button>
		<button class="button button1" name="ItemName" type="submit" value="3340"><img src = "Warding_Totem_item.png" width = "120" height = "120" /><BR>Warding Totem</button>
		<button class="button button1" name="ItemName" type="submit" value="3083"><img src = "Warmog's_Armor_item.png" width = "120" height = "120" /><BR>Warmog's Armor</button>
		<button class="button button1" name="ItemName" type="submit" value="3091"><img src = "Wit's_End_item.png" width = "120" height = "120" /><BR>Wit's End</button>
		<button class="button button1" name="ItemName" type="submit" value="3090"><img src = "Wooglet's_Witchcap_item.png" width = "120" height = "120" /><BR>Wooglet's Witchcap</button>
		<button class="button button1" name="ItemName" type="sumbit" value="3142"><img src = "Youmuu's_Ghostblade_item.png" width = "120" height = "120" /><BR>Youmuu's Ghostblade</button>
		<button class="button button1" name="ItemName" type="submit" value="3086"><img src = "Zeal_item.png" width = "120" height = "120" /><BR>Zeal</button>
		<button class="button button1" name="ItemName" type="submit" value="3050"><img src = "Zeke's_Harbinger_item.png" width = "120" height = "120" /><BR>Zeke's Harbinger</button>
		<button class="button button1" name="ItemName" type="submit" value="3157"><img src = "Zhonya's_Hourglass_item.png" width = "120" height = "120" /><BR>Zhonya's Hourglass</button>
		<button class="button button1" name="ItemName" type="submit" value="3512"><img src = "Zz'Rot_Portal_item.png" width = "120" height = "120" /><BR>Zz'Rot Portal</button>
	
</form><br><br>
</div>	

<footer> Jim Nguyen CSC521 CapStone </footer>	
	
	


</HTML>