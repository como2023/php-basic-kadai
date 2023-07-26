<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編 課題011 foreach文</title>
  </head>
  <body>
    <p>
      <?php
            // 連想配列を作成
            $onion_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

            // 連想配列をforeach文を使用し出力
            foreach($onion_data as $key => $value){     
              echo "{$key}：{$value}<br>";
            }
      ?>
    </p>   
  </body>
</html>