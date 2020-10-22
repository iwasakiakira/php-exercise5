
<?php

// 以下にCarクラスを定義して、当プログラムを実行した時にエラーがでないようにして下さい。
class Car
{
    protected $carName = 'ランクル';
    protected $color = 'black';
    protected $carNum = 100;

    public function __construct($carName, $carNum, $color)
    {
        $this->carName = $carName;
        $this->color = $color;
        $this->carNum = $carNum;
    }

    public function getName()
    {
        return $this->carName;
    }
    public function getNumber()
    {
        return $this->carNum;
    }
    public function getColor()
    {
        return $this->color;
    }

    public function setName($carName)
    {
        return $this->carName = $carName;
    }

    public function setNumber($carNum)
    {
        return $this->carNum = $carNum;
    }

    public function setColor($color)
    {
        return $this->color = $color;
    }

    public function infomation()
    {
        return '車の車種 : ' . $this->carName . ', 車体番号 : ' . $this->carNum . ', カラー : ' . $this->color . 'です｡';
    }

}

class Taxi extends Car
{
    public $passenger;


    public function infomation()
    {
        return '車の車種 : ' . $this->carName . ', 車体番号 : ' . $this->carNum . ', カラー : ' . $this->color . ', 乗車人数は ' . $this->passenger . '人です｡';
    }

    public function pickUp($pickUp)
    {
        $this->passenger = $this->passenger + $pickUp;
    }

    public function lower($lower)
    {
        if ($this->passenger - $lower > 0) {
            $this->passenger = $this->passenger - $lower;
            echo $lower . '人降車しました｡';
        } else {
            echo '降車人数に誤りがあります｡';
        }
    }
}



// 以下を実行した時にエラーがでないようにして下さい。
// Carクラスのインスタンスを生成
// 引数 : 車名、車体番号、カラー
$car1 = new Car('ランクル', 100, 'black');

// // 車名(車種)を取得
// echo $car1->getName();
// echo '<br>';

// // 車体番号を取得
// echo $car1->getNumber();
// echo '<br>';

// // カラーを取得
// echo $car1->getColor();
// echo '<br>';

// // 車の情報表示を表示
echo $car1->infomation();
echo '<br>';
echo '<hr>';

// // 車名(車種)を更新
// $car1->setName('アルファード');
// echo $car1->getName();
// echo '<br>';

// // 車体番号を取得
// $car1->setNumber(200);
// echo $car1->getNumber();
// echo '<br>';

// // カラーを取得
//$car1->setColor('red');
// echo $car1->getColor();
// echo '<br>';

// // 車の情報表示を表示
// echo $car1->infomation();
// echo '<br>';

// Taxiクラスのインスタンスを生成
$taxi1 = new Taxi('クラウンのタクシー', 222, 'black');


// 3人乗車
$taxi1->pickUp(3);

// タクシーの情報表示を表示
echo $taxi1->infomation();
echo '<br>';

// 2人降車
$taxi1->lower(2);
echo '<br>';

// 一人降車
$taxi1->lower(2);
//