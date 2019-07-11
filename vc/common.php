<?php
if(!isset($_SESSION)) { 
    session_start(); 
}
header('Cache-control: private'); // IE 6 FIX

function get_client_ip_env() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
 
    return $ipaddress;
}
//$country='';
@$ip=get_client_ip_env();
@$detailsCountry = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
@$country=$detailsCountry->country;

if(isSet($_GET['lang'])) {
$lang = $_GET['lang'];
// register the session and set the cookie
$_SESSION['lang'] = $lang;
setcookie("lang", $lang, time() + (3600 * 24 * 30));
} else if(isSet($_SESSION['lang'])) {
$lang = $_SESSION['lang'];
} else if(isSet($_COOKIE['lang'])) {
$lang = $_COOKIE['lang'];
} else {
	
if($country=='IN'){
	$lang = 'en';
	}else if($country=='DE'){
	 $lang = 'en';
	}else if($country=='ES'){
	$lang = 'en';
	}else if($country=='FR'){
	$lang = 'en';
	}else if($country=='IT' || $country=='GB'){
	$lang = 'en';
	}else if($country=='NL'){
	$lang = 'en';
	}else if($country=='PL'){
	$lang = 'en';
	}else if($country=='RU'){
	$lang = 'en';
	}else if($country=='SV' || $country=='SE'){
	$lang = 'en';
	}else if($country=='tl'){
	$lang = 'en';
	}else if($country=='zh' || $country=='ZH' || $country=='CN'){
	//$lang = 'zh';
    $lang = 'en';
	 }else{	
      $lang = 'en';
		}	
}

switch ($lang) {
  case 'en':
  $lang_file = 'lang.en.php';
  break;

  case 'de':
  $lang_file = 'lang.de.php';
  break;

  case 'es':
  $lang_file = 'lang.es.php';
  break;
  
  case 'fr':
  $lang_file = 'lang.fr.php';
  break;
  
  case 'it':
  $lang_file = 'lang.it.php';
  break;
  
  case 'nl':
  $lang_file = 'lang.nl.php';
  break;
  
  case 'pl':
  $lang_file = 'lang.pl.php';
  break;
  
  case 'ru':
  $lang_file = 'lang.ru.php';
  break;
  
  case 'sv':
  $lang_file = 'lang.sv.php';
  break;
  
  case 'tl':
  $lang_file = 'lang.tl.php';
  break;
  
  case 'zh':
  $lang_file = 'lang.zh.php';
  break;

  default:
  $lang_file = 'lang.en.php';

}

include_once '../languages/'.$lang_file;
?>