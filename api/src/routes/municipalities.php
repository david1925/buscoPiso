<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once "../src/model/Municipality.class.php";
require_once "../src/model/persist/MunicipalityDAO.class.php";


// Get all users
$app->get('/municipalities', function(Request $request, Response $response){
    try{
        $result = "";
        $municipalities = new MunicipalityDAO();
        $result = $municipalities->getAll();
        echo json_encode($result);
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});
