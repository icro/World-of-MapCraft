<?
	include('../build/config.php');


	#build_wmo_map('Dungeon/KL_OrgrimmarLavaDungeon', 'LavaDungeon');

	# the outside part
	#build_wmo_map('Dungeon/AZ_Deadmines', 'AZ_Deadmines_A', array(), array(), '', 2);
	# the inside part, but dupes some stuff from A (36-39) and the odd back door (17)
	#build_wmo_map('Dungeon/AZ_Deadmines', 'AZ_Deadmines_B', array(), array(36,37,38,39,17), '', 2);

	#build_wmo_map('Dungeon/AZ_Deadmines', 'AZ_Deadmines_C');
	#build_wmo_map('Dungeon/AZ_Deadmines', 'AZ_Deadmines_D');

	#build_wmo_map('Dungeon/AZ_StormwindPrisons', 'StormwindPrison');
	#build_wmo_map('Dungeon/AZ_StormwindPrisons', 'StormwindJail');
	#build_wmo_map('Dungeon/AZ_Subway', 'Subway');

	#build_wmo_map('Dungeon/KL_Wailing', 'wailingcaverns');
	#build_wmo_map('Dungeon/KL_Wailing', 'wailingcaverns_instance');

	#build_wmo_map('Dungeon/KL_Blackfathom', 'Blackfathom');
	#build_wmo_map('Dungeon/KL_Blackfathom', 'Blackfathom_instance');

	#build_wmo_map('Dungeon/KZ_Gnomeragon', 'KZ_Gnomeragon_Instance');

	#build_wmo_map('Dungeon/LD_ScarletMonestary' ,'Monestary_Cathedral');
	#build_wmo_map('Dungeon/LD_ScarletMonestary' ,'Monestary_Cemetery');
	#build_wmo_map('Dungeon/LD_ScarletMonestary' ,'Monestary_Library');
	#build_wmo_map('Dungeon/LD_ScarletMonestary' ,'Monestary_War');

	#build_wmo_map('Dungeon/KL_Razorfen', 'RazorfenDowns_instance');
	#build_wmo_map('Dungeon/KL_Razorfen', 'RazorfenKraul_instance');

	#build_wmo_map('Dungeon/KL_Maraudon', 'KL_Maraudon');
	#build_wmo_map('Dungeon/KL_Maraudon', 'KL_Maraudon_instance01');

	#build_wmo_map('Dungeon/KZ_Uldaman', 'KZ_Uldaman');
	#build_wmo_map('Dungeon/KZ_Uldaman', 'KZ_Uldaman_A');
	#build_wmo_map('Dungeon/KZ_Uldaman', 'KZ_Uldaman_B');
	#build_wmo_map('Dungeon/KZ_Uldaman', 'KZ_Uldaman_C');
	#build_wmo_map('Dungeon/KZ_Uldaman', 'KZ_Uldaman_Unearthed');

	#build_wmo_map('Dungeon/KL_DireMaul', 'KL_Diremaul');
	#build_wmo_map('Dungeon/KL_DireMaul', 'KL_Diremaul_Instance');
	#build_wmo_map('Dungeon/KL_DireMaul', 'KL_Diremaul__BackEnt');

	#build_wmo_map('Dungeon/LD_Stratholme', 'FrostWyrm_Final01');
	#build_wmo_map('Dungeon/LD_Stratholme', 'Stratholme');
	#build_wmo_map('Dungeon/LD_Stratholme', 'Stratholme_A');
	#build_wmo_map('Dungeon/LD_Stratholme', 'Stratholme_B');
	#build_wmo_map('Dungeon/LD_Stratholme', 'Stratholme_C');
	#build_wmo_map('Dungeon/LD_Stratholme', 'Stratholme_raid');

	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock2');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_lower_guild');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_lower_instance');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_guild');

	$lbrs_lower = array(
		#66,68,	# forlorn span, outside

		34, # bottom floor
		37,38, # smolder web
		41,42, # big room with ramps
		39,40,43, # war master room
	);

	$lbrs_upper = array(

		36, # top floor
		45,46,47, # floor at top of ramps

		61,48,52,53,49, # lbrs floor 2
		69,50,62,
	
		44, # upper passage
		54,55, # upper chamber
		#59, # lbrs floor 3

		11,0,2,3,4, # lrbs entrance cavern
		5,6, # lbrs transition rooms
	);

	$brs_entrance = array(

		7,8,9, # the entrance hall
		67,1, # portal
		12,13,32, # bottom side rooms
	);

	$ubrs_lower = array(

		10, # ramp from entrance hall
		33, # ubrs lobby

		14,15,22, # ubrs pyro ramp
		16, #pyromancer's room
	);

	$ubrs_upper = array(

		20,21, # rookery?
		18,19,17, #rookery upper deck

		28, # ubrs after rend?
		64, # rend's room
		23, # cave just before rend
		30,31, # between rend & beast
		24,25, # long way to rend
		29,35,26,27, # passages after rend
		60, # beast lobby
		63, # beast
		56,57,58, # drak's room

		65, # bwl entrance
		#51, # bwl
	);

	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_instance');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_instance', array_merge($brs_entrance, $lbrs_lower, $lbrs_upper), array(), 'lbrs_upper');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_instance', $lbrs_lower, array(), 'lbrs_lower');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_instance', array_merge($brs_entrance, $ubrs_lower), array(), 'ubrs_lower');
	#build_wmo_map('Dungeon/AZ_Blackrock', 'Blackrock_upper_instance', $ubrs_upper, array(), 'ubrs_upper');

	$st_lower = array(
		101,	# bottom middle
		3,4,5,6,7,8,9,10,11,12,13,14,27, # outer ring
		28,29,30,	# bottom side rooms
		37,38,39,40,41,42,43,44,45,46,47,71, # connecting ring to middle
		116,117,118,119, # stairs up
		66,73,78,83,	# ramps
		104,105, # vertical coridoor
		120,121	# entrance
	);

	#build_wmo_map('Dungeon/SunkenTemple', 'AZ_SunkenTemple');
	#build_wmo_map('Dungeon/SunkenTemple', 'AZ_SunkenTemple_Instance', array(), $st_lower);
	#build_wmo_map('Dungeon/SunkenTemple', 'AZ_SunkenTemple_Instance', $st_lower, array(), 'AZ_SunkenTemple_Instance_lower');

	#build_wmo_map('Dungeon/LD_ShadowFang', 'LD_ShadowFang');

	$sfk1 = array(
		75,39,74,19,62,59,60,38,15,2,72, # ground floor
		61,16,14,20,13,17,1, # first floor
		22,23,30,12,11,7,6,37,35,36,
		63,21,24,25,26,27,28,29,31,34,
		3,4,5,64,65,66,32,33,
	);

	$sfk2a = array(
		18,67,68,69,70, # floor 2 near entrance
	);

	$sfk2b = array(
		71,10,9,0,8, # floor 2 at top		
	);

	$sfk3 = array(
		44,45,46,73,42,42,41,56,47,48,49,50,51,	# floor 3
	);

	$sfk4 = array(
		40,52,53,57,54,55,58, # floor 4
	);

	#build_wmo_map('Dungeon/LD_ShadowFang', 'LD_ShadowFangInterior', $sfk1,  array(), 'LD_ShadowFangInterior_1',  0);
	#build_wmo_map('Dungeon/LD_ShadowFang', 'LD_ShadowFangInterior', $sfk2a, array(), 'LD_ShadowFangInterior_2a', 0);
	#build_wmo_map('Dungeon/LD_ShadowFang', 'LD_ShadowFangInterior', $sfk2b, array(), 'LD_ShadowFangInterior_2b', 0);
	#build_wmo_map('Dungeon/LD_ShadowFang', 'LD_ShadowFangInterior', $sfk3,  array(), 'LD_ShadowFangInterior_3',  0);
	#build_wmo_map('Dungeon/LD_ShadowFang', 'LD_ShadowFangInterior', $sfk4,  array(), 'LD_ShadowFangInterior_4',  0);

	$cthun = array(1,2,23,24,25,26,30,31,32,34);
	$junk_over = array(
		22,42, # misc facade
		33, # brain?
		44, # random coridoor
	); # 21&37 are needed :(

	#build_wmo_map('Dungeon/KL_AhnQiraj', 'Ahn_Qiraj_facade');
	#build_wmo_map('Dungeon/KL_AhnQiraj', 'Ahn_Qiraj', array(), array_merge($cthun, $junk_over));
	#build_wmo_map('Dungeon/KL_AhnQiraj', 'Ahn_Qiraj', $cthun, array(), 'Ahn_Qiraj__cthun');

	#build_wmo_map('Dungeon/KL_OnyxiasLair', 'KL_OnyxiasLair');
	#build_wmo_map('Dungeon/KL_OnyxiasLair', 'KL_OnyxiasLair_A');
	#build_wmo_map('Dungeon/KL_OnyxiasLair', 'KL_OnyxiasLair_B');

	#build_wmo_map('Dungeon/QT_Sunwell_5Man', 'Sunwell_5Man');
	#build_wmo_map('Dungeon/QT_Sunwell', 'Sunwell');

	#build_wmo_map('Dungeon/OL_Coilfang', 'Coilfang_Draenei');
	#build_wmo_map('Dungeon/OL_Coilfang', 'Coilfang_Marsh');
	#build_wmo_map('Dungeon/OL_Coilfang', 'Coilfang_Pumping');
	#build_wmo_map('Dungeon/OL_Coilfang', 'Coilfang_Raid');
	#build_wmo_map('Dungeon/OL_Coilfang', 'Coilfang_zangarentrance');

	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple_entrance');
	#build_wmo_map('Dungeon/Blacktemple', 'Blacktemple_facade');
	#build_wmo_map('Dungeon/Blacktemple', 'ShadowMoon_BattlementLeft');
	#build_wmo_map('Dungeon/Blacktemple', 'ShadowMoon_BattlementWall01');
	#build_wmo_map('Dungeon/Blacktemple', 'ShadowMoon_Battlementright');
	#build_wmo_map('Dungeon/Blacktemple', 'ShadowMoon_Wall_crack');

	#build_wmo_map('Dungeon/OL_TempestKeep', 'TK_Arcane');
	#build_wmo_map('Dungeon/OL_TempestKeep', 'TK_Atrium');
	#build_wmo_map('Dungeon/OL_TempestKeep', 'TK_Exterior');
	#build_wmo_map('Dungeon/OL_TempestKeep', 'TK_Exterior_smallwing');
	#build_wmo_map('Dungeon/OL_TempestKeep', 'TK_Exterior_smallwing_Arcane');
	#build_wmo_map('Dungeon/OL_TempestKeep', 'TK_Exterior_smallwing_Factory');
	#build_wmo_map('Dungeon/OL_TempestKeep', 'TK_Factory');
	#build_wmo_map('Dungeon/OL_TempestKeep', 'TK_Raid');

	#build_wmo_map('Dungeon/Hellfire', 'Hellfire_Citadel');
	#build_wmo_map('Dungeon/Hellfire', 'Hellfire_Military');
	#build_wmo_map('Dungeon/Hellfire', 'Hellfire_raid');
	#build_wmo_map('Dungeon/Hellfire', 'Hellfire_ramparts');
	#build_wmo_map('Dungeon/Hellfire', 'hellfire_DemonWing');
	#build_wmo_map('Dungeon/Hellfire', 'hellfire_wall01');
	#build_wmo_map('Dungeon/Hellfire', 'hellfire_wall02');
	#build_wmo_map('Dungeon/Hellfire', 'hellfire_wall03');
	#build_wmo_map('Dungeon/Hellfire', 'hellfire_wall04');

	#build_wmo_map('Dungeon/OL_GronnRaid', 'Gronnraid');
	#build_wmo_map('Dungeon/OL_GronnRaid', 'Gronnraid_facade');

	#build_wmo_map('Dungeon/OL_Auchindoun', 'Auchindoun_Enterance');
	#build_wmo_map('Dungeon/OL_Auchindoun', 'Draenei_wing');
	#build_wmo_map('Dungeon/OL_Auchindoun', 'OL_Crypt');
	#build_wmo_map('Dungeon/OL_Auchindoun', 'demon_wing');
	#build_wmo_map('Dungeon/OL_Auchindoun', 'ethereal_wing');
	#build_wmo_map('Dungeon/OL_Auchindoun', 'shadow_council_wing');

	#build_wmo_map('Dungeon/Azjol_Lowercity', 'Azjol_LowerCityRoof');
	#build_wmo_map('Dungeon/Azjol_Lowercity', 'Azjol_Lowercity');
	#build_wmo_map('Dungeon/Azjol_Uppercity', 'Azjol_Uppercity');

	#build_wmo_map('Dungeon/BlackRockV2', 'BlackrockV2', array(), array(8));
	#build_wmo_map('Dungeon/BlackWingV2', 'BlackwingV2');

	#build_wmo_map('Dungeon/Deepholm', 'Deepholm');
	#build_wmo_map('Dungeon/Deepholm', 'Deepholm_TroggTown');
	#build_wmo_map('Dungeon/Deepholm', 'DeepholmeExt');
	#build_wmo_map('Dungeon/Deepholm', 'DeepholmeExt_Lit');
	#build_wmo_map('Dungeon/Deepholm', 'Deepholme_pillarbase01');
	#build_wmo_map('Dungeon/Deepholm', 'Deepholme_pillarbase02');
	#build_wmo_map('Dungeon/Deepholm', 'Deepholme_pillarbase03');
	#build_wmo_map('Dungeon/Deepholm', 'Deepholme_pillartop01');
	#build_wmo_map('Dungeon/Deepholm', 'Deepholme_pillartop02');
	#build_wmo_map('Dungeon/Deepholm', 'Deepholme_pillartop03');
	#build_wmo_map('Dungeon/Deepholm', 'Deepholme_towerpiece');

	#build_wmo_map('Dungeon/DrakTharon', 'DrakTharon');
	#build_wmo_map('Dungeon/DrakTharon', 'DrakTharonRuined');
	#build_wmo_map('Dungeon/DrakTharon', 'DrakTharonTower');
	#build_wmo_map('Dungeon/DrakTharon', 'DrakTharon_TowerA');
	#build_wmo_map('Dungeon/DrakTharon', 'DrakTharon_TowerB');

	#build_wmo_map('Dungeon/Gjalerbron', 'Gjalerbron');

	#build_wmo_map('Dungeon/GrimBatol', 'KZ_GrimBatol');
	#build_wmo_map('Dungeon/GrimBatol', 'KZ_GrimBatol_raid');

	#build_wmo_map('Dungeon/Grizzlemaw', 'Grizzlemaw');
	#build_wmo_map('Dungeon/Grizzlemaw', 'GrizzlemawTermiteDen');

	#build_wmo_map('Dungeon/IceCrownRaid', 'IceCrownRaid');
	#build_wmo_map('Dungeon/IceCrownRaid', 'IceCrownRaid_arthas_precipice');
	#build_wmo_map('Dungeon/IceCrownRaid', 'IceCrownRaid_frostmourne');
	#build_wmo_map('Dungeon/IceCrownRaid', 'IceCrownRaid_middle_section');
	#build_wmo_map('Dungeon/IceCrownRaid', 'Icecrown_Portal_Exterior');
	#build_wmo_map('Dungeon/IceCrownRaid', 'icecrown_elevator02_transport');

	#build_wmo_map('Dungeon/IceCrown_dungeon', 'Icecrown_Dungeon_exteriorMicro');
	#build_wmo_map('Dungeon/IceCrown_dungeon', 'Icecrown_Halls_of_reflection');
	#build_wmo_map('Dungeon/IceCrown_dungeon', 'Icecrown_dungeon');
	#build_wmo_map('Dungeon/IceCrown_dungeon', 'PitOfSaronKrickArea');

	#build_wmo_map('Dungeon/LD_DragonIsles', 'DragonIsles_A');
	#build_wmo_map('Dungeon/LD_DragonIsles', 'DragonIsles_B');
	#build_wmo_map('Dungeon/LD_DragonIsles', 'DragonIsles_C');
	#build_wmo_map('Dungeon/LD_DragonIsles', 'DragonIsles_D');

	#build_wmo_map('Dungeon/RubySanctum', 'ND_Ruby_Collision');

	#build_wmo_map('Dungeon/Thor_Modan', 'Thor_Modan');

	#build_wmo_map('Dungeon/Ulduar', 'UL_Detail_01');
	#build_wmo_map('Dungeon/Ulduar', 'UL_Dragonroost');
	#build_wmo_map('Dungeon/Ulduar', 'UlduarRaidCourtyard_Blockout');
	#build_wmo_map('Dungeon/Ulduar', 'UlduarTramArchitecture');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Arch01');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Arch01D');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Arch02');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Arch02D');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Bridge01');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Building01');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Building01D');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_DetailFacades_01');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Ext01');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Ext02');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Ext03');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Ext04');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Forge');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Raid');

	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Ramp01');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Tower01');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Tower01C');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Tower01D');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Wall01');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Wall02');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Wall03');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Wall04');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Wall05');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Wall06');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Wall07');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_Wall08');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_dwarf77');
	#build_wmo_map('Dungeon/Ulduar', 'Ulduar_irongiant80', array(), array(), '', 2);

	#build_wmo_map('Dungeon/Uldum', 'Uldum_Dungeon_Collision');
	#build_wmo_map('Dungeon/Uldum', 'Uldum_Interior');
	#build_wmo_map('Dungeon/Uldum', 'Uldum_Interior_Pyramid');

	#build_wmo_map('Dungeon/Valgarde', 'IC_VrykulTunnel01');
	#build_wmo_map('Dungeon/Valgarde', 'Valgarde');
	#build_wmo_map('Dungeon/Valgarde', 'Valgarde_70GW');
	#build_wmo_map('Dungeon/Valgarde', 'Valgarde_80GW', array(), array(), '', 0);

	#build_wmo_map('Dungeon/Valgarde', 'Valgarde_IC');
	#build_wmo_map('Dungeon/Valgarde', 'Valgarde_IC_LOW');

	#build_wmo_map('Dungeon/Wintergrasp', 'Wintergrasp_Raid');

	#build_wmo_map('Dungeon/ND_ArugalsTower', 'Arugals_Tower01');
	#build_wmo_map('Dungeon/ND_ChamberRed', 'nd_chamberred_portal_Broken');
	#build_wmo_map('Dungeon/ND_Chamberblack', 'ND_ChamberBlack_Portal');
	#build_wmo_map('Dungeon/ND_Chamberblack', 'ND_Chamberblack_Collision');
	#build_wmo_map('Dungeon/ND_DalaranPrison', 'DalaranPrison');
	#build_wmo_map('Dungeon/ND_DrakTharon72', 'DrakTharon_72_Wing');
	#build_wmo_map('Dungeon/ND_GunDrak', 'GunDrak');
	#build_wmo_map('Dungeon/ND_GunDrak', 'GunDrakInterior');
	#build_wmo_map('Dungeon/ND_GunDrak', 'GunDrak_Entrance');
	#build_wmo_map('Dungeon/ND_GunDrak', 'GundrakGrate');
	#build_wmo_map('Dungeon/ND_Necropolis', 'DeathknightNecropolis');
	#build_wmo_map('Dungeon/ND_Necropolis', 'ND_Necropolis01');
	#build_wmo_map('Dungeon/ND_Necropolis', 'ND_NecropolisCollision');
	#build_wmo_map('Dungeon/ND_Necropolis', 'ND_NecropolisTeleport01');
	#build_wmo_map('Dungeon/ND_Necropolis', 'ND_NecropolisTeleport02');
	#build_wmo_map('Dungeon/ND_NerubianMicros', 'ND_NerubianEntrance01');
	#build_wmo_map('Dungeon/ND_Sholazar_Geodemicro', 'ND_Sholazar_Geodemicro_final');
	#build_wmo_map('Dungeon/ND_Stratholme', 'CoT_Stratholme_Exterior_Collision');
	#build_wmo_map('Dungeon/ND_Stratholme', 'Stratholme_Past');
	#build_wmo_map('Dungeon/ND_TitanMicros', 'ND_TitanOverlook03');
	#build_wmo_map('Dungeon/ND_VrykulMicros', 'SP_VrykulTunnel01');
	#build_wmo_map('Dungeon/ND_VrykulMicros', 'SP_VrykulTunnel02');
	#build_wmo_map('Dungeon/ND_VrykulMicros', 'VR_Icecrown_Micro01');

	#build_wmo_map('Dungeon/Skywall', 'KL_Skywall');
	#build_wmo_map('Dungeon/Skywall', 'KL_Skywall_Entrance');
	#build_wmo_map('Dungeon/Skywall', 'KL_Skywall_Entrance_LOW');
	#build_wmo_map('Dungeon/Skywall', 'KL_Skywall_Entrance_Building_01');
	#build_wmo_map('Dungeon/Skywall', 'KL_Skywall_Entrance_Building_01_LOW');
	#build_wmo_map('Dungeon/Skywall', 'KL_Skywall_Entrance_Building_02');
	#build_wmo_map('Dungeon/Skywall', 'KL_Skywall_Entrance_Building_02_LOW');
	#build_wmo_map('Dungeon/Skywall', 'KL_Skywall_Entrance_Building_03');
	#build_wmo_map('Dungeon/Skywall', 'KL_Skywall_Entrance_Building_03_LOW');
	#build_wmo_map('Dungeon/Skywall', 'KL_Skywall_Raid');
	#build_wmo_map('Dungeon/Skywall', 'KL_Skywall_Raid_Entrance');
	#build_wmo_map('Dungeon/Skywall', 'KL_Skywall_Raid_Entrance_LOW');

	#build_wmo_map('Dungeon/Abyssal_Maw', 'Abyssal_Maw');

	#build_wmo_map('Cataclysm/deathwing', 'deathwing_wmo_torso');
	#build_wmo_map('Dungeon/Spineofthedestroyer', 'deathwings_back');
	#build_wmo_map('Dungeon/wellofeternity', 'woe_column_01');
	#build_wmo_map('Dungeon/wellofeternity', 'woe_courtyard_curb');
	#build_wmo_map('Dungeon/wellofeternity', 'woe_courtyard_curb02');
	#build_wmo_map('Dungeon/wellofeternity', 'woe_courtyard_curb03');
	#build_wmo_map('Dungeon/wellofeternity', 'woe_courtyard_leftcurb');
	#build_wmo_map('Dungeon/wellofeternity', 'woe_courtyard_rightcurb');
	#build_wmo_map('Dungeon/wellofeternity', 'woe_courtyard_walls');
	#build_wmo_map('Dungeon/wellofeternity', 'Woe_EyeofAzsharaL_Curb');
	#build_wmo_map('Dungeon/wellofeternity', 'Woe_EyeofAzsharaR_Curb');
	#build_wmo_map('Dungeon/wellofeternity', 'WoE_Palace');
	#build_wmo_map('Dungeon/wellofeternity', 'WoE_Ruined_Walls');
	#build_wmo_map('Dungeon/wellofeternity', 'WoE_Well');

	#build_wmo_map('dungeon/md_cryptschool', 'md_cryptschool');


	$scholo_upper = array(
		#13, # odd broken bit
		14,0,
		1,2, # bone room, main hall
		9,7,
		3,
		5,
		4,
	);
	$scholo_lower = array(
		8, # zombie basement
		12,
		5,3,
		18,16,17,10,11,15,6,
		15, # gangling's lobby
		#6, empty?
	);
	$scholo_bottom = array(
		15, #lobby
		19, # north
		20, # south
		21, # east
	);

	#build_wmo_map('dungeon/md_ruinedkeep', 'Ruinedkeep_crypt_instance', $scholo_upper, array(), 'Ruinedkeep_crypt_instance_top');
	#build_wmo_map('dungeon/md_ruinedkeep', 'Ruinedkeep_crypt_instance', $scholo_lower, array(), 'Ruinedkeep_crypt_instance_bottom');
	#build_wmo_map('dungeon/md_ruinedkeep', 'Ruinedkeep_crypt_instance', $scholo_bottom, array(), 'Ruinedkeep_crypt_instance_basement');

	#build_wmo_map('dungeon/azjol_uppercity', 'azjol_uppercity');

	#build_wmo_map('pvp/buildings/tolbarad', 'tb_baradinhold');
	#build_wmo_map('pvp/buildings/tolbarad', 'tb_human_house02');
	#build_wmo_map('pvp/buildings/tolbarad', 'tb_human_inn');
	#build_wmo_map('pvp/buildings/tolbarad', 'tb_human_barracks');
	#build_wmo_map('pvp/buildings/tolbarad', 'tb_human_tower_open');
	#build_wmo_map('pvp/buildings/tolbarad', 'tb_human_townhall');
	#build_wmo_map('pvp/buildings/tolbarad', 'tb_micro01');
	#build_wmo_map('pvp/buildings/tolbarad', 'tb_micro02');
	#build_wmo_map('pvp/buildings/tolbarad', 'tb_micro03');
	#build_wmo_map('pvp/buildings/tolbarad', 'tb_tower');

	function build_wmo_map($folder, $map_name, $only_chunks=array(), $exclude_chunks=array(), $alt_name='', $rotate=1){

		$folder = strtolower($folder);
		$map_name = strtolower($map_name);

		global $blps, $pngs, $flats;

		$out_name = $alt_name ? $alt_name : $map_name;

		echo "$out_name: ";

		$wmo = "$blps/world/wmo/$folder/{$map_name}.wmo";

		if (!file_exists($wmo)){
			echo "can't find $wmo\n";
			return;
		}
		if (!filesize($wmo)){
			echo "zero-length wmo - $wmo\n";
			return;
		}

		#echo "WMO: $wmo\n";
		#exit;

		$chunks = extract_mogi($wmo);

#foreach ($chunks as $k => $v){
#	echo "$k,$v[0],$v[1],$v[2]\n";
#}
#exit;

		#
		# filter chunks?
		#

		if (count($only_chunks)){
			foreach ($chunks as $k => $v){
				if (!in_array($k, $only_chunks)) unset($chunks[$k]);
			}
		}else if (count($exclude_chunks)){
			foreach ($chunks as $k => $v){
				if (in_array($k, $exclude_chunks)) unset($chunks[$k]);
			}
		}
#print_r($chunks);

		#
		# find out size of all group chunks
		#

		$png_folder = str_replace('/', '_', $folder);
		$png_prefix = $map_name.'_';

		$files = glob("$pngs/wmo_$png_folder/$png_prefix*");
		$pieces = array();
		$rx = preg_quote($png_prefix, '!').'(\d\d\d)_(\d\d)_(\d\d)\.png$';
		foreach ($files as $file){
			if (preg_match("!$rx!", $file, $m)){
				list($w, $h) = getimagesize($file);
				$pieces[intval($m[1])][] = array(
					'path'	=> $file,
					'group'	=> intval($m[1]),
					'x'	=> intval($m[2]),
					'y'	=> intval($m[3]),
					'w'	=> $w,
					'h'	=> $h,
				);
			}
		}


		#
		# build a list of group chunks with the total size and the positions of all the subchunks
		#

		$total_pngs = 0;

		$groups = array();
		foreach ($pieces as $idx => &$group){

			$total_h = 0;
			$total_w = 0;
			$chunk_w = 0;
			$chunk_h = 0;

			foreach ($group as $row){
				if ($row['x'] == 0) $total_h += $row['h'];
				if ($row['y'] == 0) $total_w += $row['w'];
				$chunk_w = max($chunk_w, $row['x']+1);
				$chunk_h = max($chunk_h, $row['y']+1);
			}

			$our_pngs = array();

			$y_pos = $total_h;
			for ($y=0; $y<$chunk_h; $y++){
				$x_pos = 0;
				for ($x=0; $x<$chunk_w; $x++){
					foreach ($group as $row){
						if ($row['x'] == $x && $row['y'] == $y){
							$our_pngs[] = array($row['path'], $row['w'], $row['h'], $x_pos, $y_pos-$row['h']);
						}
					}

					$x_pos += 256;
				}
				$y_pos -= 256;
			}

			$total_pngs += count($our_pngs);

			$groups[$idx] = array(
				'w'	=> $total_w,
				'h'	=> $total_h,
				'pngs'	=> $our_pngs,
			);
		}

		#print_r($groups);
		#exit;


		#
		# need to double chunk coords
		#

		foreach ($chunks as $k => $pos){
			$chunks[$k][0] *= 1.993;
			$chunks[$k][1] *= 1.993;
		}


		#
		# adjust chunk positions so they start in top left
		#

		$x1s = array();
		$y1s = array();
		$x2s = array();
		$y2s = array();

		foreach ($chunks as $k => $pos){
			$chunks[$k][1] -= $groups[$k]['h'];

			$x1s[] = $chunks[$k][0];
			$y1s[] = $chunks[$k][1];

			$x2s[] = $chunks[$k][0] + $groups[$k]['w'];
			$y2s[] = $chunks[$k][1] + $groups[$k]['h'];
		}

		$min_x = min($x1s);
		$min_y = min($y1s);

		foreach ($chunks as $k => $pos){
			$chunks[$k][0] -= $min_x;
			$chunks[$k][1] -= $min_y;
		}

		$canvas_w = ceil(max($x2s) - $min_x);
		$canvas_h = ceil(max($y2s) - $min_y);


		$total_chunks = count($chunks);
		echo "($total_chunks chunks, $total_pngs pngs) ";

#print_r($chunks);
#print_r($groups);
		$dst = "$flats/{$out_name}.png";

		echo shell_exec("convert -size !{$canvas_w}x{$canvas_h} null: -matte -compose Clear -composite -compose Over $dst");
		#echo shell_exec("convert xc:{$bg_color} -geometry !{$canvas_w}x{$canvas_h} $dst");

		uasort($chunks, 'zsort_chunks');

		foreach ($chunks as $k => $chunk){

			if (is_array($groups[$k]['pngs']))
			foreach ($groups[$k]['pngs'] as $row){

				$x = floor($chunk[0] + $row[3]);
				$y = floor($chunk[1] + $row[4]);

				$cmd = "composite $row[0] -geometry +{$x}+{$y} $dst $dst";
				#echo "$cmd\n";
				echo shell_exec($cmd);
				echo '.';
			}
		}
		if ($rotate==1){
			echo shell_exec("convert $dst -rotate 90 $dst");
		}
		if ($rotate==2){
			echo shell_exec("convert $dst -rotate 180 $dst");
		}
		echo " done\n";
	}

	function zsort_chunks($a, $b){
		return $a[5]-$b[5];
	}



	function extract_pos($name){

		$fh = fopen($name, 'r');
		fseek($fh, 24);
		$floats = fread($fh, 24);
		$box = unpack('f6', $floats);

		$x1 = $box[1];
		$y1 = $box[3];

		$x2 = $box[4];
		$y2 = $box[6];

		return "$x1,$y1 -> $x2,$y2";
	}

	function extract_group_id($name){

		$fh = fopen($name, 'r');
		fseek($fh, 20 + 0x38);
		$id = read_int($fh);
		fclose($fh);

		return $id;
	}

	function extract_root_id($name){

		$fh = fopen($name, 'r');
		fseek($fh, 20 + 0x20);
		$id = read_int($fh);
		fclose($fh);

		return $id;
	}


	function chunk_map($fh, $seek=1){

		if ($seek){
			$offset = 0;
			fseek($fh, 0);
		}else{
			$offset = ftell($fh);
		}

		while (!feof($fh)){

			$type = fread($fh, 4);
			if (strlen($type) < 4) return;
			$type = strrev($type);

			$size = read_int($fh);
			fseek($fh, $size, SEEK_CUR);

			echo "$type: $size (@$offset)\n";

			$offset += 8 + $size;
		}
	}

	function seek_to_chunk($fh, $name){

		fseek($fh, 0);
		while (!feof($fh)){

			$type = fread($fh, 4);
			if (strlen($type) < 4) break;
			$type = strrev($type);

			$size = read_int($fh);
			if ($type == $name) return true;

			fseek($fh, $size, SEEK_CUR);
		}

		return false;
	}



	function read_int($fh){
                $data = fread($fh, 4);
                list($junk, $n) = unpack('V', $data);
                return $n;
        }


	function extract_mogi($filename){

		$fh = fopen($filename, 'r');

		seek_to_chunk($fh, 'MOHD');
		fseek($fh, 4, SEEK_CUR);
		$groups = read_int($fh);

		seek_to_chunk($fh, 'MOHD');
		fseek($fh, 0x24, SEEK_CUR);
		$floats = fread($fh, 24);
		$box = unpack('f6', $floats);
		#echo "root\t\t: ".format_box($box)."\n";

		$chunks = array();

		seek_to_chunk($fh, 'MOGI');
		for ($i=0; $i<$groups; $i++){

			$flags = read_int($fh);
			$floats = fread($fh, 24);
			$box = unpack('f6', $floats);
			$name = read_int($fh);

			$chunks[$i] = array($box[1], 0-$box[2], $box[3], $box[4], 0-$box[5], $box[6]);

			#echo "group $i \t: ".format_box($box)."\n";
			#print_r($box);
		}

		#echo "found $groups groups\n";
		#exit;

		fclose($fh);

		return $chunks;
	}


function format_box($box){
	$x1 = str_pad(round($box[1]), 4, ' ', STR_PAD_LEFT);
	$y1 = str_pad(round($box[2]), 4, ' ', STR_PAD_LEFT);
	$z1 = str_pad(round($box[3]), 4, ' ', STR_PAD_LEFT);
	$x2 = str_pad(round($box[4]), 4, ' ', STR_PAD_LEFT);
	$y2 = str_pad(round($box[5]), 4, ' ', STR_PAD_LEFT);
	$z2 = str_pad(round($box[6]), 4, ' ', STR_PAD_LEFT);


	return round($box[1]).','.round(0-$box[2]);

	$from = round(27+32+0-$box[6]).','.round(103+$box[1]);
	$to = round(27+32+0-$box[3]).','.round(103+$box[4]);
	return "$from - $to";

	return "($x1, $y1, $z1) - ($x2, $y2, $z2)";
}
