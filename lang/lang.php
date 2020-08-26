<?php


if(isset($HTTP_COOKIE_VARS['lang'])) {
    $lang = $HTTP_COOKIE_VARS['lang'];
}
else {
    $lang = substr($HTTP_SERVER_VARS['HTTP_ACCEPT_LANGUAGE'],0,2);
}

$expire = 365*24*3600;
setcookie("lang", $lang, time() + $expire);

switch($lang) {
    case 'fr':
        include('lang/fr-lang.php');
    break;
    case 'en':
        include('lang/en-lang.php');
    break;
}
?>
