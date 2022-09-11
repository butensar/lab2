<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body> 
<table style="width:100%">
<?php
echo "<br>";
echo  '<table style="width:100%">
<tr>
    <th>Овог </th>
    <th>Нэр</th>
    <th>Ц-Шуудан</th>

  </tr>
  ';

  echo "<tr>
  <td>" . $_POST["firstname"] . "</td> 
  <td>" . $_POST["lastname"] . "</td>
  <td>" . $_POST["email"] . "</td>
</tr>";

?>
</table>
</body>
</html>
 