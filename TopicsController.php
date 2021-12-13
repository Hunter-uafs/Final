<?php
    include_once 'ControllerAction.php';
    include_once 'model/UserDAO.php';


    class TopicsList implements ControllerAction{

        function processGET(){
            $UserDAO = new UserDAO();
            $users = $UserDAO->getTopics();
            $_REQUEST['topics']=$topics;
            return "views/.php";
        }

        function processPOST(){
            return;
        }

        function getAccess(){
            return "PROTECTED";
        }

    }

    class ArticlesAdd implements ControllerAction{

        function processGET(){
            return "views/addUser.php";
        }

        function processPOST(){
            $topID=$_POST['topID'];
            $name=$_POST['name'];
            $description=$_POST['description'];
            $lastmodified=$_POST['lastmodified'];
            $topic = new Topics();
            $topic->setTopID($topID);
            $topic->setName($name);
            $topic->setDescription($description);
            $topic->setLastModified($lastmodified);
            $userDAO = new UserDAO();
            $userDAO->addTopic($topic);
            header("Location: controller.php?page=list");
            exit;
        }

        function getAccess(){
            return "PROTECTED";
        }      

    }

    class ArticlesDelete implements ControllerAction{

        function processGET(){
            $topID = $_GET['topID'];
            return 'views/deleteUser.php';

        }

        function processPOST(){
            $topID=$_POST['topID'];
            $submit=$_POST['submit'];
            if($submit=='CONFIRM'){
                $UserDAO = new UserDAO();
                $UserDAO->deleteTopic($topID);
            }
            header("Location: controller.php?page=list");
            exit;
        }

        function getAccess(){
            return "PROTECTED";
        }

    }