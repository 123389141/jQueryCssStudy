<html>
<head>
	<title>玩的</title>
	<meta charset="utf-8">
	<script type=text/javascript src="js/jquery-1.8.3.min.js"></script>
</head>
<body >
<?php  
echo "递归算法：<br/>";
function test ($n){
    echo $n."  ";
    if($n>0){
        test($n-1);
    }else{
        echo "<-->";
    }
    echo $n."  ";
}
test(2)
?>
</body>
</html>
