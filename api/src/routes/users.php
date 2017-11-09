<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once "../src/model/Users.class.php";
require_once "../src/model/persist/UsersDAO.class.php";


// Get all users
$app->get('/users', function(Request $request, Response $response){
    try{
        $result = "";
        $users = new UserDAO();
        $result = $users->getAll();
        echo json_encode($result);
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});

// Check if session started, if not start session
$app->post('/users/login/', function(Request $request, Response $response){
    $email = $request->getParam("email");
    $password = $request->getParam("password");
    try{
        $result = "";
        $user = new Users("", "", "", "", $email, $password, "", "", "", "", "", "", "", "", "");
        $helper = new UsersDAO();
        $result = $helper->checkLogin($user);
        if($result==null){
        	echo '{"error": {"text": "Username or password incorrect"}}';
        }else{
            session_start();
        	$_SESSION['user']=$result;
        	echo json_encode($result);
        }        
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}}';
    }
});

