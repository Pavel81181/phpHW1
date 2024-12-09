<?php

echo "Task #1 ";

// присвоение переменной целочисленного значения
$a = 5;
// присвоение переменной строкового значения
$b = '05';
// нестрогое сравнение двух переменных (без учёта типа данных)
var_dump($a == $b); // выведет `true`, потому что оператор `==` сравнивает значения, игнорируя типы.
// явное преобразование строки к целочисленному типу данных
var_dump((int)'012345');// выведет `12345`, потому что тип строки приводится к целочисленному.
// строгое сравнение вещественной переменной с целочисленной
var_dump((float)123.0 === (int)123.0); // Результат отрицательный, так как типы данных отличаются
// нестрогое сравнение целого числа со строкой
var_dump(0 == 'hello, world'); // выведет `false`, потому что строки никогда не равны числовым значениям. В 7.4 true.                                    

echo "Task #2 ";

$a = 1;
$b = 2;
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
var_dump($a);
var_dump($b);