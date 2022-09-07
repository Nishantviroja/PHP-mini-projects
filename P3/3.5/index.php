<html>
<head>

<script>
    function showUser(str) 
    {
    if (str == "") 
    {
        document.getElementById("text_hint").innerHTML = "";
        return;
    } 
    else 
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() 
        {
        if (this.readyState == 4 && this.status == 200)
        {
            document.getElementById("text_hint").innerHTML = this.responseText;
        }
        };
        xmlhttp.open("GET","3.5details.php?r="+str, true);
        xmlhttp.send();
    }
    }
</script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

</head>
<body class="bg-dark text-light">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../../index.php"><h5 class="mx-2"> PHP.Project </h1></a>
       

    </nav>

<form class="col-4 mt-5" style="margin:auto">
<label class="h2 my-3">Gross Salary Calculator</label>

<hr>
<select class="form-select bg-dark text-light" name="users" onchange="showUser(this.value)">
  <option value="">Select a student:</option>
  <option value="1">Poonam Shah</option>
  <option value="2">Raja Patel</option>
  <option value="3">Dinesh Rana</option>
  <option value="4">Krupa Kadam</option>
  </select>
  <hr>
  <div id="text_hint" class="mt-5"><b>Person info will be listed here...</b></div>
</form>
<br>

</body>
</html>