<?php
    class Signup{
        private $error = "";

        public function evaluate($data){
            foreach($data as $key => $value){
                if(empty($value)){
                    $error = $error . $key . "is empty!<br>";
                } 
            }

            if($error == ""){
                //no error
                $this->create_user($data);
            }else{
                return $error;
            }
        }

        public function create_user($data){
            $username = $data['username'];
            $password = $data['password'];
            $email = $data['email'];
            $query = "insert into member(MemberEmail, MemberPassword, MemberName) values('$email','$password','$username')";
            $DB = new Database();
            $DB->save($query);
        }
    }

?>