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
				<img src="http://rpmeta.com/res/EvoClimKillerStrat.jpg" alt="" id="EvoClimKillerStrat">
				<img src="http://rpmeta.com/res/ProductTesting.png" alt="" id="ProductTesting">
			</div>
	</div>
	<section class="entry">
		<!--Begin new post entry-->

		<div class="content-container">
			<div class='post-1' id='post-1'>
				<h3 class='entry-title'>
					<a title='TESTING POST-2' rel='bookmark' href='rpmeta.com/post/killer-carnivore-strat'>Evolution Climate: Killer Carnivore Strat</a>
				</h3>
				<!--BEGIN .entry-content-->
				<div class='entry-content'>
					<div class='theExrp'>
						<a href='http://'>
							<img src="http://" class="attachment-post-thumbnail" alt="" />
						</a>
						<p id='title-of-post'>
							Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate
							Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate
							Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate
							Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat Evolution Climate Killer Strat
						</p>
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
