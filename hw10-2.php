<?php
// 602110188 chen shuo
// php hw10-2.php ass-02-input.txt        从文中提取数字
$file = fopen($_SERVER['argv'][1], 'r');
$row=array();
$i=0;
while(! feof($file))
{
 $row[$i]= fgets($file);
 $i++;
}//将文本读作数组
fclose($file);

array_pop($row);//删除数组中的最后一个元素
$con=implode("",$row);//将数组内容转成字符串$con
$no=str_ireplace(["/",", ",". "]," ",$con);//替换函数，去标点
$arr=explode(" ",$no);//把字符串写成数组  
$result2=preg_grep("/^\d+$/", $arr);//preg_grep 函数用于返回匹配模式的数组条目。
foreach($result2 as $value){
    echo $value."\n";
    }//整数
$result1 = preg_grep("/^(\d+)?\.\d+$/", $arr);
foreach($result1 as $value2){
echo $value2."\n";
}//小数
 