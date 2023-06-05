<table id="maintable" cellspacing="0">
	<tr style="" >
		<td id="header" colspan="3">
			<div>
				<div style="clear:both;height:80px;">
					<img style="margin-top:7px;" src="<?php echo $CLIENT_ROOT; ?>/images/layout/stri_logo.gif" />
				</div>
				<div style="width:1200px;height:175px;">
					<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/subhead2.jpg" />
				</div>
			</div>
			<div id="top_navbar">
				<div id="right_navbarlinks">
					<?php
					if($USER_DISPLAY_NAME){
						?>
						<span style="">
							Welcome <?php echo $USER_DISPLAY_NAME; ?>!
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/viewprofile.php">My Profile</a>
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/index.php?submit=logout">Logout</a>
						</span>
						<?php
					}
					else{
						?>
						<span style="">
							<a href="<?php echo $CLIENT_ROOT."/profile/index.php?refurl=".$_SERVER['SCRIPT_NAME']."?".htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>">
								Log In
							</a>
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/newprofile.php">
								New Account
							</a>
						</span>
						<?php
					}
					?>
					<span style="margin-left:5px;margin-right:5px;">
						<a href='<?php echo $CLIENT_ROOT; ?>/sitemap.php'>Sitemap</a>
					</span>
				</div>
				<ul id="hor_dropdown">
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/index.php" >Home</a>
					</li>
					<li>
						<a href="#" >Search</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/harvestparams.php" >Search Collections</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/map/mapinterface.php" target="_blank">Map Search</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" >Images</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/index.php" >Image Browser</a>
							</li>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT ?>/imagelib/search.php?taxa=Actinopterygii&submitaction=search">Actinopterygii</a>
                                                        </li>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT ?>/imagelib/search.php?taxa=Crustacea&submitaction=search">Crustacea</a>
                                                        </li>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT ?>/imagelib/search.php?submitaction=search&taxa=Echinodermata">Echinodermata</a>
                                                        </li>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT ?>/imagelib/search.php?submitaction=search&taxa=Mollusca">Mollusca</a>
                                                        </li>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT ?>/imagelib/search.php?submitaction=search&taxa=Urochordata">Urochordata</a>
                                                        </li>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT; ?>/imagelib/search.php">Custom Search</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Inventories</a>
						<ul>
                                                        <li>
                                                                <a href="https://stricollections.org/portal/projects/index.php?pid=18" target="_blank">Algae of Panama</a>
                                                        </li>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=2">Fiddler Crabs (Uca) - New World</a>
                                                        </li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=4">Marine Invertebrates</a>
							</li>
                                                </ul>
                                        </li>
					<li>
						<a href="#">Interactive Tools</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&tid=20060" >Dynamic Starfish List</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&tid=4773" >Dynamic Fish List</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" >Glossary</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/glossary/sources.php" >Contributors</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/glossary/index.php" >Search Glossary</a>
							</li>
						</ul>
					</li>
                                        <li>
                                                <a href="#">Taxonomy</a>
                                                <ul>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT; ?>/taxa/taxonomy/taxonomydynamicdisplay.php?target=Amphipoda">Amphipoda</a>
                                                        </li>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT; ?>/taxa/taxonomy/taxonomydynamicdisplay.php?target=Isopoda">Isopoda</a>
                                                        </li>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT; ?>/taxa/taxonomy/taxonomydynamicdisplay.php?target=Mollusca">Mollusca</a>
                                                        </li>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT; ?>/taxa/taxonomy/taxonomydynamicdisplay.php?target=Nemertea">Nemertea</a>
                                                        </li>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT; ?>/taxa/taxonomy/taxonomydynamicdisplay.php?target=Ostracoda">Ostracoda</a>
                                                        </li>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT; ?>/taxa/taxonomy/taxonomydynamicdisplay.php?target=Polycladida">Polycladida</a>
                                                        </li>
                                                </ul>
                                        </li>
				</ul>
			</div>
		</td>
	</tr>
    <tr>
	<td id='middlecenter'  colspan="3">

