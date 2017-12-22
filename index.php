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
			<!--Hello word;<br />
            My Name is Jutamas.<br />
            <button type="button" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-danger">Cancel</button>-->
			<div class="col-md-12">
				<h1>My Name is Nantakan</h1>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addMember">
						Add Member
					</button>
					<!-- <button type="button" class="btn btn-danger">Cancel</button>

					<?php
						require('phplib/retrive.php');
						//var_dump($output);
					?>
					<!--border="1"-->
					<table class="table">
						<tr>
							<th>seq.</th>
							<th>ID</th>
							<th>fname</th>
							<th>lname</th>
							<th>contact</th>
							<th>Operator</th>

						</tr>
						<?php
							$x=1;
							foreach($output['data']as $row) {
						?>
						<tr>
							<td><?php echo $x; ?></td>
							<td><?php echo $row[0]; ?> </td>
							<td><?php echo $row[1]; ?></td>
							<td><?php echo $row[2]; ?></td>
							<td><?php echo $row[3]; ?></td>
							<td>
								<button type="button" class="btn btn-warning" onclick="getSelectMember( <?php echo $row[0]; ?> )" data-toggle="modal" data-target="#editMember"> Edit </button>
								<button type="button" class="btn btn-danger" onclick="deleteMember( <?php echo $row[0]; ?> ">Delete</button>
							</td>

						</tr>
						<?php
								$x++;
							}
						?>
					</table>
			</div>
		</div>
	</div>

	<!-- Edit Modal -->

	<div class="modal fade" role="dialog" id="editMember" >
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					Please Update Member's Data :
				</div>
				<form class="from-horizontal"method="POST" action="phplib/update.php" >
					<div class="modal-body">
							<div class="FROM-group">
							<label class="control-label col-sm-2"> ID : </label>
								<div class="col-sm-10">
								<input type="text" class="form-control" name="eid" id="eid" disabled> <!--<br>-->
								<input type="hidden" class="form-control" name="hid" id="eid" disabled> <!--<br>-->

							</div>
							</div>


							<div class="FROM-group">
							<label class="control-label col-sm-2">Fname : </label>
								<div class="col-sm-10">
								<input type="text" class="form-control" name="efname" id="efname"> <!--<br>-->
								</div>
							</div>



							<div class="FROM-group">
							<label class="control-label col-sm-2">Lname :  </label>
								<div class="col-sm-10">
								<input type="text" class="form-control" name="elname" id="elname"> <!--<br>-->
								</div>
							</div>


							<div class="FROM-group">
							<label class="control-label col-sm-2">Contact :  </label>
								<div class="col-sm-10">
								<input type="text" class="form-control" name="econtact" id="econtact">  <!--<br>-->
								</div>
							</div>

					</div>
					<div class="modal-footer">
						<input type="submit"value="SUBMIT">
						<input type="reset"value="Reset">
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- ////////////////////////////////////////////////////////////////////////-->


<div class="modal fade" role="dialog" id="addMember" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Please Input Member Data :
			</div>
			<form class="from-horizontal"method="POST" action="phplib/create.php" >
				<div class="modal-body">
						<div class="FROM-group">
						<label class="control-label col-sm-2"> ID : </label>
							<div class="col-sm-10">
							<input type="text" class="form-control" name="id"> <!--<br>-->
							</div>
						</div>


						<div class="FROM-group">
						<label class="control-label col-sm-2">Fname : </label>
							<div class="col-sm-10">
							<input type="text" class="form-control" name="fname"> <!--<br>-->
							</div>
						</div>


						<div class="FROM-group">
						<label class="control-label col-sm-2">Lname :  </label>
							<div class="col-sm-10">
							<input type="text" class="form-control" name="lname"> <!--<br>-->
							</div>
						</div>


						<div class="FROM-group">
						<label class="control-label col-sm-2">Contact :  </label>
							<div class="col-sm-10">
							<input type="text" class="form-control" name="contact">  <!--<br>-->
							</div>
						</div>

				</div>
				<div class="modal-footer">
					<input type="submit"value="SUBMIT">
					<input type="reset"value="Reset">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- ///////////////////////////////////////////////////////////////////////// -->


        <!-- jquery plugin -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- bootstrap js -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- datatables js -->
	<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

	<script type="text/javascript" >
			function deleteMember(id){
				//alert(id);
				$.ajax({
				url:'phplib/delete.php',
				type: 'post',
				data: {mid:id},
				success: function(response){
				//alert('deleted');
				location.replace("http://localhost/crudexample/");
				}
			});
		}

		function getSelectMember(id){
			alert(id);
			$.ajax({
				url:'phplib/getSelectMember.php',
				type: 'post',
				data: {mid:id},
				success: function(response){
				//alert(response);
					var response = $.parseJSON(response);
					$("#eid").val(response.id);
					$("#hid").val(response.id);
					$("#efname").val(response.fname);
					$("#elname").val(response.lname);
					$("#econtact").val(response.contact);
					//location.replace("http://localhost/crudexample/");
			}
		});
	}

	</script>










</body>
</html>
