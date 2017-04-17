<?php
require_once($_SERVER[ 'DOCUMENT_ROOT'] . '/templateArticle.php');
$template=new TemplateArticle();
$template->drawHeader();
$template->drawMainOpen();
?>

<article class="post_entry_test">
	<header>
		<h1 class="entry-title">TESTING ENTRY-TITLE (Reviews Products and the Meta)</h1>
	</header>
	<div class="meta-splash-left">
		<a href="#">
			<div id="meta-splash-placeholder">
				<img src="http://rpmeta.com/res/EvolutionClimateThumbnail.jpg" alt="" id="PostLeftFormat">
				<img src="http://rpmeta.com/res/ProductTesting.png" alt="" id="ProductTesting">
				<a class="entry-title" title='meta' rel='bookmark' href='http://rpmeta.com/reviews.rpmeta.com/index.php'>REVIEW</a>
			</div>

	</div>
	<section class="entry">
		<!--Begin new post entry-->

		<div class="content-container">
			<div class='post-1' id='post-1'>
				<!--BEGIN .entry-content-->

				<div class='entry-content'>
					<div class='theExrp'>
						<!-- <a href='http://'>
							<img src="http://" class="attachment-post-thumbnail" alt="" />
						</a> -->
						<p class="article-paragraph">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut varius nisi. Vestibulum blandit, enim at aliquet pharetra,
					       lacus diam vulputate tortor, sed hendrerit diam purus eget urna. Cras porttitor eleifend leo, et faucibus neque venenatis ac.
						</p>
						<div class="exerp-float left">
							<q>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut varius nisi.
							</q>
						</div>

						<p class="article-paragraph">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut varius nisi. Vestibulum blandit, enim at aliquet pharetra,
					       lacus diam vulputate tortor, sed hendrerit diam purus eget urna. Cras porttitor eleifend leo, et faucibus neque venenatis ac.
						</p>
						<p class="article-paragraph">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut varius nisi. Vestibulum blandit, enim at aliquet pharetra,
					       lacus diam vulputate tortor, sed hendrerit diam purus eget urna. Cras porttitor eleifend leo, et faucibus neque venenatis ac.
						</p>
						<div class="exerp-float right">
							<q>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut varius nisi.
							</q>
						</div>
						<p class="article-paragraph">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut varius nisi. Vestibulum blandit, enim at aliquet pharetra,
					       lacus diam vulputate tortor, sed hendrerit diam purus eget urna. Cras porttitor eleifend leo, et faucibus neque venenatis ac.
						</p>
						<div class="exerp-float left">
							<q>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut varius nisi.
							</q>
						</div>
						<p class="article-paragraph">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut varius nisi. Vestibulum blandit, enim at aliquet pharetra,
					       lacus diam vulputate tortor, sed hendrerit diam purus eget urna. Cras porttitor eleifend leo, et faucibus neque venenatis ac.
						</p>
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
