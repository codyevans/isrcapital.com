<?php 
	$title = "Ryan McDermott";
	$page = "ryan-mcdermott"; 
	include "../../template/_header.php";
	include "../../includes/employees.php";
?>

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
				<h3 class="name">Ryan McDermott</h3>
				<h4 class="title">Director of Mining Operations</h4>
			</div>

			<div class="teamContent">
				<p>
					Ryan McDermott is a dynamic and highly skilled senior manager and geologist with successful background in exploration and project development, modeling, environmental planning and permitting, and economic analysis of precious metals deposits in North and South America, Asia, Australia, and Africa.  He is the Director of Mining Operations for ISRCapital, overseeing all aspects of ISR Capital’s mining portfolio.
				</p>
			</div>
		</div><?php //end module ?>

		<?php //add php include for bio list ?>

		<?php include "../../template/bios/_team-list.php"; ?>

	</div><?php //end container ?>
	
<?php include "../../template/_footer.php"; ?>