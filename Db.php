<?php 

class Db{
    public $servername,$username,$password,$database,$conn;

    function __construct($servername,$username,$password,$database=''){
        $this->servername=$servername;
        $this->username=$username;
        $this->password=$password;
        $this->database=$database;
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->database);
    }

    function getAll($sql){
        $result=$this->conn->query($sql);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    $final_result[]=$row;
                }
                 $final_result=json_encode($final_result);
                 return array("status"=>true,"data"=>$final_result);
            }
            return array("status"=>false,"data"=>[]);
    }

    
    function create($tableName,$params){
        $columns= implode("`,`",array_keys($params));
        $values=implode("','",array_values($params));
        $query="Insert into `".$tableName."` (`".$columns."`) values ('".$values."')";
        return $this->conn->query($query);
    }

}