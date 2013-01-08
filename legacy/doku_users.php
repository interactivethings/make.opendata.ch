<?php

/* DokuWiki setup */
if(!defined('DOKU_INC')) define('DOKU_INC',dirname(__FILE__).'/');
require_once(DOKU_INC.'inc/init.php');

if(!isset($_SERVER['REMOTE_USER'])) die('');

if(!getUserList()) die('Error');

// Get DokuWiki data
function getUserList() {
	global $auth;
	if (!$auth) return false;
	if(!$auth->canDo('getUserCount')) return false;
	
	$filter = array();
	$start = 0;
	$pagesize = 200;
	
	$usergroups = $_REQUEST['usergroups'];
	if ($usergroups == "lausanne" || $usergroups == "zurich" || $usergroups == "user") {
    $filter['grps'] = $usergroups;
  } else {
    ptln('<form method="post">');
    ptln('<input type="checkbox" name="csv" value="1"> CSV format');
    ptln('<button name="usergroups" value="lausanne">Lausanne</button>');
    ptln('<button name="usergroups" value="zurich">Zürich</button>');
    ptln('<button name="usergroups" value="user">Users</button>');
    ptln('</form>');
    return true;
  }
  
  $outputCSV = ($_REQUEST['csv'] == "1");
	
	$userCount = $auth->getUserCount($filter);
	
	if ($userCount && $userCount > 0) {
  
    if ($outputCSV) {
      // output headers so that the file is downloaded rather than displayed
      header('Content-Type: text/csv; charset=utf-8');
      header('Content-Disposition: attachment; filename=' . $usergroups . '.csv');
    }
    
    $user_list = $auth->retrieveUsers($start, $pagesize, $filter);
    foreach ($user_list as $user => $userinfo) {
      extract($userinfo);
      if ($outputCSV) {
        ptln("".hsc($name).";".hsc($mail)."");
      } else {
        echo("".hsc($name)." &lt;".hsc($mail)."&gt;; ");
      }
    }
    
	}

	return true;
}

?>
