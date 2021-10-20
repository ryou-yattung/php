<?php
//
//sample_array.php
//


// ECCの配列
$ecc = [];
//配列構造を表示するデバック命令
print_r($ecc);

$ecc=["ITカレッジ","IT開発研究"];
print_r($ecc);

$course=[
     "ITカレッジ","Webデザイン","国際エンジニア"
];
print "<pre>";
print_r($course);
print "</pre>";

// foreach($ecc as $course){
//      echo $ecc.$couse
// };

// ・ITカレッジ
// 4年
// ・IT開発エキスパート
// 3年
// ・IT開発研究
// ・Webデザイン
// 2年
// ・システムエンジニア
// システムエンジニア
// 国際エンジニア

// ・ゲーム・クリエイティブカレッジ
// 4年
// ・ゲーム開発エキスパート
// ゲームプログラム
// ゲームCG
// ゲームプランナー
// 3年
// ・ゲームプログラム開発
// ・CGデザイン
// 3DCG
// ゲームキャラクター
?>


<!DOCTYPE html>
<html lang="ja">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <h1>PHPで配列を</h1>   

     <h2>カレッジ</h2>
     <ul>
          <?php foreach($ecc as $collage):?>
               <li><?$collage?>カレッジ</li>
          <?php endforeach?>
     </ul>  

     <h2>コース</h2>
     <ul>
          <li>システムエンジニア</li>
          <li>システムエンジニア</li>
          <li>システムエンジニア</li>
          <li>システムエンジニア</li>
     </ul>


</body>
</html>