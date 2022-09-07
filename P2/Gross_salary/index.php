<?php

    function gross_salary($basic_salary, $grade)
    {
        $hra = 0.3 * $basic_salary;
        $da = 0.4 * $basic_salary;
        $pf = 0.12 * $basic_salary;

        if ($grade == 'First') {
            $allowance = 2500;
        } else if ($grade == 'Second') {
            $allowance = 2000;
        } else if ($grade == 'Third') {
            $allowance = 1500;
        } else {
            $allowance = 0;
        }
        return $basic_salary + $hra + $da + $allowance - $pf;
    }

    try {
        if (isset($_GET['basic_salary']) && isset($_GET['grade'])) {
            $basic_salary = $_GET['basic_salary'];
            $grade = $_GET['grade'];
            $gross_salary = gross_salary($basic_salary, $grade);
        } else {
            throw new Exception("<h1>Parameters Not Found!</h1>");
        }
    } catch (Exception $e) {
        echo "<script>alert('" . $e->getMessage() . "'); </script>";
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gross Salary</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body class="bg-dark text-light">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../../index.php"><h5 class="mx-3"> PHP.Project </h1></a>
     </nav>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" class="col-4 mt-5" style="margin:auto">
        <label class="h2 my-3">Gross Salary Calculator</label>

        <hr>
        <div class="input-group">
            <span class="input-group-text bg-dark text-light">Basic Salary</span>
            <input type="number" name="basic_salary" class="form-control bg-dark text-light" value = "<?php if (isset($basic_salary)){ echo $basic_salary;}?>" required>
        </div>
        <div class="input-group my-3">
            <span class="input-group-text bg-dark text-light">Grade</span>
            <select class="form-select bg-dark text-light" name="grade" required>
                <option selected>Open this select menu</option>
                <option value="First" <?php if (isset($grade)){ if ($grade=='First'){ echo "selected"; } } ?>>First</option>
                <option value="Second" <?php if (isset($grade)){ if ($grade=='Second'){ echo "selected"; } } ?>>Second</option>
                <option value="Third" <?php if (isset($grade)){ if ($grade=='Third'){ echo "selected"; } } ?>>Third</option>
                <option value="Selected" <?php if (isset($grade)){ if (!($grade=='First' || $grade == 'Second' || $grade == 'Third')){ echo "selected"; } } ?>>Selected</option>
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-success font-weight-bold px-5">Submit</button>
        </div>
        <div class="input-group my-3">
            <span class="input-group-text bg-dark text-light">Gross Salary</span>
            <input type="text" readonly class="form-control bg-dark text-light" value = "<?php if (isset($gross_salary)){ echo $gross_salary;}?>">
        </div>

    </form>
</body>

</html>