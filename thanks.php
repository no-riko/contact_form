<?php

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        header('Location: index.html');
    }

    require_once('functions.php');
    require_once('dbconnect.php');

    $username = h($_POST['username']);
    $email = h($_POST['email']);
    $content = h($_POST['content']);

    $stmt = $dbh->prepare('INSERT INTO surveys (username, email, content, created_at) VALUES(?,?,?, now())');
    $stmt->execute([$username, $email, $content]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>送信完了</title>
</head>
<body>

    <h1>お問い合わせありがとうございました。</h1>

    <p>名前：<?php echo $_POST["username"]; ?></p>
    <p>メールアドレス：<?php echo $_POST["email"]; ?></p>
    <p>お問い合わせ内容：<?php echo $_POST["content"]; ?></p>
    
</body>
</html>