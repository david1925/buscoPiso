<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once "../src/model/AutonomousCommunity.class.php";
require_once "../src/model/persist/AutonomousCommunityDAO.class.php";


// Get all users
$app->get('/autonomousCommunities', function(Request $request, Response $response){
    try{
        $result = "";
        $autonomousCommunities = new AutonomousCommunityDAO();
        $result = $autonomousCommunities->getAll();
        echo json_encode($result);
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});
