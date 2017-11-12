<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once "../src/model/Floor.class.php";
require_once "../src/model/persist/FloorDAO.class.php";


// Get all municipalitites
$app->get('/floors', function(Request $request, Response $response){
    try{
        $result = "";
        $provinces = new FloorDAO();
        $result = $provinces->getAll();
        echo json_encode($result);
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});
//Get all municipalities from an autonomous community
$app->get('/floors/{id}', function(Request $request, Response $response){
  $id = $request->getAttribute("id");
    try{
        $result = "";
        $floor = new Floor($id,"","","","","","","","","");
        $floors = new FloorDAO();
        $result = $floors->getFloor($floor);
        echo json_encode($result);
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});
