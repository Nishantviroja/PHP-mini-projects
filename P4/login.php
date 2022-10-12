<?php 
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Voting System by Nishant</title>
 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
<!-- Javascript link-->
    <script src="https://kit.fontawesome.com/89a7164f38.js" crossorigin="anonymous"></script>
   
    
<script src="jscript/validation.js" type="text/javascript"></script>
</head>
<body class="bg-dark text-light">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
<a class="navbar-brand" href="../index.php"><h5 class="mx-3"> PHP.Project </h1></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
      </li>
      
      
      
      
      
    </ul>
   
    
  </div>
</div>
</nav>
<br>
<br>
<div class="text-center">
<h2 class="m-4 text-center">Log in</h2>

<form class="row justify-content-center" action="login_action.php" method="post" id="myform"  >
<div class="col-3 m-2">
<?php global $nam; echo $nam; ?>
<?php global $error; echo $error; ?>
    <input type="text" name="username" class="form-control mt-3" placeholder="Username" Required>
    <input type="password" name="password" class="form-control mt-3" placeholder="Password" Required>

	<input type="submit" class="btn btn-success w-100 mt-4" name="login" value="Log in" />
	<a class="nav-link active mt-1 text-end text-grey" aria-current="page" href="register.php"> <i class="fa-solid fa-arrow-left me-2"></i>Register New User</a>
</div>
</form>
</div>

