<?php

// 問1
$name = "miwa";
if ($name == "miwa") {
  echo "私はmiwaです";
} else {
  echo "あなたの名前ではありません";
}
echo "\n";
// 問2
$total = 0;
echo $total;
for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;
echo "\n";
// 問3
$fruits = array("apple", "strawberry", "grape", "banana", "orange");
foreach($fruits as $fruit){
  echo $fruit;
  echo "\n";
}
echo "\n";
// 問4
$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++) {
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}