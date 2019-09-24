<?php


class studentadd
{
    public $id='';
    public $sname='';
    public $sroll='';
    public $sreg='';
    public $ssession='';
    public $pdo;
    public function __construct()
    {
        $this->pdo=new PDO('mysql:host=localhost;dbname=result','root','' );
    }
    public function setData($data){
        if(array_key_exists('id',$data)){
            $this->id=$data['id'];
        }
        if(array_key_exists('sname',$data)){
            $this->sname=$data['sname'];
        }
        if(array_key_exists('sroll',$data)){
            $this->sroll=$data['sroll'];
        }
        if(array_key_exists('sreg',$data)){
            $this->sreg=$data['sreg'];
        }
        if(array_key_exists('ssession',$data)){
            $this->ssession=$data['ssession'];
        }
       return $this;
    }
    public function storeStudent(){
        $query="INSERT INTO `studentinfo` (`id`, `sname`, `rollno`, `reg`, `ssession`) VALUES (NULL, :sname,:rollno,:reg, :ssession)";
        $stmt=$this->pdo->prepare($query);
        $alldata=$stmt->execute(
            array(
                ":sname"=>$this->sname ,
                ":rollno"=>$this-> sroll,
                ":reg"=>$this-> sreg,
                ":ssession"=>$this->ssession
            )
        );
        if ($alldata);
        session_start();
        header('location:index.php');
        $_SESSION['massage']="<h5>Insert<spen style=\"color:red\"> successfully...!</span></h5>";
    }
    public function viewStudent(){
        $query="SELECT * FROM `studentinfo` ";
        $stmt=$this->pdo->prepare($query);
        $stmt->execute();
        $all=$stmt->fetchAll();
        return $all;
    }
    public function singlestudent(){
        $query="SELECT * FROM `studentinfo` WHERE rollno=".$this->sroll;
        $stmt=$this->pdo->prepare($query);
        $stmt->execute();
        $all=$stmt->fetch();
        return $all;
    }

    public function deleteResult()
    {
        $query = "DELETE FROM ``studentinfo`` WHERE `rollno` =". $this->sroll;
        $stmt = $this->pdo->query($query);
        $out = $stmt->execute();
                if ($out) {
                    session_start();
                    header('location:viewPage.php');
                    $_SESSION['massage'] = "<h5>Delete<spen style=\"color:red\"> successfully...!</span></h5>";
                }
    }
}