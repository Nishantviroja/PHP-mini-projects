<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document 3.1</title>
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

</head>
<body class="bg-dark text-light">
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <a class="navbar-brand" href="../../index.php"><h5 class="mx-2"> PHP.Project </h1></a>
       

    </nav>
    <div class="container h3">
<?php

$myfile = fopen("myfile.txt", "w") or die ("Unable to open file!");
$text = "I like to do coding in PHP. I practice PHP everyday.I learn PHP myself. I am good developer. I am sure I can learn more technologies.\n";
fwrite($myfile, $text);

$read_file = fopen("myfile.txt", "r") or die("Unable to open file!");

while(!feof($read_file))
{
    echo fgets($read_file);
}
fclose($read_file);

?>

<?php

$file_path = "myfile.txt";
$destination = "destination.txt";

if(copy($file_path, $destination))
{
echo "\nOperation performed successfully!\n";
}
else
{
echo "Failed to copy the file!\n";
}

?>
  </div>  
</body>
</html>