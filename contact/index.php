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
			
			<div class="group">
				<section class="contact-info">
					<h3>ISRCapital</h3>	
					<address>
					<p>
					Royal Plaza<br>
					1112 W. Main Street Suite 101<br>
					Boise, ID 83702 <br>
					</p>
					</address>

					<p class="contact-phone-number" tel="1-800-290-4772">
						<strong>Phone:</strong> 1.800.290.ISRC(4772)
					</p>
				</section>

				<section class="employment-section-link">
					<h3>Seeking Employment?</h3>
					<a href="/employment/">Employment Inquires <span>&rarr;</span></a>
				</section>
			</div>
			
			<br>

			<div id="contactForm">
				<div id="wufoo-z7x4m1">
				Fill out my <a href="http://isrcapital.wufoo.com/forms/z7x4m1">online form</a>.
				</div>
				<script type="text/javascript">var z7x4m1;(function(d, t) {
				var s = d.createElement(t), options = {
				'userName':'isrcapital', 
				'formHash':'z7x4m1', 
				'autoResize':true,
				'height':'577',
				'async':true,
				'header':'show'};
				s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
				s.onload = s.onreadystatechange = function() {
				var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
				try { z7x4m1 = new WufooForm();z7x4m1.initialize(options);z7x4m1.display(); } catch (e) {}};
				var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
				})(document, 'script');</script>
			</div> <!-- /form -->
			
		</div>
	</div>

<?php include "../template/_footer.php"; ?>
