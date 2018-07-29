<?php

include_once('inc/globals.inc.php');

$page['title'] = "Clever Design and Development | ".BUSINESS;
$page['meta-description'] = 'fn creative produces high end design for brand, web, print and more. Located in the Columbia City neighborhood of Seattle, WA.';
?>

<?php include_once('header.php'); ?>
<div id="content">
	<div class="row" id="intro">
		<div class="col">
			<span class="pre-headline">Simply</span>
			<div id="neon-headline"><span class="headline" id="headline-create">Creat</span><span class="headline" id="headline-iv">iv</span><span class="headline" id="headline-e">e</span></div>
			<p>Small, but mighty. New, but experienced. We have years of design and development knowledge ready to unleash on your best projects.</p><p>It's time to get fn creative.</p>
		</div>
	</div>
	<div class="row grid spacer"></div>
	<div class="row light" id="services">
		<div class="col">
			<div class="col-1">
				<h2>Services</h2>
				<p>Whether your company was launched in the 80s and looking for a fresh face, or are launching next month and need to put on some makeup, we can help.</p>
			</div>
			<div class="col-4 pad-30">
				<h3 class="cyan">Brand</h3>
				<p>Take a look around you. How many bad logos do you see? Do you find yourself thinking "What do they do?" That is bad branding, and you don't want people to say the same thing about you, right? Right.</p>
			</div>
			<div class="col-4 pad-30">
				<h3 class="magenta">Web</h3>
				<p>We can't stand the templated world of the web these days. Save the site builders for the lame competition. We will build you a custom site from top to bottom and link it up to whatever CMS you prefer.</p>
			</div>
			<div class="col-4 pad-30">
				<h3 class="yellow">Print</h3>
				<p>You: Getting married (rad!), hosting an event (sweet!), bar mitzvah (mazel tov), Promoting a business ($$).</p>
				<p>Us: We can make your event, brochure, flyer, etc stand out from the rest.</p>
			</div>
			<div class="col-4 pad-30">
				<h3 class="black">???</h3>
				<p>Do you have a need not covered here? We have years of experience and can figure it out or partner with any of the good people that we know and love to work with.</p>
			</div>
		</div>
	</div>
	<div class="row short-spacer color-spacer cyan-bg"></div>
	<div class="row" id="portfolio">
		<h2>Some things we have done for some neat people</h2>
		<p class="center">Click on a project name to get more details.</p>
		<div class="col">
			<a class="portfolio-item" id="portfolio-1">
				<div class="fill magenta-bg">&nbsp;</div>
				<div class="fill-2 magenta-bg">&nbsp;</div>
				<span class="portfolio-name">Flying Lion Brewing</span>
				<span class="portfolio-close">Close</span>
			</a>
			<div class="portfolio-inner" id="portfolio-1-inner">
				<div class="row">
					<div class="col-2">
						<h3>Flying Lion Brewing</h3>
						<p><b>Needed:</b> A new, non Wix website</p>
						<p><b>Story:</b> We built a modern site for FLB powered by our own lightweight content management system. The goal was to keep current customers in the know on new brews and to engage with first time customers.</p>
						<p><i>"Peter and Dann make above and beyond their standard. They're incredibly easy to work with, nail every detail, and fix problems you didn't even know you had. Stop shopping around, these guys are fn awesome."<br>--Griffin Williams, Flying Lion Brewing</i></p>
						<p class="center"><a href="https://flyinglionbrewing.com" target="_blank" class="portfolio-link">View the site</a></p>
					</div>
					<div class="col-2">
						<div class="before-after-head"><span class="before">Before</span><span class="after">After</span></div>
						<div class="before-after"> 
							<img src="<?php echo BASE_URL; ?>img/flb-site-after.jpg" alt="Flying Lion Brewing - After" />
							<div class="resize"> <img src="<?php echo BASE_URL; ?>img/flb-site-before.jpg" alt="Flying Lion Brewing - Before" /></div>
							<span class="handle"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row short-spacer color-spacer cyan-bg"></div>
	<div class="row" id="about">
		<div class="col">
			<img src="<?php echo BASE_URL; ?>img/pretty-cool.png" alt="Pretty cool" class="image-res" id="pretty-cool" />
			<h2><span class="hidden">Pretty cool</span>...we promise</h2>
			<div id="bios">
				<div class="col-2 bio" id="dann">
					<h3>Daniel</h3>
					<p>Knows that you don't attempt to run up the stairs at the Philadelphia Museum of Art, and you order your steak "wit". Daniel was drawn to design from a young age when he started writing all over his older brothers' baseball cards and (what would be now) priceless comic books.</p>
					<p class="list"><u>Beard</u>: Nope.<br>
					<u>Likes</u>: Intelligent design that doesn't look overdone.<br>
					<u>Dislikes</u>: Typos, bullshit and people who say "font" when they mean "typeface".</p>
				</div>
				<div class="col-2 bio" id="peter">
					<h3>Peter</h3>
					<p>Forged in the crucible of fine arts, Peter was drawn to the world of code out of a driving desire to create structure in the world.</p><p>Peter will eat literally anything.</p>
					<p class="list"><u>Beard</u>: Oh yes.<br>
					<u>Likes</u>: Clean, smart code.<br>
					<u>Dislikes</u>: Heights and videos that autoplay.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row grid spacer"></div>
	<div class="row" id="contact">
		<div class="col">
			<p>We're ready for you and your project anytime. <a href="mailto:us@fncreative.design">Email</a> us or give us a <a href="tel:2066605699">call</a> and let's get the process started.</p>
		</div>
	</div>
</div>
<?php include_once('footer.php'); ?>