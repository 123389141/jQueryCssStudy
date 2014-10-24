<html>
<head>
	<title>玩的</title>
	<meta charset="utf-8">
	<script type=text/javascript src="js/jquery-1.8.3.min.js"></script>
</head>
<body >
<?php  
echo "<br/>递归算法：<br/>";
function test ($n){
    echo $n."  ";
    if($n>0){
        test($n-1);
    }else{
        echo "<-->";
    }
    echo $n."  ";
}
test(2);
echo "<br/>快速排序<br/>";
function quickSort($arr) {
    $len = count($arr);
    if ($len <= 1) {
        return $arr;
    }
    $key = $arr[0];
    $left_arr = array();
    $right_arr = array();

    for ($i = 1; $i < $len; $i++) {
        if ($arr[$i] <= $key) {
            $left_arr[] = $arr[$i];
        } else {
            $right_arr[] = $arr[$i];
        }
    }
    $left_arr = quickSort($left_arr);
    $right_arr = quickSort($right_arr);
    return array_merge($left_arr, array($key), $right_arr);
}

$arr = array(49, 38, 65, 97, 76,22,1,133);
echo "<pre>";
print_r(quickSort($arr));
echo "</pre>";
?>
</body>
</html>
