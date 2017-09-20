<?php 


$rand = rand(0, 100);
$first_1 = 10;
$last_2 = 20;
	
echo "Наше Число ".$rand, PHP_EOL;

	while (true) {
		if ($first_1 > $rand) {
			echo 'Задуманное число НЕ входит в числовой ряд'; break;
		} else {
			if ($first_1 == $rand) {
				echo 'Задуманное число входит в числовой ряд'; break;
			} else {
				$new_3 = $first_1;
				$first_1 += $last_2;
				$last_2 = $new_3;
			}
		};
	};


?>