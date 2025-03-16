<?php

echo "<h4>macam-macam perangkat keras komputer </h4>";
echo "<ul style='list-style-type: none; padding: 0; margin: 0;'>";

//variabel array full
$perangkatkeraskomputer = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD", "Card Reader", "Modem"];
$no = 1;

//start filtering
$filteredPerangkat = array_filter($perangkatkeraskomputer, function ($item) {
    return in_array($item, ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"]);
});
//end filtering

//looping variabel filtering
foreach ($filteredPerangkat as $perangkat) {
    echo "<li>$no . $perangkat</li>";
    echo "<br>";
    $no++;
}

echo "<h4>macam-macam perangkat keras komputer baru </h4>";

$number = 1;
sort($perangkatkeraskomputer); //sort A-Z
foreach ($perangkatkeraskomputer as $perangkat) {
    echo "<li>$number . $perangkat</li>";
    echo "<br>";
    $number++;
}
