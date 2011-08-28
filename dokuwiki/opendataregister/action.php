<?php
/**
 * OpenData.ch registration plugin
 *
 * Based on DokuWiki CAPTCHA plugin 
 * https://github.com/splitbrain/dokuwiki-plugin-captcha
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Oleg Lavrovsky (http://oleg.utou.ch)
 */

// must be run within Dokuwiki
if(!defined('DOKU_INC')) die();

if(!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');
require_once(DOKU_PLUGIN.'action.php');

class action_plugin_opendataregister extends DokuWiki_Action_Plugin {

	var $infos = null;

    /**
     * register the eventhandlers
     */
    function register(&$controller){

		$controller->register_hook('ACTION_ACT_PREPROCESS',
                                   'BEFORE',
                                   $this,
                                   'handle_act_preprocess',
                                   array());

		$controller->register_hook('AUTH_USER_CHANGE',
                                   'AFTER',
                                   $this,
                                   'handle_act_userchange',
                                   array());

        $controller->register_hook('HTML_REGISTERFORM_OUTPUT',
                                   'BEFORE',
                                   $this,
                                   'handle_editform_output',
                                   array());

    }
    
    /**
     * Will intercept the 'register' action and save the form
     */
    function handle_act_preprocess(&$event, $param){
   
        $act = $this->_act_clean($event->data);
        if (!('register' == $act)) return;
        if ($_POST['save']) {
        	// grab form data
        	$login = 		$_POST['login'];
			$opendata1 = 	$_POST['opendata1'];
        	$this->infos = array($login, $opendata1);
        }
       	return;
       	
    }
    
    /**
     * Will intercept the user update and add our data to the profile
     */
    function handle_act_userchange(&$event, $param){   	
	    global $conf;
		global $USERINFO;
		global $auth;
		global $lang;
		
		if (!($this->infos && $event->data['type'] == 'create')) return;
		   
        // get user info
        $user = $this->infos[0];
        $mygroup = $this->infos[1];
		if (!($mygroup == "zurich" || $mygroup == "lausanne")) {
			die('invalid group');
		}
				
		// find the user
		if (!$auth) die('no auth');
		if (is_null($user)) die('no user');
		
		// check group match
		$userinfo = $auth->getUserData($user);
		if (!($userinfo['grps'][0] == "user")) die('not a user');
		
		// add to the group
		$changes['grps'] = array('user', $mygroup);
		$auth->triggerUserMod('modify', array($user, $changes));
		
		// append to note
		$lang['regsuccess'] = $lang['regsuccess'] . " <br/> Anmeldung elforgreich / Vous êtes inscrit / You have registered for " . ucfirst($mygroup);

    }


    /**
     * Create the additional fields for the edit form
     */
    function handle_editform_output(&$event, $param){
        
        $out = '<div class="block"><span></span> <input type="radio" name="opendata1" value="lausanne" checked> Lausanne</input> &nbsp; <input type="radio" name="opendata1" value="zurich"> Zürich</input> </div><br/>';
        
        $pos = $event->data->findElementByAttribute('type','submit');

        $event->data->insertElement($pos++,$out);

    }

	/**
     * Pre-Sanitize the action command
     *
     * Similar to act_clean in action.php but simplified and without
     * error messages
     */
    function _act_clean($act){
         // check if the action was given as array key
         if(is_array($act)){
           list($act) = array_keys($act);
         }

         //remove all bad chars
         $act = strtolower($act);
         $act = preg_replace('/[^a-z_]+/','',$act);

         return $act;
     }
}

