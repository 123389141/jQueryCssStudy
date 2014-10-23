<html>
<head>
	<title>玩的</title>
	<meta charset="utf-8">
	<script type=text/javascript src="js/jquery-1.8.3.min.js"></script>
</head>
<body>
<?php  

function YangHui($iLine)  
{  
    $a = array();  
    $nb = '';  
    for ($i = 0;$i <= $iLine;$i++)//行  
    {  
        for ($j = 0;$j <= $i;$j++)//列  
        {  
            if ($i == $j || $j == 0)//行=列(也就是最后一列)或者第一行和第一列  
            {  
                $a[$i][$j] = 1;  
            }  
            else   
            {  
                $a[$i][$j] = $a[$i-1][$j]+$a[$i-1][$j-1];//行+列的值=上一行2个值相加  
            }  
        }  
    }  
    return $a;  
}  
  
$aData = YangHui(25);  
echo "<table align='center' border='1' cellpadding='2' cellspacing='5'frame='void'>";
foreach($aData as $a){
	echo "<tr >";
	for($i=0;$i<count($a);$i++){
		echo "<td align='center' style='width:60px;font:#red;display:none;position:relative'>";
		echo "<b style='display:none'>".$a[$i]."</b>";
		echo "</td>";
	}
	echo "</tr>";
	echo "</table>";
	echo "<table align='center' border='1' cellpadding='2' cellspacing='5' frame='void'>";
}
echo "</table>";
?>
<script>
	$(function(){
		for(var i=0;i<$("td").length;i++){
			$($("td")[i]).children("b").html("☆");
			$($("td")[i]).show(3000);
			$($("td")[i]).children("b").show(2000);
//			$($("td")[i]).children("b").hide(2000);
//			$($("td")[i]).hide(3000);
			if(i%4 == 0){
				$($("td")[i]).animate({left:"600px"},3000);
				$($("td")[i]).animate({bottom:"1000px"},3000);
			}
			if(i%4 == 1){
				$($("td")[i]).animate({right:"600px"},3000);
				$($("td")[i]).animate({bottom:"1000px"},3000);
			}
			if(i%4 == 2){
				$($("td")[i]).animate({right:"600px"},3000);
				$($("td")[i]).animate({top:"1000px"},3000);
			}
			if(i%4 == 3){
				$($("td")[i]).animate({left:"600px"},3000);
				$($("td")[i]).animate({top:"1000px"},3000);
			}
		}

	});
</script>

</body>
</html>
