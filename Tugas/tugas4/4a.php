<?php

$kata = array("Masa", "depanmu", "diciptakan", "kerjakan", "bukan", "besok");
$no = [1, 2, 3, 4, 5];

//substring = slice string

$string = array("epan", "cipta", "akan", "u", "asa", "esok");
echo "M$string[4] d$string[0]m$string[3] di$string[1]" . substr($string[2], 1, 3) .
    " oleh apa yang kau kerja" . substr($string[2], 1, 3) . " hari ini, b$string[3]" . substr($string[2], 1, 3) . " b$string[5]";
