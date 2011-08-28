<?php

/* DokuWiki setup */
if(!defined('DOKU_INC')) define('DOKU_INC',dirname(__FILE__).'/');
require_once(DOKU_INC.'inc/init.php');

?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>MAKE.OPENDATA.CH – 1er Open Data Camp de Suisse</title>
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
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">
    
    <script type="text/javascript" src="http://use.typekit.com/ebr0trq.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  </head>

  <body>
      <div class="container">
  
        <div class="row header">
        <div class="span4">
          <h1 id="logo"><img src="assets/app/images/make.opendata.ch_logo.png" alt="MAKE.OPENDATA.CH CAMP" /></h1>
        </div>
        <div class="span8">
          <p class="blurb">Le premier Open Data Camp en Suisse<br />30 septembre – 1 octobre 2011<br />Lausanne et Zürich</p>
        </div>
        <div class="action">
          <a class="btn" href="doku.php?id=fr:home&do=register&lang=fr">Inscription</a>
        </div>  
        <div class="lang">
          <ul>
          	<li><a href="index.de.php">DE</a></li>
          	<li><a href="index.en.php">EN</a></li>
          </ul>
        </div>
        
      </div>
      <div class="page-header">
        <h1>Quoi?<span></span></h1>
      </div>
      
      <div class="row section-what">
        <div class="span12 offset2">
          <?= p_wiki_xhtml("fr:what") ?>
        </div>
      </div>
      
      <div class="page-header">
        <h1>Pour qui?<span></span></h1>
      </div>
      
      <div class="row section-who">
        <div class="span12 offset2">
         	<?= p_wiki_xhtml("fr:who") ?>
        </div>
      </div>
      
      <div class="page-header">
        <h1>Quand?<span></span></h1>
      </div>
      
      <div class="row section-when">
        <div class="span12 offset2">
			<?= p_wiki_xhtml("fr:when") ?>
        </div>
      </div>
      
      <div class="page-header">
        <h1>Ou?<span></span></h1>
      </div>
      
      <div class="row section-where">
        <div class="span12 offset2">
          <?= p_wiki_xhtml("fr:where") ?>
        
        	<p><a class="btn" href="doku.php?id=fr:home&do=register&lang=fr">Inscription</a></p>
		    
        </div>
      </div>
      
      <div class="page-header">
        <h1>Comment?<span></span></h1>
      </div>
      
      <div class="row section-how">
        <div class="span12 offset2">
          <?= p_wiki_xhtml("fr:how") ?>
          
          <!-- ideation -->
        </div>
      </div>
      
      <div class="page-header">
        <h1>Sponsors<span></span></h1>
      </div>
      
      <div class="row section-sponsor">
        <div class="span12 offset2">
          <?= p_wiki_xhtml("fr:sponsor") ?>
        </div>
      </div>
      
      <div class="page-header">
        <h1>A propos<span></span></h1>
      </div>

      <div class="row section-about">
        <div class="span12 offset2">
          <?= p_wiki_xhtml("fr:about") ?>
        </div>
      </div>


      <footer>

            <p>&copy; make.opendata.ch</p>

      </footer>

    </div> <!-- /container -->

  </body>
</html>