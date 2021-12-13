<?php
    include_once 'User.php';
    include_once 'Topics.php';
    include_once 'Comments.php';
    include_once 'Articles.php';

    class UserDAO {


        public function getConnection(){
            $mysqli = new mysqli("127.0.0.1", "cs2033user", "Spring-2021", "cs2033");
            if ($mysqli->connect_errno) {
                $mysqli=null;
            }
            return $mysqli;
        }

        public function addUser($user){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("INSERT INTO users (username, lastname, firstname, email, passwd) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $user->getUsername(), $user->getLastname(), $user->getFirstname(), $user->getEmail(), $user->getPasswd());
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }
        //needs more to make it an actual edit feature
        public function editUser($user){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("INSERT INTO users (username, lastname, firstname, email, passwd) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $user->getUsername(), $user->getLastname(), $user->getFirstname(), $user->getEmail(), $user->getPasswd());
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }


        public function deleteUser($userid){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("DELETE FROM users WHERE userID = ?");
            $stmt->bind_param("i", $userid);
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

        public function getUser(){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM users;"); 
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                $user = new User();
                $user->load($row);
                $users[]=$user;
            }    
            $stmt->close();
            $connection->close();
            return $users;
        }

        public function authenticate($username, $passwd){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM users WHERE username = ? and passwd = ?;");
            $stmt->bind_param("ss",$username,$passwd); 
            $stmt->execute();
            $result = $stmt->get_result();
            $found=$result->fetch_assoc();
            $stmt->close();
            $connection->close();
            var_dump($found);
            return $found;
        }
        public function addTopic($topic){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("INSERT INTO topics (name, description, lasModified) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $topic->getName(), $topic->getDescription(), $topic->getLastModified());
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }
        public function deleteTopic($topicid){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("DELETE FROM topics WHERE topicID = ?");
            $stmt->bind_param("i", $topicid);
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }
        public function getTopic(){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM topics;"); 
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                $topic = new Topics();
                $topic->load($row);
                $topics[]=$topic;
            }    
            $stmt->close();
            $connection->close();
            return $topics;
        }
        public function addComment($comment){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("INSERT INTO comments (authorID, articleID, content, lasModified) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $comment->getAuthorID(), $comment->getArticleID(), $comment->getContent(), $comment->getLastModified());
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }
        public function deleteComment($commentid){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("DELETE FROM comments WHERE commentID = ?");
            $stmt->bind_param("i", $commentid);
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }
        public function getComment(){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM comments;"); 
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                $comment = new Comments();
                $comment->load($row);
                $comments[]=$comment;
            }    
            $stmt->close();
            $connection->close();
            return $comments;
        }
        public function addArticle($article){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("INSERT INTO articles (authorID, catID, artID, title, image, content, lasModified) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssss", $article->getAuthorID(), $article->getCatID(), $article->getArtID(), $article->getTitle(), $article->getImage(), $article->getContent(),$article->getLastModified());
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }
        public function deleteArticle($articleid){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("DELETE FROM articles WHERE articleID = ?");
            $stmt->bind_param("i", $articleid);
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }
        public function getArticle(){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM articles;"); 
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                $article = new Articles();
                $article->load($row);
                $articles[]=$article;
            }    
            $stmt->close();
            $connection->close();
            return $articles;
        }



    }
?>