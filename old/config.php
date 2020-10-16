<?php
/*
 * Projeggt Framework
 * Copyright © Let's Projeggt S.L
 */

// System path (optional)
//$_config['path'] = './';

// Set Host
$_config['domain'] = $_SERVER['HTTP_HOST'];

// HTTP/HTTPS mode
$_config['http_mode'] = "http://";

// Domain name
$_config['domainName'] = "projeggt.com";


// Redirect to WWW
if ($_config['domain'] == $_config['domainName']) {
    header("Location: ". $_config['http_mode']."www." . $_config['domainName'] . $_SERVER['REQUEST_URI']);
    exit;
}

/*
 * Redirect Domains
 */

// quierosermecenas.com
if ($_config['domain'] == "quierosermecenas.com" or $_config['domain'] == "www.quierosermecenas.com"){
	header("Location: ". $_config['http_mode']."www." . $_config['domainName'] . $_SERVER['REQUEST_URI']);
	exit;
}

// pggt.me
if ($_config['domain'] == "pggt.me" or $_config['domain'] == "www.pggt.me"){
	header("Location: ". $_config['http_mode']."www." . $_config['domainName'] . $_SERVER['REQUEST_URI']);
	exit;
}


/*
 * END REDIRECT
 */

// Mode maintenance
$_config['maintenance'] = false;

// Dev Mode
$_config['dev'] = false;

// MANDRILL
$_config['mandrill'] = true;
$_config['MANDRILL_USERNAME'] = 'contact@projeggt.com';
$_config['MANDRILL_APIKEY'] = 'xhU-XL-c9J7Yb6zaUMvRGg'; //TEST 7nMMxn32BF1Zec35TEzKnQ

// Contact mail
$_config['contact_email'] = "contact@projeggt.com";

// Random variable to FrontEnd files
$_config['randomVar'] = "20140213";

// Template cache (Twig)
$_config['template_cache'] = false;

// Auto reload cache (Twig)
$_config['cache_auto_reload'] = true;

// Default Language
$_config['language'] = 1;

// Domains with language
$_config['tld'] = array(
	".com" => 1,
	".co.uk" => 1,
	".es" => 2,
	".cat" => 3,
	".fr" => 4
);


// Database configuration
$_config['ddbb']['hostname'] = 'localhost';
$_config['ddbb']['username'] = 'projeggt_projegg';
$_config['ddbb']['password'] = '_$FPus41t7';
$_config['ddbb']['database'] = 'projeggt_projeggt';

// Upload care KEY (CKeditor)
$_config['uploadcare'] = "88b76082c0d9b9de2ed3";

// Mailing config
$_config['mail']['fromMail'] = &$_config['contact_email'];
$_config['mail']['fromName'] = "Projeggt";

/*
 * TPV Configuration
 */

/*
$_config['tpv']['url'] = 'https://sis-t.sermepa.es:25443/sis/realizarPago'; // Sandbox
$_config['tpv']['url_complete'] = 'https://sis-t.sermepa.es:25443/sis/operaciones'; // Sandbox
$_config['tpv']['key'] = 'qwertyasdf0123456789';
$_config['tpv']['merchantName'] = "Let's Projeggt S.L.";
$_config['tpv']['code'] = '327021861';
$_config['tpv']['terminal'] = '1';
*/

$_config['tpv']['url'] = 'https://sis.sermepa.es/sis/realizarPago'; // Production
$_config['tpv']['url_complete'] = 'https://sis.sermepa.es/sis/operaciones'; // Production
$_config['tpv']['key'] = 'asdfqw4tqehgwrtjhw6u';
$_config['tpv']['merchantName'] = "Let's Projeggt S.L.";
$_config['tpv']['code'] = '327021861';
$_config['tpv']['terminal'] = '1';

$_config['tpv']['urlMerchant'] = 'http://' . $_config['domain'] . '/tpv-response/';
$_config['tpv']['urlMerchant_complete'] = 'http://' . $_config['domain'] . '/tpv-response-complete/';

// Currency
$_config['currency']['EUR'] = 978;

// Cookies
$_config['cookie_name'] = 'projeggt';
$_config['cookie_domain'] = $_config['domain'];
$_config['cookie_path'] = "/";

// Analytics
$_config['google_analytics'] = "UA-26454384-1";

// Social
$_config['social']['twitter'] = "http://twitter.com/projeggt";
$_config['social']['facebook'] = "https://www.facebook.com/pages/Projeggt/120819748002093";
$_config['social']['googleplus'] = "https://plus.google.com/106790901692665242228";
$_config['social']['linkedin'] = "http://www.linkedin.com/company/let's-projeggt/";
$_config['social']['youtube'] = "http://www.youtube.com/user/projeggt";
$_config['social']['vimeo'] = "http://vimeo.com/projeggt";

/*
 * Cypher
 *
 * /!\ /!\ /!\ /!\ /!\ /!\ /!\ /!\ /!\ /!\ /!\ /!\ /!\ /!\
 * /!\ /!\ /!\ /!\ /!\ WARNING /!\ /!\ /!\ /!\ /!\ /!\ /!\
 * /!\ /!\ /!\ /!\ /!\ /!\ /!\ /!\ /!\ /!\ /!\ /!\ /!\ /!\
 * PLEASE DON'T CHANGE OR DELETE
 *
 */
$_config['cipher_key'] = 'KDE6uy8eu7jbVUi4W5pZQ5IpdkYcJhqV';

/*
 * Global variables DO NOT TOUCH
 */

$_user = '';
$_language = '';

?>
