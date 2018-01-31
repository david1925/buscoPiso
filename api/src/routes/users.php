<?php
use Slim\Http\Request;
use Slim\Http\Response;
$app->group('/users/', function () {

    $this->get('', function ($req, $res, $args) {
                   try{
                       $result = "";
                       $users = new UsersDAO();
                       $result = $users->getAll();
                       echo json_encode($result);
                   } catch(PDOException $e){
                       echo '{"error": {"text": '.$e->getMessage().'}';
                   }
    });

    $this->post('last', function ($req, $res, $args) {
                    try{
                        $result = "";       
                        $helper = new UsersDAO();
                        $result = $helper->selectLastInsertedUser();
                        echo json_encode($result);
                    }
                    catch(PDOException $e){
                        echo '{"error": {"text": '.$e->getMessage().'}}';
                    }
    });


});
