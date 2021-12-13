<?php
    include_once 'ControllerAction.php';
    include_once 'model/ContactDAO.php';


    class ArticlesList implements ControllerAction{

        function processGET(){
            $UserDAO = new UserDAO();
            $users = $UserDAO->getArticles();
            $_REQUEST['articles']=$articles;
            return "views/listContact.php";
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
            $authID=$_POST['authID'];
            $catID=$_POST['catID'];
            $artID=$_POST['artID'];
            $title=$_POST['title'];
            $image=$_POST['image'];
            $content=$_POST['content'];
            $lastmodified=$_POST['lastmodified'];
            $article = new Articles();
            $article->setAuthID($authID);
            $article->setCatID($catID);
            $article->setArtID($artID);
            $article->setTitle($title);
            $article->setImage($image);
            $article->setContent($content);
            $article->setLastModified($lastmodified);
            $userDAO = new UserDAO();
            $userDAO->addArticle($article);
            header("Location: controller.php?page=list");
            exit;
        }

        function getAccess(){
            return "PROTECTED";
        }      

    }

    class ArticlesDelete implements ControllerAction{

        function processGET(){
            $authID = $_GET['authID'];
            return 'views/deleteUser.php';

        }

        function processPOST(){
            $authID=$_POST['authID'];
            $submit=$_POST['submit'];
            if($submit=='CONFIRM'){
                $UserDAO = new UserDAO();
                $UserDAO->deleteArticle($authID);
            }
            header("Location: controller.php?page=list");
            exit;
        }

        function getAccess(){
            return "PROTECTED";
        }

    }