<?php
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/header.' . $LANG_TAG . '.php'))
	include_once($SERVER_ROOT . '/content/lang/templates/header.en.php');
else include_once($SERVER_ROOT . '/content/lang/templates/header.' . $LANG_TAG . '.php');
$SHOULD_USE_HARVESTPARAMS = $SHOULD_USE_HARVESTPARAMS ?? false;
$collectionSearchPage = $SHOULD_USE_HARVESTPARAMS ? '/collections/index.php' : '/collections/search/index.php';
?>
<div class="header-wrapper">
	<header>
		<div class="top-wrapper">
			<a class="screen-reader-only" href="#end-nav"><?= $LANG['H_SKIP_NAV'] ?></a>
			<nav class="top-login" aria-label="horizontal-nav">
				<?php
				if ($USER_DISPLAY_NAME) {
					?>
					<div class="welcome-text bottom-breathing-room-rel">
						<?= $LANG['H_WELCOME'] . ' ' . $USER_DISPLAY_NAME ?>!
					</div>
					<span style="white-space: nowrap;" class="button button-tertiary bottom-breathing-room-rel">
						<a href="<?= $CLIENT_ROOT ?>/profile/viewprofile.php"><?= $LANG['H_MY_PROFILE'] ?></a>
					</span>
					<span style="white-space: nowrap;" class="button button-secondary bottom-breathing-room-rel">
						<a href="<?= $CLIENT_ROOT ?>/profile/index.php?submit=logout"><?= $LANG['H_LOGOUT'] ?></a>
					</span>
					<?php
				} else {
					?>
					<span class="button button-secondary">
						<a href="<?= $CLIENT_ROOT . "/profile/index.php?refurl=" . htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . "?" . htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>">
							<?= $LANG['H_LOGIN'] ?>
						</a>
					</span>
					<?php
				}
				?>
			</nav>
			<div class="top-brand">
				<a href="<?= $CLIENT_ROOT ?>">
					<div class="image-container">
						<img src="<?= $CLIENT_ROOT ?>/images/layout/stri_logo.gif" alt="Smithsonian Tropical Research Institute logo">
					</div>
				</a>
				<div class="brand-name">
					<!-- <h1>Symbiota Brand New Portal</h1>
					<h2>Redesigned by the Symbiota Support Hub</h2>
					-->
				</div>
			</div>
		</div>
		<div class="menu-wrapper">
			<!-- Hamburger icon -->
			<input class="side-menu" type="checkbox" id="side-menu" name="side-menu" />
			<label class="hamb hamb-line hamb-label" for="side-menu" tabindex="0">☰</label>
			<!-- Menu -->
			<nav class="top-menu" aria-label="hamburger-nav">
				<ul class="menu">
					<li>
						<a href="<?= $CLIENT_ROOT ?>/index.php">
							<?= $LANG['H_HOME'] ?>
						</a>
					</li>
                                        <li>
                                                <a href="#"><?= $LANG['H_SEARCH'] ?></a>
                                                <ul>
                                        		<li>
                                                		<a href="<?= $CLIENT_ROOT . $collectionSearchPage ?>">
                                                        	<?= $LANG['H_SEARCH'] ?>
                                                		</a>
                                        		</li>
                                        		<li>
                                                		<a href="<?= $CLIENT_ROOT ?>/collections/map/index.php" rel="noopener noreferrer">
                                                        	<?= $LANG['H_MAP_SEARCH'] ?>
                                                		</a>
                                        		</li>
                                                </ul>
                                        </li>
                                        <li>
                                                <a href="#"><?= $LANG['H_IMAGES'] ?></a>
                                                <ul>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/imagelib/index.php">
                                                                <?= $LANG['H_IMAGE_BROWSER'] ?>
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/imagelib/search.php?taxa=Actinopterygii&submitaction=search" rel="noopener noreferrer">
                                                                Actinopterygii
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/imagelib/search.php?taxa=Crustacea&submitaction=search" rel="noopener noreferrer">
                                                                Crustacea
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/imagelib/search.php?taxa=Echinodermata&submitaction=search" rel="noopener noreferrer">
                                                                Echinodermata
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/imagelib/search.php?taxa=Mollusca&submitaction=search" rel="noopener noreferrer">
                                                                Mollusca
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/imagelib/search.php?taxa=Urochordata&submitaction=search" rel="noopener noreferrer">
                                                                Urochordata
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/imagelib/search.php" rel="noopener noreferrer">
                                                                <?= $LANG['H_CUSTOM_SEARCH'] ?>
                                                                </a>
                                                        </li>
                                                </ul>
                                        </li>
					<li>
                                                <a href="#"><?= $LANG['H_INVENTORIES'] ?></a>
                                                <ul>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=18">
                                                                <?= $LANG['H_ALGAE_PANAMA'] ?>
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=2">
                                                                <?= $LANG['H_FIDDLER_CRABS'] ?>
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=4">
                                                                <?= $LANG['H_MARINE_INVERTS'] ?>
                                                                </a>
                                                        </li>
                                                </ul>
                                        </li>
                                        <li>
                                                <a href="#">
                                                        <?= $LANG['H_INTERACTIVE_TOOLS'] ?>
                                                </a>
                                                <ul>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/checklists/dynamicmap.php?interface=checklist&tid=20060">
                                                                <?= $LANG['H_DYNAMIC_STARFISH_LIST'] ?>
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/checklists/dynamicmap.php?interface=checklist&tid=4773">
                                                                <?= $LANG['H_DYNAMIC_FISH_LIST'] ?>
                                                                </a>
                                                        </li>
                                                </ul>
                                        </li>
                                        <li>
                                                <a href="#">
                                                        <?= $LANG['H_GLOSSARY'] ?>
                                                </a>
                                                <ul>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/glossary/sources.php">
                                                                <?= $LANG['H_CONTRIBUTORS'] ?>
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/glossary/index.php">
                                                                <?= $LANG['H_SEARCH_GLOSSARY'] ?>
                                                                </a>
                                                        </li>
                                                </ul>
                                        </li>
                                        <li>
                                                <a href="#">
                                                        <?= $LANG['H_TAXONOMY'] ?>
                                                </a>
                                                <ul>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/taxa/taxonomy/taxonomydynamicdisplay.php?target=Amphipoda">
                                                                Amphipoda
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/taxa/taxonomy/taxonomydynamicdisplay.php?target=Isopoda">
                                                                Isopoda
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/taxa/taxonomy/taxonomydynamicdisplay.php?target=Mollusca">
                                                                Mollusca
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/taxa/taxonomy/taxonomydynamicdisplay.php?target=Nemertea">
                                                                Nemertea
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/taxa/taxonomy/taxonomydynamicdisplay.php?target=Ostracoda">
                                                                Ostracoda
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/taxa/taxonomy/taxonomydynamicdisplay.php?target=Polycladida">
                                                                Polycladida
                                                                </a>
                                                        </li>
                                                </ul>
                                        </li>
					<li>
						<a href="<?= $CLIENT_ROOT ?>/includes/usagepolicy.php">
							<?= $LANG['H_DATA_USAGE'] ?>
						</a>
					</li>
					<li>
						<a href='<?= $CLIENT_ROOT ?>/sitemap.php'>
							<?= $LANG['H_SITEMAP'] ?>
						</a>
					</li>
					<li id="lang-select-li">
						<label for="language-selection"><?= $LANG['H_SELECT_LANGUAGE'] ?>: </label>
						<select oninput="setLanguage(this)" id="language-selection" name="language-selection">
							<option value="en">English</option>
							<option value="es" <?= ($LANG_TAG=='es'?'SELECTED':'') ?>>Español</option>
						</select>
					</li>
				</ul>
			</nav>
		</div>
		<div id="end-nav"></div>
	</header>
</div>
