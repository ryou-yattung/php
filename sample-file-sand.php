<?php
//
//temp.php
//


if(!empty($_FILES)){
     print_r($_FILES);
     $files = $_FILES;

     if(! $files['file']['error']){
          //一時保存ファイルパス
          $temp = $files['file']['tmp_name'];
          //保存ファイル名
          $name = $files['file']['name'];
          //'2021_07_20_14_39_00'
          // $name = date('Y-m-d_H_i_s');

          //ファイルの移動
          // move_uploaded_file(移動対象のファイルパス、移動先のファイルパス)
          move_uploaded_file($temp,"./storage/{$name}");
     }
}

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
     
<h1>ファイルのアップロード</h1>

<form action="" method="post" enctype="multipart/form-data">
     <div>
          <label for="">ファイルの選択</label>
          <input type="file" name="file">
     </div>

     <button type="submit">アップロード</button>
</form>

</body>
</html>