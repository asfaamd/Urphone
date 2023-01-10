<?php
    class Signup{
        private $error = "";

        public function evaluate($data){
            foreach($data as $key => $value){
                if(empty($value)){
                    $this->error = $this->error . $key . "is empty!<br>";
                } 
            }

            if($this->error == ""){
                //no error
                $this->create_user($data);
            }else{
                return $this->error;
            }
        }

        public function create_user($data){
            $username = $data['username'];
            $password = $data['password'];
            $email = $data['email'];
            $query = "insert into member(MemberEmail, MemberPassword, MemberName) 
            values('$email','$password','$username')";
            $DB = new Database();
            $DB->save($query);
        }
    }

?>