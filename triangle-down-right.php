<?php
function printTriangle($rows = 5, $symbol = "*") {
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j < $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($j = $rows; $j >= $i; $j--) {
            echo $symbol;
        }
        echo "<br>";
    }
}

// Panggil fungsi dengan argumen default
printTriangle();
echo "<br>";

// Panggil fungsi dengan argumen kustom
printTriangle(6);


// for ($i = 1; $i <= 5; $i++) {
//     for ($j = 1; $j<$i; $j++) {
//         echo "&nbsp;&nbsp;";
//     }
//     for ($j=5; $j>=$i; $j--) {
//         echo "*";
//     }
//     echo "<br>";
// }
?>