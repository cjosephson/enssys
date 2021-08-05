<?php include "top.php"; ?>
	
<h1>Call for Papers and Demos</h1>

<p>
	<div class="dates" style="float: right; margin: 0px 0px 10px 10px;">
		<center>
		<b>
			<a href="files/cfp_2021.pdf"><img src="images/cfp_2021_thumb.jpg" width="200px"><br><br>Download the CfP</a> 
		</b>
		</center>
		<h3>Important Dates</h3>
		<?php print_important_dates(); ?>
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
</p>

<?php include "bottom.php"; ?>
