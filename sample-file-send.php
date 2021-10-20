<?php
// 
// 
//

$message = "";

if (!empty($_FILES)) {
    print_r($_FILES);
    $files = $_FILES;
    if (!$files['file']['error']) {
        // 一時保存ファイルパズ
        $temp = $files['file']['tmp_name'];
        if (is_uploaded_file($temp)) {

            // 保存ファイル名
            // $name = $files['file']['name'];
            // 2021-07-20_14_39_00
            $name = date('Y-m-d_H_i_s');
            // 元のファイル名から拡張子(đổi đuôi file tệp)抜き出す
            $ex = explode('.', $files['file']['name']);
            $ex = $ex[count($ex) - 1];
            // ファイルの移動
            // move_uploaded_file(移動対象のファイルパス、移動先のファイルパス)
            if (!move_uploaded_file($temp, "./storage/{$name}.{$ex}")) {
                // アップロードしたファイルをファイダに保存できなかった時
                $message = "ファイルを保存することができませんでした";
            };
        } else {
            // ファイルの送信エラー
            $message = "ファイルはアップロードできませんでした";
        };
    } else {
        // fileの送信エラー
        $message = "ファイルはアップロードできませんでした";
    }
};
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP1 - file upload</title>
</head>

<body>
    <h1>ファイルのアップロード</h1>
    <p><?= $message ?></p>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <label for="">ファイルの選択</label>
            <input type="file" name="file">
        </div>
        <button type="submit">アップロード</button>
    </form>
</body>

</html>