<?php
include_once('../config/symbini.php');
header("Content-Type: text/html; charset=".$CHARSET);
?>
<html>
	<head>
		<title>About Project</title>
		<?php
		$activateJQuery = false;
		include_once($SERVER_ROOT.'/includes/head.php');
		?>
	</head>
	<body>
		<?php
		$displayLeftMenu = false;
		include($SERVER_ROOT.'/includes/header.php');
		?>
		<div class="navpath">
			<a href="../index.php">Home</a> &gt;&gt;
			<b>About the Project/History/Funding</b>
		</div>
		<!-- This is inner text! -->
		<div id="innertext" style="margin:10px 20px">
			<h1>History:</h1>

			<p>InvertEBase originated in 2014 as part of a U. S. National Science Foundation (NSF) Thematic Collection Network (TCN) grant in the
			<a href="https://www.idigbio.org/content/nsf-adbc-program-information" target="_blank">Advancing Digitization of Biodiversity Collections (ADBC)</a> Program.
			It was initially created as a collaborative effort to digitize specimen
			records from ten arthropod and mollusk collections housed at six major U.S. museums in six states. They include the
			<a href="https://www.fieldmuseum.org" target="_blank">Field Museum of Natural History</a> (Chicago, Illinois),
			<a href="https://www.cmnh.org" target="_blank">Cleveland Museum of Natural History</a> (Ohio),
			<a href="http://www.auburn.edu/cosam/natural_history_museum/" target="_blank">Auburn University Museum of Natural History</a> (Alabama),
			<a href="https://lsa.umich.edu/ummz" target="_blank">University of Michigan Museum of Zoology</a>,
			<a href="https://www.delmnh.org" target="_blank">Delaware Museum of Natural History</a>, and the
			<a href="https://ento.psu.edu/facilities/frost" target="_blank">Frost Entomological Museum</a> at Pennsylvania State University.
			Numerous additional collections joined the project, in part supported through NSF’s Partners to Existing Networks (PEN) awards.</p>

			<p>Terrestrial arthropod data reside within a separate TCN-project-supported<a href="https://symbiota.org" target="_blank">Symbiota</a> portal, 
			which had evolved from an originally regionally defined Southwest Collections of Arthropods Network
			to a general <a href="https://scan-bugs.org/portal/" target="_blank">Symbiota Collections of Arthropods Network (SCAN)</a>.</p>

			<p>In 2020, the InvertEBase portal was greatly expanded as a result of merging the <a href="https://stri.si.edu" target="_blank">Smithsonian Tropical Research Institute’s</a>
			Marine Life of Panama Symbiota portal, and the addition of two new TCNs funded by NSF that will use and further develop the portal. The latter are focused on Documenting
			Marine Biodiversity through Digitization of Invertebrate Collections (DigIn) and on Mobilizing Millions of Marine Mollusks of the Eastern Seaboard (ESB).
			Current development focuses on developing and aligning taxonomic authority files in collaboration with the
			<a href="http://www.marinespecies.org/" target="_blank">World Register of Marine Species (WoRMS)</a>.</p>

			<h1>Funding:</h1>

			<p>The InvertEBase portal has been supported by the following NSF Awards:</p>

			<p>(1) Thematic Collections Network Award: InvertEBase -- Reaching back to see the future: The original InvertEBase project and portal were made possible by the
			National Science Foundation awards <a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=1402667" target="_blank">EF 14-02667</a> to P. Sierwald and R. Bieler (Field Museum),
			<a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=1400993" target="_blank">EF 14-00993</a> to A. Deans (Penn State),
			<a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=1402697" target="_blank">EF 14-02697</a> to E. Shea (Delaware Museum of Natural History),
			<a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=1404964" target="_blank">EF 14-04964</a> to D. O'Foighil (Museum of Zoology, University of Michigan),
			<a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=1401176" target="_blank">EF 14-01176</a> to J. Bond (Auburn University), and
			<a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=1402785" target="_blank">EF 14-02785</a> to G. Svenson (Cleveland Museum of Natural History), and
			<a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=1401450" target="_blank">EF 14-01450</a> to J. Hanken (Harvard University).
			Additional PEN awards include <a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=1601700" target="_blank">DBI 16-01700</a> to D. Roberts (Chicago Academy of Sciences),
			<a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=1701842" target="_blank">DBI 17-01842</a> to L. Stevens and G. Alpert (Museum of Northern Arizona), and
			<a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2001640" target="_blank">DBI 20-01640</a> to L. Elder (University of Colorado Museum of Natural History).</p>

			<p>(2) Thematic Collections Network Award: Mobilizing Millions of Marine Mollusks of the Eastern Seaboard (ESB): [2020 award, information forthcoming].</p>

			<p>(3) Thematic Collections Network Award: Documenting Marine Biodiversity through Digitization of Invertebrate Collections (DigIn): [2020 award, information forthcoming].</p>

			<p>(4) Collaborative Research: ARTS: Integrative Research and Training in Tropical Taxonomy:
			<a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=1456674" target="_blank">DEB-1456674</a> to R. Collin (Smithsonian Tropical Research Institute);
			with development of the STRI Panama portal.</p>

			<p>(5) Collaborative Research: ARTS: Understanding Tropical Invertebrate Diversity Through Integrative Revisionary Systematics and Training:
			<a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=1856504" target="_blank">DEB-1456674</a> to R. Collin (Smithsonian Tropical Research Institute);
			with development and integration of the STRI Panama portal.

		</div>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
	</body>
</html>

