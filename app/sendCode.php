<?php 
namespace App;
class SendCode {
	public static function sendCode($phone){
		$code = rand(1111,9999);
		$basic  = new \Nexmo\Client\Credentials\Basic('a187f7cb', '0wTWdcQfeofQEtGo');
		$client = new \Nexmo\Client($basic);

		$message = $client->message()->send([
		    'to' => '+84377026186',
		    'from' => '+0522788086',
		    'text' => 'Verify code: ' . $code,
		]);
		return $code;
	}
}
?>