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
        <p class="new">新規イベント作成</p>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="entry">
                <div class="type">
                    <div>
                        <p class="title">イベント名</p>
                        <input type="text" name="name" size="35" maxlength="255" value="<?php print(htmlspecialchars($_POST['name'], ENT_QUOTES)); ?>" placeholder="" />
                        <?php if ($error['name'] === 'blank') : ?>
                            <p class="error">ニックネームを入力してください</p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <p class="title">イベント内容</p>
                        <input type="text" name="email" size="35" maxlength="255" value="<?php print(htmlspecialchars($_POST['email'], ENT_QUOTES)); ?>" placeholder="">
                        <?php if ($error['email'] === 'blank') : ?>
                            <p class="error">メールアドレスを入力してください</p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <p class="title">パスワード</p>
                        <input type="password" name="password" size="10" maxlength="20" value="<?php print(htmlspecialchars($_POST['password'], ENT_QUOTES)); ?>" placeholder="" />
                        <?php if ($error['password'] === 'length') : ?>
                            <p class="error">パスワードは4文字以上で入力してください。</p>
                        <?php endif; ?>
                        <?php if ($error['password'] === 'blank') : ?>
                            <p class="error">パスワードを入力してください</p>
                        <?php endif; ?>
                    </div>
                </div>
                
                <div class="submit">
                    <input type="submit" value="入力内容を確認する" />
                </div>
            </div>
        </form>
    </div>
</body>

</html>