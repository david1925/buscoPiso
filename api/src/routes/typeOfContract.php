<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once "../src/model/TypeOfContract.class.php";
require_once "../src/model/persist/TypeOfContractDAO.class.php";


// Get all municipalitites
$app->get('/typeOfContract', function(Request $request, Response $response){
    try{
        $result = "";
        $typeOfContract = new TypeOfContractDAO();
        $result = $typeOfContract->getAll();
        echo json_encode($result);
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});
