
<?php require_once 'includes/header.php'; ?>
<!-- rajitha somaweera large data spliter -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<!-- DATA TABES SCRIPT -->
	<script src="js/datatables/jquery.dataTables.js" type="text/javascript"></script>
	<script src="js/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
	<script type="text/javascript">
	   $(function() {
	    $("#table1").dataTable({
	        "iDisplayLength": 10,
	        "aLengthMenu": [[10, 25, 50, 100,  -1], [10, 25, 50, 100, "All"]]
	       });
	   });
	</script>
<!-- rajitha somaweera large data spliter -->



	<div class="col-md-8">

		<?php

					require_once 'php_action/db_connect.php';
					$sql="SELECT * from user_data";
					$result=mysqli_query($connect,$sql);

					$sql_1="SELECT username from users where user_id = ".$_SESSION['userId'];
					if ($result_1=mysqli_query($connect,$sql_1))
					 {
					 // Fetch one and one row
					 while ($row_1=mysqli_fetch_row($result_1))
						 {
							$userName = $row_1[0];
						 }
					}
		?>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="page-heading"> <i class="glyphicon glyphicon-edit"></i><?php echo " Logged In AS : ".$userName ?></div>
					</div> <!-- /panel-heading -->
					<div class="panel-body">
						<div class="remove-messages"></div>
						<table id="table1" class="table table-bordered table-striped" >
							<thead>
								<tr>
									<th>Name</th>
									<th>Age</th>
								</tr>
							</thead>
							<tbody>
								<?php
									while( $row=mysqli_fetch_assoc($result)){
										echo
										"<tr>
											<td>{$row['names']}</td>
											<td>{$row['ages']}</td>
										</tr>\n";
									}
								?>
							</tbody>
						</table>
						<!-- /table -->

					</div> <!-- /panel-body -->
				</div> <!-- /panel -->
			</div> <!-- /col-md-12 -->
		</div> <!-- /row -->

	</div>
</div> <!--/row-->

<?php require_once 'includes/footer.php'; ?>
