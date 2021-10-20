<?php
//
//sample-session-receive
//

session_start();

$sendData = [];
$sendData['name'] = $_POST['name'];
$sendData['note'] = $_POST['note'];

//セッションにPOSTデータを保存
$_SESSION['sendDate'] = $sendData;


?>

<!DOCTYPE html>
<html lang="ja">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP1-temp</title>
</head>
<body>
     
     <h1>セッションの利用　送り先</h1>
     <div>
          <p>ハンドルネーム</p>
          <p><?= $sendData['name']?></p>
     </div>

     <div>
          <p>コメント</p>
          <p><?= $sendData['note']?></p>
     </div>

     <p><a href="sample-session-send.php">戻る</a></p>
</body>
</html>