<?php

class PageNotFoundController extends QPanel{

	public $strPageTitle;

	public function __construct($objParentObject, $strControlId){
		try{
			parent::__construct($objParentObject, $strControlId);
		} catch(QCallerException $objExc){
			$objExc->IncrementOffset();
			throw $objExc;
		}

		$this->strTemplate = __VIEWS_PATH__ . '/PageNotFoundView.tpl.php';

		$this->strPageTitle = "Page Not Found";
	}

	public function GetPageTitle() {
		return $this->strPageTitle;
	}
}