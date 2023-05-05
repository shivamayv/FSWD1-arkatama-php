<?php
function printTriangle($rows = 5, $symbol = "*") {
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $rows - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo $symbol;
        }
        echo "<br>";
    }
}

// Panggil fungsi dengan argumen default
printTriangle();
echo "<br>";

// Panggil fungsi dengan argumen kustom
printTriangle(9, "#");

// for ($i = 1; $i <= 5; $i++) {
//     for ($j=1; $j<= 5 - $i; $j++) {
//         echo "&nbsp;&nbsp;";
//     }
//     for ($j= 1; $j<=$i; $j++) {
//         echo "*";
//     }
//     echo "<br>";
// }
?>