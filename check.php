<?php
session_start();
if (!isset($_SESSION['join'])) {
    header('Location: index.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>会員登録</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="">
            <i>イベントスケジュール確認アプリ</i>
        </div>
    </header>
    <div class="content">
        <p class="new">確認画面</p>

        <div class="entry">
            <div class="type">
                <div>
                    <p class="title">ニックネーム</p>
                    <p><?php print(htmlspecialchars($_SESSION['join']['name'], ENT_QUOTES)); ?></p>
                </div>
                <div>
                    <p class="title">メールアドレス</p>
                    <p><?php print(htmlspecialchars($_SESSION['join']['email'], ENT_QUOTES)); ?></p>
                </div>
                <div>
                    <p class="title">パスワード</p>
                    <p>表示されません</p>
                </div>
            </div>
            <div>
                <?php if ($_SESSION['join']['image'] !== '') : ?>
                    <img src="member_picture/<?php print(htmlspecialchars($_SESSION['join']['image'], ENT_QUOTES)); ?>" alt="<?php print($_SESSION['join']['image']); ?>">
                <?php endif; ?>
            </div>
            <div class="submit">
                <div class="bt"><input type="button" onclick="location.href='index.php?action=rewrite'" value="書き直す"><input type="submit" value="登録する" /></div>
            </div>
        </div>

    </div>
</body>

</html>