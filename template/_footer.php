<!--footer-->
	<div class="container">
		<div id="logoborder">
			<div id="footerLogo">
			</div>
		</div>
	</div>
	
	<div id="sublabel">
		<div class="container">
			<form>
				<input class="search" type="text" value="_search">
			</form>
			<div id="subnav" class="list">
				<ul>
					<li><a href="home.php">Home</a></li>
					<li><a href="_contact.php">Contact</a></li>
					<li><a href="http://isrcapital.wordpress.com" target="blank">Blog</a></li>
					<li><a href="#">Log in</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<footer>
		<div class="container">
			<div id="legal">
				<ul>
					<li>©<?php echo date('Y'); ?> ISRCapital</li>
					<li>.....</li>
					<li><a href="_legalDisclosure.php">Legal Disclosures</a></li>
					<li>.....</li>
					<li><a href="_privacyPolicy.php">Privacy Policy</a></li>
				</ul>
			</div>
		</div>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>

	<script src="js/jquery.infieldlabel.min.js" type="text/javascript" charset="utf-8"></script>
	
	<script type="text/javascript" charset="utf-8">
		$(function(){ $("label").inFieldLabels(); });
	</script>
	
	
	<script src="js/jquery.validate.js" type="text/javascript"></script>

	<script type="text/javascript">
	$(document).ready(function() {
		$("#commentForm").validate();
	});
	</script>

</body>
</html>