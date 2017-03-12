<?php
class Template
{
    public function drawHeader()
    {
        //ending php tag so we can use html
        $this->drawMainOpen();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="rpmetaCSS.css">
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

<title>RPMeyer HUB</title>
</head>

<body class="full-header">
<!-- #top FORMATTED RPM-->
    <div id="top">
    </div>
<!-- /#top FORMATTED RPM-->
    <div id="wrapper">
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
                      <li id="menu-item-about" class="menu-item"><a href="http://rpmeta.com/reviews.rpmeta.com/index.php">Reviews</a></li>
                      <li id="menu-item-about" class="menu-item"><a href="http://rpmeta.com/products.rpmeta.com/index.php">Products</a></li>
                      <li id="menu-item-about" class="menu-item"><a href="http://rpmeta.com/meta.rpmeta.com/index.php">Meta</a></li>
                      <li id="menu-item-about" class="menu-item"><a href="http://rpmeta.com/about.rpmeta.com/index.php">About</a></li>
                      <li id="menu-item-news" class="menu-item"><a href="http://rpmeyer.org/News/index.php">Subscribe</a></li>
                  </ul>
                  <!-- /#side-nav -->
              </section>

              <div id="media-buttons" class="media-images-svg">
                <ul id="socials">
                  <li>
                    <a href="https://www.facebook.com/rpmeta" class="facebook">
                      <img src="http://rpmeta.com/res/FacebookF.svg" alt=""/></img>
                    </a>
                    <a href="https://twitter.com/arrpmeyer" class="twitter">
                      <img src="http://rpmeta.com/res/TwitterBird.svg" alt=""/></img>
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
      $this->drawMainClose();
        //html here
?>
        <div id="sidebar-container" class="sidebar">
          <div id="sidebar-content">
            <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut varius nisi. Vestibulum blandit, enim at aliquet pharetra, lacus diam vulputate tortor, sed hendrerit diam purus eget urna. Cras porttitor eleifend leo, et faucibus neque venenatis ac. Nam suscipit sit amet tortor eu tristique. Aliquam ipsum purus, mollis semper orci sed, finibus sagittis erat. Nulla id tellus nibh. Maecenas lorem enim, pellentesque ac placerat ut, fringilla a libero. Curabitur pretium semper eros sed ultrices. Praesent in tempor tortor, at molestie tortor. Phasellus nulla massa, sollicitudin eu dignissim rhoncus, tempor vitae eros. Morbi venenatis sit amet sem non porta.</a>
          </div>
        </div>
    </div>
    <div class="media-buttons-test" id="testingtesttest">
        <a href="https://twitter.com/francklycrochet" class="twitter-follow-button" data-show-count="false">Follow @francklycrochet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        <a data-pin-do="buttonFollow" href="https://www.pinterest.com/francklycrochet/">FrancklyKayCrochet</a> <script async defer src="//assets.pinterest.com/js/pinit.js"></script>
        <div class="fb-like" style="display: inline-flex" data-href="https://www.facebook.com/francklykaycrochet/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>

    <script src="https://apis.google.com/js/platform.js" async defer></script>
      <div class="g-follow" data-href="https://plus.google.com/u/0/118205981055474454913" data-rel="{relationshipType}"></div>
      <div class="g-plusone" data-annotation="inline" data-width="300"></div>
    </div>
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
    <div class="splashpage-container-wrapper">
        <div class="splashpage-featured-image-conatiner">
            <img src="http://rpmeyer.us.tempcloudsite.com/Yumekui.png" class="splashpage-featured"/>
        </div>
        <!--End Splashpage container FORMATTED RPM-->
    </div>
    <!--End Splashpage Wrapper -->
    <div id="content" class="col-full">
        <div id="main-sidebar-container">
            <!-- #main Starts -->
            <section id="main">
<?php
    }
}
