<?php
    class User{
        private $UserID;
        private $username;
        private $firstname;
        private $lastname;
        private $email;
        private $passwd;

        public function load($row){
            $this->setUserID($row['userID']);
            $this->setUsername($row['username']);
            $this->setFirstname($row['firstname']);
            $this->setLastname($row['lastname']);
            $this->setEmail($row["email"]);
            $this->setPasswd($row["passwd"]);
        
        }

        public function setUserID($userID){
            $this->userID=$userID;
        }

        public function getUserID(){
            return $this->userID;
        }

        public function setUsername($username){
            $this->username=$username;
        }

        public function getUsername(){
            return $this->username;
        }

        public function setEmail($email){
            $this->email=$email;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setPasswd($passwd){
            $this->passwd=$passwd;
        }

        public function getPasswd(){
            return $this->passwd;
        }
        public function setFirstName($firstname){
            $this->firstname=$firstname;
        }

        public function getFirstName(){
            return $this->firstname;
        }
        public function setLastName($lastname){
            $this->lastname=$lastname;
        }

        public function getLastName(){
            return $this->lastname;
        }
    }
?>