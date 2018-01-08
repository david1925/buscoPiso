<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once "../src/model/Users.class.php";
require_once "../src/model/Garages.class.php";
require_once "../src/model/GaragesSearchUsers.class.php";
require_once "../src/model/persist/GaragesSearchUsersDAO.class.php";


// Get all garagesSearchUsers
$app->get('/garagesSearchUsers', function(Request $request, Response $response){
    try{
        $result = "";
        $helper = new GaragesSearchUsersDAO();
        $result = $helper->getAll();
        echo json_encode($result);
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});

// Get one garagesSearchUsers row
$app->get('/garagesSearchUsers/{id}', function(Request $request, Response $response){
    $idGaragesSearchUsers= $request->getAttribute("id");
    try{
        $result = "";
        $garagesSearchUsers = new GaragesSearchUsers($idGaragesSearchUsers,"","","","","","");
        $helper = new GaragesSearchUsersDAO();
        $result = $helper->getGaragesSearchUsersById($garagesSearchUsers);
        echo json_encode($result);
    }
    catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});

// Insert into garagesSearchUsers
$app->post('/garagesSearchUsers/insert', function(Request $request, Response $response){
    $price = $request->getParam("price");
    $publicationDate = $request->getParam("publicationDate");
    $garagesFeaturesId = $request->getParam("garagesFeaturesId");
    $municipalityId = $request->getParam("municipalityId");
    $typeOfContractId = $request->getParam("typeOfContractId");
    $provinceId = $request->getParam("provinceId");
    $userId = $request->getParam("userId");
    try{
        $result = "";
        $garagesSearchUsers = new GaragesSearchUsers("",$price,$publicationDate,$garagesFeaturesId,$typeOfContractId,$municipalityId,$provinceId, $userId);
        echo "Este es el objeto que se crea: "; 
        var_dump($garagesSearchUsers);
        $helper= new GaragesSearchUsersDAO();
        $result = $helper->insert($garagesSearchUsers);
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