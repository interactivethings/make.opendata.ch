<?php

/* DokuWiki setup */
if(!defined('DOKU_INC')) define('DOKU_INC',dirname(__FILE__).'/');
require_once(DOKU_INC.'inc/init.php');

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MAKE.OPENDATA.CH – Swiss Open Data Camp</title>
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

  </head>

  <body>
    <div class="container">
      <div id="header" class="row">
        <div class="span4">
          <h1 id="logo"><img src="assets/app/images/make.opendata.ch_logo.png" alt="MAKE.OPENDATA.CH CAMP" /></h1>
        </div>
        <div class="span8">
          <h2 id="date">30 September – 1 October 2011</h2>
          <p id="blurb">The first Open Data Camp in Switzerland brings together thinker and creator to collectively make change happen.</p>
        </div>
        <!-- <div id="action">
          <a class="btn" href="doku.php?id=de:home&do=register&lang=en">Register</a>
        </div> -->
        <div id="utilities">
          <ul>
            <li id="share_slider" class="slider">
              <span class="slide_label">
                Share
              </span>
              <div id="share_buttons">
                <span id="share_twitter" class="share_button">
                  <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                </span>
                <span id="share_facebook" class="share_button">
                  <div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=141719789255556&amp;xfbml=1"></script><fb:like href="http://makeopendata.ch/" send="false" layout="button_count" width="100" show_faces="false" font="arial"></fb:like>
                </span>
                <span id="share_google" class="share_button">
                  <g:plusone size="medium"></g:plusone>
                </span>
              </div>
            </li>
            <li id="contact_slider" class="slider">
              <span class="slide_label">
                Contact
              </span>
              <div id="contact_buttons">
                <span id="contact_twitter" class="contact_button">
                  <a href="http://twitter.com/opendataCH">Twitter</a>
                </span>
                <span id="contact_email" class="contact_button">
                  <a href="mailto:info@opendata.ch">Email</a>
                </span>
              </div>
            </li>
            <li class="language"><a href="index.de.php">DE</a></li>
            <li class="language"><a href="index.fr.php">FR</a></li>
          </ul>
        </div>
      </div>
      <div class="page-header">
        <h1>What<span></span></h1>
      </div>

      <div class="row section-what">
        <div class="span14 offset2">
          <?= p_wiki_xhtml("en:what") ?>
	    </div>
      </div>

      <div class="page-header">
        <h1>Who<span></span></h1>
      </div>

      <div class="row section-who">
        <div class="span14 offset2">
         	<?= p_wiki_xhtml("en:who") ?>
        </div>
      </div>

      <div class="page-header">
        <h1>When<span></span></h1>
      </div>

      <div class="row section-when">
        <div class="span14 offset2">
          <?= p_wiki_xhtml("en:when") ?>
        </div>
      </div>

      <div class="page-header">
        <h1>Where<span></span></h1>
      </div>

      <div class="row section-where">
        <div class="span14 offset2">
          <?= p_wiki_xhtml("en:where") ?>
        </div>
      </div>

      <div class="page-header">
        <h1>About us<span></span></h1>
      </div>

      <div class="row section-about">
        <div class="span14 offset2">
          <?= p_wiki_xhtml("en:about") ?>
        </div>
      </div>

      <div class="page-header">
        <h1>Sponsors<span></span></h1>
      </div>

      <div class="row section-sponsor">
        <div class="span14 offset2">
          <?= p_wiki_xhtml("en:sponsor") ?>
        </div>
      </div>

    </div><!-- #content -->
    <div id="footer">
      <p>&copy; make.opendata.ch</p>
    </div>
  </div> <!-- /container -->
    <script type="text/javascript" src="assets/vendor/jquery/jquery-1.6.min.js"></script>
    <script type="text/javascript" src="assets/vendor/jquery.waypoints/waypoints.min.js"></script>
    <script src="https://apis.google.com/js/plusone.js"></script>
    <script type="text/javascript" src="assets/app/javascripts/base.js"></script>
    <? include("analytics.html"); ?>
  </body>
</html>
