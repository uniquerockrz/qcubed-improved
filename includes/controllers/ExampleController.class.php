<?php

class ExampleController extends QPanel{

	public $strPageTitle;

	public function __construct($objParentObject, $strControlId){
		try{
			parent::__construct($objParentObject, $strControlId);
		} catch(QCallerException $objExc){
			$objExc->IncrementOffset();
			throw $objExc;
		}

		$this->strTemplate = __VIEWS_PATH__ . '/ExampleView.tpl.php';

		$this->strPageTitle = "Welcome to QCubed Improved";
	}

	public function GetPageTitle() {
		return $this->strPageTitle;
	}
}