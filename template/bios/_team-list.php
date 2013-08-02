<div class="teamGroup">

<?php foreach ($employees as $employee) { ?>
	
	<a href="<?php echo $employee["url"]; ?>" class="teamBox" id="<?php echo $employee["firstName"]; ?>" title="click for more...">
		<h2><span><?php echo $employee["fullName"]; ?></span><br><?php echo $employee["title"]; ?></h2>
		<p>Click to read <?php echo $employee["firstName"]; ?>'s bio...</p>
	</a>

<?php } ?>

</div> <?php //end team group ?>