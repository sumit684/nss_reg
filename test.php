<?php 
date_default_timezone_set('Asia/Calcutta');
$t = microtime(true);
$micro = sprintf("%06d",($t - floor($t)) * 1000000);
$d = new DateTime( date('Y-m-d H:i:s.'.$micro, $t) );
$value41=date_format($d,'Y-m-d H:i:s.u');
echo $value41;
?>