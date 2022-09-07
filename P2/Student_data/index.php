<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $_SESSION['stu_id'] = $_POST['stu_id'];
    $_SESSION['stu_name'] = $_POST['stu_name'];
    $_SESSION['stu_addr'] = $_POST['stu_addr'];
    header("location:marks.php");
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Javascript link-->
    <script src="script.js"></script>
    <title>Student Form</title>
</head>

<body class="bg-dark text-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../../index.php"><h5> PHP.Project </h1></a>
       

    </nav>
    <div class="container mt-5">
        <center class="mt-5">
            <h1>Student Form</h1>
        </center>
        <form class="container w-50  mt-5" action="index.php" method="post" name="form1" enctype="multipart/form-data">
            <div class="form-group">
                <label for="id">Enrollement Number</label>
                <input type="text" name="stu_id" class="form-control" id="name" aria-describedby="emailHelp" Required>
            </div>
            <div class="form-group">
                <label for="name">Student Name</label>
                <input type="text" name="stu_name" class="form-control" id="name" aria-describedby="emailHelp" Required>
            </div>
            <div class="form-group">
                <label for="address">University Email Address</label>
                <input type="email" name="stu_addr" class="form-control" id="name" aria-describedby="emailHelp" Required>
            </div>

            <button type="submit" class="btn btn-success w-100 mt-2" name="submit">Submit</button>

        </form>
    </div>
</body>

</html>