<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

/*require_once "../src/model/AccessLog.class.php";
require_once "../src/model/persist/AccessLogDAO.class.php";*/


// Get all municipalitites
$app->get('/access', function(Request $request, Response $response){
    try{
        $result = "";
        $access = new AccessLogDAO();
        $result = $access->getAll();
        echo json_encode($result);
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});

// Get one error
$app->get('/access/{id}', function(Request $request, Response $response){
    $idAccess = $request->getAttribute("id");
    try{
        $result = "";
        $access = new AccessLog($idAccess,"","","","");
        $accessDAO = new AccessLogDAO();
        $result = $accessDAO->getErrorById($access);
        echo json_encode($result);
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});
