<?php

    require_once('functions.php');
    require_once('dbconnect.php');

    if(isset($_GET['username'])){
        $username = $_GET['username'];
    }

    $username = $_GET('username');

    $stmt = $dbh->prepare('SELECT * FROM surveys');
    $stmt->exesute([$username]);

    $results = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>検索画面</title>
</head>
<body>

    <h1>検索画面</h2>
    <form action="" method="GET">
        <p>検索したい名前を入力してください。</p>
        <input type="text" name="username">
        <input type="submit" name="検索">
    </form>

    <?php foreach($results as $result){ ?>

    <p>名前：<?php echo h($result['username']); ?></p>
    <p>メールアドレス：<?php echo h($result['email']); ?></p>
    <p>内容：<?php echo h($result['content']); ?></p>
    <hr>

    <?php } ?>

</body>
</html>