<?php
    class Topics{
        private $topID;
        private $name;
        private $description;
        private $lastmodified;
        
        public function load($row){
            $this->setTopID($row['topID']);
            $this->setName($row['name']);
            $this->setDescription($row['description']);
            $this->setLastmodified($row['lastmodified']);
            
        }

        public function setTopID($topID){
            $this->topID=$topID;
        }

        public function getTopID(){
            return $this->topID;
        }

        public function setName($name){
            $this->name=$name;
        }

        public function getName(){
            return $this->name;
        }

        public function setDescription($description){
            $this->description=$description;
        }

        public function getDescription(){
            return $this->description;
        }

        public function setLastModified($lastmodified){
            $this->lastmodified=$lastmodified;
        }

        
    }
?>