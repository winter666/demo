<?php

class Template {

	public static function formTemplate($method, $action, $submitTxt, $inputsArr) {
		include($_SERVER['DOCUMENT_ROOT'] . '/templates/forms/form.php');
	}

}