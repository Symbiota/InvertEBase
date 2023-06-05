<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
include_once('config/symbini.php');
//include_once('content/lang/index.'.$LANG_TAG.'.php');
header("Content-Type: text/html; charset=".$CHARSET);
?>
<html>
<head>
	<title><?php echo $DEFAULT_TITLE; ?> Home</title>
	<?php
	include_once($SERVER_ROOT.'/includes/head.php');
        include_once('includes/googleanalytics.php');
	?>
	<link href="<?php echo $CSS_BASE_PATH; ?>/jquery-ui.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $CSS_BASE_PATH; ?>/quicksearch.css" type="text/css" rel="Stylesheet" />
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.12.1/jquery-ui.js" type="text/javascript"></script>
	<script type="text/javascript">
		var clientRoot = "<?php echo $CLIENT_ROOT; ?>";
	</script>
	<script src="js/symb/api.taxonomy.taxasuggest.js" type="text/javascript"></script>
	<script src="js/jquery.slides.js"></script>
	<style>
		#slideshowcontainer{ margin-left:auto; margin-right: auto; }
	</style>
</head>
<body>
	<?php
	include($SERVER_ROOT.'/includes/header.php');
	?>
	<!-- This is inner text! -->
	<div  id="innertext">
		<div style="float:right;width:400px;margin:0px 15px;">
			<div id="quicksearchdiv" style="width:350px">
				<!-- -------------------------QUICK SEARCH SETTINGS--------------------------------------- -->
				<form name="quicksearch" id="quicksearch" action="<?php echo $CLIENT_ROOT; ?>/taxa/index.php" method="get" onsubmit="return verifyQuickSearch(this);">
					<div id="quicksearchtext" ><?php echo (isset($LANG['QSEARCH_SEARCH'])?$LANG['QSEARCH_SEARCH']:'Taxon Search'); ?></div>
					<input id="taxa" type="text" name="taxon" style="width:200px" />
					<button name="formsubmit"  id="quicksearchbutton" type="submit" value="Search Terms"><?php echo (isset($LANG['QSEARCH_SEARCH_BUTTON'])?$LANG['QSEARCH_SEARCH_BUTTON']:'Search'); ?></button>
				</form>
			</div>
			<div>
				<?php
				//---------------------------SLIDESHOW SETTINGS---------------------------------------
				//If more than one slideshow will be active, assign unique numerical ids for each slideshow.
				//If only one slideshow will be active, leave set to 1. 
				$ssId = 1; 
				//Enter number of images to be included in slideshow (minimum 5, maximum 10) 
				$numSlides = 10;
				//Enter width of slideshow window (in pixels, minimum 275, maximum 800)
				$width = 375;
				//Enter amount of days between image refreshes of images
				$dayInterval = 7;
				//Enter amount of time (in milliseconds) between rotation of images																		
				$interval = 7000;
				//Enter checklist id, if you wish for images to be pulled from a checklist, leave as 0 if you do not wish for images to come from a checklist
				//If you would like to use more than one checklist, separate their ids with a comma ex. "1,2,3,4"
				$clId = "4";
				//Enter field, specimen, or both to specify whether to use only field or specimen images, or both
				$imageType = "both";
				//Enter number of days of most recent images that should be included 
				$numDays = 30;
				//---------------------------DO NOT CHANGE BELOW HERE-----------------------------
				ini_set('max_execution_time', 120);
				include_once($SERVER_ROOT.'/classes/PluginsManager.php');
				$pluginManager = new PluginsManager();
				echo $pluginManager->createSlideShow($ssId,$numSlides,$width,$numDays,$imageType,$clId,$dayInterval,$interval);
				?>
			</div>
		</div>
		<h1 style="margin-left:10px">Welcome to InvertEBase</h1>
		<div style="padding:5px 10px;font-size:120%">
			<p>InvertEBase is a specimen data portal supporting a growing network of natural history collections focused on the study of invertebrate animals, 
			with the exception of terrestrial arthropods. It provides a mechanism for network members to manage, enhance, and share biodiversity data and 
			associated images to scientists and the general public. Most current partner institutions are based in North America but the geographic scope, 
			reflecting the combined collection holdings, is global.</p>
		</div>
		<div style="padding:5px 10px; font-size:120%">
			<p>For comments, questions, or to join the portal, contact the <a href="mailto:help@symbiota.org?subject=InvertEBase Feedback">
			Symbiota Support Hub (help@symbiota.org)</a>.</p>
		</div>
	</div>
	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?>
</body>
</html>
