<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/template.php');

$template = new Template();

$template->drawHeader();
$template->drawMainOpen();
?>
<article class="post_entry_test">
	<header>
		<h1 class="entry-title">TESTING ENTRY-TITLE (Reviews Products and the Meta)</h1>
	</header>
	<section class="entry">
		<!--Begin new post entry-->
		<div class="product-splash-left">
			<!-- <img src="http://rpmeta.com/res/ProductImageLeft.svg" class="product-template"/> -->
			<a href="#">
				<div id="product-splash-zelda-test">
					<img src="http://rpmeta.com/res/BoTWTestingThumb.png" alt="" id="BOTWTestingThumb">
					<img src="http://rpmeta.com/res/ProductTesting.png" alt="" id="ProductTesting">
				</div>
			<!-- <img src="http://rpmeta.com/res/ProductImageTest.jpg" class="product-image-left"/> -->
		</div>
		<!-- <p><a href="http://www.rpmeta.com/"><img id="splashRPM" class="splash-logo" src="http://#"/></a></p> -->
		<div class="content-container">
			<div class='post-1 TESTING' id='post-1'>
				<h3 class='entry-title'>
					<a title='TESTING POST-2' rel='bookmark' href='#'>Reviews Products and the Meta</a>
				</h3>
				<!--BEGIN .entry-content-->
				<div class='entry-content'>
					<div class='theExrp'>
						<a href='http://'>
							<img src="http://" class="attachment-post-thumbnail" alt="" />
						</a>
						<p id='title-of-post'>
													Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing
												</p>
					</div>
					<hr/>
					<div>
						<a class='more-link' href='#'>read more...</a>
					</div>
					<!--END .entry-content-->
				</div>
			</div>
		</div>
		<!--END new post entry .hentry-->
		<!--Begin new post entry-->
		<div class="product-splash-right">
			<!-- <img src="http://rpmeta.com/res/ProductImageLeft.svg" class="product-template"/> -->
			<a href="#">
				<div id="product-splash-switch-test">
					<img src="http://rpmeta.com/res/SwitchThumb.png" alt="" id="SwitchThumb">
					<img src="http://rpmeta.com/res/ProductTestingRight.png" alt="" id="ProductTesting">
				</div>
			<!-- <img src="http://rpmeta.com/res/ProductImageTest.jpg" class="product-image-left"/> -->
		</div>
		<div class="content-container">
			<div class='post-1 TESTING' id='post-1'>
				<h3 class='entry-title'>
					<a title='TESTING POST-2' rel='bookmark' href='#'>Reviews Products and the Meta</a>
				</h3>
				<!--BEGIN .entry-content-->
				<div class='entry-content'>
					<div class='theExrp'>
						<a href='http://'>
							<img src="http://" class="attachment-post-thumbnail" alt="" />
						</a>
						<p id='title-of-post'>
														Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing Nintendo Switch Unboxing
													</p>
					</div>
					<hr/>
					<div>
						<a class='more-link' href='#'>read more...</a>
					</div>
					<!--END .entry-content-->
				</div>
			</div>
		</div>
		<!--END new post entry .hentry-->
	</section>
</article>
<?php
$template->drawMainClose();
$template->drawSidebar();
$template->drawFooter();
