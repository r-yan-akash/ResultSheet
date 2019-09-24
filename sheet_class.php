        <?php

        class sheet_class
        {
            public $id = '';
            public $sroll = '';
            public $pdo;
            public $sub = '';
            public $code = '';
            public $t = '';
            public $p = '';
            public $c = '';
            public $mark = '';
            public $gread = '';
            public $point = '';

            public function __construct()
            {
                $this->pdo=new PDO('mysql:host=localhost;dbname=result','root','' );
            }
            public function setData($data)
            {
//                print_r($data);
//                die();

               if (array_key_exists('id',$data)){
                   $this->id=$data['id'];
            }
            if (array_key_exists('sroll',$data)){
                   $this->sroll=$data['sroll'];
            }
                if (array_key_exists('subject',$data)){
                $this->sub=$data['subject'];
            }
                if (array_key_exists('code',$data)){
                $this->code=$data['code'];
            }
                if (array_key_exists('T',$data)){
                $this->t=$data['T'];
            }
                if (array_key_exists('P',$data)){
                $this->p=$data['P'];
            }
                if (array_key_exists('C',$data)){
                $this->c=$data['C'];
            }
                if (array_key_exists('mark',$data)){
                $this->mark=$data['mark'];
            }
                if (array_key_exists('gread',$data)){
                $this->gread=$data['gread'];
            }
                if (array_key_exists('point',$data)){
                $this->point=doubleval($data['point']);
            }
            return $this;

            }

            public function storeData()
            {
//                echo $this->id,$this->sroll,$this->sub,$this->code,$this->t,$this->p,$this->c,$this->mark,$this->gread,$this->point;
//                die();
//                $query="INSERT INTO `akash` (`id`, `sroll`, `subCode`, `subjectName`, `t`, `p`, `c`, `grade`, `point`) VALUES (:id,:sroll,:subCode,:subjectName,:t,:p,:c,:grade,:point)";
            $query="INSERT INTO `akash` (`id`, `sroll`,`subCode`, `subjectName`, `t`, `p`, `c`, `mark`, `grade`, `point`) VALUES (NULL,:sroll,:subCode,:subjectName,:t,:p,:c,:mark,:grade,:point)";
            $stmt=$this->pdo->prepare($query);
           $alldata=$stmt->execute(
               array(
                   ":sroll"=>$this->sroll,
                   ":subCode"=>$this->code,
                   ":subjectName"=>$this->sub,
                   ":t"=>$this->t,
                   ":p"=>$this->p,
                   ":c"=>$this->c,
                   ":mark"=>$this->mark,
                   ":grade"=>$this->gread,
                   ":point"=>$this->point
               )
           );
           if ($alldata) {
               session_start();
               header('location:indexSheet.php');
               $_SESSION['massage'] = "insert successfully";
           }

            }
            public function singleResult(){
				//allResult="SELECT SUM(result) FROM akash WHERE sroll=".$this->sroll;
                $query="SELECT * FROM `akash` WHERE sroll=".$this->sroll;
                $stmt=$this->pdo->prepare($query);
                $stmt->execute();
                $all=$stmt->fetchAll();
                return $all;
            }
            public function deleteResult()
            {
//                echo $this->sroll;
//                die();
                $query="DELETE FROM `studentinfo` WHERE `studentinfo`.`rollno` = ".$this->sroll;
                $stmt = $this->pdo->query($query);
                $out = $stmt->execute();
                if ($out) {
                    session_start();
                    header('location:viewresult.php')->id;
                    $_SESSION['masssage'] = "<h5>Delete<spen style=\"color:red\"> successfully...!</span></h5>";
                }
            }

        }
