<?php
require_once "dropbox-sdk/Dropbox/autoload.php";
use \Dropbox as dbx;

$appInfo = dbx\AppInfo::loadFromJsonFile("app-info.json");
$webAuth = new dbx\WebAuthNoRedirect($appInfo, "PHP-Example/1.0");
$authorizeUrl = $webAuth->start();

echo "1. Go to: " . $authorizeUrl . "\n";
echo "2. Click \"Allow\" (you might have to log in first).\n";
echo "3. Copy the authorization code.\n";

//$authCode = "ZHz1lGh8SLMAAAAAAAAAxT7xRKGWWYuPkWewFjjFKic";

//echo "Access Token: " . $accessToken . "\n";
$authCode = \trim(\readline("Enter the authorization code here: "));
list($accessToken, $dropboxUserId) = $webAuth->finish($authCode);
echo "Access Token: " . $accessToken . "\n";
$dbxClient = new dbx\Client($accessToken, "PHP-Example/1.0");
$accountInfo = $dbxClient->getAccountInfo();
print_r($accountInfo);
?>
