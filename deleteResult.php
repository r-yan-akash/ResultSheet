<?php
//print_r($_GET);
//include_once ("studentadd.php");
//$delete=new studentadd();
//$delete->setData($_GET)->deleteResult();

//print_r($_GET);
include_once ("sheet_class.php");
$delete=new sheet_class();
$delete->setData($_GET)->deleteResult();