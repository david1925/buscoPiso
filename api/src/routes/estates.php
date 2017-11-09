<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once "../src/model/Floors.class.php";
require_once "../src/model/persist/FloorsDAO.class.php";


// Get all users
$app->get('/estates/features/{id}', function(Request $request, Response $response){
  $estates = $request->getAttribute("id");
  switch ($estates) {
    case "Pisos":
      $estates = "additional_features" ;
      break;
    case "Oficinas";
      $estates = "office_features";
      break;
    case "Garages":
      $estates = "garages_features";
      break;
    case "Trasteros":
      $estates = "locals_warehouses_features";
      break;
    case "Terrenos":
      $estates = "land_type";
      break;
    default:
      $estates = "";
      break;
  }
    try{
        $result = "";
        $users = new FloorDAO();
        $result = $users->getFeatures($estates);
        echo json_encode($result);
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});
