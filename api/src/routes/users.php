<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once "../src/model/Users.class.php";
require_once "../src/model/Floors.class.php";
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

// Check if user is logged
$app->get('/users/login/check', function(Request $request, Response $response){
    session_start();
    if(!isset($_SESSION['user'])){
        echo json_encode(false);
    }else{
        echo json_encode(true);
    }
});

// Destoys a user session
$app->get('/users/logout/{id}', function(Request $request, Response $response){
    $id  = $request->getAttribute("id");
    $sql = "SELECT users_id_user FROM users WHERE users_id_user=:id";
    try{
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();
        $stmt = $db->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $db = null;
        session_start();
        print_r($_SESSION['user']);
        session_unset();
        session_destroy();
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}}';
    }
});

//Check if an email exists in bbdd
$app->post('/users/checkEmailUser/', function(Request $request, Response $response){
    $email = $request->getParam("email");
    try{
        $result = "";
        $user = new Users("", "", "", "", $email,"", "", "", "", "", "", "", "", "", "");
        $helper = new UsersDAO();
        $result = $helper->checkEmailRegisterUser($user);
        if($result==null){
        	echo "Ya existe un usuario registrado con ese correo";
        }else{
            echo "1";
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
    $checkEmailRegisterUser = new Users("","","","",$email,"","","","","","","","");
    $checkEmailRegisterUserHelper = new UsersDAO();
    $checkEmailRegisterUserResult = $checkEmailRegisterUserHelper->checkEmailRegisterUser($checkEmailRegisterUser);
    if($checkEmailRegisterUserResult!=null){
          return "Ya existe un usuario registrado con ese correo";
    }else{
      $checkPhoneRegisterUser = new Users("","","","","","",$phone,"","","","","","");
      $checkPhoneRegisterUserHelper = new UsersDAO();
      $checkPhoneRegisterUserResult = $checkPhoneRegisterUserHelper->checkPhoneRegisterUser($checkPhoneRegisterUser);
      if($checkPhoneRegisterUserResult!=null){
        return "Ya existe un usuario registrado con ese teléfono";
      }else{
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
                      return "true";
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
      }
    }
});

//Select last user inserted in db
$app->post('/users/last', function(Request $request, Response $response){
    try{
        $result = "";       
        $helper = new UsersDAO();
        $result = $helper->selectLastInsertedUser();
        echo json_encode($result);
    }
    catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}}';
    }
});