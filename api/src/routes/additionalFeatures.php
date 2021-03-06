<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once "../src/model/AdditionalFeatures.class.php";
require_once "../src/model/persist/AdditionalFeaturesDAO.class.php";


// Get all additional features
$app->get('/additionalFeatures', function(Request $request, Response $response){
    try{
        $result = "";
        $additionalFeatures = new AdditionalFeaturesDAO();
        $result = $additionalFeatures->getAll();
        echo json_encode($result);
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});

// Get colum names table
$app->get('/additionalFeatures/desc', function(Request $request, Response $response){
    try{
        $result = "";
        $additionalFeatures = new AdditionalFeaturesDAO();
        $result = $additionalFeatures->getColumnNames();
        echo json_encode($result);
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});
