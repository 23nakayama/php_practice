<?php
function twotimes($num){
  $result = $num * 2;
  return $result;
}
echo twotimes(5);
echo "\n";

function f($a, $b){
   $result = $a + $b;
   return $result;
}
echo f(3,4);
echo "\n";

function multiplication($arr){
  $result = 1;
  foreach ($arr as $num){
       $result = $result * $num;
   }
   return $result;


}
$r = multiplication(array(1, 3, 5, 7, 9));
echo $r;

echo "\n";
function kakezan($arr){
    $result = 1;
    foreach($arr as $banngou){
        $result = $result * $banngou;
}

 return $result;
}
$r = kakezan(array(1,3,5,7,9));
echo $r;

echo "\n";
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number< $a){
            $max_number = $a;

        }
    }
    return $max_number;
}
$array = array(1, 2, 3, 15, 6, 8, 9, 10);
echo max_array($array);

echo "\n";

$count_num = array(0,1,2,3,4,5,6,7,8,9,);
    foreach($count_num as $count_num){
        echo $count_num;
        echo "<br>";
    }
echo "\n";


for($i = 0; $i < 10; $i++){
echo $i;
}