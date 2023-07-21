<?php
// 生徒10人分の点数を入れる変数を作成
  $score1 = 80;
  $score2 = 60;
  $score3 = 55;
  $score4 = 40;
  $score5 = 100;
  $score6 = 25;
  $score7 = 80;
  $score8 = 95;
  $score9 = 30;
  $score10 = 60;

  // 点数の合計点を$totalに代入
  $total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

  // 点数の平均点を$averageに代入
  $average = $total / 10;

  // 平均点をブラウザに出力
  echo "平均点は{$average}です";
?>