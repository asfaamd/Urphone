<?php
    class Login{
        private $error = "";

        public function evaluate($data){
            $email = $data['username'];
            $password = $data['password'];
            
            //query atau sintaks
            $query = "select * from member where MemberEmail = '$email' limit 1";
            
            $DB = new Database();
            $result = $DB->read($query);

            if($result){
                
                $row = $result[0];
                
                if($password == $row['MemberPassword']){
                    //create session data
                    $_SESSION['urphone_MemberID'] = $row['MemberID'];
                } else{
                    $this->error .= "Wrong password<br>";
                }
            } else{
                $this->error = $this->error . "NO such email was found<br>";
            } 

            return $this->error;
        }

    }
?>