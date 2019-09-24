
<?php
include_once ("sheet_class.php");
$all=new sheet_class();
$allresult=$all->setData($_GET)->singleResult();
//echo "<pre>";
//print_r($allresult);
?>


<?php
include_once ("studentadd.php");
$all=new studentadd();
$singleStudent=$all->setData($_GET)->singlestudent();
//echo "<pre>";
//print_r($singleStudent);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result Details</title>
    <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/">
</head>
<body>
<div class="container">
  <div class="row">
    <img src="img/rajbari_tsc.jpg" width="100%" height="200px">
    <h3 align="center" style="color: #4E342E"><b>ACADEMIC-TRANSCRIPT</b></h3>
    <h4 align="center" style="color: #673ab7">Diploma-in-Engineering</h4>
    <img src="img/slc%20grading.JPG" align="right" height="200px">

    <!--<h1 align="center">Student Result</h1>-->
    <h4 align="left">Name : <?php echo $singleStudent['sname'];?></h4>
    <h4 align="left">Roll No : <?php echo $singleStudent['rollno'];?></h4>
    <h4 align="left">Reg No : <?php echo $singleStudent['reg'];?></h4>
    <h4 align="left">Session : <?php echo $singleStudent['ssession'];?></h4>
    <!--<table border="1" width="800px" align="center" style="text-align: center">-->
    <table class="table text-danger" align="center">
      <thead>
      <tr>
        <td>SL</td>
        <td>Subject Code</td>
        <td>Subject Name</td>
        <td>T</td>
        <td>P</td>
        <td>C</td>
        <td>Mark</td>
        <td>Grade</td>
        <td>Point</td>

      </tr>
      </thead>
      <tbody>
      <?php
      $count=1;
      foreach ($allresult as $key=>$value){?>
        <tr>
          <td><?php echo $count++;?></td>
          <td><?php echo $value['subCode']?></td>
          <td><?php echo $value['subjectName']?></td>
          <td><?php echo $value['t']?></td>
          <td><?php echo $value['p']?></td>
          <td><?php echo $value['c']?></td>
          <td><?php echo $value['mark']?></td>
          <td><?php echo $value['grade']?></td>
          <td><?php echo $value['point']?></td>
		</tr>
      <?php } ?>
      </tbody>
    </table><br><br><br>
    <h5 style="color: #ee9900"><i>Head of the Department's Signature</i></h5>


  </div>
</div>
</body>
</html>