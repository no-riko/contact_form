<?php
    //スーパーグローバル変数
    // -
    $username = $_POST["username"];
    $email = $_POST["email"];
    $content = $_POST["content"];

    if($username == " "){
        $usernameResult = "ユーザー名が入力されていません";
    }else{
        $usernameResult = $username;
    }
    if($email == " "){
        $emailResult = "メールアドレスが入力されていません";
    }else{
        $emailResult = $email;
    }
    if($content == " "){
        $contentResult = "お問い合わせ内容が入力されていません";
    }else{
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

<p>名前：<?php echo $_POST["username"]; ?></p>
<p>メールアドレス：<?php echo $_POST["email"]; ?></p>
<p>内容：<?php echo $_POST['content']; ?></p>

<form action="">
    <button>戻る</button>
    <input type="text" value="OK">
</form>
    
</body>
</html>