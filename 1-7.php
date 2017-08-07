<?php
echo '<hr>'. 'Задача 1: ';
$arr=['Привет,','мир','!'];
print_r($arr[0]. $arr[1]. $arr[2]);

echo '<hr>'. 'Задача 2: ';
$arr=['Привет,','мир','!'];
$arr[0]='Пока, ';
print_r($arr[0]. $arr[1]. $arr[2]);

echo '<hr>'. 'Задача 3: ';
$arr=[1,2,3,4,5];
$arr1=array(1,2,3,4,5);
$arr2=['1'=>1,
	   '2'=>2,
	   '3'=>3,
	   ];
print_r($arr);
print_r($arr1);
print_r($arr2);


echo '<hr>'. 'Задача count 1).: ';
$arr=[1,2,3,4,5];
print_r(count($arr));

echo '<hr>'. 'Задача count 2).: ';
$arr = [1, 2, 3, 4, 5];
	echo $arr[count($arr) - 1];

echo '<hr>'. 'Задача in_array 2).: ';
$arr = [1, 2, 3, 4, 5];
print_r(in_array(3, $arr));

echo '<hr>'. 'Задача array_sum & array_product 1).: ';
$arr = [1, 2, 3, 4, 5];
print_r(array_sum( $arr));

echo '<hr>'. 'Задача array_sum & array_product 2).: ';
$arr = [1, 2, 3, 4, 5];
print_r(array_product( $arr));

echo '<hr>'. 'Задача array_sum & array_product 3).: ';
$arr = [1, 2, 3, 4, 5];
print_r(array_sum($arr)/count($arr));