<?php
//
//sample_array.php
//


// ECCの配列
$ecc = [];
//配列構造を表示するデバック命令
print_r($ecc);

//ECCの配列にデータを追加
$ecc[] = ["collage" => "IT"];         // OR $ecc=["ITカレッジ","IT開発研究"]; print_r($ecc);
$ecc[] = ["collage" => "ゲーム・クリエイティブ"];
print_r($ecc);



//コースの配列
$ecc[0]["course"] = [
     [
          "name" => "IT開発エキスパート",
          "grader" => "3年生"
     ],
     [
          "name" => "IT開発研究",
          "grader" => "3年生"
     ],
     [
          "name" => "Webデザイン",
          "grader" => "3年生"
     ]
];

$ecc[1]["course"] = [
     [
          "name" => "システムエンジニア",
          "grader" => "3年生"
     ],
     [
          "name" => "ゲーム開発エキスパート",
          "grader" => "3年生"
     ],
     [
          "name" => "ゲームプログラム開発",
          "grader" => "3年生"
     ],
     [
          "name" => "CGデザイン",
          "grader" => "3年生"
     ]
];

print_r($ecc);

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
          <?php foreach($ecc as $collage): ?>

               <li><?= $collage["collage"] ?>カレッジ
                    <ul>
                         <?php foreach($collage["course"] as $course): ?>
                              <li><?= $course["name"] ?>コース <?= $course["grader"] ?></li>
                         <?php endforeach?>
                    </ul>
               </li>

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