<!DOCTYPE html>
<html>
<head>
  
</head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

<body>

<?php
$r = intval($_GET['r']);

$connect = mysqli_connect('localhost','root','', 'prac3');
if (!$connect) {
  die('Connection Failed: ' . mysqli_error($connect));
}

$sql_query = "SELECT * FROM student WHERE id = '". $r ."'";
$result = mysqli_query($connect, $sql_query);

echo "<table>
        <tr>
        <th>Fname &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
        <th>Lname &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>Age &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
        <th>Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
        <th>Department </th>
        </tr>";
while($row = mysqli_fetch_array($result)) 
{
  echo "<tr>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['lname'] . "</td>";
  echo "<td>" . $row['age'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['department'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($connect);
?>
</body>
</html>