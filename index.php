<?php include "top.php"; ?>
	
<h1>Welcome!</h1>

<p>
	<?php
		print_enssys_info();
	?>
</p>

<p>
	<div class="dates" style="float: right; margin: 0px 0px 10px 10px; width: 375px;">	
		<b>Important Dates</b>
		<ul>
			<li>Tutorial/Demo Submission: <?php print_pitch_deadline(); ?>
			<li>Pitches Submission: <?php print_abstract_deadline(); ?>
			<li>Notification: <?php print_notification_deadline(); ?>
			<li>Camera Ready: <?php print_camera_ready_deadline(); ?>
		</ul>

		<br>

		<b>Recent News</b>
		<ul>
			<li>Download the <a href="files/cfp_2021.pdf">Call for Papers</a>
		</ul>

		<br>

		<b>Previous Workshops</b>
		<ul>
			<li><a href="http://www.enssys.org/2020">ENSsys 2020</a> (Virtual Event)
			<li><a href="http://www.enssys.org/2019">ENSsys 2019</a> (New York City, USA)
			<li><a href="http://www.enssys.org/2018">ENSsys 2018</a> (Shenzhen, China)
			<li><a href="http://www.enssys.org/2017">ENSsys 2017</a> (Delft, Netherlands)
			<li><a href="http://www.enssys.org/2016">ENSsys 2016</a> (Stanford, USA)
			<li><a href="http://www.enssys.org/2015">ENSsys 2015</a> (Seoul, South Korea)
			<li><a href="http://www.enssys.org/2014">ENSsys 2014</a> (Memphis, USA)
			<li><a href="http://www.enssys.org/2013">ENSsys 2013</a> (Rome, Italy)
		</ul>
	</div>

	<?php
		print_topics_of_interest();
		print_edition_detail_sensys();
	?>
</p>

<p>
	We look forward to seeing you at <?php print_long_acronym(); ?>!

	<!-- <h2>Sponsors</h2>
	<a href="https://www.arm.com"><img src="images/arm.png"></a> -->
</p>

<div style="clear: both;">&nbsp;</div>


<?php include "bottom.php"; ?>
