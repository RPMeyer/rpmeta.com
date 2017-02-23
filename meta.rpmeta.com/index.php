<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/template.php');

$template = new Template();

$template->drawHeader();
?>
<article class="post_entry_test">
							<header>
								<h1 class="entry-title">TESTING ENTRY-TITLE (NOT ACTUALLY AN ENTRY TITLE)</h1>
							</header>
							<section class="entry">
								<p>
									<a href="http://www.rpmeyer.org/">
										<img id="splashRPM" class="splash-logo" src="http://rpmeyer.org/RPMeyerPNG2.png"/>
									</a>
								</p>
								<hr/>
								<div class="content-container">
									<div class='post-2 TESTING' id='post-2'>
										<h3 class='entry-title'>
											<a title='TESTING POST-2' rel='bookmark' href='http://'>TESTING POST-2-TESTING TESTING</a>
										</h3>
										<!--BEGIN .entry-content-->
										<div class='entry-content'>
											<div class='theExrp'>
												<a href='http://'>
													<img src="http://" class="attachment-post-thumbnail" alt="" />
												</a>
												<p>
													TESTING P EJFNGEJKGHBNKJEBGKJGNKEJGNKJN
												</p>
											</div>
											<div>
												<a class='more-link' href='http://'>read more...</a>
											</div>
											<!--END .entry-content-->
											<hr style='clear:both; display:inline-block; margin: 1rem 0'/>
										</div>
									</div>
									<!--END .hentry-->
								</div>
							</section>
						</article>
<?php
$template->drawFooter();
