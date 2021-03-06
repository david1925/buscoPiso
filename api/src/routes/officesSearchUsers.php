<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once "../src/model/Users.class.php";
require_once "../src/model/Offices.class.php";
require_once "../src/model/persist/OfficesDAO.class.php";
require_once "../src/model/OfficesSearchUsers.class.php";
require_once "../src/model/persist/OfficesSearchUsersDAO.class.php";


// Get all officesSearchUsers
$app->get('/officesSearchUsers', function(Request $request, Response $response){
    try{
        $result = "";
        $helper = new OfficesSearchUsersDAO();
        $result = $helper->getAll();
        echo json_encode($result);
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});

// Get one offcicesSearchUsers row
$app->get('/officesSearchUsers/{id}', function(Request $request, Response $response){
    $idOfficesSearchUsers= $request->getAttribute("id");
    try{
        $result = "";
        $officesSearchUsers = new OfficesSearchUsers($idOfficesSearchUsers,"","","","","","","","","","","","");
        $helper = new OfficesSearchUsersDAO();
        $result = $helper->getOfficesSearchUsersById($officesSearchUsers);
        echo json_encode($result);
    }
    catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});

// Insert into officesSearchUsers
$app->post('/officesSearchUsers/insert', function(Request $request, Response $response){
    $price = $request->getParam("price");
    $squareMeters = $request->getParam("squareMeters");
    $publicationDate = $request->getParam("publicationDate");
    $address = $request->getParam("address");
    $local = $request->getParam("local");
    $warehouse = $request->getParam("warehouse");
    $distributionId= $request->getParam("distributionId");
    $buildingType = $request->getParam("buildingType");
    $officesFeaturesId = $request->getParam("officesFeaturesId");
    $municipalityId = $request->getParam("municipalityId");
    $typeOfContractId = $request->getParam("typeOfContractId");
    $provinceId = $request->getParam("provinceId");
    $userId = $request->getParam("userId");
        //$publicationDate = NULL;
    try{
        $result = "";
        $officesSearchUsers = new OfficesSearchUsers("",$price,$squareMeters,$publicationDate,$address,$local,$warehouse,$distributionId,$buildingType,$officesFeaturesId,$municipalityId,$typeOfContractId,$provinceId,$userId);
        $helper= new OfficesSearchUsersDAO();
        $result = $helper->insert($officesSearchUsers);
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