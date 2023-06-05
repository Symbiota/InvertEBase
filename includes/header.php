<script>
<!--
if (top.frames.length!=0)
  top.location=self.document.location;
// -->
</script>
<table id="maintable" cellspacing="0">
	<tr>
		<td id="header" colspan="3" style="width:100%;">
			<div style="clear:both; width:100%; border-bottom:1px solid #000000; padding-bottom: 20px; font-family:Arial, Helvetica, sans-serif;">
				<div style="display: inline-block;max-width: 30%;margin-top: 17px;">
					<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/InvertEBase_logo_rbg.png" style="margin:0px 30px;width:130px" />
				</div>
				<div style="display: inline-block;width: 60%;margin-left: 0;/* margin-top: 19px; */color: #02336A;letter-spacing: 1px;text-shadow: 0 0 7px rgba(0,0,0,0.5);">
					<div style="margin-bottom:25px; margin-left: 20px; font-size:60px; line-height:48px;">Invert E Base</div>
					<div style="margin-left:50px; color:#02336A; font-size:35px; font-style: italic">Reaching back to see the future</div>
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
							<a href="<?php echo $CLIENT_ROOT."/profile/index.php?refurl=".$_SERVER['SCRIPT_NAME'].'?'.htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>">
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
						<a href="<?php echo $CLIENT_ROOT; ?>/index.php">Home</a>
					</li>
                                        <li>
                                                <a href="<?php echo $CLIENT_ROOT; ?>/misc/aboutproject.php">Project Information</a>
                                        </li>
					<li>
						<a href="#" >Search</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/index.php" >Search Collections</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/map/index.php" target="_blank">Map Search</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist">Dynamic Checklists</a>
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
								<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/search.php" >Search Images</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" >Inventories</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=6">Geographic Inventories</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=5">Taxonomic Inventories</a>
							</li>
						</ul>
					</li>
                                        <li>
                                                <a href="#" >Glossaries</a>
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
						<a href="#">Associated Projects</a>
                                                <ul>
                                                        <li>
                                                                <a href="/stri">STRI Marine Portal</a>
                                                        </li>
                                                        <li>
                                                                <a href="https://scan-bugs.org/portal/" target="_blank">SCAN-bugs</a>
                                                        </li>
                                                        <li>
                                                                <a href="https://www.gbif.org" target="_blank">GBIF</a>
                                                        </li>
                                                        <li>
                                                                <a href="https://www.idigbio.org" target="_blank">iDigBio</a>
                                                        </li>
                                                </ul>
 
					</li>
				</ul>
			</div>
		</td>
	</tr>
	<tr>
		<td id='middlecenter'  colspan="3">

