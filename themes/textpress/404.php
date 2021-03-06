<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>
      <?php 
        $title= (isset($global['title'])) ? $global['title'] : $global['site.title'];
        echo $global['site.name'] .' | '. $title;
      ?>
    </title>
    <meta name="description" content="JavaScript community from the God's own country">
    <meta name="keywords" content="JavaScript, Meetups, JavaScript events in Kerala, HTML5 events in Kerala.">
    <meta content='Authur Name' name='<?php echo $global['author.name']; ?>'/> 

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo $global['assets.prefix'];?>/themes/textpress/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $global['assets.prefix'];?>/themes/textpress/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo $global['assets.prefix'];?>/themes/textpress/assets/css/main.css" rel="stylesheet">

    <!-- Le fav and touch icons -->
  </head>

  <body>
    <div style="background:#0a777d; width:100%; height:5px;"></div>
    <div class="header">
      <div class="container-narrow">
        <div class="masthead text-center">
          <br>
          <br>
          <a href="/">
            <img src="<?php echo $global['assets.prefix'];?>/themes/textpress/assets/img/keralajs_log.png" alt="" width="100" style="border: 5px solid #f2f7e9; border-radius:5px">
          </a>
          <h1 class="muted">KeralaJS</h1>
          <div class="jumbotron">
          <h2>Kerala JavaScript user group</h2>
          <a href="https://twitter.com/KeralaJS" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @KeralaJS</a>
          </div>
        </div>
        
      </div>
    </div>
    <div class="container-narrow">
      <div class="row-fluid">
        <div class="span10 offset1">
          <h1>404, Not Found.</h1>
          <p>Sorry, the page you are looking for is not found.</p>
          <h4><a href="/">Home</a></h4>
        </div>
      </div>
    </div>
    <hr>
    <footer id="site-footer">
        <p>Powered by <a href="http://textpress.shameerc.com" target="_blank">TextPress</a>. &copy; <a href="http://www.keralajs.org" target="_blank">KeralaJS</a> 2013.</p>
    </footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo $global['assets.prefix'];?>/themes/textpress/assets/js/jquery.min.js"></script>
    <?php if($global['google.analytics']){?>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', '<?php echo $global['google.analytics']; ?>']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
      $(function(){
        $('.dropdown-toggle').dropdown()  
      })
  </script>
  <?php }?>
    <script type="text/javascript" src="<?php echo $global['assets.prefix'];?>/themes/textpress/assets/js/bootstrap.min.js"></script>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </body>
</html>