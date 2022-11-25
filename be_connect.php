<?php
    class Database{
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $db = "urphone";

        function connect(){
            $conn = mysqli_connect($this->host, $this->username, $this->password, $this->db);
            return $conn;
        }
    
        function read($query){
            $conn_ = $this->connect();
            $result = mysqli_query($conn_, $query);
            if(!$result){
                return false;
            }else{
                $data = false;
                while($row=mysqli_fetch_assoc($result)){
                    $data[]=$row;
                }
                return $data;
            }
        }
    
        function save($query){
            $conn_ = $this->connect();
            $result = mysqli_query($conn_, $query);
            if(!$result){
                return false;
            }else{
                return true;
            }
        }
    }
    
?>