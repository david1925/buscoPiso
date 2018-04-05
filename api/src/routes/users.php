<?php
use Slim\Http\Request;
use Slim\Http\Response;




$app->group('/users/', function () use($key,$renewCookie) {
    //Get all users
    $this->get('', function ($req, $res, $args) use($key) {
                try{
                       $result = "";
                       $users = new UsersDAO();
                       $result = $users->getAll();
                       echo json_encode($result);
                } catch(PDOException $e){
                       echo '{"error": {"text": '.$e->getMessage().'}';
                }
    });

    //Get user by id
    $this->get('{id}', function ($req, $res, $args) {
                    $id = $args['id'];
                try{
                    $result = "";
                    $user = new Users($id,"","","","","","","","","","","","","","","","","","");
                    $users = new UsersDAO();
                    $result = $users->getUser($user);
                    echo json_encode($result);
                    /*echo json_encode($result);
                       $decoded = JWT::decode($_COOKIE['api-token'], $key, array('HS256'));*/
                } catch(PDOException $e){
                    echo '{"error": {"text": '.$e->getMessage().'}';
                }
    });

    //Get last user logged user
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

    $this->get('email/{email}', function ($req, $res, $args) {
                    $email = $args['email'];
                try{
                    $result = "";
                    $user = new Users("","","","",$email,"","","","","","","","","","","","","","");
                    $users = new UsersDAO();
                    $result = $users->getUserByEmail($user);
                    echo json_encode($result);
                } catch(PDOException $e){
                    echo '{"error": {"text": '.$e->getMessage().'}';
                }
    });

    $this->post('login/user', function ($req, $res, $args) use($key,$renewCookie) {
                    $email = $req->getParam("email");
                    $password = $req->getParam("password");
                try{
                    $result = "";
                    $user = new Users("", "", "", "", $email, $password, "", "", "", "", "", "", "", "", "");
                    $helper = new UsersDAO();
                    $result = $helper->Login($user);
                    if($result==null){
        	            echo '{"error": {"text": "Username or password incorrect"}}';
                    }else{
                        try{                            
                            $userToken = array($result[0]["users_id_user"],$result[0]["users_name"],$result[0]["users_firstname"],$result[0]["users_lastname"],$result[0]["users_email"],"",$result[0]["users_phone"],$result[0]["floor_description"],$result[0]["state"],$result[0]["last_login"],$result[0]["groups_groups_id_group"],$result[0]["business_office_idoffice"],$result[0]["additional_features_users_idadditional_features_users"]);                            
						    $token = array('api-token' =>  JWT::encode($userToken, $key));// api token: nombre de la cookie, $result[0]: Array de los datos que se quiere encriptar para poder utilizar
						    setcookie("api-token",JWT::encode($userToken, $key),$renewCookie);//Crea la cookie
                            echo $_COOKIE['api-token'];
                            /*$decoded = JWT::decode($_COOKIE['api-token'], $key, array('HS256'));
                            print_r($decoded);*/
					    }catch(\Exception $e) {
						    $result=  array('error' =>  "Error generate token login");
						    echo json_encode($result);
					    }
                    }
                } catch(PDOException $e){
                    echo '{"error": {"text": '.$e->getMessage().'}}';
                }
    });
});
