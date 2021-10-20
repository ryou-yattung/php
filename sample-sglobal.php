<?php
//
//sample-sglobal
//

//isset()
//変数の有無を調べる
if(isset( $_POST["user_name"] ) ){
     $userName = $_POST["user_name"];
}else{
     $userName = "グスト";
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>sample-sglobal</title>
</head>
<body>
     
     <h1>PHPスーパーグローバル変数を扱う</h1>

     <h2>スーパーグローバル変数のリスト</h2>

     <ul>
          <li>GET</li>
          <li>POST</li>
          <li>SESSION</li>
          <li>COOKE</li>
     </ul>

     <h2>サーバーの情報</h2>
     <pre><?php print_r($_SERVER) ?></pre>

     <h2>GETデータ</h2>
     <pre><?php print_r($_GET) ?></pre>

     <h2>POSTデータ</h2>
     <pre><?php print_r($_POST) ?></pre>
     <form action="" method="post">
          <input type="text" name="user_name" value="">
          <button type="submit">送信</button>
     </form>

     <p>
          ユーザーの名前は、<?= htmlentities($userName, ENT_QUOTES, "UTF-8")?>
     </p>

     

<script src="js/jquery-3.6.0.min.js"></script> 
<script src="js/temp.js"></script>
</body>
</html>