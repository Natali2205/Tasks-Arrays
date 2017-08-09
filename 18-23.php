
<?php
echo '<hr>'. "Задача c array_shift, array_pop, array_unshift, array_push: 1).";
	$arr=[1,2,3,4,5];
	print_r(array_shift($arr). '<br>');
	print_r(array_pop($arr). '<br>');
	print_r($arr);

echo '<hr>'. "Задача c array_shift, array_pop, array_unshift, array_push: 2). ";
	$arr=[1,2,3,4,5];
	array_unshift($arr, 0);
	array_push($arr, 6);
	print_r($arr);

echo '<hr>'. "Задача c array_shift, array_pop, array_unshift, array_push: 3). ";
	$arr = [1, 2, 3, 4, 5, 6, 7, 8];

	$str = '';
	while (count($arr) > 0) {
		$str .= array_shift($arr);
		$str .= array_pop($arr);
	}

	echo $str;

echo '<hr>'. "Задача c array_pad, array_fill, array_fill_keys, array_chunk: 1). ";
	$arr = ['a', 'b', 'c'];
	print_r(array_pad($arr,7,'-'));

echo '<hr>'. "Задача c array_pad, array_fill, array_fill_keys, array_chunk: 2). ";
	$arr = [];
	$arr=array_fill(0,9,'x');
	print_r($arr);

echo '<hr>'. "Задача c array_pad, array_fill, array_fill_keys, array_chunk: 2). ";
	$arr = range(1, 20);
	print_r(array_chunk($arr, 4));

echo '<hr>'. "Задача c array_count_values";
	$arr=['a','b','c','b','a'];
	print_r(array_count_values($arr));

echo '<hr>'. "Задача c array_map- 1):";
	$arr=[1,2,3,4,5];
	function sqr($a)
	{
	return $a*$a;
	}
	print_r(array_map('sqr',$arr));

echo '<hr>'. "Задача c array_map- 2):";
	$arr=['<b>php</b>', '<i>html</i>'];
	print_r(array_map('strip_tags',$arr));

echo '<hr>'. "Задача c array_map- 3):";
	$arr = [' a ', ' b ', ' с '];
	$result = array_map('rtrim', $arr);
	var_dump($result);


echo '<hr>'. "Задача c array_intersect, array_diff- 1):";
	$arr1=[1,2,3,4,5];
	$arr2=[3,4,5,6,7];
	print_r(array_intersect($arr1,$arr2));


echo '<hr>'. "Задача c array_intersect, array_diff- 2):";
	$arr1=[1,2,3,4,5];
	$arr2=[3,4,5,6,7];
	$res1=array_diff($arr1,$arr2);
	$res2=array_diff($arr2,$arr1);
	print_r(array_merge($res1,$res2));