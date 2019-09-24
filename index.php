<?php
session_start();

?>
<br>
<br>
<!doctype html>
<html lang="en">
<?php include_once ('partials/header.php');?>
<body>
<div class="container">
	<div class="row">
		<div class="card" style="width: 100%;">
			<div class="card-body">
			<?php if ( isset( $_SESSION['massage'] ) ) { ?>
                        <div class="alert alert-success">
                            <strong> Success! </strong> <?php echo $_SESSION['massage']; ?>.
                        </div>
						<?php
						unset( $_SESSION['massage'] );
					} ?>
				<div class="text-center">
					<marquee><h3 style="color:#00D94F">Result Management System</h3></marquee>
						<h3 class="card-title" style="color: grey">Diploma-in-Engineering</h3>
						<hr/>
						<a class="btn btn-outline-success"  href="addstudent.php">Add Student</a> |
						<a class="btn btn-outline-primary" href="indexSheet.php">Add Mark</a> |
						<a class="btn btn-outline-warning" href="viewresult.php">View Result</a>
				</div>
			</div>
		</div
	</div>
</div>
</body>
</html>
			<script>
					window.setTimeout(function() {
						$(".alert").fadeTo(3000, 0).slideUp(1000, function(){
							$(this).remove();
						});
					}, 2000);
			</script>