<?php
$servername = "localhost";
$username = "ユーザー名";
$password = "パスワード";
$dbname = "データベース名";

// MySQLに接続
$conn = new mysqli($servername, $username, $password, $dbname);

// 接続をチェック
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
