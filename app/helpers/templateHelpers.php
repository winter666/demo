<?php

namespace templateHelpers;

function formTemplate($method, $action, $submitTxt, $inputsArr) {
	include($_SERVER['DOCUMENT_ROOT'] . '/templates/forms/form.php');
}