<?php
    //session_start();
    class Login{
        private $error = "";
        public function evaluate($data){
            $username = addslashes($data['username']);
            $password = addslashes($data['password']);
            $email = addslashes($data['email']);
            $query = "select * from users where email = '$email' limit 1";
            $DB = new Database();
            $result = $DB->read($query);

            if($result){
                $row = $result[0];
                if($password == $row['password']){
                    
                } else{
                    $this->error .= "Wrong password<br>";
                }
            } else{
                $this->error .= "No such email was found<br>";
            }
            
            return $this->error;
            }
    }
    
?>