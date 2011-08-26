<?php

/* DokuWiki setup */
if(!defined('DOKU_INC')) define('DOKU_INC',dirname(__FILE__).'/');
require_once(DOKU_INC.'inc/init.php');

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MakeOpenData.ch</title>
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
          <h1 id="logo"><img src="assets/app/images/make.opendata.ch_logo.png" width="220" height="225" alt="MAKE.OPENDATA.CH HACKATHON" /></h1>
        </div>
        <div class="span10">
          <p class="blurb">The first Open Data Hackathon in Switzerland<br />30 September – 1 October 2011<br />Zürich and Lausanne</p>
        </div>
        
        <div class="lang">
          <ul>
          	<li><a class="btn" href="index.fr.php">Français</a></li>
          	<li><a class="btn" href="index.de.php">Deutsch</a></li>
          </ul>
        </div>
      </div>
      <div class="page-header">
        <h1>What?<span></span></h1>
      </div>
      
      <div class="row">
        <div class="span12 offset2">
          <?= p_wiki_xhtml("en:what") ?>
        
	      <p><a class="btn" href="doku.php?id=en:home&do=register&lang=en">Register</a>
	         <a class="btn" href="doku.php?id=en:home&do=login&lang=en">Login and contribute</a></p>
	    </div>
      </div>
      
      <div class="page-header">
        <h1>For whom?<span></span></h1>
      </div>
      
      <div class="row">
        <div class="span12 offset2">
         	<?= p_wiki_xhtml("en:who") ?>
        </div>
      </div>
      
      <div class="page-header">
        <h1>When?<span></span></h1>
      </div>
      
      <div class="row">
        <div class="span12 offset2">
			<?= p_wiki_xhtml("en:when") ?>
        </div>
      </div>
      
      <div class="page-header">
        <h1>Where?<span></span></h1>
      </div>
      
      <div class="row">
        <div class="span12 offset2">
          <?= p_wiki_xhtml("en:where") ?>
        
        	<p><a class="btn" href="doku.php?id=en:home&do=register&lang=en">Register now</a></p>
		    
        </div>
      </div>
      
      <div class="page-header">
        <h1>How?<span></span></h1>
      </div>
      
      <div class="row">
        <div class="span12 offset2">
          <?= p_wiki_xhtml("en:how") ?>
          
          <p><form name="ideate" method="get" action="#" onSubmit="document.location.href = 'doku.php?do=edit&id=idea:' + document.getElementById('ideate_id').value.replace(/[-\\.,_*+&#?^$[\](){}!=|]/g,'').replace(/\s/g,'_'); return false">
          <b>My idea:</b>
          <input name="id" id="ideate_id" type="text" maxlength="16" size="16" value="" />
          <input type="submit" />
          </form></p>
        </div>
      </div>
      
      <div class="page-header">
        <h1>Sponsors<span></span></h1>
      </div>
      
      <div class="row">
        <div class="span12 offset2">
          <?= p_wiki_xhtml("en:sponsor") ?>
        </div>
      </div>
      
      <div class="page-header">
        <h1>About us<span></span></h1>
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
