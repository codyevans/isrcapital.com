<?php
	$title = "Tina Smith";
	$bioId = "tina-smith"; 
?>
<?php include "../../template/_header.php"; ?>

<div class="herowidth">
			<img src="../../images/header/hero3.jpg" alt="ISRCapital Team Photo in front of our office.">
			<img src="../../images/header/hero3.jpg" alt="ISRCapital Team Photo in front of our office.">
		</div>
	</div>

<!--body content-->
	<div class="container">

		<div class="mission bioSpace">
			<h2>our team</h2>
		</div>

		<div class="teamModule">
			<div class="teamTitles">
				<h3 class="name">Tina J. Smith</h3>
				<h4 class="title">Director of Administration</h4>
			</div>

			<div class="teamContent">
				<p>
					For more than 11 years, Tina has provided Operations Management, Project Management, and Managed Service Management in the Northwest United States. She has been directly involved in Global Strategic Alliance Partnership Management between companies. Tina has worked with companies in the Czech Republic, Ireland, Germany and Singapore. She has been directly responsible for client satisfaction and ongoing business development.
				</p>
			</div>
		</div><?php //end module ?>

		<?php //add php include for bio list ?>

		<?php include "../../template/bios/_team-list.php"; ?>

	</div><?php //end container ?>
	
<?php include "../../template/_footer.php"; ?>