<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<div class="container">
<h6 class="mt-3"> Welcome   <span class="h4"> <?php echo $_SESSION['SESS_NAME']; ?> </span></h6>
<div class="row justify-content-center"> 
<h2 class="text-center mt-5">Make a Vote </h2>

<form class="col-4 text-start h5" action="submit_vote.php" name="vote" method="post" id="myform" >
<hr>
<input type="radio" name="lan" value="BJP">  BJP<BR>
<input type="radio" name="lan" value="CONGRESS">  CONGRESS<BR>
<input type="radio" name="lan" value="AAP">   AAP<BR>
<input type="radio" name="lan" value="NOTA">  NOTA<BR>
<input type="radio" name="lan" value="NIRDLIY">  NIRDLIY<BR>
<br>
<h6>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?></h6>
<input type="submit" class="btn btn-success w-100" value="Submit Vote" name="submit" />
</form>
</div>
</div>
