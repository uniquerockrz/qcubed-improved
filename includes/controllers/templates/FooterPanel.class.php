<?php

class FooterPanel extends QPanel {
	/**
	 * Constructor
	 *
	 * @param QControl|QForm $objParentObject
	 * @param null|string    $strControlId
	 *
	 * @throws Exception|QCallerException
	 * @internal param string $strPathInfo
	 * @internal param string $strQueryString
	 */
	public function __construct($objParentObject, $strControlId) {
		// Call the Parent (without this the control will not work)
		try {
			parent::__construct($objParentObject, $strControlId);
		} catch (QCallerException $objExc) {
			$objExc->IncrementOffset();
			throw $objExc;
		}

		// Set the template.
		$this->Template = __VIEWS_PATH__ . '/templates/FooterPanel.tpl.php';
	}
}