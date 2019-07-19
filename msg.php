<?php
	// Authorisation details.
	$username = "praneethbyna@gmail.com";
	$hash = "a6d6ab82fdb4ca041b40a7ee144fbe3b08e1577294783e3a74be55d9756a7dcd";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "1";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "8919354338"; // A single number or a comma-seperated list of numbers
	$message = "hii good morning";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); 
    echo $result;// This is the result from the API
	curl_close($ch);
?>