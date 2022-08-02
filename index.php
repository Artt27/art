<?php
$a = 100; // целое число - integer, int
$b = 14.22; // дробь - float
$c = 'Hi Ira'; // строка - string, str
$d = "Hi Ira"; // строка - string, str

// массив - array, (в скобках индекс, начинается с 0)
$e = array(1,2,3,4,5); 
$f = array('Artur', // индекс 0
 'Johnny', // индекс 1
  'Ira' // индекс 2
);

// ассоциативный массив
$g = array('name' => 'Artur', 
	'surname' => 'Tsy',
	'age' => '30',
	'byear' => '1991',
	'education' => array('School in 2007', 'College in 2012'), // многомерный массив - array => array
	'married' => false,
	'smoking' => false,
	'geek' => true
	);

$h = false; //булев тип - boolean, bool

echo 'Значения, масивы, асоциативные масивы, булев тип:<br>';

echo $e[0];
echo '<hr>';
echo $b;
echo '<hr>';
echo $f[2];
echo '<hr>';
echo $g['education'][1];
echo '<br>';
echo '<br>';

echo 'Разница между апострофами и скобками:<br>';

// Разница между 'xx' и "xx":
echo 'test: $c<br>';
echo "test: $c";
echo '<hr>';

echo 'Контаминация:<br>';
// Контаминация:
$name = 'Artur';
$surname = 'Tsy';
echo $name.' '.$surname;
echo '<hr>';

echo 'Операции + - / * %:<br>';
// Операции + - / * %:
echo 106 % 2; // Деление по модулю, проверяет четное ли число (0) или нечетное (1).
echo '<br>';
$int1 = '100';
$int2 = '25';
echo 'Answer: ' . ($int1 + $int2);
echo '<br>';
echo (5 + 2 + 10) * 2 - 3;
echo '<hr>';

echo 'Условия:<br>';
// Условия:
$weather = 'ясно'; // снег, дождь, ясно, облачно
if( $weather == 'снег' ) { 
	echo 'На улице снег!';}
if( $weather == 'ясно' ) { echo 'На улице ясная погода';}
if( $weather == 'дождь' ) { echo 'На улице дождь!';}
if( $weather == 'облачно' ) { echo 'На улице облачно.';}
echo '<br>';

$age = 25;
// пропуск в клуб
if ($age < 24)
{
	echo 'Зпрещено!';
}
if ($age >= 24)
{
	echo 'Входите.';
}
echo '<br>';

echo 'Операторы сравнения:<br>';
// Операторы сравнения:
// <, >, <=, >=, == (равно), != (неравно)
$key = 100;
// пропуск в клуб
if ($key != 100500)
{
	echo 'Обычная цифра!';
}
if ($key == 100500)
{
	echo 'Необычная цифра.';
}
echo '<br>';

$name = 'Jon';

if($name == 'Artur')
{
	echo 'Hello Artur!';
} else 
{
	echo 'Who are you?';
}
echo '<hr>';

echo 'Логические операторы or, and:<br>';
// Логические операторы or, and

$name = 'Artur';
$age = '29';

if( $age < 30 and $name != 'Artur')
{
	echo 'CLOSE!';
} else 
{
	echo 'Welcome';
}
echo '<br>';

$rating = 99;

if ($rating >= 25 and $rating <= 100)
{
	echo 'Good';
} else
{
	echo 'Bad';
}
echo '<br>';
$rating = 14;

if ($rating >= 15 or $rating <= 10)
{
	echo 'Good';
} else
{
	echo 'Bad';
}
echo '<hr>';

echo 'Циклы for, while, foreach:<br>';
// ЦИКЛЫ:

// for, while, foreach

echo 'Цикл for:<br>';
for ( $i = 1; $i <= 5; $i++) // либо $i = $i + 1
{
	echo 'Hello 1<br>';
}
echo '<br>';

for ( $i = 1; $i <= 5; $i++) // либо $i = $i + 1
{
	echo $i . '<br/>';
}
echo '<br>';
for ( $i = 1; $i <= 5; $i++) // либо $i = $i + 1
{
	echo $i;

	if ($i % 2 == 0){
		echo '- Четное число';
	}else
	{
		echo '- Не четное число';
	}
	echo '<br>';
}
echo '<br>';

echo 'Цикл while:<br>';
$test = 10;
while ($test <= 20)
{
	echo 'Test ' .$test. '<br/>';
	$test++;
}
echo '<br>';

echo 'Цикл foreach:<br>';

$names = array ('Artur', 'Ira', 'Diana', 'Ira');
foreach ($names as $value) {
	echo $value . '<br/>';
}
$numbers = array (5, 10, 25, 50);

foreach ($numbers as $num){
	echo 'Куб числа ' . $num.': '.($num * $num).'<br/>';
}
echo '<hr>';

// Функции:
echo 'Функции:<br>';
function get_bigger ($a, $b){
	if ($a > $b)
	{
		echo $a;
	} else
	{
		echo $b;
	}
	echo '<br>';
}
get_bigger(10, 20);
get_bigger(8, 15);
get_bigger(25, -100);
get_bigger(9, 80);

echo '<br>';

function get_bigger1 ($a, $b)
{
	if ($a > $b)
	{
		return $a;
	} else
	{
		return $b;
	}
}

$bigger = get_bigger1 (10, 20);

	echo $bigger;

echo '<hr>';

// Математические функции
echo 'Математические функции - abs, round, ceil, floor, rand, min, max:';

echo '<br>';

// abs - возвращает абсолютное число
echo abs(-3000);
echo '<br>';
// round - округление
echo round (45.23);
echo '<br>';
// cell - округляет в +
echo ceil (45.23);
echo '<br>';
// floor - округляет в -
echo floor (45.99);
echo '<br>';
// rand - генерирует случайное число из диапазона
echo rand (0,100);
echo '<br>';
// min - выводит минимальное число из перечня
echo min (3,10,5,8,64,654,1327,4);
echo '<br>';
// max - выводит максимальное число из перечня
echo max (3,10,5,8,64,654,1327,4);
echo '<br>';