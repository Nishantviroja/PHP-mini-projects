<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php";
?>
<div class="container col-4">
<h3 class=" text-center my-5"> Voting So Far  </h3>

<?php
include "connection.php";
$member = mysqli_query($con, 'SELECT * FROM languages' );
if (mysqli_num_rows($member)== 0 ) {
	echo '<font color="red">No results found</font>';
}
else { 
	echo '<table class=" table table-bordered border-primary table-dark table-striped">
	<thead>
	  <tr>
		<th scope="col">#</th>
		<th scope="col">Party Name</th>
		<th scope="col">Vote no.</th>
		
	  </tr>
	</thead>
	<tbody>';
	while($mb=mysqli_fetch_object($member))
		{	
			$id=$mb->lan_id;
			$name=$mb->fullname;
			
			$vote=$mb->votecount;
			echo '<tr>';
	echo '<td>'.$id.'</td>';		
	echo '<td>'.$name.'</td>';
	
	echo '<td>'.$vote.'</td>';
	echo "</tr>";
		}
	  
	 
		echo '</tbody>
  </table>';
	
	}
?>
</div>