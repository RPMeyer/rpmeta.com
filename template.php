<?php
class Template
{
    public function drawHeader()
    {
        //ending php tag so we can use html
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="rpmetaCSS.css">
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
        <div id="top-nav-container" class="col-full">
            <h3 class="top-menu">Secondary Nav</h3>
            <ul id="top-nav" class="top-navigation">
                <li id="menu-item-1" class="menu-item 1"><a target="_blank" href="http://resume.rpmeyer.org/ResumeRedux.pdf">Resume</a></li>
                <li id="menu-item-2" class="menu-item 2"><a href="http://portfolio.rpmeyer.org/">Portfolio</a></li>
                <li id="menu-item-3" class="menu-item 3"><a href="http://php.rpmeyer.org/">PHP</a></li>
                <li id="menu-item-4" class="menu-item 4"><a href="http://js.rpmeyer.org/">Advanced JS</a></li>
                <li id="menu-item-5" class="menu-item 5"><a href="http://rpmeyer.org/WDV341Homework.php">Advanced CSS</a></li>
                <li id="menu-item-5" class="menu-item 6"><a href="http://rpmeyer.org/WDV351Homework.php">Website Applications</a></li>
            </ul>
        </div>
    </div>
<!-- /#top FORMATTED RPM-->
    <div id="wrapper">
        <div id="inner-wrapper">
            <!--#header-container-->
            <!--/#header-container-->

            <!--#nav-container FORMATTED RPM-->
            <div id="nav-container">
                <nav id="main-menu" class="col-full" role="navigation">
                    <div id="logo">
                        <a href="http://www.rpmeyer.org/" title=""><img src="http://rpmeyer.org/RPMlogoSheared1.svg" alt=""/></a>
                        <span class="site-title"><a href="http://www.rpmeyer.org/">RPMeyer</a></span>
                    </div>
                    <section id="section-menu" class="menus">
                        <h3>Main Nav</h3>
                        <ul id="main-menu-list" class="nav">
                            <li id="menu-item-home" class="menu-item"><a href="http://rpmeta.com">Home</a></li>
                            <li id="menu-item-about" class="menu-item"><a href="http://www.rpmeta.com/about">About</a></li>
                            <li id="menu-item-news" class="menu-item"><a href="http://rpmeyer.org/News/index.php">Subscribe</a></li>
                            <li id="menu-item-shop" class="menu-item"><a href="http://rpmeyer.org/opencart/index.php">Shop</a></li>
                        </ul>
                        <a href="#splashRPM" class="nav-close">
                            <span>Return to Content</span>
                        </a>
                        <!-- /#side-nav -->
                    </section>
                    <!-- /.menus -->
                </nav>
            </div>
            <!--/#nav-container FORMATTED RPM-->

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
        //starting php tag to output more template
    }
    public function drawFooter()
    {
        //html here
?>
                   </section>
                </div>
            </div>
        </div>
    </div>
    <div class="media-buttons" id="testingtesttest" style="display: inline">
        <a href="https://twitter.com/francklycrochet" class="twitter-follow-button" data-show-count="false">Follow @francklycrochet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        <a data-pin-do="buttonFollow" href="https://www.pinterest.com/francklycrochet/">FrancklyKayCrochet</a> <script async defer src="//assets.pinterest.com/js/pinit.js"></script>
    </div>
    <div class="fb-like" style="display: inline-flex" data-href="https://www.facebook.com/francklykaycrochet/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>

    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <div class="g-follow" data-href="https://plus.google.com/u/0/118205981055474454913" data-rel="{relationshipType}"></div>
    <div class="g-plusone" data-annotation="inline" data-width="300"></div>
    <div class="bottom-bar" id="bottomBar">
        <div id="bottom-nav-container" class="col-full">
            <h3 class="bottom-menu">Tertiary Nav</h3>
            <ul id="bottom-nav" class="bottom-navigation">
                <li id="bottom-item-1" class="bottom-item 1"><a href="http://resume.rpmeyer.org/CopyofResumePDFpdf.pdf">Resume</a></li>
                <li id="bottom-item-2" class="bottom-item 2"><a target="_blank" href="http://portfolio.rpmeyer.org/">Portfolio</a></li>
                <li id="bottom-item-3" class="bottom-item 3"><a target="_blank" href="http://php.rpmeyer.org/">PHP</a></li>
                <li id="bottom-item-4" class="bottom-item 4"><a target="_blank" href="http://js.rpmeyer.org/">Advanced JS</a></li>
            </ul>
        </div>
    </div>


</body>

</html>

<?php
        //no more html :(
    }
}
