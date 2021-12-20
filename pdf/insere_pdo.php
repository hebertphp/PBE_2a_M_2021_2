<?php
include "con_pdo.php";

try {
$sql="
insert into usuario values (null, 'hba_pdo2',md5('123456'),'hba_pdo2@test.com',now(),'Funcionou?')
";
  $conn->exec($sql);
  echo "Insert OK!!";
} catch(PDOException $e) {
  echo  "<br>" . $e->getMessage();
}

$conn = null;
?>