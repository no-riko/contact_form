<?php

    //送信方法の確認
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        header('Location: index.html');
    }

    //別のファイルを読み込む
    require_once('functions.php');

    //スーパーグローバル変数
    //  --- PHPが元々用意している変数

    //XSS(クロスサイトスクリプティング)の対策
    //エスケープ処理: htmlspecialchars
    //  --- htmlspecialchars(対象の文字, オプション, 文字コード)

    $username = h($_POST['username']);
    $email = h($_POST['email']);
    $content = h($_POST['content']);

    if ($username == '') {
      $usernameResult = 'ユーザー名が入力されていません';
    } else {
      $usernameResult = $username;
    }
    if ($email == '') {
      $emailResult = 'メールアドレスが入力されていません';
    } else {
      $emailResult = $email;
    }
    if ($content == '') {
      $contentResult = 'お問い合わせ内容が入力されていません';
    } else {
      $contentResult = $content;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>入力内容確認</title>
</head>
<body>

<h1>入力内容確認</h1>

<p>名前：<?php echo $usernameResult; ?></p>
<p>メールアドレス：<?php echo $emailResult; ?></p>
<p>内容：<?php echo $contentResult ?></p>

<form action="thanks.php" method="POST">
    <input type="hidden" name="username" value="<?php echo $username; ?>">
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <input type="hidden" name="content" value="<?php echo $content; ?>">
    
    <button type="button" onclick="history.back();">戻る</button>
    <input type="submit" value="OK">
</form>
    
</body>
</html>