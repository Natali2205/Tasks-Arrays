<?php
//array_replace
echo '<hr>'. "Задача c array_replace: ";
$arr=['a','b','c','d','e'];
$replace=[0=>'!',3=>'!!'];
$arrchanged=array_replace($arr,$replace);
print_r($arrchanged);

//coртування
echo '<hr>'. "Задача c сортуванням: ";
$arr=['3'=>'a','1'=>'c','2'=>'e','4'=>'b'];
asort($arr);
foreach ($arr as $key=>$value){
	echo "arr[" . $key . "] = " . $value .';'. "\n";
}
ksort($arr);
foreach ($arr as $key=>$value){
	echo "arr[" . $key . "] = " . $value .';'. "\n";
}
$arr3=sort($arr);
foreach ($arr as $key=>$value){
	echo "arr[" . $key . "] = " . $value .';'. "\n";
}

//array_rand
echo '<hr>'. "Задача c array_rand: 1). ";
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
	echo array_rand($arr);

echo '<hr>'. "Задача c array_rand: 2). ";
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
	echo $arr[array_rand($arr)];

//shuffle
echo '<hr>'. "Задача c shuffle: 1). ";
$arr=['a','b','c','d','e'];
shuffle($arr);
print_r($arr);

echo '<hr>'. "Задача c shuffle: 2). ";
$arr= range(0, 25);
 print_r(shuffle($arr));

echo '<hr>'. "Задача c shuffle: 3). ";
$arr= range('a', 'z');
shuffle($arr);
print_r($arr);

echo '<hr>'. "Задача c shuffle: 4). ";
$arr= range('a', 'z');
shuffle($arr);
implode('',$arr);
print_r(array_slice($arr,0,6));

//array_unique
echo '<hr>'. "Задача c array_unique: ";
$arr=['a','b','c','b','a'];
print_r(array_unique($arr));