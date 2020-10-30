<?php
// 602110188 chen shuo
// php hw10-3.php ass-03-input.txt       从文中提取大写字母
$file = fopen($_SERVER['argv'][1], 'r');
$row=array();
$i=0;
while(! feof($file))
    {
     $row[$i]= fgets($file);
     $i++;
    }
fclose($file);

$pattern = '/^[A-Z]+$/';//+ 匹配前面的子表达式一次或多次。
$result = [];
foreach ($row as $value) { 
    $a = explode(' ', $value); //把字符串打散为数组：$str = "Hello world. I love Shanghai!"; print_r (explode(" ",$str));  、、Array ( [0] => Hello [1] => world. [2] => I [3] => love [4] => Shanghai! )
    foreach ($a as $v) {//遍历一行中的每个单词
        $v = str_replace('(', '', $v);
        $v = str_replace(')', '', $v);//删括号
        $v = str_replace('.', '', $v);//删.
        if (preg_match_all($pattern,$v,$match)) { //正则表达：符合条件的写入math数组
            if (!in_array(implode($match[0]), $result)) {//in_array() 函数搜索$result数组中是否存在指定的字符串$match[0],implode(separator,array），是的话进行下一步
                $result[] = implode($match[0]);
            }
        }   
    }

}
echo implode("\n", $result);