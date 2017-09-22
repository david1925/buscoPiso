<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once "../src/model/Municipality.class.php";
require_once "../src/model/persist/MunicipalityDAO.class.php";


// Get all municipalitites
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
//Get all municipalities from an autonomous community
$app->get('/municipalities/{id}', function(Request $request, Response $response){
  $id = $request->getAttribute("id");
    try{
        $result = "";
        $municipality = new Municipality("", $id, "", "", "");
        $municipalities = new MunicipalityDAO();
        $result = $municipalities->getAllFromProvince($municipality);
        echo json_encode($result);
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});
