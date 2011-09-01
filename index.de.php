<?php

/* DokuWiki setup */
if(!defined('DOKU_INC')) define('DOKU_INC',dirname(__FILE__).'/');
require_once(DOKU_INC.'inc/init.php');

?><!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>MAKE.OPENDATA.CH – Das erste Open Data Camp der Schweiz</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="assets/vendor/bootstrap/bootstrap-1.1.0.min.css" rel="stylesheet">
    <link href="assets/app/stylesheets/base.css" rel="stylesheet">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" /> 
    <link rel="icon" href="/favicon.ico" type="image/x-icon" /> 
    <!-- <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png"> -->
    
    <script type="text/javascript" src="http://fast.fonts.com/jsapi/39ffadfd-88c3-4409-958c-a892f580a429.js"></script>
  </head>

  <body>
      <div class="container">
  
        <div class="row header">
        <div class="span4">
          <h1 id="logo"><img src="assets/app/images/make.opendata.ch_logo.png" alt="MAKE.OPENDATA.CH CAMP" /></h1>
        </div>
        <div class="span8">
          <p class="blurb">Das erste Open Data Camp der Schweiz<br />30. September – 1. Oktober 2011<br />Zürich und Lausanne</p>
          
        </div>
        <div class="action">
          <a class="btn" href="doku.php?id=de:home&do=register&lang=de">Melde dich an</a>
          <a class="btn" href="mailto:info@opendata.ch">Kontakt</a>
        </div>  
        <div class="lang">
          <ul>
          	<li><a href="index.fr.php">FR</a></li>
          	<li><a href="index.en.php">EN</a></li>
          </ul>
        </div>
        
      </div>
      <div class="page-header">
        <h1>Was?<span></span></h1>
      </div>
      
      <div class="row section-what">
        <div class="span12 offset2">
          <?= p_wiki_xhtml("de:what") ?>
       	</div>
      </div>
      
      <div class="page-header">
        <h1>Für wen?<span></span></h1>
      </div>
      
      <div class="row section-who">
        <div class="span12 offset2">
         	<?= p_wiki_xhtml("de:who") ?>
        </div>
      </div>
      
      <div class="page-header">
        <h1>Wann?<span></span></h1>
      </div>
      
      <div class="row section-when">
        <div class="span12 offset2">
			<?= p_wiki_xhtml("de:when") ?>
        </div>
      </div>
      
      <div class="page-header">
        <h1>Wo?<span></span></h1>
      </div>
      
      <div class="row section-where">
        <div class="span12 offset2">
          <?= p_wiki_xhtml("de:where") ?>
        
        	<p><a class="btn" href="doku.php?id=de:home&do=register&lang=de">Melde Dich an</a></p>
		    
        </div>
      </div>
      
      <div class="page-header">
        <h1>Wie?<span></span></h1>
      </div>
      
      <div class="row section-how">
        <div class="span12 offset2">
          <?= p_wiki_xhtml("de:how") ?>
          
          <!-- ideation -->
        </div>
      </div>
      
      <div class="page-header">
        <h1>Sponsoren<span></span></h1>
      </div>
      
      <div class="row section-sponsor">
        <div class="span12 offset2">
          <?= p_wiki_xhtml("de:sponsor") ?>
        </div>
      </div>
      
      <div class="page-header">
        <h1>Hintergrund<span></span></h1>
      </div>

      <div class="row section-about">
        <div class="span12 offset2">
          <?= p_wiki_xhtml("de:about") ?>
        </div>
      </div>


      <footer>

            <p>&copy; make.opendata.ch</p>

      </footer>

    </div> <!-- /container -->
    <? include("analytics.html"); ?>
  </body>
</html>