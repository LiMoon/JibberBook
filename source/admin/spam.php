<?php
//-------------------------------------------------------------------------------------
//	JibberBook v2.0
//	(c) 2007 Chris Jaure
//	license: MIT License
//	website: http://www.chromasynthetic.com/
//
//	admin/spam.php
//-------------------------------------------------------------------------------------

require_once('../inc/config.php');
require_once('../localization/' . JB_LANGUAGE . '.php');
require_once('inc/secure.php');
$_SESSION['referer'] = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
require_once('inc/header.php');
?>

<h2><?php echo JB_T_ADMIN_ALL_SPAM; ?></h2>
<a id="delete_spam" href="actions/delete.php?type=spam"><?php echo JB_T_ADMIN_DELETE_SPAM; ?></a><br />
<?php 
require_once('actions/load.php');
loadSpam();  
?>

<?php require_once('inc/footer.php'); ?>