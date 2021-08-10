	<?php
	function print_long_title()
	{
		print "ENSsys 2021: 9th International Workshop on Energy Harvesting &amp; Energy-Neutral Sensing Systems";
	}
	function print_title()
	{
		print "9th International Workshop on Energy Harvesting &amp; Energy-Neutral Sensing Systems";
	}
	function print_short_title()
	{
		print "Workshop on Energy Harvesting &amp; Energy-Neutral Sensing Systems";
	}



	function print_long_acronym()
	{
		print "ENSsys 2021";
	}
		function print_short_acronym()
	{
		print "ENSsys";
	}



	function print_tagline()
	{
		print "Energy Harvesting &amp; Energy-Neutral Sensing Systems";
	}
	function print_sensys_connection()
	{
		print "in conjunction with ACM SenSys 2021 and ASPLOS 2022 (tentative)";
	}



	//function print_pitch_deadline()
	//{
	//	print "Sept 01, 2021 (soft deadline)";
	//}
	function print_abstract_deadline()
	{
		print "Sept 15, 2021 (23:59 AOE)";
	}
	function print_notification_deadline()
	{
		print "October 11, 2021";
	}
	function print_camera_ready_deadline()
	{
		print "(tba)";
	}
	function print_workshop_date()
	{
		print "November 17, 2021";
	}



	function print_base_url()
	{
		print "http://www.enssys.org/2021/";
	}
	function return_base_url()
	{
		return "http://www.enssys.org/2021/";
	}
	function return_server_url()
	{
		return "http://www.enssys.org/";
	}

	function print_topics_of_interest()
	{
		print "Topics of interest include, but are not limited to, the following:
			<ul>
				<li>Power management concepts, algorithms and circuits for energy-harvesting sensing systems
				<li>Hardware and software concepts, algorithms and circuits for intermittent computing
				<li>Middleware and services supporting interoperability between zero-energy networks
				<li>Resource management and operating system support for energy-harvesting sensing systems
				<li>Network-wide distributed energy management (e.g. routing, adaptive duty cycling, etc.)
				<li>Communication in intermittent-power domain
				<li>Online measurement of energy intake and consumption
				<li>Predicting energy intake and consumption
				<li>Ensuring reliable operation in energy-harvesting sensor systems
				<li>Modelling, simulation and tools for effective design of future energy harvesting sensing systems
				<li>Architectures and standards for energy-neutral, power-neutral or intermittent sensing systems
				<li>Internet of (battery-less) things
				<li>Experience with real-world deployments and innovative applications
			</ul>";
	}

	function print_submission_details()
	{
		print "<h3>Details</h3>";
		print "<p><b>Short papers:</b> ENSsys@SenSys solicits short paper submissions.  We welcome both technical concept short papers and position short papers (target 2 pages, hard limit 3 pages including references).";
		print " Short papers will receive feedback and guidance from the TPC.";
		print " Short papers that continue on to be full submissions for ENSsys@ASPLOS will receive special consideration and the same set of reviewers <span style=\"color:grey\">(where possible)</span>.";
		print " Authors of accepted short papers will be provided a timeslot for a brief oral presentation.</p>";
		;
		print "<ul><li><a href='https://enssys21.hotcrp.com/'>Submit short papers via HotCRP</a> &ndash; Be sure to chose the papers track!</li></ul>";
		;
		print "<p><b>Demos:</b> ENSsys will also feature an &ldquo;energy harvesting village.&rdquo;";
		print " This is an opportunity to showcase prior, established work (or new work!) to a new audience. ";
		print " Demos should submit a short (1 page, 2 if needed) abstract describing their proposed demo as well as any support resources from the venue which may be needed.";
		print " Demo abstracts will be included in the ENSsys proceedings <span style=\"color:grey\">(if desired)</span>, and we will encourage demos to be repeated at ASPLOS.";
		;
		print "<ul><li><a href='https://enssys21.hotcrp.com/'>Submit demo abstracts via HotCRP</a> &ndash; Be sure to chose the demos track!</li></ul>";
		;
	}

	function print_formatting_details()
	{
		//print "Submissions must be full papers, which are no longer than the specified page limitation. All submissions must use the LaTeX styles found <a href='https://www.acm.org/publications/proceedings-template'>here</a>. Papers that do not meet the size, formatting, and anonymization requirements will not be reviewed. Please note that ACM uses 9pt fonts in all conference proceedings, and the LaTeX style implicitly defines the font size to be 9pt. For reference, please refer to the SenSys 2018 Publication Chair's <a href='files/HowTo.pdf'>Note</a> as well as the User Guide of the new class. ";

		//print "<br><br><b>Camera Ready Paper Instructions:</b> The camera-ready paper must be submitted by the 15th of September 2018 (GMT). You should use the <a href='https://urldefense.proofpoint.com/v2/url?u=https-3A__www.acm.org_publications_proceedings-2Dtemplate&d=DwMFaQ&c=clK7kQUTWtAVEOVIgvi0NU5BOUHhpN0H8p7CSfnc_gI&r=N2cFLM0BXy5wVmjTFXVnMg&m=DlUQWDe9lD_k9BXiGRmGYo0vEoUlS-6nuaNATJpLXlQ&s=WEnCvfJYcA38D5aRiyjeEYOgGdDWkb45aas4pboV2lg&e='>acmart.cls</a>. Please note that ACM uses 9-pt fonts in all conference proceedings, and the style (both LaTeX and Word) implicitly define the font size to be 9-pt.  The maximum number of pages for technical papers is 6 excluding the references, and the maximum number of pages is 3 for position papers, including everything. The demo/poster submissions can have up to 2 pages including everything.  Please refer to the <a href='files/HowTo.pdf'>publication chair's Note</a> as well as the User Guide of the new class. Accepted submissions will be available on the ACM digital library on the first day of the conference.";

		//print "<h3>Camera-Ready Instructions</h3>	To assist you with preparing your camera-ready ENSsys paper, please refer to the following instructions. You should use the <a href='https://www.acm.org/publications/proceedings-template'>acmart.cls</a>.<br><br>	Please note that ACM uses 9-pt fonts in all conference proceedings, and the style (both LaTeX and Word) implicitly define the font size to be 9-pt. Please refer to the <a href='http://sensys.acm.org/2019/resources/documents/HowTo.pdf'>SenSys notes</a> on how to use the templates, as well as the User Guide of the new class. Accepted submissions will be available on the ACM digital library.<br><br>	A reminder of page limits:<ul>	<li>Technical Papers: up to 6 pages (including everything except references);</li>	<li>Position Papers: up to 3 pages (including everything);</li>	<li>Poster Papers: up to 2 pages (including everything);</li>	<li>Demo Papers: up to 2 pages (including everything).</li>	</ul><br>		We will be in contact ASAP with instructions on copyright and upload of your camera-ready paper. The deadline for upload will be 15 September 23:59:59 UTC.";

		print "<h3>Formatting Guidelines</h3>

		You should use the <a href='https://www.acm.org/publications/proceedings-template'>acmart.cls</a> template.<br><br>

		Please note that ACM uses 9-pt fonts in all conference proceedings, and the style (both LaTeX and Word) implicitly define the font size to be 9-pt. Please refer to the <a href='http://sensys.acm.org/2020/resources/documents/HowTo.pdf'>SenSys notes</a> on how to use the templates, as well as the User Guide of the new class.<br><br>

		Authors are asked to remove their names and other identifying statements from submissions by:

		<ol>
			<li>using the 'anonymous' option for the class, and</li>
			<li>using 'anonsuppress' section where appropriate.</li>
		</ol><br>
		Submissions will be reviewed for novelty, relevance and quality. Accepted abstracts will be available on the ACM Digital Library on the first day of the conference.

		<p style='font-size: 120%; text-align: center;'><b>All papers should be submitted through <a href='https://enssys21.hotcrp.com/'>HotCRP</a></b></p>";

		print "<h3>Camera-Ready Instructions</h3>

		To appear";

		// To assist you with preparing your camera-ready ENSsys paper, please refer to the following instructions. You should use the <a href='https://www.acm.org/publications/proceedings-template'>acmart.cls</a>.<br><br>

		//Please note that ACM uses 9-pt fonts in all conference proceedings, and the style (both LaTeX and Word) implicitly define the font size to be 9-pt. Please refer to the <a href='http://sensys.acm.org/2020/resources/documents/HowTo.pdf'>SenSys notes</a> on how to use the templates, as well as the User Guide of the new class. Accepted submissions will be available on the ACM digital library.<br><br>";
	}

	function print_enssys_info()
	{
		print "<p>Complementing the topics of SenSys 2021 and ASPLOS 2022, this workshop will bring researchers together to explore the challenges, issues, and opportunities in the research, design, and engineering of energy-harvesting, energy-neutral, and intermittent sensing systems.</p>";
		print "<p>New this year, ENSsys will run twice, first as a part of SenSys 2021 and then <span style=\"color:grey\">(tentatively)</span> as a part of ASPLOS 2022. Our goal is to leverage the success of ENSsys to both continue to support our home in the wireless sensor networking community and to grow interest and excitement for energy neutral, energy harvesting, and intermittent systems in the computer architecture and systems communities. For ENSsys@SenSys, we invite 1-2 page demo abtracts and short 2-3 page short papers. The short papers, which may be early ideas, will receive thoughtful feedback from TPC members and seed breakout discussions in the afternoon of ENSsys@SenSys. Short papers that grow to full paper submissions in time for the second iteration of ENSsys@ASPLOS will receive special consideration and the same set of reviewers <span style=\"color:grey\">(where possible)</span>. Accepted demos will also be invited to repeat their demo again at ASPLOS.</p>";
	}

	function print_edition_detail_sensys()
	{
		print "<h3>ENSsys@SenSys Details</h3>";
		print "<p>ENSsys@SenSys will be a highly interactive workshop.</p>";
		print "<p>First, we invite demos from established energy harvesting systems &ndash; we aim to open ENSsys with a showcase of existing work to set a baseline of what is possible today and spark ideas for what can be built in the future.";
		print " Demos previously presented in other venues are explicitly welcome.</p>";
		print "<p>For new work, we invite short papers on technical issues in energy harvesting systems that remain underserved or more radical positions that invite rethinking of current system design. Unlike demo abstracts, short paper submissions cannot contain previously published work.";
		print " We will use these papers to organize several smaller, highly interactive workgroups.";
		print " Accepted short papers will be invited for fast-track submission as full papers at ENSsys@ASPLOS.</p>";
	}

	function print_important_dates()
	{
		print "<ul>";
		//print "<li>Demo Submission: "; print_pitch_deadline(); print "</li>";
		print "<li>Submission: "; print_abstract_deadline(); print "</li>";
		print "<li>Notification:; "; print_notification_deadline(); print "</li>";
		print "<li>Camera Ready: "; print_camera_ready_deadline(); print "</li>";
		print "</ul>";
	}
?>
