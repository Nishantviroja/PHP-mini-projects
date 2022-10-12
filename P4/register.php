
<?php include "header.php";
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<div class="text-center">
<h2 class="m-4"> Register New User</h2>

<form class="row justify-content-center" action="reg_action.php" method= "post" id="myform" >
<div class="col-3 m-2">
    
    <input type="text" name="firstname" class="form-control mt-3" placeholder="First name" Required>
    <input type="text" name="lastname" class="form-control mt-3" placeholder="Last name" Required>
    <input type="number" name="age" min="18" max="100" class="form-control mt-3" placeholder="Your age (must 18+)" Required>
    <input type="text" name="username" class="form-control mt-3" placeholder="Username" Required>
    <input type="password" name="password" class="form-control mt-3" placeholder="Password" Required>

	<input type="submit" class="btn btn-success w-100 mt-4" name="submit" value="Register New User" />
	
</div>
</form>
</div>


