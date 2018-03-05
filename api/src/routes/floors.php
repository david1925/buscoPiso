<?php
use Slim\Http\Request;
use Slim\Http\Response;
$app->group('/floors/', function () {
    //Get all floors
    $this->get('', function ($req, $res, $args) {
                   try{
                        $result = "";
                        $floors = new FloorsDAO();
                        $result = $floors->getAll();
                        echo json_encode($result);
                    } catch(PDOException $e){
                        echo '{"error": {"text": '.$e->getMessage().'}';
                    }
    });
    //Get floor by id
    $this->get('{id}', function ($req, $res, $args) {
                    $id = $args['id'];
                try{
                    $result = "";
                    $floor = new Floors($id,"","","","","","","","","","","","","","","","","","","");
                    $floors = new FloorsDAO();
                    $result = $floors->getFloor($floor);
                    echo json_encode($result);
                } catch(PDOException $e){
                    echo '{"error": {"text": '.$e->getMessage().'}';
                }
    });


});

