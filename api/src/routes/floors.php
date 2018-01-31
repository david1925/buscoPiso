<?php
use Slim\Http\Request;
use Slim\Http\Response;
$app->group('/floors/', function () {
    //Get all floors
    $this->get('', function ($req, $res, $args) {
                   try{
                        $result = "";
                        $provinces = new FloorsDAO();
                        $result = $provinces->getAll();
                        echo json_encode($result);
                    } catch(PDOException $e){
                        echo '{"error": {"text": '.$e->getMessage().'}';
                    }
    });
    //Get floor by id
    $this->get('floors/{id}', function ($req, $res, $args) {
                    $id = $req->getAttribute("id");
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


});

