<?php 
	$title = "Brian Jackson";
	$page = "brian-jackson"; 
?>
<?php 
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
				<h3 class="name">Brian Jackson</h3>
				<h4 class="title">Project Engineer</h4>
			</div>

			<div class="teamContent">
				<p>
					Brian is a professional engineer with a master’s degree in business administration. He has an extensive background in developing and managing complex hydroelectric power plants. Brian has worked on development projects involving renewable energy in global villages particularly in Indonesia, Philippines, and Haiti. He has been involved in all aspects of land acquisition, environmental studies, permitting, design, contracting, and development and construction of commercial wind projects throughout the Northwestern United States and Alaska. For Garnet USA, Brian Jackson is in charge of the extensive laboratory development needs and the mine permitting tasks dealing with the Montana Department of Environmental Quality including the project design and schedule leading to production.
				</p>
			</div>
		</div><?php //end module ?>

		<?php //add php include for bio list ?>

		<?php include "../../template/bios/_team-list.php"; ?>
		
	</div><?php //end container ?>
	
<?php include "../../template/_footer.php"; ?>