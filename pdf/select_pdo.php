<?php
include "con_pdo.php";

try {
$sql=" select id, login, email, date_format(data,'%d/%m/%Y') as data, obs from usuario
";
$sth = $conn->prepare($sql);
$sth->execute();
?>
<style>
table, td, th {
  border: 1px solid black;
}
td {
  text-align: center;
}
table{
  width:  500px;
  border-collapse: collapse;
}
</style>
  <table  id="tabela">
    <thead>
      <tr>
        <th>id</th>
        <th>Login</th>
        <th>E-mail</th>
    <th>Data</th>
    <th>Obs</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
  echo "<tr>";    
  echo "<td>".$row["id"]."</td>";
  echo "<td>".$row["login"]."</td>";
  echo "<td>".$row["email"]."</td>";
  echo "<td>".$row["data"]."</td>";
  echo "<td>".$row["obs"]."</td>";
  echo "</tr>";
}
echo "</tbody></table>";


} catch(PDOException $e) {
  echo  "<br>" . $e->getMessage();
}

$conn = null;
?>