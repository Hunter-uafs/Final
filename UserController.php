<?php
    include_once 'ControllerAction.php';
    include_once 'model/UserDAO.php';


    class UserList implements ControllerAction{

        function processGET(){
            $UserDAO = new UserDAO();
            $users = $UserDAO->getUsers();
            $_REQUEST['users']=$users;
            return "views/listContact.php";
        }

        function processPOST(){
            return;
        }

        function getAccess(){
            return "PROTECTED";
        }

    }

    class UserAdd implements ControllerAction{

        function processGET(){
            return "views/addUser.php";
        }

        function processPOST(){
            $username=$_POST['username'];
            $email=$_POST['email'];
            $passwd=$_POST['passwd'];
            $user = new User();
            $user->setUsername($username);
            $user->setEmail($email);
            $user->setPasswd($passwd);
            $userDAO = new UserDAO();
            $userDAO->addUser($user);
            header("Location: controller.php?page=list");
            exit;
        }

        function getAccess(){
            return "PROTECTED";
        }      

    }

    class UserDelete implements ControllerAction{

        function processGET(){
            $userid = $_GET['userID'];
            return 'views/deleteUser.php';

        }

        function processPOST(){
            $userid=$_POST['userID'];
            $submit=$_POST['submit'];
            if($submit=='CONFIRM'){
                $UserDAO = new UserDAO();
                $UserDAO->deleteUser($userid);
            }
            header("Location: controller.php?page=list");
            exit;
        }

        function getAccess(){
            return "PROTECTED";
        }

    }

    class Login implements ControllerAction{

        function processGET(){
            return "views/login.php";
        }

        function processPOST(){
            $username=$_POST['username'];
            $passwd=$_POST['passwd'];
            $UserDAO = new UserDAO();
            $found=$UserDAO->authenticate($username,$passwd);
            if($found==null){
                $nextView="Location: controller.php?page=login";
            }else{
                $nextView="Location: controller.php?page=list";
                $_SESSION['loggedin']='TRUE';
            }
            header($nextView);
            exit;       
        }
        function getAccess(){
            return "PUBLIC";
        }

    }

    class Home implements ControllerAction{

        function processGET(){
            return "views/home.php";
        }

        function processPOST(){
            return;
        }

        function getAccess(){
            return "PUBLIC";
        }

    }

    class About implements ControllerAction{

        function processGET(){
            return "views/about.php";
        }

        function processPOST(){
            return;
        }

        function getAccess(){
            return "PUBLIC";
        }

    }
?>