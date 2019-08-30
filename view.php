<?php

    require_once('functions.php');
    require_once('dbconnect.php');

    $stmt = $dbh->prepare('SELECT * FROM surveys');
    $stmt->execute();

    $results = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせ一覧</title>
</head>
<body>

    <h1>一覧</h1>

    <?php foreach($results as $result){ ?>

        <p>名前：<?php echo $result['username']; ?></p>
        <p>メールアドレス：<?php echo $result['email']; ?></p>
        <p>内容：<?php echo $result['content']; ?></p>
        <hr>

    <?php } ?>

    <p>名前：</p>
    <p>メールアドレス：</p>
    <p>内容：</p>
    <hr>

    <p>名前：</p>
    <p>メールアドレス：</p>
    <p>内容：</p>
    <hr>

    <p>名前：</p>
    <p>メールアドレス：</p>
    <p>内容：</p>
    <hr>


</body>
</html>