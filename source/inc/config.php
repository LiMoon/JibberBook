<?php
//-------------------------------------------------------------------------------------
//	JibberBook v2.0
//	(c) 2007 Chris Jaure
//	license: MIT License
//	website: http://www.chromasynthetic.com/
//
//	inc/config.php
//-------------------------------------------------------------------------------------

// misc settings
define('JB_XML_FILENAME', 'comments.xml');
define('JB_INDEX', 'index.php');
define('JB_SHOW', 20);
define('JB_DATE_FORMAT', 'F j, Y \a\t H:i:s');
define('JB_THEME', 'default');
define('JB_LANGUAGE', 'en');
define('JB_ENABLE_EMOTICONS', true);
define('JB_EMOTICONS', 'emoticons/');
define('JB_EMAIL', false);

// password for admin area
define('JB_PASSWORD', 'password');

// For more information on HTML Purifier go to http://www.htmlpurifier.org/
define('JB_ENABLE_HTML_PURIFIER', true);
define('JB_ENCODING', 'UTF-8');
define('JB_DOCTYPE', 'XHTML 1.0 Strict');
define('JB_ALLOWED_ELEMENTS', 'a[href|title],img[src|title|alt],blockquote,p,em,strong,i,b,br,cite');

// Akismet settings
define('JB_AKISMET_KEY', '');
define('JB_GUESTBOOK_URL', '');

// emoticons
$EMOTICONS = array(
    ':)' =>    'smile.gif',
    ':-)' =>   'smile.gif',
    '^_^' =>   'squee.gif',
    ':(' =>    'sad.gif',
    ':-(' =>   'sad.gif',
    'XD' =>    'yesh.gif',
    ':D' =>    'biggrin.gif',
    '=D' =>    'happy.gif',
    ';)' =>    'wink.gif',
    ":'(" =>   'cry.gif',
    'X(' =>    'angry.gif',
    'DX' =>    'yell.gif',
    'D:' =>    'jawdrop.gif',
    ':/' =>    'befuddled.gif',
    ':\\' =>   'befuddled.gif',
    ':|' =>    'blank.gif',
    'X|' =>    'dead.gif',
    ':p' =>    'razz.gif',
    ':P' =>    'razz.gif',
    ':S' =>    'squiggle.gif',
    ':s' =>    'squiggle.gif',
    '<3' =>    'love.gif',
    '>_<' =>   'frustrated.gif',
    '=3' =>    'numnum.gif',
    ':o' =>    'gasp.gif',
    ':O' =>    'gasp.gif',
    "-_-;" =>  'sweatdropworried.gif',
    ':<' =>    'sigh.gif',
    ':">' =>   'blush.gif',
    '>.>' =>   'shifty.gif',
    '<.<' =>   'shifty.gif'
);


// STOP EDITING -----------------------------------------------------------------------

// version numbers
define('JB_VERSION', '2.1');
define('JB_MA_VERSION', '1.2');
?>
