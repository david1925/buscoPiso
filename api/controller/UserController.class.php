<?php

require_once "../model/User.class.php";
require_once "../model/persist/UserDAO.class.php";


class UserController {
	private $action;
	private $jsonData;

	function __construct($action, $jsonData) {
		$this->setAction($action);
		$this->setJsonData($jsonData);
    }

    public function getAction() {
        return $this->action;
    }

    public function getJsonData() {
        return $this->jsonData;
    }

    public function setAction($action) {
        $this->action = $action;
    }
    public function setJsonData($jsonData) {
        $this->jsonData = $jsonData;
    }

	public function doAction()
	{
		$outPutData = array();

		switch ( $this->getAction() )
        {
			case 10000:
				$outPutData = $this->selectUsers();
				break;
			default:
				$errors = array();
				$outPutData[0]= false;
				$errors[]= "Sorry, there has been an error. Try later";
				$outPutData[]= $errors;
				error_log("Action not correct in UserController, value: ".$this->getAction());
				break;
		}

		return $outPutData;
	}


	private function selectUsers()
	{
		$userObj = json_decode(stripslashes($this->getJsonData()));

		$outPutData = array();
		$outPutData[]= true;
		$user->setId(UserADO::create($user));

		//the senetnce returns de id of the user inserted
		$outPutData[]= array($user->getAll());

		return $outPutData;
	}

}
?>
