<?php
    include_once 'ControllerAction.php';
    include_once 'model/ContactDAO.php';


    class CommentsList implements ControllerAction{

        function processGET(){
            $UserDAO = new UserDAO();
            $comments = $UserDAO->getComments();
            $_REQUEST['comments']=$comments;
            return "views/listContact.php";
        }

        function processPOST(){
            return;
        }

        function getAccess(){
            return "PROTECTED";
        }

    }

    class CommentsAdd implements ControllerAction{

        function processGET(){
            return "views/addUser.php";
        }

        function processPOST(){
            $comID=$_POST['comID'];
            $authID=$_POST['authID'];
            $artID=$_POST['artID'];
            $content=$_POST['content'];
            $lastmodified=$_POST['lastmodified'];
            $comment = new Comments();
            $comment->setComID($comID);
            $comment->setAuthID($authID);
            $comment->setArtID($artID);
            $comment->setContent($content);
            $comment->setLastModified($lastmodified);
            $userDAO = new UserDAO();
            $userDAO->addComment($comment);
            header("Location: controller.php?page=list");
            exit;
        }

        function getAccess(){
            return "PROTECTED";
        }      

    }

    class CommentsDelete implements ControllerAction{

        function processGET(){
            $comID = $_GET['comID'];
            return 'views/deleteUser.php';

        }

        function processPOST(){
            $comID=$_POST['comID'];
            $submit=$_POST['submit'];
            if($submit=='CONFIRM'){
                $UserDAO = new UserDAO();
                $UserDAO->deleteComment($comID);
            }
            header("Location: controller.php?page=list");
            exit;
        }

        function getAccess(){
            return "PROTECTED";
        }

    }