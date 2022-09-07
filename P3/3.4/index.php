<html>
<head>
    <title>PHP MVC Frameworks</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

    <script type="text/javascript" src="3.4javascript.js"></script>
</head>
<body class="bg-dark text-light">
    
    <form method="POST" action="index.php" class="col-5 mt-5" style="margin:auto">

    <label class="h2 my-3">PHP MVC Frameworks - Search Engine</label>
    <hr>
    <p>
    <input type="text" size="40" id="text_hint" class="form-control bg-dark text-light" onkeyup="showName(this.value)" placeholder="Type the first letter of the PHP MVC Framework">
    </p>
    <div class="input-group my-3">
            <span class="input-group-text bg-dark text-light">Matches</span>
            <textarea  rows="1" class="form-control bg-dark text-light" id="text_name" readonly></textarea>
        </div>

        <hr>
       
       <div>
           <a href="../../index.php" type="submit" class="btn btn-success font-weight-bold px-5">Back</a>
       </div>
  
    </form>


   
      


</body>
</html>
