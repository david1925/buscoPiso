<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once "../src/model/Users.class.php";
require_once "../src/model/Floors.class.php";
require_once "../src/model/persist/UsersDAO.class.php";
require_once "../src/model/persist/FloorsSearchUsersDAO.class.php";


// Get all floorsSearchUsers
$app->get('/floorsSearchUsers', function(Request $request, Response $response){
    try{
        $result = "";
        $users = new FloorsSearchUsersDAO();
        $result = $users->getAll();
        echo json_encode($result);
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});

// Insert into floorsSearchUsers
$app->post('/floorsSearchUsers/insert', function(Request $request, Response $response){
    $price = $request->getParam("price");
    $squareMeters = $request->getParam("squareMeters");
    $bedrooms = $request->getParam("bedrooms");
    $publicationDate = $request->getParam("publicationDate");
    $municipalityId = $request->getParam("municipalityId");
    $conditionId = $request->getParam("conditionId");
    $typeOfContractId = $request->getParam("typeOfContractId");
    $provinceId = $request->getParam("provinceId");
    $userId = $request->getParam("userId");
    try{
        $result = "";
        $users = new FloorsSearchUsersDAO();
        $result = $users->getAll();
        echo json_encode($result);
    }
    catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});