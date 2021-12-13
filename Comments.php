<?php
    class Comments{
        private $comID;
        private $authID;
        private $artID;
        private $content;
        private $lastmodified;
        

        public function load($row){
            $this->setComID($row['comID']);
            $this->setAuthID($row['authID']);
            $this->setArtID($row['artID']);
            $this->setContent($row['content']);
            $this->setLastModified($row['lastmodified']);
            
        
        }

        public function setComID($comID){
            $this->comID=$comID;
        }

        public function getComID(){
            return $this->comID;
        }

        public function setAuthID($authID){
            $this->authID=$authID;
        }

        public function getAuthID(){
            return $this->authID;
        }

        public function setArtID($artID){
            $this->artID=$artID;
        }

        public function getArtID(){
            return $this->artID;
        }

        public function setContent($content){
            $this->content=$content;
        }

        public function getContent(){
            return $this->content;
        }
        public function setLastModified($lastmodified){
            $this->lastmodified=$lastmodified;
        }

        public function getLastModified(){
            return $this->lastmodified;
        }
       
    }
?>