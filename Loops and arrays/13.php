<?php

/*13. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10.
 С помощью цикла foreach и оператора if выведите на
экран столбец тех элементов массива, которые больше
3-х, но меньше 10.*/

$arr = array(4, 2, 5, 19, 13, 0, 10);
foreach( $arr as $val){
    if($val > 3 && $val < 10){
        echo $val . "<br>";


    }
}
/*echo "<pre>";
for($x = 2; $x <= 9; $x++){
    for($y = 2; $y <= 9; $y++) {
        echo "{$x} * {$y} = " . $x*$y;
        echo PHP_EOL;
    }
    echo PHP_EOL;
}
 */