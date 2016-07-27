<?php
/*
*进制转换
*
*/
function ten2four($input){
	$result = array();
	$res = '';
	$i = 0;
	while($input>0){
		$result[$i] = $input%4;
		$input = floor($input/4);
		$i++;
	}
	for($j=count($result)-1;$j>=0;$j--){
		$res .=$result[$j];
	}
	echo $res;
	echo "\n";
}

ten2four(1235);
?>

<?php
/*
*关于strlen的一些测试
*/
$strcn = "我真的喜欢上海";
$stren = "Iloveyou";
echo mb_strlen($strcn,utf8);
echo "\n";
echo strlen($strcn);
echo "\n";
$arr = array('key'=>'to',
			 'the'=>'universe',
			 'is'=>'love');
echo count($arr);
echo "\n";
?>
