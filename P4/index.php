<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>
<div class="text-center h3">
	<div class="col-12">
<img src="./db/001.png" alt="img lost">
</div>
This system allows all registered users to vote for your favorite POLITICAL PARTY.</p>
<p>In order to make a vote you have to register first and then login.
</div>


