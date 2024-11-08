<?php
include_once('config/symbini.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/templates/index.en.php');
else include_once($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php');
header('Content-Type: text/html; charset=' . $CHARSET);
?>
<!DOCTYPE html>
<html lang="<?= $LANG_TAG ?>">
<head>
	<title>InvertEBase</title>
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
	<meta name='keywords' content='invertebrates,natural history collections,checklists,species lists' />
</head>
<body>
	<?php
	include($SERVER_ROOT . '/includes/header.php');
	?>
	<div class="navpath"></div>
	<main id="innertext">
		<div style="float:right;margin-left:15px;margin-right:25px">
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
		</div>
		<div style="float:right;clear:right;width:400px;padding:10px 20px 20px">
			<?php
			$ssId = 1;
			$numSlides = 10;
			$width = 350;
			$dayInterval = 7;
			$clid = 92;
			$imageType = "both";
			$numDays = 240;

			ini_set('max_execution_time', 120); //300 seconds = 5 minutes
			include_once('classes/PluginsManager.php');
			$pluginManager = new PluginsManager();
			echo $pluginManager->createSlideShow($ssId,$numSlides,$width,$numDays,$imageType,$clid,$dayInterval);
			?>
		</div>
                <h1 style="margin-left:10px">Welcome to InvertEBase</h1>
                <div style="padding:5px 20px;font-size:120%">
                        <p>InvertEBase is a specimen data portal supporting a growing network of natural history collections focused on the study of invertebrate animals,
                        with the exception of terrestrial arthropods. It provides a mechanism for network members to manage, enhance, and share biodiversity data and
                        associated images to scientists and the general public. Most current partner institutions are based in North America but the geographic scope,
                        reflecting the combined collection holdings, is global.</p>
                </div>
                <div style="padding:5px 20px; font-size:120%">
                        <p>For comments, questions, or to join the portal, contact the <a href="mailto:help@symbiota.org?subject=InvertEBase Feedback">
                        Symbiota Support Hub (help@symbiota.org)</a>.</p>
                </div>
	</main>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
</body>
</html>
