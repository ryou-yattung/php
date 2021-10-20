<?php
//
//sample-variable.php
//

//名前を保存する変数
$name="リョウ";

//$nameの表示
print $name;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP1-変数</title>
</head>
<body>
     
     <p>ようこそ<?php print $name ?>さん</p>

     <p>printの省略書き</p>
     <p>ようこそ<?=$name?>さん</p>

     <p>'と'の違い</p>
     <p><?= "ようこそ{$name}さん" ?></p>
     <p><?= `ようこそ{$name}さん` ?></p>


</body>
</html>