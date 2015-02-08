<?php
require_once "dropbox-sdk/Dropbox/autoload.php";
use \Dropbox as dbx;
class DropboxCon{

	function __construct() {
       print "In BaseClass constructor\n";
   	}
	public function initializeUser($webAuth){
		$authorizeUrl =$webAuth->start();
		header('Location:'.$authorizeUrl.'');
	}
	public function getUserAccessToken($authcode){

	}
	public function connectToUser(){}
}



?>