<?php include "top.php"; ?>

<h1>Submission Instructions</h1>

<p>
	<div class="dates" style="float: right; margin: 0px 0px 10px 10px; width: 325px;">
		<b>Important Dates</b>
		<ul>
			<li>Abstract Submission: <?php print_abstract_deadline(); ?>
			<li>Notification: <?php print_notification_deadline(); ?>
			<li>Camera Ready: <?php print_camera_ready_deadline(); ?>

		</ul>
	</div>

	<?php
		print_submission_details();

		print "<br><br>";

		print_formatting_details();
	?>
</p>

<?php include "bottom.php"; ?>
