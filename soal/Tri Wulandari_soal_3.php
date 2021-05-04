<?php
$cabang = 100; //n
$cab1 = 10000; //U1
$cab68 = 30100; //U68

//U68=a+b(n-1)
// $cab68 = $cab1 + $b($cabang - 1);
$b = ($cab68 - $cab1) / ($cabang - 1);
echo "Selisih/beda/b : " . $b . "</br>";
//U81
$cab81 = $cab1 + ($b * ($cabang - 1));
echo "Cabang 81 = " . $cab81;
