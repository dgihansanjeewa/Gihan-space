
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
		<?php
			if($userName == "admin"){
						header('location: http://localhost/Amerck/dashboard_admin.php');
			}
		?>
		<div class="row">
				<h3>Welcome To Amerck : <?php echo $userName ?></h3>
		</div>


<?php require_once 'includes/footer.php'; ?>
