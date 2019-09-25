<?php
session_start();
include_once ("studentadd.php");
$allData=new studentadd();
$allStudent=$allData->viewStudent();
?>
<?php include_once ('partials/header.php');
?>
<body>
<div class="container" style="align-items: center>
  <div class="row">
	<?php 
		if ( isset( $_SESSION['masssage'] ) ) { ?>
	<div class="alert alert-success">
	<strong> Success! </strong> <?php echo $_SESSION['masssage']; ?>.
	</div>
	<?php
	unset( $_SESSION['masssage'] );
} ?>
<div class="main-panel" >
  <div class="content-wrapper">
    <div class="card"">
    <div class="card-header"><h3>Add student info</h3></div>
    <div class="card-body">
      <table class="table table-hover">
        <thead class="thead-dark">
        <tr>
          <td><strong>SL</strong></td>
          <td><strong>Name</strong></td>
          <td><strong>Broad Roll</strong></td>
          <td><strong>Registration No</strong></td>
          <td><strong>Session</strong></td>
          <td> . . . </td>
        </tr>
        </thead>
        <tbody>
        <?php
        $count=1;
        foreach ($allStudent as $key=>$value){?>
          <tr>
            <td><?php echo $count++;?></td>
            <td><?php echo $value['sname'];?></td>
            <td><?php echo $value['rollno'];?></td>
            <td><?php echo $value['reg'];?></td>
            <td><?php echo $value['ssession'];?></td>
            <td>
              <a class="btn btn-outline-success btn-xs" href="singleResult.php?sroll=<?php echo $value['rollno'];?>"><i style="" class="fa fa-eye"></i></a> |
              <a class="btn btn-outline-danger btn-xs" href="deleteResult.php?sroll=<?php echo $value['rollno'];?>"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
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
