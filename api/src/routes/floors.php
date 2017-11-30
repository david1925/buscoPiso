<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once "../src/model/Floors.class.php";
require_once "../src/model/persist/FloorsDAO.class.php";


// Get all municipalitites
$app->get('/floors', function(Request $request, Response $response){
    try{
        $result = "";
        $provinces = new FloorsDAO();
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
        $floor = new Floors($id,"","","","","","","","","");
        $floors = new FloorsDAO();
        $result = $floors->getFloor($floor);
        echo json_encode($result);
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});
