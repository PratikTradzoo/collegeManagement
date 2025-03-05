<?php 
include('Db.php');
Class Teacher {
    public $conn,$db;
    function __construct(){
        $this->db=new Db("localhost","root","","college");
    }

    // this will selectt all data
    function all(){
            $sql="SELECT * from teachers";
            $data=$this->db->getAll($sql);
            if($data['status']){
                $data= json_decode($data['data']);
            }
    }

    function create(){
        $params=[
            "name"=>"Pratik",
            "email_id"=>"pratikjoshi512@gmail.com",
            "mobile_number"=>7219573379,
            "joining_date"=>"2025-03-04"
        ];
        return $this->db->create('teachers',$params);
    }

}