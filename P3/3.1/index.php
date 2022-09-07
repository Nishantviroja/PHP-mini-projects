<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

</head>
<body class="bg-dark text-light">
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <a class="navbar-brand" href="../../index.php"><h5 class="mx-2"> PHP.Project </h1></a>
       

    </nav>
    <div class="container h6">
    <?php 

libxml_use_internal_errors(TRUE);
$obj_xml_document = simplexml_load_file("3.1.xml");
if($obj_xml_document === FALSE)
{
    echo "There were errors parsing the XML file.\n";
    foreach(libxml_get_errors() as $error)
    {
        echo $error->message;
    }
    exit;
}

$obj_json_document = json_encode($obj_xml_document);
$array_output = json_decode($obj_json_document, TRUE);

echo "<pre>";
print_r($array_output);

?>
  </div>  
</body>
</html>

