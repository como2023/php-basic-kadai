<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP基礎課題015 クラス</title>
  </head>
  <body>
    <p>
      <?php
        // Foodクラスを定義する
        class Food{
          private $name;
          private $price;
          // コンストラクタを定義する
          public function __construct(string $name, int $price){
            $this->name = $name;
            $this->price = $price;
          }
          // メソッドを定義する
          public function show_price(){
            echo $this->price . '<br>';
          }
        }

        // クラスを定義する
        class Animal{
          private $name;
          private $height;
          private $weight;

          // コンストラクタを定義する
          public function __construct(string $name, int $height, int $weight){
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
          }
          // メソッドを定義する
          public function show_height(){
            echo $this->height . '<br>';
          }
        }

        // インスタンス化する
        $potato = new Food('potato',250);
        $dog = new Animal('dog', 60, 5000);

        // インスタンスの各プロパティの値を出力する
        print_r($potato);
        echo '<br>';
        print_r($dog);
        echo '<br>';

        // メソッドにアクセスし実行する
        $potato->show_price();
        $dog->show_height();
      ?>
    </p>
  </body>
</html>