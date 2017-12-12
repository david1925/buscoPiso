<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once "../src/model/Users.class.php";
require_once "../src/model/Floors.class.php";
require_once "../src/model/FloorsSearchUsers.class.php";
require_once "../src/model/persist/UsersDAO.class.php";
require_once "../src/model/persist/FloorsSearchUsersDAO.class.php";


// Get all floorsSearchUsers
$app->get('/floorsSearchUsers', function(Request $request, Response $response){
    try{
        $result = "";
        $helper = new FloorsSearchUsersDAO();
        $result = $helper->getAll();
        echo json_encode($result);
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});

// Get one row from floorsSearchUsers by id
$app->get('/floorsSearchUsers/{id}', function(Request $request, Response $response){
    $idFloorsSearchUsers= $request->getAttribute("id");
    try{
        $floorsSearchUsers = new FloorsSearchUsers($idFloorsSearchUsers,"","","","","","","","","","");
        $result = "";
        $helper = new FloorsSearchUsersDAO();
        $result = $helper->getFloorsSearchUsersById($floorsSearchUsers);
        echo json_encode($result);
    }
    catch(PDOException $e){
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
        $floorsSearchUsers = new FloorsSearchUsers("",$price,$squareMeters,$bedrooms,$publicationDate,"",$municipalityId,$provinceId,$conditionId,$typeOfContractId,$userId);
        $helper= new FloorsSearchUsersDAO();
        $result = $helper->insert($floorsSearchUsers);
        if($result){
            echo "true";
        }else{
            echo "false";
        }
    }
    catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});