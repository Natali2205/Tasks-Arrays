<?php
//range
echo '<hr>'. "Задача c range.1): ";
foreach(range(1,100,5) as $number){
	echo $number;
}
//2
echo '<hr>'. "Задача c range.2): ";
foreach(range('a','z') as $letter){
	echo $letter;
}
echo '<hr>'. "Задача c range.3): ";
$str=(range(1,9));
echo implode('-',$str);

echo '<hr>'. "Задача c range.4): ";
echo array_sum(range(1,100));

echo '<hr>'. "Задача c range.5): ";
echo array_product(range(1,100));

//array_merge
echo '<hr>'. "Задача c array_merge.1): ";
$arr1=array(1,2,3);
$arr2=array('a','b','c');
print_r (array_merge($arr1, $arr2));

//array_slice
echo '<hr>'. "Задача c array_slice.1): ";
$arr=array(1,2,3,4,5);
$result=array_slice($arr,0,3);
print_r($result);

//array_splice
echo '<hr>'. "Задача c array_splice.1): ";
$arr=array(1,2,3,4,5);
array_splice($arr,1,2);
print_r($arr);

echo '<hr>'. "Задача c array_splice.2): ";
$arr=array(1,2,3,4,5);
print_r(array_splice($arr, 1,3));


echo '<hr>'. "Задача c array_splice.3): ";
$arr=array(1,2,3,4,5);
array_splice($arr, 3, 0, ['a', 'b', 'c']);
print_r($arr);

echo '<hr>'. "Задача c array_splice.4): ";
$arr = [1, 2, 3, 4, 5];
	array_splice($arr, 1, 0, ['a', 'b']);
	array_splice($arr, 6, 0, ['c']);
	array_splice($arr, 8, 0, ['e']);
print_r($arr);

//array_keys, array_values, array_combine
echo '<hr>'. "Задача c array_keys, array_values, array_combine.1): ";
$arr=array('a'=>1,'b'=>2,'c'=>3);
$keys=array_keys($arr);
$values=array_values($arr);
var_dump($keys);
var_dump($values);

echo '<hr>'. "Задача c array_keys, array_values, array_combine.2): ";
$arr1=['a','b','c'];
$arr2=[1,2,3];
print_r(array_combine($arr1,$arr2));

//array_flip & array_reverse
echo '<hr>'. "Задача c array_flip & array_reverse.1): ";
$arr1=['a' => 1,
	   'b' => 2 ,
	   'c' => 3 ];
print_r (array_flip($arr1));
echo '<hr>'. "Задача c array_flip & array_reverse.2): ";
$arr2=[1,2,3,4,5];
print_r(array_reverse($arr2));

//array_search
echo '<hr>'. "Задача c array_search.1): ";
$arr=['a','-','b','-','c','-','d'];
print_r(array_search('-',$arr));

echo '<hr>'. "Задача c array_search.2): ";
$arr=['a','-','b','-','c','-','d'];
$position=(array_search('-',$arr));
array_splice($arr,$position,1);
var_dump ($arr);

