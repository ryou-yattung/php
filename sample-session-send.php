<?php
//
//sample-session-send
//

//セッション機能の開始
session_start();
print_r($_SESSION);

//セッションデータを取り出す
$sendData = $_SESSION['sendDate'];

//セッションデータの破棄
session_destroy();
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

     <h1>セッションの利用　送り元</h1>     
     <form action="sample-session-receive.php" method="post">
          <div>
               <label for="">ハンドルネーム</label>
               <input type="text" name="name" value="<?= $sendData['name']?>">
          </div>

          <div>
               <label for="">コメント</label>
               <textarea name="note"><?= $sendData['note']?></textarea>
          </div>
          
          <button type="submit">送信</button>
     </form>

</body>
</html>