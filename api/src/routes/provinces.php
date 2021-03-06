<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once "../src/model/Province.class.php";
require_once "../src/model/persist/ProvinceDAO.class.php";


// Get all municipalitites
$app->get('/provinces', function(Request $request, Response $response){
    try{
        $result = "";
        $provinces = new ProvinceDAO();
        $result = $provinces->getAll();
        echo json_encode($result);
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});
//Get all municipalities from an autonomous community
$app->get('/provinces/{id}', function(Request $request, Response $response){
  $id = $request->getAttribute("id");
    try{
        $result = "";
        $province = new Province("", "", $id);
        $provinces = new ProvinceDAO();
        $result = $provinces->getAllFromAutonomousCommunity($province);
        echo json_encode($result);
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});
