<?php
function printTriangle($type, $rows = 5, $symbol = "*") {
  switch ($type) {
    case 'upside_left':
      for ($i = 1; $i <= $rows; $i++) {
        for ($j = $rows; $j >= $i; $j--) {
          echo $symbol;
        }
        echo "<br>";
      }
      break;

    case 'downside_left':
      for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $i; $j++) {
          echo $symbol;
        }
        echo "<br>";
      }
      break;

    case 'upside_right':
      for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j < $i; $j++) {
          echo "&nbsp;&nbsp;";
        }
        for ($j = $rows; $j >= $i; $j--) {
          echo $symbol;
        }
        echo "<br>";
      }
      break;

    case 'downside_right':
      for ($i = 1; $i <= $rows; $i++) {
        for ($j = $rows; $j > $i; $j--) {
          echo "&nbsp;&nbsp;&nbsp;";
        }
        for ($j = 1; $j <= $i; $j++) {
          echo $symbol;
        }
        echo "<br>";
      }
      break;

    default:
      echo "Tipe Pattern tidak sesuai!";
  }
}

// Panggil fungsi untuk mencetak triangle upside left dengan 5 baris dan simbol "*"
printTriangle('upside_left');

// Panggil fungsi untuk mencetak triangle upside right dengan 6 baris dan simbol "#"
printTriangle('upside_right', 6, "#");

// Panggil fungsi untuk mencetak triangle downside left dengan 4 baris dan simbol "@"
printTriangle('downside_left', 4, "@");

// Panggil fungsi untuk mencetak triangle downside right dengan 7 baris dan simbol "&"
printTriangle('downside_right', 7, "&");
?>
