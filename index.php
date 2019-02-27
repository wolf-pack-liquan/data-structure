<?php
$arr = array(6, 3, 8, 6, 4, 2, 9, 5, 1, 10, 13, 99, 0);
// 快速排序
function quick_sort($arr)
{
	if (!is_array($arr)) return false;
	if (count($arr) <= 1) return $arr;
	$left = $right = [];
	for ($i = 1; $i < count($arr); $i ++ ) {
		if ($arr[$i] < $arr[0]) {
			$left[] = $arr[$i];
		} else {
			$right[] = $arr[$i];
		}
	}
	$left = quick_sort($left);
	$right = quick_sort($right);
	return array_merge($left, array($arr[0]), $right);
}
// 调用
echo "<pre>";
print_r(order_sort($arr));

