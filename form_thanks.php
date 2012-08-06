<?php

// available languages
$languages = array('de', 'fr', 'en');

// default language
$lang = 'en';

if (isset($_GET['lang']) && in_array($_GET['lang'], $languages)) {
  $lang = $_GET['lang'];
}

/* DokuWiki setup */
if(!defined('DOKU_INC')) define('DOKU_INC',dirname(__FILE__).'/');
require_once(DOKU_INC.'inc/init.php');

?><!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>MAKE.OPENDATA.CH – SIGNUP</title>
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

    <style>
      #thanks > * {
          font-size: 24px;
          line-height: 1.2;
          font-family: Times, 'Times New Roman', serif;
          font-style: italic;
      }

      #thanks h1 {
          color: white;
          margin: 25px 0px 0px 25;
          font-family: Helvetica, Arial, sans-serif;
          font-size: 30px;
          font-style: normal;
      }

      /* fix dokuwiki list */
      #thanks div.li {
          display: inline;
      }
      #thanks li {
          margin-bottom: 0.75em;
      }

      /* "list-style-type: dash" */
      #thanks ul {
          list-style-type: none;
      }
      #thanks ul li:before{
          content:"-";
          position:relative;
          left:-5px;
      }
      #thanks ul li{
          text-indent:-5px;
      }
    </style>

  </head>

  <body>
    <div class="container">
      <div id="header" class="row">
        <div class="span4">
          <h1 id="logo"><img src="assets/app/images/make.opendata.ch_logo.png" alt="MAKE.OPENDATA.CH CAMP" /></h1>
        </div>
        </div>
          <?= p_wiki_xhtml($lang . ":thanks") ?>
        </div>
      </div>

    </div><!-- #content -->
    <div id="footer">
      <p>&copy; <a href="http://opendata.ch">Opendata.ch</a></p>
    </div>
  </div> <!-- /container -->
    <script type="text/javascript" src="assets/vendor/jquery/jquery-1.6.min.js"></script>
    <script type="text/javascript" src="assets/vendor/jquery.waypoints/waypoints.min.js"></script>
    <script src="https://apis.google.com/js/plusone.js"></script>
    <script type="text/javascript" src="assets/app/javascripts/base.js"></script>
    <? include("analytics.html"); ?>
  </body>
</html>
