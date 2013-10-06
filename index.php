<?php require_once 'qcubed.inc.php';

class Index extends QForm{

	/** @var string Title of the page */
	protected $strTitle = "QCubed Improved";
	/** @var string The string to hold the PathInfo */
	protected $strPathInfo = '';
	/** @var QPanel The middle body Panel of the page */
	protected $pnlPageMainBody;
	/** @var QPanel The page header and footer panels for the page. */
	protected $pnlPageHeader, $pnlPageFooter;

	public function Form_Create() {
		// Get the Top Panel
		$this->pnlPageHeader = new HeaderPanel($this, null);
		// and the bottom one
		$this->pnlPageFooter = new FooterPanel($this, null);
		// and get the main page
		$this->pnlPageMainBody = $this->SetController();
	}

	/**
	 * The function to set the main body panel
	 *
	 * @return null
	 */
	protected function SetController() {
		$pnlMainBody = null;
		switch (QApplication::PathInfo(0)) {
			case 'example':
				$pnlMainBody = new ExampleController($this, null);
				break;
			case 'pages':
				switch (QApplication::PathInfo(1)) {
					case 'example':
						$pnlMainBody = new ExampleController($this, null);
						break;
					case '404':
						$pnlMainBody = new PageNotFoundController($this, null);
						break;
					default:
						$pnlMainBody = new PageNotFoundController($this, null);
						break;
					}
				break;
			case null:
			case '':
				$pnlMainBody = new WelcomeController($this, null);
				break;
			default:
				$pnlMainBody = new PageNotFoundController($this, null);
				break;
		}
		$this->strTitle = $pnlMainBody->GetPageTitle();
		return $pnlMainBody;
	}
}
Index::Run('Index', __VIEWS_PATH__ . '/index.tpl.php');

