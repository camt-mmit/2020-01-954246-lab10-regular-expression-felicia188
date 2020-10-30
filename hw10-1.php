<?php
// 602110188 chen shuo
// php hw10-1.php ass-01-input.txt

$result = 'Satisfied:'."\n";
$ano = 'Unsatisfied:'."\n";
$file = fopen($_SERVER['argv'][1], 'r');
fscanf($file, "%d", $n);
$row=array();
for($i=0;$i<$n;$i++){$row[$i]= fgets($file); }
fclose($file);
   
    //正则表达 preg_match ( string $pattern , string $subject [, array &$matches [, int $flags = 0 [, int $offset = 0 ]]] )
    //$pattern: 要搜索的模式，字符串形式。$subject: 输入字符串。$matches: 如果提供了参数matches，它将被填充为搜索结果。
foreach ($row as $value) { //遍历数组,将每一行的数据赋值给变量
    if (preg_match("/^(?=.*\d){2,}(?=.*[A-Z]){2,}.{8,}$/",$value) && str_replace(' ', '', $value) == $value) {//str_replace(find,replace,string,count)替换函数
            $count = 0;
            if (strpos($value,"@")) {$count++;}//stripos() - 查找字符串在另一字符串中第一次出现的位置（不区分大小写）
            if (strpos($value,"$")) { $count++;}
            if (strpos($value,"&")) {$count++;}  //substr_count() 函数计算子串在字符串中出现的次数。       
            if ($count >= 2 || substr_count($value, "$") >= 2 || substr_count($value, "@") >= 2 || substr_count($value, "&") >= 2) {
                $result .= $value."\n";
            } else {
                $ano .= $value."\n";
            }      
        } else {
            $ano .= $value."\n";  
        }
}
    echo $result."\n";
    echo $ano;

