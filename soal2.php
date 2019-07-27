<?php 
	$username = "-Mark24";
	$password="codeFuture=,12";

	if (preg_match("/^[^0-9\.\-\_\@\?\!\$\#^\&\*][a-zA-Z0-9]{5,9}$/", $username)) {
		echo  "Data username valid";
	} else {
		echo  "Data username tidak valid";
	}


	if (preg_match("/^([a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[#$^+=!*()@%&]).{8,}$/", $password)) {
		echo  "<br> Data password valid";
	} else {
		echo  "<br> Data password tidak valid";
	}
?>