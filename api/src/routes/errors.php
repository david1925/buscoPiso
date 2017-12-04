<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once "../src/model/ErrorLog.class.php";
require_once "../src/model/persist/ErrorLogDAO.class.php";


// Get all municipalitites
$app->get('/errors', function(Request $request, Response $response){
    try{
        $result = "";
        $errors = new ErrorLogDAO();
        $result = $errors->getAll();
        echo json_encode($result);
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});

// Get one error
$app->get('/errors/{id}', function(Request $request, Response $response){
    $idError = $request->getAttribute("id");
    try{
        $result = "";
        $error = new ErrorLog($idError,"","","","");
        $errors = new ErrorLogDAO();
        $result = $errors->getErrorById($error);
        echo json_encode($result);
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});
