<?php

/* DokuWiki setup */
if(!defined('DOKU_INC')) define('DOKU_INC',dirname(__FILE__).'/');
require_once(DOKU_INC.'inc/init.php');

?><!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>MAKE.OPENDATA.CH</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="assets/vendor/bootstrap/bootstrap-1.1.0.min.css" rel="stylesheet">
    <link href="assets/app/stylesheets/base.css" rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/favicon.ico">
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
          <h1 id="logo"><img src="assets/app/images/make.opendata.ch_logo.png" width="220" height="225" alt="MAKE.OPENDATA.CH HACKATHON" /></h1>
        </div>
        <div class="span10">
          <p class="blurb">Der erste Open Data Hackathon der Schweiz<br />30. September – 1. Oktober 2011<br />Zürich und Lausanne</p>
        </div>
      </div>
      <div class="page-header">
        <h1>Was?<span></span></h1>
      </div>
      
      <div class="row">
        <div class="span12 offset2">
          <?= p_wiki_xhtml("en:what") ?>
        </div>
      </div>
      
      <div class="page-header">
        <h1>Für wen?<span></span></h1>
      </div>
      
      <div class="row">
        <div class="span12 offset2">
         	<?= p_wiki_xhtml("en:who") ?>
        </div>
      </div>
      
      <div class="page-header">
        <h1>Wann?<span></span></h1>
      </div>
      
      <div class="row">
        <div class="span12 offset2">
			<?= p_wiki_xhtml("en:when") ?>
        </div>
      </div>
      
      <div class="page-header">
        <h1>Wo?<span></span></h1>
      </div>
      
      <div class="row">
        <div class="span12 offset2">
          <?= p_wiki_xhtml("en:where") ?>
        
        	<p><a class="btn" href="doku.php?id=home&do=register">Melde Dich in Zürich an</a></p>
		    <p><a class="btn" href="doku.php?id=home&do=register">Melde Dich in Lausanne an</a></p>
		    
        </div>
      </div>
      
      <div class="page-header">
        <h1>Wie?<span></span></h1>
      </div>
      
      <div class="row">
        <div class="span12 offset2">
          <?= p_wiki_xhtml("en:how") ?>
        </div>
      </div>
      
      <div class="page-header">
        <h1>Sponsoren<span></span></h1>
      </div>
      
      <div class="row">
        <div class="span12 offset2">
          <?= p_wiki_xhtml("en:sponsor") ?>
        </div>
      </div>
      
      <div class="page-header">
        <h1>Hintergrund<span></span></h1>
      </div>

      <div class="row">
        <div class="span12 offset2">
          <?= p_wiki_xhtml("en:about") ?>
        </div>
      </div>


      <footer>

            <p>&copy; make.opendata.ch</p>

      </footer>

    </div> <!-- /container -->

  </body>
</html>
