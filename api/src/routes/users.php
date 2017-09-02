<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once "../src/model/User.class.php";
require_once "../src/model/persist/UserDAO.class.php";


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
