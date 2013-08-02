<?php
	$title = "Bruce Thorndycraft";
	$page = "bruce-thorndycraft";
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
				<h3 class="name">Bruce Thorndycraft</h3>
				<h4 class="title">Metallurgical Engineer</h4>
			</div>

			<div class="teamContent">
				<p>
					Bruce has 45 years of metallurgical and mineral processing experience. He has a B.S. in Chemical Engineering and an M.S. in Metallurgical Engineering. He has managed and consulted for mining operations in Utah, Colorado, Nevada, British Columbia as well as Nova Scotia, Mexico, and South America. For ISR Capital, Bruce is developing the mining mill plans for a specially designed modular plant that can be easily replicated at various gold project sites. For Garnet USA, Bruce performed the initial detailed assessment and forensic analysis of the existing Garnet USA plant and equipment. The evaluation of what would be able to contribute to production and what should be salvaged or scrapped was instrumental to the future design and utility of the project and its direction.  
				</p>
			</div>
		</div><?php //end module ?>

		<?php //add php include for bio list ?>

		<?php include "../../template/bios/_team-list.php"; ?>

	</div><?php //end container ?>
	
<?php include "../../template/_footer.php"; ?>