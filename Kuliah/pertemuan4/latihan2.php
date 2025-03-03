<?php

for ($i = 1; $i <= 3; $i++) { //baris angka
    for ($j = 1; $j <= 2; $j++) { //nominal angka
        echo " $j ";
    }
    echo "<br>";
}

echo "<hr>";

for ($i = 1; $i <= 5; $i++) { //baris angka
    for ($j = 1; $j <= 4; $j++) { //nominal angka
        echo " $j ";
    }
    echo "<br>";
}

echo "<hr>";

for ($i = 1; $i <= 4; $i++) { //baris angka
    for ($j = 1; $j <= $i; $j++) { //nominal angka
        echo " $j ";
    }
    echo "<br>";
}

echo "<hr>";

for ($i = 8; $i >= 1; $i--) { //baris angka
    for ($j = 1; $j <= $i; $j++) { //nominal angka
        echo " $i  ";
    }
    echo "<br>";
}
