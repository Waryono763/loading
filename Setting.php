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
	
$versi = "1.0";
$server = "updating";
$bot = "webminer";

$capthca = "${kuning}
 ██████╗ █████╗ ██████╗ ████████╗
██╔════╝██╔══██╗██╔══██╗╚══██╔══╝
██║     ███████║██████╔╝   ██║
██║     ██╔══██║██╔═══╝    ██║4
╚██████╗██║  ██║██║        ██║Doge
 ╚═════╝╚═╝  ╚═╝╚═╝        ╚═╝
${putih}[-] version${ijo} ${versi}${putih} (${kuning}${bot}${putih})
${putih}[-] server${ijo} ${server}
${putih}[created_by]${biru} Waryono${putih} [channel_by]${biru} Kang Repot
${putih}[support_by]${biru} Sandi Pratama${putih} [channel_by]${biru} Sandi X-Dark
${putih}[-] forum diskusi ${ijo}https://t.me/belajarnuyul
${ijo}                  https://t.me/kangrepot
${merah}- - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
$pesan="${merah}[!] warning !!
${kuning}[-] ini adalah progam ilegal
[-] resiko sepenuhnya di tanggung pengguna${putih}


${kuning}[message server]${putih} Sedang Ada Pembaruaan Script !!
${putih}                 Mohon Tunggu :)
";
$nuyul=false;

$bch_versi  = "not found !";
$bch_server = "offline @!!@";
$bch_info   = "not found !";

$bchjolly = "${merah}   ___  _______ __     __     ____
${putih}  / _ )/ ___/ // / __ / /__  / / /_ __
${merah} / _  / /__/ _  / / // / _ \/ / / // /
${putih}/____/\___/_//_/  \___/\___/_/_/\_, /
                               /___/
${putih}[-] version ${ijo}${bch_versi}${putih} (${kuning}${bch_info}${putih})
${putih}[-] server ${ijo}${bch_server}
${putih}[created_by]${biru} Waryono${putih} [channel_by]${biru} Kang Repot
${putih}[support_by]${biru} Sandi Pratama${putih} [channel_by]${biru} Sandi X-Dark
${putih}[-] forum diskusi${ijo} https://t.me/belajarnuyul
${ijo}                  https://t.me/kangrepot
${merah}- - - - - - - - - - - - - - - - - - - - - - - - - - -
${merah}[!] warning !!
${kuning}[-] ini adalah progam ilegal
${kuning}[-] resiko sepenuhnya di tanggung pengguna

${putih}[message server] ${merah}Bch Jolly Sudah Scam / coid!!
${merah}                 Script Di Non Aktifkan @!!@
";
$bot=false;


$vova_versi  = "1.0";
$vova_server = "online";
$vova_info   = "susbcribe dong 😚";

$vova = "${putih}[-] ip ${ijo}${not_found}
${putih}[-] script ->${kuning} [vova]
${putih}[-] version${ijo} $vova_versi${putih} [${kuning}$vova_info${putih}]
${putih}[-] server bot ${ijo}${vova_server}
${putih}[-] Created by${biru} Waryono${putih} &&${biru} Sandi Pratama

${kuning}             ~ please subscribe channel ~
${biru}                     Sandi X-Dark
${biru}                      Kang Repot
${merah}[!] warning !!
${kuning}[-] ini adalah proggam ilegal
${kuning}[-] resiko sepenuh nya di tanggung pengguna

${kuning}[!]${putih} peringatan aplikasi vova yang bertenak ,
    itu bukan paypal melainkan kupon sampah,
    jadi jangan mainkan karna itu bukan paypal !!.
    
${merah}[-] script nonaktif .

";

$eggs_bot=false;

