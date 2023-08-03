<!DOCTYPE html>
<html lang="ja">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>PHP基礎課題 フォーム確認画面</title>
  </head>
  <body>
    <h2>入力内容をご確認ください。</h2>
    <p>お名前：<?php echo $_POST['name']; ?></p>
    <p>性別：<?php echo $_POST['gender']; ?></p>
    <p>メールアドレス：<?php echo $_POST['email']; ?></p>
  </body>
</html>