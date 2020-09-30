function test ($t) {
	if ($t < 10) {
		test(3 * $t);
		console.log($t + ' ');
		test($t + 3);
	}
}
test(1);