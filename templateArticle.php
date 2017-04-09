<?php
class TemplateArticle
{
    public function drawHeader()
    {
        //ending php tag so we can use html
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/res/rpmetaCSS.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-84156006-1', 'auto');
  ga('send', 'pageview');
</script>
<script>
$(document).ready(function() {
    $('img[src$=".svg"]').each(function() {
        var $img = jQuery(this);
        var imgURL = $img.attr('src');
        var attributes = $img.prop("attributes");

        $.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Remove any invalid XML tags
            $svg = $svg.removeAttr('xmlns:a');

            // Loop through IMG attributes and apply on SVG
            $.each(attributes, function() {
                $svg.attr(this.name, this.value);
            });

            // Replace IMG with SVG
            $img.replaceWith($svg);
        }, 'xml');
    });
});
</script>

<title>RPMeta</title>
</head>

<body class="full-header">
<!-- #top FORMATTED RPM-->
    <div id="top">
    </div>
<!-- /#top FORMATTED RPM-->
    <div id="wrapper">
      <!-- <div id="header-image-container">
        <img src="http://rpmeta.com/res/RPMetaHeader.svg" class="header-image"/>
      </div> -->
      <div class="splashpage-container-wrapper">
          <div class="splashpage-featured-image-conatiner">
              <img src="http://rpmeta.com/res/RPMetaBackground.svg" class="splashpage-featured"/>
          </div>
          <!--End Splashpage container FORMATTED RPM-->
      </div>
      <!--#nav-container FORMATTED RPM-->
      <div id="nav-container" data-spy="affix" data-offset-top="197">
          <nav id="main-menu" class="col-full" role="navigation">
              <div id="logo">
                  <a href="http://www.rpmeta.com/" title=""><img src="http://rpmeyer.org/RPMlogoSheared1.svg" alt=""/></a>
                  <span class="site-title"><a href="http://www.rpmeta.com/">RPMeta</a></span>
              </div>

              <section id="section-menu" class="menus">
                  <h3>Main Nav</h3>
                  <ul id="main-menu-list" class="nav">
                      <li id="menu-item-home" class="menu-item"><a href="http://rpmeta.com">Home</a></li>
                      <li id="menu-item-reviews" class="menu-item"><a href="http://rpmeta.com/reviews.rpmeta.com/index.php">Reviews</a></li>
                      <li id="menu-item-products" class="menu-item"><a href="http://rpmeta.com/products.rpmeta.com/index.php">Products</a></li>
                      <li id="menu-item-meta" class="menu-item"><a href="http://rpmeta.com/meta.rpmeta.com/index.php">Meta</a></li>
                      <li id="menu-item-about" class="menu-item"><a href="http://rpmeta.com/about.rpmeta.com/index.php">About</a></li>
                      <li id="menu-item-subscribe" class="menu-item"><a href="http://rpmeyer.org/News/index.php">Subscribe</a></li>
                  </ul>
              </section>

              <div id="media-buttons" class="media-images-svg">
                <ul id="socials">
                  <li>
                    <a href="https://www.facebook.com/rpmeta" class="facebook">
                      <img id="facebookSVG" class="svg social-media" src="http://rpmeta.com/res/FacebookF.svg" alt=""/></img>
                    </a>
                    <a href="https://twitter.com/arrpmeyer" class="twitter">
                      <img id='twitterSVG' class="svg social-media" src="http://rpmeta.com/res/TwitterBird.svg" alt=""/></img>
                    </a>
                  </li>
                </ul>
              </div>

              <a href="#splashRPM" class="nav-close">
                  <span>top</span>
              </a>
              <!-- /.menus -->
          </nav>
      </div>
      <!--/#nav-container FORMATTED RPM-->

<?php
        //starting php tag to output more template
    }
    public function drawFooter()
    {
        //html here
?>

    </div>
    <!-- <div class="media-buttons-test" id="testingtesttest">
        <a href="https://twitter.com/francklycrochet" class="twitter-follow-button" data-show-count="false">Follow @francklycrochet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        <a data-pin-do="buttonFollow" href="https://www.pinterest.com/francklycrochet/">FrancklyKayCrochet</a> <script async defer src="//assets.pinterest.com/js/pinit.js"></script>
        <div class="fb-like" style="display: inline-flex" data-href="https://www.facebook.com/francklykaycrochet/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>

    <script src="https://apis.google.com/js/platform.js" async defer></script>
      <div class="g-follow" data-href="https://plus.google.com/u/0/118205981055474454913" data-rel="{relationshipType}"></div>
      <div class="g-plusone" data-annotation="inline" data-width="300"></div>
    </div> -->
</body>

</html>

<?php
        //no more html :(
    }
    public function drawMainClose()
    {
?>
</section>
</div>
</div>
</div>
<?php
    }
    public function drawMainOpen()
    {
?>
<div id="content-wrapper">
    <!--#header-container-->
    <!--/#header-container-->
    <!-- #content Starts -->
    <!-- Splashpage container Starts FORMATTED RPM-->
    <div id="content" class="col-full">
        <div id="main-sidebar-container">
            <!-- #main Starts -->
            <section id="main">
<?php
    }
    public function drawSidebar()
    {
?>
<div id="sidebar-container" class="sidebar" data-spy="affix" data-offset-top="197">
  <article id="sidebar-content-container">
    <h3 id="title of post" class='entry-title sidebar-entry-title'>
      <a title='TESTING POST-2' rel='bookmark' href='#'>Nintendo Switch Software Review</a>
    </h3>
    <div class='theExrp'>
      <a href='http://'>
        <img src="http://" class="attachment-post-thumbnail" alt="" />
      </a>
    </div>
    <hr/>
    <a class="featured-article-exrp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut varius nisi. Vestibulum blandit, enim at aliquet pharetra,
       lacus diam vulputate tortor, sed hendrerit diam purus eget urna. Cras porttitor eleifend leo, et faucibus neque venenatis ac. </a>
    <div>
      <a class='more-link' href='#'>read more...</a>
    </div>
  </article>
  <article id="sidebar-content-container">
    <h3 id="title of post" class='entry-title sidebar-entry-title'>
      <a title='TESTING POST-2' rel='bookmark' href='#'>Nintendo Switch Software Review</a>
    </h3>
    <div class='theExrp'>
      <a href='http://'>
        <img src="http://" class="attachment-post-thumbnail" alt="" />
      </a>
    </div>
    <hr/>
    <a class="featured-article-exrp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut varius nisi. Vestibulum blandit, enim at aliquet pharetra,
       lacus diam vulputate tortor, sed hendrerit diam purus eget urna. Cras porttitor eleifend leo, et faucibus neque venenatis ac. </a>
    <div>
      <a class='more-link' href='#'>read more...</a>
    </div>
  </article>
  <article id="sidebar-content-container">
    <h3 id="title of post" class='entry-title sidebar-entry-title'>
      <a title='TESTING POST-2' rel='bookmark' href='#'>Nintendo Switch Software Review</a>
    </h3>
    <div class='theExrp'>
      <a href='http://'>
        <img src="http://" class="attachment-post-thumbnail" alt="" />
      </a>
    </div>
    <hr/>
    <a class="featured-article-exrp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut varius nisi. Vestibulum blandit, enim at aliquet pharetra,
       lacus diam vulputate tortor, sed hendrerit diam purus eget urna. Cras porttitor eleifend leo, et faucibus neque venenatis ac. </a>
    <div>
      <a class='more-link' href='#'>read more...</a>
    </div>
  </article>
</div>
<?php
    }
}
