<?php
    class Useri{
        private $email;
        private $username;
        private $password;

        public function setEmail($email){
            $this->email=$email;
        }

        public function setUsername($username){
            $this->username=$username;
        }

        public function setPassword($password){
            $this->password=$password;
        }

        public function getEmri(){
            return $this->emri;
        }

        public function getUsername(){
            return $this->username;
        }

        public function getPassword(){
            return $this->password;
        }


        public function __construct($newEmail, $newUsername, $newPassword){
            $this->email = $newEmail;
            $this->username = $newUsername;
            $this->password = $newPassword;
        }


        public function __toString(){
            return "Useri me email: $this->email, me username: $this->username, ka kete password: $this->password";
        }
    }

    $useri1 = new Useri('flori.vula@gmail.com', 'florivula', '12345678');
    // echo $useri1; printon userin me ane te toString method
?>