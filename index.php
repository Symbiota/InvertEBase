<?php
include_once("config/symbini.php");
header("Content-Type: text/html; charset=".$CHARSET);
?>
<html>
<head>
	<title><?php echo $DEFAULT_TITLE; ?> Home</title>
	<?php
	$activateJQuery = false;
	include_once($SERVER_ROOT.'/includes/head.php');
        include_once($SERVER_ROOT.'/includes/googleanalytics.php');
	?>
	<link href="<?php echo $CSS_BASE_PATH; ?>/jquery-ui.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $CSS_BASE_PATH; ?>/quicksearch.css" type="text/css" rel="Stylesheet" />
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.12.1/jquery-ui.js" type="text/javascript"></script>
	<script type="text/javascript">
		var clientRoot = "<?php echo $CLIENT_ROOT; ?>";
	</script>
	<script src="js/symb/plugin.quicksearch.js" type="text/javascript"></script>
	<script src="js/jquery.slides.js"></script>
</head>
<body>
	<?php
	include($SERVER_ROOT."/includes/header.php");
	?> 
        <!-- This is inner text! -->
        <div  id="innertext" style="margin:15px">
			<div style="float:right;margin-top:15px;">
				<div style="float:right;margin-left:10px;">
					<?php
					$ssId = 1; 
					$numSlides = 10;
					$width = 350;
					$dayInterval = 7;
					$interval = 7000;
					$clid = '4';
					$imageType = 'both';
					$numDays = 30;
					ini_set('max_execution_time', 120);
					include_once($SERVER_ROOT.'/classes/PluginsManager.php');
					$pluginManager = new PluginsManager();
					echo $pluginManager->createSlideShow($ssId,$numSlides,$width,$numDays,$imageType,$clid,$dayInterval,$interval);
					?>
				</div>
			</div>
			<h1>Welcome to the Marine Life of Panama portal</h1>
			<div style="margin:20px;font-size:16px;">
				We are working to create a single access point for knowledge about the diversity and distribution of marine organisms in Panama generated from over 40 years 
				of marine biology research at STRI.  Currently, the portal provides access to specimen records and related geo-spatial data covering fish, algae, marine 
				invertebrates and various other marine taxa (e.g., sea snakes, seagrasses, etc.).
			</div>
			<div style="margin:20px;font-size:16px;">
				The portal currently includes the ability to create check lists for the entire country or for one of the 4 major marine biogeographic regions 
				(Bocas del Toro and San Blas on the Caribbean coast and the Bay of Panama and Gulf of Chiriqui on the Pacific coast).  Georeferenced species records can be 
				displayed on a map with associated observation data. A multilingual glossary tool, TaxaGloss, can be used to clarify the meaning of morphological terms.  
				Soon, we hope to incorporate identification tools like tabular keys.
			</div>
			<div style="float:left;margin-top:10px;margin-bottom:15px;">
				<div style="float:left;margin-left:10px;">
					<?php 
					$oodID = 1;
					$ootdGameChecklist = 35;  
					$includeSpecimens = true;
					$ootdGameTitle = "Sponge of the Day ";  
					$ootdGameType = "Sponges";  
					
					include_once($SERVER_ROOT.'/classes/GamesManager.php');
					$gameManager = new GamesManager();
					$gameInfo = $gameManager->setOOTD($oodID,$ootdGameChecklist, $includeSpecimens);
					?>
					<div style="float:right;margin-right:10px;width:290px;text-align:center;">
						<div style="font-size:130%;font-weight:bold;">
							<?php echo $ootdGameTitle; ?>
						</div>
						<a href="<?php echo $CLIENT_ROOT; ?>/games/ootd/index.php?oodid=<?php echo $oodID.'&cl='.$ootdGameChecklist.'&title='.$ootdGameTitle.'&type='.$ootdGameType; ?>">
							<img src="<?php echo $gameInfo['images'][0]; ?>" style="width:250px;border:0px;" />
						</a><br/>
						<b>What is this <?php echo $ootdGameType; ?>?</b><br/>
						<a href="<?php echo $CLIENT_ROOT; ?>/games/ootd/index.php?oodid=<?php echo $oodID.'&cl='.$ootdGameChecklist.'&title='.$ootdGameTitle.'&type='.$ootdGameType; ?>">
							Click here to test your knowledge
						</a>
					</div> 
				</div>
				<div style="float:left;margin-left:10px;">
					<?php 
					$oodID = 2;
					$ootdGameChecklist = 4;
					$ootdGameTitle = "Fish of the Day ";  
					$ootdGameType = "Fish";  
					
					include_once($SERVER_ROOT.'/classes/GamesManager.php');
					$gameManager = new GamesManager();
					$gameInfo = $gameManager->setOOTD($oodID,$ootdGameChecklist);
					?>
					<div style="float:right;margin-right:10px;width:290px;text-align:center;">
						<div style="font-size:130%;font-weight:bold;">
							<?php echo $ootdGameTitle; ?>
						</div>
						<a href="<?php echo $CLIENT_ROOT; ?>/games/ootd/index.php?oodid=<?php echo $oodID.'&cl='.$ootdGameChecklist.'&title='.$ootdGameTitle.'&type='.$ootdGameType; ?>">
							<img src="<?php echo $gameInfo['images'][0]; ?>" style="width:250px;border:0px;" />
						</a><br/>
						<b>What is this <?php echo $ootdGameType; ?>?</b><br/>
						<a href="<?php echo $CLIENT_ROOT; ?>/games/ootd/index.php?oodid=<?php echo $oodID.'&cl='.$ootdGameChecklist.'&title='.$ootdGameTitle.'&type='.$ootdGameType; ?>">
							Click here to test your knowledge
						</a>
					</div> 
				</div>
			</div>
		</div>
	<?php
	include($SERVER_ROOT."/includes/footer.php");
	?> 
</body>
</html>
