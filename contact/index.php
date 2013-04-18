<?php $title = "Contact Us"; ?>
<?php include "../template/_header.php"; ?>

<div class="herowidth">
			<img src="../images/header/hero.jpg" alt="Hero Image One">
			<img src="../images/header/hero.jpg" alt="Hero Image Two">
		</div>
	</div>

<!--body content-->
	<div class="container">
		<div class="mission">
			<h2>Contact Us</h2>
			<h3>ISRCapital</h3>
				
			<address>
			<p>
			Royal Plaza<br>
			1112 W. Main Street Suite 101<br>
			Boise, ID 83702 <br>
			Phone: 1.800.290.ISRC(4772)<br>
			</p>
			</address>
			
			<br>
			
			<div id="formPlace">
			<form action="../contactengine.php" method="POST" id="commentForm" accept-charset="utf-8">
					
			<p>
			<label for="name">Name *</label>
			<input type="text" id="name" name="name" class="required text" minlength="2">
			</p>
			
			<p>
			<label for="email">Email *</label>
			<input type="text" id="email" name="email" class="required email text">
			</p>
		
			<p>
			<select id="subject" name="subject">
				<option value="services">Our Services</option>
				<option value="intake form">Intake Form</option>
			</select>
			</p>
			
			<p>
			<label for="message">Your message...</label>
			<textarea name="message" id="message" class="required" rows="15" cols="70"></textarea>
			</p>
			
			<p><input type="submit"  name="submit" value="Submit"></p>
			
		</form>
		</div>

			
		</div>
	</div>

<?php include "../template/_footer.php"; ?>
