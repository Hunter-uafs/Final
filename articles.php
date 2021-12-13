<?php
    class Articles{
        private $authID;
        private $catID;
        private $artID;
        private $title;
        private $image;
        private $content;
        private $lastmodified;

        public function load($row){
            $this->setAuthID($row['authID']);
            $this->setCatID($row['catID']);
            $this->setArtID($row['artID']);
            $this->setTitle($row['title']);
            $this->setImage($row['image']);
            $this->setContent($row['content']);
            $this->setLastModified($row['lastmodified']);
        
        }

        public function setAuthID($authID){
            $this->userID=$userID;
        }

        public function getAuthID(){
            return $this->userID;
        }

        public function setCatID($catID){
            $this->catID=$catID;
        }

        public function getCatID(){
            return $this->catID;
        }

        public function setArtID($artID){
            $this->artID=$artID;
        }

        public function getArtID(){
            return $this->artID;
        }

        public function setTitle($title){
            $this->title=$title;
        }

        public function getTitle(){
            return $this->title;
        }
        public function setImage($image){
            $this->image=$image;
        }

        public function getImage(){
            return $this->image;
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

        public function getlastmodified(){
            return $this->lastmodified;
        }
    }
?>