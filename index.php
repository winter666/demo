<?php

require $_SERVER['DOCUMENT_ROOT'] . "/templates/header.php";

$testArr = [
	[
		'type' => 'text',
		'name' => 'name',
		'value' => '',
	],
	[
		'type' => 'text',
		'name' => 'surname',
		'value' => '',
	],
	[
		'type' => 'tel',
		'name' => 'phone',
		'value' => '',
	],
];

templateHelpers\formTemplate('POST', '/', 'Йоу', $testArr);

require $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.php";

// Создаю экземпляр класса Template
$templateObj = new Template;
// Обращаюсь через объект класса Template к методу
$templateObj->formTemplate('POST', '/', 'Класс', $testArr);

// способ обращения к статичным методам
Template::formTemplate('POST', '/', 'НЕ статичный', $testArr);


function test ($t) {
	if ($t < 10) {
		test(3 * $t);
		echo $t . ' ';
		test($t + 3);
	}
}
test(1);


?>
<script type="text/javascript" src="/script.js"></script>