$play_on = "online";
$play_v = "10.2.14";
$play = "
${merah}██${putih}██${merah}██${putih}╗ ██╗  ${merah}    ███${putih}██╗${merah} ██╗   ${putih}██╗
${putih}██╔══██${merah}╗██║ ${putih}    ██╔═${merah}═██╗${putih}╚██╗${merah} ██╔╝${merah} P
${merah}██${putih}██${merah}██╔${putih}╝██║ ${merah}    ████${putih}███║ ${merah}╚██${putih}██╔╝${putih} L
${putih}██╔═══${merah}╝ ██║  ${putih}   ██╔═${merah}═██║${putih}  ╚█${merah}█╔╝${merah} A
${merah}██║  ${putih}   ██${merah}███${putih}██${merah}╗██║${putih}  ██║ ${merah}  █${putih}█║${putih} Y
${merah}╚═╝     ╚══════╝╚═╝  ╚═╝   ╚═╝\n
${merah}[${putih}script${merah}] ${putih}version 10.2.14${merah}(${putih}claim rewards${merah})
${merah}[server] ${putih}$play_on
${merah}[${putih}created_by${merah}]${putih} Waryono${merah} [${putih}channel_by${merah}]${putih} Kang Repot
${merah}[${putih}created_by${merah}]${putih} Sandi Pratama${merah} [${putih}channel_by${merah}]${putih} Sandi X-Dark
${merah}-${putih} -${merah} - ${putih}- ${merah}-${putih} -${merah} - ${putih}- ${merah}-${putih} -${merah} - ${putih}- ${merah}-${putih} -${merah} - ${putih}- ${merah}-${putih} -${merah} - ${putih}- ${merah}-${putih} -${merah} - ${putih}- ${merah}-${putih} -${merah} - ${putih}- ${merah}-${putih} -
[${merah}!${putih}]${merah} warning ${putih}
[${merah}-${putih}] ${merah}ini adalah progam ilegal ${putih}!!
[${merah}-${putih}] ${merah}resiko di tanggung oleh pengguna ${putih}!!

";
$play_bot=true;

$buzz_versi  = "1.1";
$buzz_server = "online";
$buzz_info   = "bonus / video / news";



$buzz = "${merah}
 >>|<<${ijo}   _______  __   __  _______  _______${merah}   >>|<<
${ijo}        |  _    ||  | |  ||       ||       |
        | |_|   ||  | |  ||____   ||____   |
        |       ||  |_|  | ____|  | ____|  |
        |  _   | |       || ______|| ______|
        | |_|   ||       || |_____ | |_____
${merah} >>|<<${ijo}  |_______||_______||_______||_______|${merah}  >>|<<
${putih}[-] version ${ijo}${buzz_versi}${putih} (${kuning}${buzz_info}${putih})
${putih}[-] server ${ijo}${buzz_server}
${putih}[created_by]${biru} Waryono_Id${putih}    [channel_by]${biru} Kang Repot
${putih}[support_by]${biru} Sandi Pratama${putih} [channel_by]${biru} Sandi X-Dark
${putih}[-] forum diskusi${ijo} https://t.me/belajarnuyul
${ijo}                  https://t.me/kangrepot
${merah}- - - - - - - - - - - - - - - - - - - - - - - - - - -
${merah}[!] warning !!
${kuning}[-] ini adalah progam ilegal
${kuning}[-] resiko sepenuhnya di tanggung pengguna

${putih} Script Link -> ${ijo}https://duit.cc/dAP
${putih} Script Sudah Di Update Silahkan Download :)


";

$buzz_bot=false;

$buzz_versi  = "1.5";
$buzz_server = "online";
$buzz_info   = "bonus / video / news";
$buzz_pp = "${merah}
 >>|<<${ijo}   _______  __   __  _______  _______${merah}   >>|<<
${ijo}        |  _    ||  | |  ||       ||       |
        | |_|   ||  | |  ||____   ||____   |
        |       ||  |_|  | ____|  | ____|  |
        |  _   | |       || ______|| ______|
        | |_|   ||       || |_____ | |_____
${merah} >>|<<${ijo}  |_______||_______||_______||_______|${merah}  >>|<<

