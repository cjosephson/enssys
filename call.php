<?php include "top.php"; ?>
	
<h1>Call for Papers and Demos</h1>

<p>
	<div class="dates" style="float: right; margin: 0px 0px 10px 10px;">
		<b>
			<a href="files/cfp_2021.pdf"><img src="images/cfp.png" width="200px"><br><br>Download the CfP</a> 
		</b>
	</div>
</p>

<p>	
	<?php
		print "<p>";
			print_enssys_info();
		print "</p>";

		print "<p>";
			print_topics_of_interest();
		print "</p>";
	
		print "<p>";
			print_submission_details();
		print "</p>";
	?>

	<ul>
		<li>Tutorial/Demo Submission: <?php print_pitch_deadline(); ?>
		<li>Pitches Submission: <?php print_abstract_deadline(); ?>
		<li>Notification: <?php print_notification_deadline(); ?>
		<li>Camera Ready: <?php print_camera_ready_deadline(); ?>
	</ul>
</p>

<?php include "bottom.php"; ?>
