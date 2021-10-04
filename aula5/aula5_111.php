<?php
for ($i=0; $i<4; $i++) {
  for ($j=0; $j<1; $j++) {
    echo "$i $j<br>";
  }
}
/*
$i  $j
0   0
1   0
2   0
3   0
*/
echo '<hr>';
for ($i=0; $i<1; $i++) {
    for ($j=0; $j<4; $j++) {
      echo "$i $j<br>";
    }
  }
/*
$i  $j
0   0
0   1
0   2
0   3
*/
?>