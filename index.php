<!DOCTYPE html>
<html>
<head>
	<title>CRUD SYSTEM</title>

	<!-- bootstrap css --> 
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- datatables css -->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

</head>
<body>


	<div class="container">
		<div class="row">
			<!--Hello word<br />
			My Name is Nantakan. <br>
			<button type="button" class="btn btn-success">Submit</button> 
			<button type="button" class="btn btn-danger">Cancel</button>--> 

			<div class="col-md-12">
				<h1>My first bootstrap</h1>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addMember">
					Add Member
				</button> 
				
				<!--<button type="button" class="btn btn-danger">Cancel</button>-->
				<?php
					require('phplib/retrieve.php');
					//var_dump($output);
				?>
				<table class="table">
					<tr>
						<th>Seq.</th>
						<th>ID</th>
						<th>fname</th>
						<th>lname</th>
						<th>contact</th>
					</tr>
						<?php
							$x=1;
							foreach ($output['data'] as $row) {
						?>
					<tr>
						<td><?php  echo $x ;    ?> </td>
						<td><?php  echo $row[0];    ?> </td>
						<td><?php  echo $row[1];    ?>  </td>
						<td><?php  echo $row[2];    ?>  </td>
						<td><?php  echo $row[3];    ?>  </td>
					</tr>
					<?php
							$x++;
						}
					?>	
				</table>


			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" role="dialog" id="addMember">
		<div class="modal-dialog">
			 <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		      	Please Input Member Data :
		      </div>
		      <form method="POST" action="phplib/create.php">
		      		<div class="modal-body">
			       		ID: <input type="text" name="id"><br>
			       		First Name:<input type="text" name="fname"><br>
			       		Last Name<input type="text" name="lname"><br>
			       		Contact<input type="text" name="contact"><br>
			      </div>
			      <div class="modal-footer">
			        <input type="Submit" value="SUBMIT">
			        <input type="Reset" value="RESET">
			      </div>
		      </form>
		    </div>
		</div>
	</div>

	<!-- jquery plugin -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- bootstrap js -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- datatables js -->
	<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

	

</body>
</html>