<?php
include_once ("studentadd.php");
$allData=new studentadd();
$allData->setData($_POST)->storeStudent();