<?php
session_start();

if (!$_SESSION['stu_id']) {
    header('location: index.php');
}
$error = array('sub_1' => '', 'sub_2' => '', 'sub_3' => '', 'sub_4' => '', 'sub_5' => '');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['awt_marks'])) {
            $error['sub_1'] = 'Filed is Required!';
        } elseif ($_POST['awt_marks'] > 100) {
        $error['sub_1'] = 'Please Enter below 100 Marks';
    } else {
        $_SESSION['awt_marks'] = $_POST['awt_marks'];
    }


    if (empty($_POST['daa_marks'])) {
        $error['sub_2'] = 'Filed is Required!';
    } elseif ($_POST['daa_marks'] > 100) {
        $error['sub_2'] = 'Please Enter below 100 Marks';
    } else {
        $_SESSION['daa_marks'] = $_POST['daa_marks'];
    }


    if (empty($_POST['dse_marks'])) {
        $error['sub_3'] = 'Filed is Required!';
    } elseif ($_POST['dse_marks'] > 100) {
        $error['sub_3'] = 'Please Enter below 100 Marks';
    } else {
        $_SESSION['dse_marks'] = $_POST['dse_marks'];
    }


    if (empty($_POST['ic_marks'])) {
        $error['sub_4'] = 'Filed is Required!';
    } elseif ($_POST['ic_marks'] > 100) {
        $error['sub_4'] = 'Please Enter below 100 Marks';
    } else {
        $_SESSION['ic_marks'] = $_POST['ic_marks'];
    }


    if (empty($_POST['se_marks'])) {
        $error['sub_5'] = 'Filed is Required!';
    } elseif ($_POST['se_marks'] > 100) {
        $error['sub_5'] = 'Please Enter below 100 Marks';
    } else {
        $_SESSION['se_marks'] = $_POST['se_marks'];
        header('location:show_data.php');
    }
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
    <title>Subject Marks Form</title>
</head>

<body class="bg-dark text-light">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><h5> University.com </h1></a>
       

    </nav>
    <br>
    <br>
    <div class="container mt-3">
        <center>
            <h1>Subject Marks Form</h1>
        </center>
        <form class="container w-50  mt-5" action="marks.php" method="post" name="form1" enctype="multipart/form-data">
            <div class="form-group">
                <label for="subject_1">Enter Marks For AWT</label>
                <input type="text" name="awt_marks" class="form-control" id="awt_marks" aria-describedby="emailHelp" Required>
                <p id="#" class="error" style="color: red;"><?php echo $error['sub_1']; ?></p>
            </div>
            <div class="form-group">
                <label for="subject_2">Enter Marks For DAA</label>
                <input type="text" name="daa_marks" class="form-control" id="daa_marks" aria-describedby="emailHelp" Required>
                <p id="#" class="error" style="color: red;"><?php echo $error['sub_2']; ?></p>
            </div>
            <div class="form-group">
                <label for="subject_3">Enter Marks For DSE</label>
                <input type="text" name="dse_marks" class="form-control" id="dse_marks" aria-describedby="emailHelp" Required>
                <p id="#" class="error" style="color: red;"><?php echo $error['sub_3']; ?></p>
            </div>
            <div class="form-group">
                <label for="subject_4">Enter Marks For IC</label>
                <input type="text" name="ic_marks" class="form-control" id="ic_marks" aria-describedby="emailHelp" Required>
                <p id="#" class="error" style="color: red;"><?php echo $error['sub_4']; ?></p>
            </div>
            <div class="form-group">
                <label for="subject_5">Enter Marks For SE</label>
                <input type="text" name="se_marks" class="form-control" id="se_marks" aria-describedby="emailHelp" Required>
                <p id="#" class="error" style="color: red;"><?php echo $error['sub_5']; ?></p>
            </div>

            
            <button type="submit" class="btn btn-success w-100 mt-2" name="submit">Submit</button>

        </form>
    </div>
</body>

</html>