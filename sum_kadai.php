<?php
// 問1
function double($num){
    return $num *2;
}
echo double(5);
echo "\n";
// 問２
function add($a, $b){
    $i = $a + $b;
    return $i;
}
echo add(2,10);
echo "\n";
// 問3
function multiple($arr){
    $result = 1;
    foreach($arr as $num){
        $result *= $num;
    }
    return $result;
}
echo multiple(array(1, 3, 5, 7, 9));
echo "\n";
// 問4
function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($max_number < $a){
            $max_number = $a;
        }   
      // ここで配列の中の1番大きい値を探したい
    }
    return $max_number;
}
echo max_array(array(1, 3, 5, 7, 9, 10, 2));
echo "\n";

// 問5
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";
// <p> と <a> は許可します
echo strip_tags($text, '<p><a>');

echo "\n";

$fruits = ['apple', 'orange', 'melon'];
//array_pushを使用して要素を追加する
array_push($fruits, 'banana', 'pineapple');
print_r($fruits);

echo "\n";

$items1 = ['item1', 'item2', 'item3'];
$items2 = ['item4', 'item5'];
$items3 = ['item6', 'item7'];

//配列を結合する
$item_merge = array_merge($items1, $items2, $items3);

print_r($item_merge);

echo "\n";

//現在のタイムスタンプを取得
$time1 = time();

//3日後のタイムスタンプを取得
$time2 = time() + (3 * 24 * 60 * 60);

if($time1 < $time2){
  echo '$time2が大きい値です';
}
echo "\n";

//指定した日時のタイムスタンプを取得
$timestamp = mktime(0, 0, 0, 8, 1, 2017);
echo $timestamp;
echo "\n";

//配列を使用し、要素順に(日:0〜土:6)を設定する
$week = [
    '日', //0
    '月', //1
    '火', //2
    '水', //3
    '木', //4
    '金', //5
    '土', //6
  ];
  
  $date = date('w');
  
  //日本語で曜日を出力
  echo $week[$date] . '曜日';

