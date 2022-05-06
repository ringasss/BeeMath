<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '934953259518-h9gsbvgbojbauot44uv9juri0s8t43sv.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'igqr9t8SATup5P6XcqKxezec'; //Google client secret
$redirectURL = 'http://www.piratamatematico.com.br'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Pirata Matemático');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>