<?php
$i=0; // inicialização do contador;
while ($i <= 5) {
  echo $i . "<br> ";
  $i++;
}
echo "<h1>Desafio - 1</h1>";
$i=7; // inicialização do contador;
while ($i <= 9) {//while ($i<10)
  echo $i . "<br> ";
  $i++;
}
echo "<h1>Desafio - 2</h1>";
$i=2; // inicialização do contador;
while ($i >= 0) {
  echo $i . "<br> ";
  $i--;
}
echo "<h1>Desafio - 3</h1>";
$i=3; // inicialização do contador;
while ($i <= 9) {
  echo $i . "<br> ";
  // $i++;$i++;
  // $i=$i+2;
  $i+=2;
}
/*
Perguntas:
1) Qual o valor inicial? 0
2) Qual a condição? $i<=5
3) Qual o contador? $i++
4) Qual o último valor impresso? 5
5) Qual o valor que torna a condição como falsa? 6
Desafio - 1 (OK)
Saída:
7
8
9

Desafio - 2
Saída:
2
1
0

Desafio - 3
Saída:
3
5
7
9
*/
?>