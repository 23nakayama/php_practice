<?php
$a = '3';
$b = '7';
echo $a + $b;
echo "\n";

$array_month=["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7];
echo "\n";

$hello = "hello, ";
$name = "yumie";
$world = "'s world";
echo $hello . $name . $world;

echo "\n";
$tech_boost = "tech ";
$tech_boost .= "boost";
echo $tech_boost ;
echo "\n";

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"];

echo "\n";
$total = 0;
 echo $total;
for ($i = 0; $i <= 100; $i++) {
  $total += $i;
}
echo $total;
echo "\n";

echo "\n";
$fruits = array("apple", "orange", "lemon");
echo count($fruits);
echo "\n";
for ($i = 0; $i < count($fruits); $i++) {
  echo "要素は" . $fruits[$i];
  echo "\n";
}
echo "\n";
$name = "yumie";
if ($name == "yumie"){
  echo "私はゆみえです。";
} else {
  echo "あなたの名前では、ありません。";
}
echo "\n";
$total = 0;
for ($i = 0; $i <= 1000; $i++) {
  $total += $i;
}
echo $total;
echo "\n";

$fruits = array("もも","ぶどう","青いミカン","夕張メロン");
foreach($fruits as $fruits){
  echo "好きな果物は" . $fruits;
  echo "\n";
}


echo"\n";
$start = 1;
$end = 100;
for($i = $start; $i < $end; $i++){
  if($i % 5 == 0)
    echo $i;
}