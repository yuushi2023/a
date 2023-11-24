<?php
// PHPコードの開始
$message = "こんにちは！"; // 動的なメッセージ

// 他のPHPコードやデータベースからの情報取得などもここに追加できます
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ホーム</title>
</head>
<body>
    <header>
        <h1>ようこそ！</h1>
        <nav>
            <ul>
                <li><a href="login.php">ログイン</a></li>
                <li><a href="register.php">新規登録</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <h2>ホームページのコンテンツ</h2>
        <?php
        // PHPコードを使って動的なコンテンツを表示する例
        echo "<p>$message</p>";
        ?>
    </main>

    <footer>
        <p>&copy; 2023 YourWebsite</p>
    </footer>
</body>
</html>
