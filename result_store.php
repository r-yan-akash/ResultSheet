        <?php
//        print_r($_POST);
//        die();
        include_once ("sheet_class.php");
        $data=new sheet_class();

        if($_POST['mark']>=81 && $_POST['mark']<=100 ){
            $_POST['gread']= "A+";
            $_POST['point']= "4.00";
        }
        elseif($_POST['mark']>=76 && $_POST['mark']<=80 ){
            $_POST['gread']= "A";
            $_POST['point']= "3.75";
        }
        elseif($_POST['mark']>=71 && $_POST['mark']<=75 ){
            $_POST['gread']= "A-";
            $_POST['point']= "3.50";
        }
        elseif($_POST['mark']>=66 && $_POST['mark']<=70 ){
            $_POST['gread']= "B+";
            $_POST['point']= "3.25";
        }
        elseif($_POST['mark']>=61 && $_POST['mark']<=65 ){
            $_POST['gread']= "B";
            $_POST['point']= "3.00";
        }
        elseif($_POST['mark']>=56 && $_POST['mark']<=60 ){
            $_POST['gread']= "B-";
            $_POST['point']= "2.75";
        }
        elseif($_POST['mark']>=51 && $_POST['mark']<=55 ){
            $_POST['gread']= "C+";
            $_POST['point']= "2.50";
        }
        elseif($_POST['mark']>=46 && $_POST['mark']<=50 ){
            $_POST['gread']= "C";
            $_POST['point']= "2.25";
        }
        elseif($_POST['mark']>=40 && $_POST['mark']<=45 ){
            $_POST['gread']= "D";
            $_POST['point']= "2.00";
        }
        else{
            $_POST['gread']= "F";
            $_POST['point']= "0.00";
        }

        $data->setData($_POST)->storeData();