${putih}[-] version ${ijo}${buzz_versi}${putih} (${kuning}${buzz_info}${putih})
${putih}[-] server ${ijo}${buzz_server}
${putih}[created_by]${biru} Waryono_Id${putih}    [channel_by]${biru} Kang Repot
${putih}[support_by]${biru} Sandi Pratama${putih} [channel_by]${biru} Sandi X-Dark
${putih}[-] forum diskusi${ijo} https://t.me/belajarnuyul
${ijo}                  https://t.me/kangrepot
${merah}- - - - - - - - - - - - - - - - - - - - - - - - - - -
${merah}[!] warning !!
${kuning}[-] ini adalah progam ilegal
${kuning}[-] resiko sepenuhnya di tanggung pengguna

${putih}[update script]
${ijo}1 Fix error
2 bug
3 bacot

${putih} script link ->${merah} https://duit.cc/dAP

";

$buzz_kontol=false;


$buzz_versi1  = "2.0";
$buzz_server1 = "online";
$bot_info1   = "bonus / news / video";

$break_banner = "${putih}[-] please download termux v-0.83
${putih}[-] ip${ijo} ${not_found}
${putih}[-] script ->${ijo} [buzzbreak]
${putih}[-] version${ijo} $buzz_versi1${putih} [${kuning}$bot_info1${putih}]
${putih}[-] server bot ${ijo}${buzz_server1}
${putih}[-] Created by${biru} Waryono${putih} &&${biru} Sandi Pratama

${kuning}             ~ please subscribe channel ~
${biru}                     Sandi X-Dark
${biru}                      Kang Repot
${merah}[!] warning !!
${kuning}[-] ini adalah proggam ilegal
${kuning}[-] resiko sepenuh nya di tanggung pengguna

";
$system=true;



$doge_server = "online";
$doge_versi  = "1.0";
$doge_info   = "mining";

$doge_banner = "
${putih}[-] ip${ijo} ${not_found}
${putih}[-] script ->${ijo} [doge dixmine]
${putih}[-] version${ijo} ${doge_versi}${putih} [${kuning}${doge_info}${putih}]
${putih}[-] server bot${ijo} ${doge_server}
${putih}[-] Created by${biru} Waryono ${putih}&&${biru} Sandi Pratama

${kuning}            ~ please subscribe channel ~
${biru}                    Sandi X-Dark
${biru}                     Kang Repot
${merah}[!] warning !!
${kuning}[-] ini adalah proggam ilegal
${kuning}[-] resiko sepenuh nya di tanggung pengguna

";
$doge=true;


$wheel_info   = "susbcribe dong 😚";
$wheel_versi  = "1.0";
$wheel_server = "online";                                                               

$wheel = "${putih}[-] please download termux v-0.83
${putih}[-] ip ${ijo}${not_found}
${putih}[-] script ->${kuning} [Bitcoin cash wheel]
${putih}[-] version${ijo} $wheel_versi${putih} [${kuning}$wheel_info${putih}]
${putih}[-] server bot ${ijo}${wheel_server}
${putih}[-] Created by${biru} Waryono${putih} &&${biru} Sandi Pratama

${kuning}             ~ please subscribe channel ~
${biru}                     Sandi X-Dark
${biru}                      Kang Repot
${merah}[!] warning !!
${kuning}[-] ini adalah proggam ilegal
${kuning}[-] resiko sepenuh nya di tanggung pengguna

";

$wheel_stat=true;

$play_Z_versi  = "2.0";
$play_Z_server = "online";
$play_Z_info   = "buaat nya susah hargai creator";

$play_Z = "${putih}[-] ip ${ijo}${not_found}
${putih}[-] script ->${ijo} [Play Play]
${putih}[-] version${ijo} $play_Z_versi${putih} [${kuning}$play_Z_info${putih}]
${putih}[-] server bot ${ijo}${play_Z_server}
${putih}[-] Created by${biru} Waryono${putih} &&${biru} Sandi Pratama

${kuning}             ~ please subscribe channel ~
${biru}                     Sandi X-Dark
${biru}                      Kang Repot
${merah}[!] warning !!
${kuning}[-] ini adalah proggam ilegal
${kuning}[-] resiko sepenuh nya di tanggung pengguna

";
$system_play=true;

