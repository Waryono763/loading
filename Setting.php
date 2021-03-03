<?php

$error = array(
	"Host: v4.myipstack.com",
	"Connection: keep-alive",
	"User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; SM-G532G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.93 Mobile Safari/537.36",
	"Origin: https://hide.me",
	"Referer: https://hide.me/",
	"Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7"
	);

$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://v4.myipstack.com/");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $error);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$not_found = curl_exec($ch);

