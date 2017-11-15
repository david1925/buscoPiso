<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once "../src/model/Users.class.php";
require_once "../src/model/persist/UsersDAO.class.php";


// Get all users
$app->get('/users', function(Request $request, Response $response){
    try{
        $result = "";
        $users = new UsersDAO();
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
        $result = $helper->Login($user);
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

// Register a new user
$app->post('/users/register/', function(Request $request, Response $response){
    $name = $request->getParam("name");
    $firstname = $request->getParam("firstname");
    $lastname = $request->getParam("lastname");
    $phone = $request->getParam("phone");
    $email = $request->getParam("email");
    $password = $request->getParam("password");
    $repeatPassword = $request->getParam("repeatPassword");
    if(!isset($name) || $name=="" || $name=="undefined"){
      return "Name is incorrect or null";
    }else{
      if(!isset($firstname) || $firstname=="" || $firstname=="undefined"){
        return "Firstname is incorrect or null";
      }else{
        if(!isset($email) || $email=="" || $email=="undefined"){
          return "Email is incorrect or null";
        }else{
          if(!isset($password) || !isset($repeatPassword) || $password=="" || $repeatPassword=="" || $password=="undefined" || $repeatPassword=="undefined"){
            return "Password or repeat password is incorrect or null";
          }else{
            if(strcmp($password, $repeatPassword)==0){
              try{
                  $result = "";
                  $user = new Users("", $name, $firstname, $lastname, $email, $password, $phone, "", "", "", "", "", "");
                  $helper = new UsersDAO();
                  $result = $helper->registerUser($user);
                  print_r($result);
              } catch(PDOException $e){
                  echo '{"error": {"text": '.$e->getMessage().'}}';
              }
            }else{
              return "Passwords don't match";
            }
          }
        }
      }
    }


});
