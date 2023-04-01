<?php
for ($i = 1; $i <= 9; $i++) {
    $elefantes = ($i == 1) ? "elefante" : "elefantes";
    $incomodam = str_repeat("incomodam, ", $i);
    echo "{$i} {$elefantes} incomodam muita gente.\n";
    if ($i < 10) {
        echo ($i+1) . " {$elefantes} {$incomodam}incomodam muito mais.\n\n";
    }
}
?>