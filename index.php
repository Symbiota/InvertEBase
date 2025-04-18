<?php
include_once('config/symbini.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/templates/index.en.php');
else include_once($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php');
header('Content-Type: text/html; charset=' . $CHARSET);
?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
<head>
	<title><?php echo $DEFAULT_TITLE; ?> Home</title>
	<?php
	include_once($SERVER_ROOT . '/includes/head.php');
	include_once($SERVER_ROOT . '/includes/googleanalytics.php');
	?>
	<link href="<?= $CSS_BASE_PATH ?>/jquery-ui.css" type="text/css" rel="stylesheet">
	<link href="<?= $CSS_BASE_PATH ?>/quicksearch.css" type="text/css" rel="Stylesheet" />
	<script src="<?= $CLIENT_ROOT ?>/js/jquery-3.7.1.min.js" type="text/javascript"></script>
	<script src="<?= $CLIENT_ROOT ?>/js/jquery-ui.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		var clientRoot = "<?= $CLIENT_ROOT ?>";
		$(document).ready(function() {
			$("#qstaxa").autocomplete({
				source: function( request, response ) {
					$.getJSON( "checklists/rpc/speciessuggest.php", { term: request.term }, response );
				},
				minLength: 3,
				autoFocus: true,
				select: function( event, ui ) {
					if(ui.item){
						$( "#qstaxa" ).val(ui.item.value);
						$( "#qstid" ).val(ui.item.id);
					}
				},
				change: function( event, ui ) {
					if(ui.item === null) {
						$( "#qstid" ).val("");
					}
				}
			});
		});
	</script>
	<script src="<?= $CLIENT_ROOT ?>/js/jquery.slides.js"></script>
	<script src="js/jquery.slides.js"></script>
</head>
<body>
	<?php
	include($SERVER_ROOT."/includes/header.php");
	?>
		<!-- This is inner text! -->
		<main  id="innertext" style="margin-bottom:50px;">
			<div>
				<div style="float:right;margin-top:30px;margin-left:10px;">
					<div id="quicksearchdiv" style="width:400px;border:#000000 solid 0px;">
						<div style="margin-left:auto;margin-right:auto;width:360px">
							<!-- -------------------------QUICK SEARCH SETTINGS--------------------------------------- -->
							<form name="quicksearch" id="quicksearch" action="<?= $CLIENT_ROOT ?>/taxa/index.php" method="get" onsubmit="return verifyQuickSearch(this);">
								<div id="quicksearchtext" ><?= $LANG['QSEARCH_SEARCH'] ?></div>
								<input id="qstaxa" type="text" name="taxon" style="width:275px">
								<input id="qstid" type="hidden" name="tid">
								<button name="formsubmit"  id="quicksearchbutton" type="submit" value="Search Terms">
									<?= $LANG['QSEARCH_SEARCH_BUTTON'] ?>
								</button>
							</form>
						</div>
					</div>
					<div>
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
			</div>
			<h1>Welcome to the Marine Life of Panama portal</h1>
			<div>
				<p>
				We are working to create a single access point for knowledge about the diversity and distribution of marine organisms in Panama generated from over 40 years
				of marine biology research at STRI.  Currently, the portal provides access to specimen records and related geo-spatial data covering fish, algae, marine
				invertebrates and various other marine taxa (e.g., sea snakes, seagrasses, etc.).
				</p>
			</div>
			<div>
				<p>
				The portal currently includes the ability to create check lists for the entire country or for one of the 4 major marine biogeographic regions
				(Bocas del Toro and San Blas on the Caribbean coast and the Bay of Panama and Gulf of Chiriqui on the Pacific coast).  Georeferenced species records can be
				displayed on a map with associated observation data. A multilingual glossary tool, TaxaGloss, can be used to clarify the meaning of morphological terms.
				Soon, we hope to incorporate identification tools like tabular keys.
				</p>
			</div>
			<div>
				<div style="float:left;margin-left:10px;">
					<?php
					$oodID = 1;
					$ootdGameChecklist = 28;
					$includeSpecimens = true;
					$ootdGameTitle = "Sponge of the Day ";
					$ootdGameType = "Sponge";

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
					$ootdGameChecklist = 58;
					$ootdGameTitle = "Amphipod of the Day ";
					$ootdGameType = "Amphipod";

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
		</main>
	<?php
	include($SERVER_ROOT."/includes/footer.php");
	?>
</body>
</html>
