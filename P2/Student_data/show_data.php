<?php
    session_start();
    $stu_id = $_SESSION['stu_id'];
    $stu_name = $_SESSION['stu_name'];
    $stu_addr = $_SESSION['stu_addr'];
    $awt_marks = $_SESSION['awt_marks'];
    $daa_marks = $_SESSION['daa_marks'];
    $dse_marks = $_SESSION['dse_marks'];
    $ic_marks = $_SESSION['ic_marks'];
    $se_marks = $_SESSION['se_marks'];


    $percentage = ((($awt_marks + $daa_marks + $dse_marks + $ic_marks + $se_marks)*100)/500);

    if(!$_SESSION['stu_id'])
    {
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body >
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><h5> University.com </h1></a>
    </nav>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Student Id</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student Address</th>
      <th scope="col">AWT Marks</th>
      <th scope="col">DAA Marks</th>
      <th scope="col">DSE Marks</th>
      <th scope="col">IC Marks</th>
      <th scope="col">SE Marks</th>
      <th scope="col">Percentage</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $stu_id?></th>
      <td><?php echo $stu_name?></td>
      <td><?php echo $stu_addr?></td>
      <td><?php echo $awt_marks?></td>
      <td><?php echo $daa_marks?></td>
      <td><?php echo $dse_marks?></td>
      <td><?php echo $ic_marks?></td>
      <td><?php echo $se_marks?></td>
      <td><?php echo $percentage?></td>
    </tr>
  </tbody>
</table>
    </body>
</html>