<?php
// $db = new mysqli("eyekandiesnew.mysql.db", "eyekandiesnew", "KandiData333", "eyekandiesnew");
$db = new mysqli("localhost", "root", "", "eyekandiesnew");

$GLOBALS['dbh'] = $db;
define('BASE_URL','https://eyekandimodels.co.uk/');
// define('BASE_URL','http://127.0.0.1:8080/eyekandimodels/');
define('DIR',$_SERVER['DOCUMENT_ROOT'].'/');
//Define demo url
define('DEMO_URL','');
//==== twitter api define ==================//
//define('CONSUMER_KEY','OsY3PlbCMqj3WurX23SprEgBs');
//define('CONSUMER_SECRET','uJCbI4ae71HrlJ6AbMBMnYxoElxieTSMf2dDVJbSyqET4j7OKt
//');
define('CONSUMER_KEY','Iq8fYhDFTCxFjhYoLFiruz0FP');
define('CONSUMER_SECRET','AnMd9h0ZXiIvVDsMwi0zWl32BnW2vN9F53fId7aP7fvu87F0xQ');
define('OAUTH_CALLBACK','https://eyekandimodels.co.uk/performer/test_twiiter.html');
// define('OAUTH_CALLBACK','http://127.0.0.1:8080/models/performer/test_twiiter.php');

//===================== ===================//
require('affiliate.php');
$title['index'] = 'Eye Kandi Models: UK’s top Webcam Modelling Agency';
$description['index'] = 'Join the UK’s best rated webcam model agency and get paid directly into your bank account whilst working from home.';
$title['tips'] = 'Eye Kandi Models | Tips';
$description['tips'] = 'Becoming a successful webcam model can be stressful for beginners. We have got you covered, read our tips and advice online.';
$title['termsandconditions'] = 'Eye Kandi Models | Terms and Conditions';
$description['termsandconditions'] = 'Here you can find all of our terms and conditions to become a webcam model with us at Eye Kandi Models.';
$description['howitworks'] = 'STEP 1. You will need. ✓To be 18 years old or over; ✓ Have valid identification - Passport, Driving license ✓ Have a webcam and computer.';
$title['forgottenpasword'] = 'Eye Kandi Models: Forgotten your password?';
$description['forgottenpasword'] = 'Forgotten your password? No problem, tell us your email address and we will send you a reminder.';
$title['faqs'] = 'Eye Kandi Models | Frequently asked questions';
$description['faqs'] = 'What is a webcam model? How much can I earn?  What do I need? All your questions are answered here.';
$title['apply'] = 'Eye Kandi Models | Become an Eye Kandi Model';
$description['apply'] = 'Sign up today and become a webcam model, please note you must be 18 or older in order to become a webcam model.';
$title['account'] = 'Eye Kandi Models | Account';
$description['account'] = 'Eye Kandi Models Account.';
$title['aboutus'] = 'Eye Kandi Models | About Us';
$title['howitworks'] = 'Eye Kandi Models: How webcam modelling works';
$title['cookieconsent'] = 'Eye Kandi Models: Cookie Consent';
$description['cookieconsent'] = 'By using eyekandimodels.co.uk you give us permission to store cookies on your device, to make the world a better place';
$description['aboutus'] = 'Eye Kandi Models pride ourselves on delivering customer satisfaction and on helping our models become successful within the industry with our friendly staff.';
$title['login'] = 'Eye Kandi Models | Login';
$description['login'] = 'Log into your Eye Kandi account and start making money today.';
$title['18_usc_2257'] = 'Eye Kandi Models: 18 USC Compliance';
$title['error_404'] = 'Eye Kandi Models: 404 page';
$description['error_404'] = 'Uh Oh, we think you’re trying to find something we don’t have. Go back to our home page and try again';
$description['18_usc_2257'] = 'In compliance with U.S.C. Title 18, Sections 2257 and 2257A and related regulations, all performers, models, actors, actresses and other persons who appear in any visual depiction of actual or simulated sexually explicit conduct appearing on or otherwise contained on this website are or were 18 years of age or older at the time of the creation of such depictions. Records required to be maintained pursuant to U.S.C. Title 18, Sections 2257 and 2257A are located at and maintained by:
EKM Management Limited';
function get_title(){
 $key = basename(str_replace('.php','',$_SERVER['PHP_SELF']));
 if(isset($GLOBALS['title'][$key])){
	 return $GLOBALS['title'][$key];
 }
 return $GLOBALS['title']['index'];
}
function get_description(){
 $key = basename(str_replace('.php','',$_SERVER['PHP_SELF']));
 if(isset($GLOBALS['description'][$key])){
	 return $GLOBALS['description'][$key];
 }
 return $GLOBALS['description']['index'];
}
function load_my_class($class) {
    //include 'classes/' . $class . '.class.php';
	if(file_exists(DIR . 'classes/class-'.strtolower($class).'.php')){
		require DIR .'classes/class-'.strtolower($class).'.php';
	}elseif(file_exists(DIR . 'classes/'.$class.'.php')){
		require DIR .'classes/'.$class.'.php';
	}elseif(file_exists(DIR . 'classes/'.strtolower($class).'.php')){
		require DIR .'classes/'.strtolower($class).'.php';
	}
}
spl_autoload_register('load_my_class');

include('class-eyekandi.php');

