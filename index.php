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
								<p>
									<a href="http://www.rpmeta.com/">
										<img id="splashRPM" class="splash-logo" src="http://rpmeyer.org/RPMeyerPNG2.png"/>
									</a>
								</p>
								<div class="content-container">
									<!--Begin new post entry-->
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
												<p id='title of post'>
													Nintendo Switch Unboxing
												</p>
											</div>
											<hr/>
											<div>
												<a class='more-link' href='#'>read more...</a>
											</div>
											<!--END .entry-content-->
										</div>
									</div>
									<!--END new post entry .hentry-->

									<!--Begin new post entry-->
									<div class='post-2 TESTING' id='post-2'>
										<h3 class='entry-title'>
											<a title='TESTING POST-2' rel='bookmark' href='#'>Reviews Products and the Meta</a>
										</h3>
										<!--BEGIN .entry-content-->
										<div class='entry-content'>
											<div class='theExrp'>
												<a href='http://'>
													<img src="http://" class="attachment-post-thumbnail" alt="" />
												</a>
												<p id='title of post'>
													Nintendo Switch Hardware Review
												</p>
											</div>
											<hr/>
											<div>
												<a class='more-link' href='#'>read more...</a>
											</div>
											<!--END .entry-content-->
										</div>
									</div>
									<!--END new post entry .hentry-->

									<!--Begin new post entry-->
									<div class='post-3 TESTING' id='post-3'>
										<h3 class='entry-title'>
											<a title='TESTING POST-2' rel='bookmark' href='#'>Reviews Products and the Meta</a>
										</h3>
										<!--BEGIN .entry-content-->
										<div class='entry-content'>
											<div class='theExrp'>
												<a href='http://'>
													<img src="http://" class="attachment-post-thumbnail" alt="" />
												</a>
												<p id='title of post'>
													Nintendo Switch Software Review
												</p>
											</div>
											<hr/>
											<div>
												<a class='more-link' href='#'>read more...</a>
											</div>
											<!--END .entry-content-->
										</div>
									</div>
									<!--END new post entry .hentry-->
									<!--Begin new post entry-->
									<div class='post-3 TESTING' id='post-3'>
										<h3 class='entry-title'>
											<a title='TESTING POST-2' rel='bookmark' href='#'>Reviews Products and the Meta</a>
										</h3>
										<!--BEGIN .entry-content-->
										<div class='entry-content'>
											<div class='theExrp'>
												<a href='http://'>
													<img src="http://" class="attachment-post-thumbnail" alt="" />
												</a>
												<p id='title of post'>
													Nintendo Switch Software Review
												</p>
											</div>
											<hr/>
											<div>
												<a class='more-link' href='#'>read more...</a>
											</div>
											<!--END .entry-content-->
										</div>
									</div>
									<!--END new post entry .hentry-->
									<!--Begin new post entry-->
									<div class='post-3 TESTING' id='post-3'>
										<h3 class='entry-title'>
											<a title='TESTING POST-2' rel='bookmark' href='#'>Reviews Products and the Meta</a>
										</h3>
										<!--BEGIN .entry-content-->
										<div class='entry-content'>
											<div class='theExrp'>
												<a href='http://'>
													<img src="http://" class="attachment-post-thumbnail" alt="" />
												</a>
												<p id='title of post'>
													Nintendo Switch Software Review
												</p>
											</div>
											<hr/>
											<div>
												<a class='more-link' href='#'>read more...</a>
											</div>
											<!--END .entry-content-->
										</div>
									</div>
									<!--END new post entry .hentry-->
									<!--Begin new post entry-->
									<div class='post-3 TESTING' id='post-3'>
										<h3 class='entry-title'>
											<a title='TESTING POST-2' rel='bookmark' href='#'>Reviews Products and the Meta</a>
										</h3>
										<!--BEGIN .entry-content-->
										<div class='entry-content'>
											<div class='theExrp'>
												<a href='http://'>
													<img src="http://" class="attachment-post-thumbnail" alt="" />
												</a>
												<p id='title of post'>
													Nintendo Switch Software Review
												</p>
											</div>
											<hr/>
											<div>
												<a class='more-link' href='#'>read more...</a>
											</div>
											<!--END .entry-content-->
										</div>
									</div>
									<!--END new post entry .hentry-->

								</div>
							</section>
						</article>
<?php
$template->drawMainClose();
$template->drawSidebar();
$template->drawFooter();
