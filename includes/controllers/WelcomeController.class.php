<?php

class WelcomeController extends QPanel{

	public $strPageTitle;

	public $txtBox;
	public $lstSelect;
	public $iALabel1;
	public $iALabel2;
	public $btnButton1;
	public $btnButton2;
	public $btnButton3;
	public $btnButton4;

	public function __construct($objParentObject, $strControlId){
		try{
			parent::__construct($objParentObject, $strControlId);
		} catch(QCallerException $objExc){
			$objExc->IncrementOffset();
			throw $objExc;
		}

		$this->txtBox = new QTextBox($this);
		$this->txtBox->Placeholder = "This is a text box.";

		$this->lstSelect = new QListBox($this);
		$this->lstSelect->AddItem('Item One');
		$this->lstSelect->AddItem('Item Two');
		$this->lstSelect->AddItem('Item Three');

		$this->iALabel1 = new IAlertLabel($this);
		$this->iALabel1->AlertLabelMode = IAlertLabelMode::Danger;
		$this->iALabel1->Text = "This is an error";

		$this->iALabel2 = new IAlertLabel($this);
		$this->iALabel2->AlertLabelMode = IAlertLabelMode::Success;
		$this->iALabel2->Text = "This is a success message";

		$this->btnButton1 = new QButton($this);
		$this->btnButton1->Text = "Hello";
		$this->btnButton1->ButtonMode = QButtonMode::Info;

		$this->btnButton2 = new QButton($this);
		$this->btnButton2->Text = "Hello";
		$this->btnButton2->ButtonMode = QButtonMode::DefaultMode;

		$this->btnButton3 = new QButton($this);
		$this->btnButton3->Text = "Hello";
		$this->btnButton3->ButtonMode = QButtonSize::ExtraSmall;

		$this->btnButton4 = new QButton($this);
		$this->btnButton4->Text = "Hello";
		$this->btnButton4->ButtonMode = QButtonSize::Large;

		$this->strTemplate = __VIEWS_PATH__ . '/WelcomeView.tpl.php';

		$this->strPageTitle = "Welcome to QCubed Improved";
	}

	public function GetPageTitle() {
		return $this->strPageTitle;
	}
}