EyeKandi::init();
function userObj(){
	 return EyeKandi::getObj('Users');
}
function earningObj(){
	 return EyeKandi::getObj('Earnings');
}
function generatePerformerPayslip($e,$p){

					 global $dbh;
					 $invoice = mt_rand(100000, 999999);
					 $currentDate = date('d M Y');
	                 $amount = $e['performer_amount']; 
				     $week = date('d-M-Y',strtotime($e['created']));
					 $payment_date = date('d-M-Y',strtotime($e['payment_date']));
					//Name of the user
					  //$user_id = userObj()->current_user_id();
					  $name = $p['first']." ".$p['last']; 
					  $address = $p['address'];
					  $cityes = $p['city'];
					  $postcodes = $p['postcode'];
					  $countryes = $p['country'];
					  $display = 'Payslip';
					  $display = $p['first']." ".$p['last']; 
					  $bank_name = $e['p_bank_name'];
					  $account_number = $e['p_acc_number'];
					  $account_shortcode = $e['p_shortcode'];	
					  
					$sql = "SELECT * FROM bank_acc_type WHERE `performer_id` =".$p['id'];


					$q   = $dbh->query($sql);
					$get = $q->fetch_array(MYSQLI_ASSOC);
					$type = '';
					if(!empty($get)){
						$type = $get['type'];
					}	

					  if($type =='paypal'){
					  	$paypal_account = 'Paypal';
					  	$paypal_email = "SELECT `paypal_email_address` FROM performer_paypal_details WHERE status='1' AND performer_id =".$p['id'];
					  	$query   = $dbh->query($paypal_email);
						$getPaypalEmail = $query->fetch_array(MYSQLI_ASSOC);
					    $paypal_emails = '';
					    if(!empty($getPaypalEmail)){
					  	  $paypal_emails = $getPaypalEmail['paypal_email_address'];
					    }
					  	$html =   DIR.'pdf-html/paypal_payslip.html';
					  	$html = file_get_contents($html);
						$html = str_replace("[@name]", $name, $html);
						$html = str_replace("[@week]", $week, $html);
						$html = str_replace("[@amount]", $amount, $html);
						$html = str_replace("[@payment_method]", 'Paypal', $html);
						$html = str_replace("[@payment]", $payment_date, $html);
						$html = str_replace("[@invoice]", $invoice, $html);
						$html = str_replace("[@currentDate]", $currentDate, $html);
						$html = str_replace("[@paypal_account]", $paypal_account, $html);
						$html = str_replace("[@address]", $address, $html);
						$html = str_replace("[@cityes]", $cityes, $html);
						$html = str_replace("[@postcodes]", $postcodes, $html);
						$html = str_replace("[@countryes]", $countryes, $html);
						$html = str_replace("[@paypal_email]", $paypal_emails, $html);
					  }else{
					  	
					  	$html =   DIR.'pdf-html/payslip.html';
					  	$html = file_get_contents($html);
						$html = str_replace("[@name]", $name, $html);
						$html = str_replace("[@week]", $week, $html);
						$html = str_replace("[@amount]", $amount, $html);
						$html = str_replace("[@bank_name]", $bank_name, $html);
						$html = str_replace("[@account_number]", $account_number, $html);
						$html = str_replace("[@account_shortcode]", $account_shortcode, $html);
						$html = str_replace("[@payment_method]", 'Bank Transfer', $html);
						$html = str_replace("[@payment]", $payment_date, $html);
						$html = str_replace("[@invoice]", $invoice, $html);
						$html = str_replace("[@currentDate]", $currentDate, $html);
						$html = str_replace("[@address]", $address, $html);
						$html = str_replace("[@cityes]", $cityes, $html);
						$html = str_replace("[@postcodes]", $postcodes, $html);
						$html = str_replace("[@countryes]", $countryes, $html);
					  }	
					  
					  $generate_pdf = EyeKandi::getObj('generate_pdf');
					  //echo $generate_pdf; die;
					  $file_name = $display.'_'.$p['id'].'_'.str_replace('-', '_', $week); 
					  $title = 'Payslip '.$week;
		              $pdf =  $generate_pdf->get_pdf($html,$file_name,$title);
					  return  $pdf;		
}
function get_followers(){
	 $get_twitter_account = userObj()->get_twitter_account();
	 $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $get_twitter_account['token'], $get_twitter_account['token_secret']);
	 $det = $connection->get('users/show', array('user_id' => $get_twitter_account['t_user_id'], 'screen_name' => $get_twitter_account['screen_name']));
	 if(isset($det->followers_count)){
		 return $det->followers_count;
	 }
	 return 0;
}
function get_settings($key){
		global $dbh;
		$sql = "SELECT * FROM settings WHERE `key` ='".$key."'";
		$q   = $dbh->query($sql);
		$get = $q->fetch_array(MYSQLI_ASSOC);
		$value = '';
		if(!empty($get)){
			$value = $get['value'];
		}
		return $value;
}
function mailChimpRegistration($merge_vars){
	     include DIR.'mailChimp/Mailchimp.php';
		 $list_id =  get_settings('mailchimp_performer_list_id');
         $api_key =  get_settings('mailchimp_api_key');
         $Mailchimp = new Mailchimp( $api_key );
         $Mailchimp_Lists = new Mailchimp_Lists( $Mailchimp );
		 $subscriber = $Mailchimp_Lists->subscribe( 
						 $list_id, 
						 array( 'email' => htmlentities($a[0])),
						 $merge_vars,
						 false,
						 true,
						 false,
						 false 
				 );
}
?>