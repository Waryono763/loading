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

$view = "

";
$view_get=true;

$_error_ = "

";
$system_cash=true;

$wheel_versi = "1.0";
$wheel_server = "online";

$wheel = "
${kuning}>${putih} ip ${ijo}${not_found}
${kuning}>${putih} server ${ijo}${wheel_server}
${kuning}>${putih} versi ${ijo}${wheel_versi}${putih} (${ijo}Bitcoin Cash Wheel${putih})
${kuning}>${putih} created by ${biru}Waryono

${putih}         don't forget to subscribe
${putih}                (${biru}Waryono Okw${putih})
${merah}> warning !!
${kuning}> this is an illegal program
${kuning}> the risk is entirely borne by the user

";

$wheel_stat=true;

$buzz_versi = "2.5";
$buzz_server = "online";

$system_error = "
${kuning}>${putih} ip ${ijo}${not_found}
${kuning}>${putih} server ${ijo}${buzz_server}
${kuning}>${putih} versi ${ijo}${buzz_versi}${putih} (${ijo}buzzbreak${putih})
${kuning}>${putih} created by ${biru}Waryono

${putih}         don't forget to subscribe
${putih}                (${biru}Waryono Okw${putih})
${merah}> warning !!
${kuning}> this is an illegal program
${kuning}> the risk is entirely borne by the user

";

$get_buzz=true;

$leme = "

";
$get_leme=true;

$diamond = "

";
$get_diamond=true;

$clipclaps = "

";
$clip_get=true;

$free = "

";
$free_get=true;





