<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "ログイン成功";
            // ログイン後の処理をここに追加
        } else {
            echo "パスワードが正しくありません";
        }
    } else {
        echo "ユーザーが見つかりません";
    }
}
?>
