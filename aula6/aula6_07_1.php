<?php
$aluno = array( 
 array("TBD","Fulano",123456789),
 array("TRC","Beltrano",234567890),
 array("TADS","Sicrano",345678901,7.5),
 array("CC","Belarmina",123443211),
 array("SI","João",1234,
    array("E agora?")
      ) 
);


echo "<br>Curso: " . $aluno[0][0] . "<br> Nome: " . $aluno[0][1] . "<br> RA: " . $aluno[0][2];
echo "<hr>Curso: " . $aluno[1][0] . "<br> Nome: " . $aluno[1][1] . "<br> RA: " . $aluno[1][2];
echo "<hr>Curso: " . $aluno[2][0] . "<br> Nome: " . $aluno[2][1] . "<br> RA: " . $aluno[2][2];

echo "<hr><hr>";
echo $aluno[3][1];
echo "<hr><hr>";
echo $aluno[2][3];

/*
como fazer para imprimir o valor Belarmina

como fazer para imprimir o valor 7.5

como fazer para imprimir João e E agora?
*/


?>
