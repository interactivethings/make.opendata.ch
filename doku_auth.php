<?php


/* DokuWiki setup */
if(!defined('DOKU_INC')) define('DOKU_INC',dirname(__FILE__).'/');
require_once(DOKU_INC.'inc/init.php');

if(!isset($_SERVER['REMOTE_USER'])) die('');
if(!exportUserDoku()) die('hmm');

// Get DokuWiki data
function exportUserDoku() {
	global $auth;
	if (!$auth) return false;
	
	$user_id   = $_SERVER['REMOTE_USER'];
		
	$userinfo = $auth->getUserData($user_id);
	if(!$userinfo['mail']) {
		return false;
	}
	
	$user_name = $userinfo['name'];
	$user_mail = $userinfo['mail'];
	
	// Print auth info
	echo 'UniqueID=' . $user_id . "\n";
	echo 'Name=' . $user_id . "\n"; // use login instead of full name ($user_name)
	echo 'Email=' . $user_mail . "\n";
	
	/*
	setAuthCookie('UniqueID', $user_id);
	setAuthCookie('Name', $user_name);
	setAuthCookie('Email', $user_email);
	//TransientKey=02742kjd2820
	*/
	
	
	return true;
}

/*
// Set Vanilla ProxyConnect cookie
function setAuthCookie($auth_cookie_name, $auth_cookie) {

	$VanillaCookiePath = '/';
   	$VanillaCookieDomain = '.makeopendata.ch';
   	$secure = false;
   	$expire = time() + 172800; // 2 days
	
	if ( version_compare(phpversion(), '5.2.0', 'ge') ) {
   		setcookie($auth_cookie_name, $auth_cookie, $expire, $VanillaCookiePath, $VanillaCookieDomain, $secure, true);
   		setcookie($auth_cookie_name, $auth_cookie, $expire, $VanillaCookiePath, $VanillaCookieDomain, $secure, true);
   		setcookie(LOGGED_IN_COOKIE, $logged_in_cookie, $expire, $VanillaCookiePath, $VanillaCookieDomain, false, true);
   		if ( COOKIEPATH != SITECOOKIEPATH )
   			setcookie(LOGGED_IN_COOKIE, $logged_in_cookie, $expire, $VanillaCookiePath, $VanillaCookieDomain, false, true);
   	} else {
   		$cookie_domain = $VanillaCookieDomain;
   		if ( !empty($cookie_domain) )
   			$cookie_domain .= '; HttpOnly';
   		setcookie($auth_cookie_name, $auth_cookie, $expire, $VanillaCookiePath, $cookie_domain, $secure);
   		setcookie($auth_cookie_name, $auth_cookie, $expire, $VanillaCookiePath, $cookie_domain, $secure);
   		setcookie(LOGGED_IN_COOKIE, $logged_in_cookie, $expire, $VanillaCookiePath, $cookie_domain);
   		if ( COOKIEPATH != SITECOOKIEPATH )
   			setcookie(LOGGED_IN_COOKIE, $logged_in_cookie, $expire, $VanillaCookiePath, $cookie_domain);
   	}
}
*/      
?>
