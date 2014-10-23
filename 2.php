<html>
<head>
	<title>玩的</title>
	<meta charset="utf-8">
	<script type=text/javascript src="js/jquery-1.8.3.min.js"></script>
</head>
<body >
<?php  
$countTr = 5;
$countTd = 5;
$val = "<img width='50'src='images/1.gif'>";
echo "<table align='left' border='0' cellpadding='2' cellspacing='20'frame='void' >";
echo "<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>";
echo "<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>";
echo "<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>";
for($i=0;$i<$countTr;$i++){
	echo "<tr >";
	for($j=0;$j<$countTd;$j++){
		echo "<td align='center' style='width:20px;font:#red;position:relative'>";
		echo "$val";
		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>
<img src='images/pd.jpg' width="1500" >
<script>
	$(function(){
		for(var i=0;i<$("td").length;i++){
			$($("td")[i]).children("b").hide();
			$($("td")[i]).hide();
			$($("td")[i]).show(5000);
			$($("td")[i]).children("b").show(2000);

			if(i%4 == 0){
				$($("td")[i]).animate({bottom:"100px"},500);
				$($("td")[i]).animate({left:"1500px"},5000);
				$($("td")[i]).animate({bottom:"1000px"},800);
			}
			if(i%4 == 1){
				$($("td")[i]).animate({bottom:"150px"},500);
				$($("td")[i]).animate({left:"1500px"},6000);
				$($("td")[i]).animate({bottom:"1000px"},800);
			}
			if(i%4 == 2){
				$($("td")[i]).animate({bottom:"200px"},500);
				$($("td")[i]).animate({left:"1500px"},7000);
				$($("td")[i]).animate({bottom:"1000px"},800);
			}
			if(i%4 == 3){
				$($("td")[i]).animate({left:"1500px"},8000);
				$($("td")[i]).animate({bottom:"1000px"},800);
			}
		}
	});

</script>

</body>
</html>
