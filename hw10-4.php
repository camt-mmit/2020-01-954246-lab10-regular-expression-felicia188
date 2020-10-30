<?php
//602110188 chen shuo
// php hw10-4.php ass-04-input.txt       从文中提取大写开头的单词 
$file = fopen($_SERVER['argv'][1], 'r');
$i=0;
while(! feof($file))
    {
    $row[$i]=trim( fgets($file));
    $i++;
    }//文件变数组
fclose($file);

$s=implode("",$row);//数组---字符串
$str = str_replace(',', '.', $s); 
$new=str_ireplace(["My","The"]," ",$str);//删去MY和the
//$new--修格式后的$row
$a=explode(".",$new);//根据.把字符串打散为数组：$str = "Hello world. I love Shanghai!"; print_r (explode(" ",$str));  、、Array ( [0] => Hello [1] => world. [2] => I [3] => love [4] => Shanghai! )
array_pop($a);

//分行处理数据
$line1=$a[0];//把第一行字符串的每个单词按照空格给拆开，组成一个数组，每个单词是一个元素
$lin1=explode(" ",$line1);
$result1=preg_grep("/^[A-Z][a-z]+$/", $lin1);
foreach($result1 as $value){
    echo $value."  " ;
}
echo"\n";

$line2=$a[1];
$lin2=explode(" ",$line2);
$result2=preg_grep("/^[A-Z][a-z]+$/", $lin2);
foreach($result2 as $value){
    echo $value."  " ;
}
echo"\n";
$line3=$a[2];
$lin3=explode(" ",$line3);
$result3=preg_grep("/^[A-Z][a-z]+$/", $lin3);
foreach($result3 as $value){
    echo $value."  " ;
}
$line4=$a[3];
$lin4=explode(" ",$line4);
$result4=preg_grep("/^[A-Z][a-z]+$/", $lin4);
foreach($result4 as $value){
    echo $value."  " ;
}