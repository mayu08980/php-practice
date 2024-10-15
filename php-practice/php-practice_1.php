<?php
// Q1 変数と文字列
$name = '「平沼」';
$message = '私の名前は($name)です';

// シングルクォーテーションで囲まれた文字列内では、変数や特殊文字がそのまま扱われるので数展開や特殊文字の解釈が不要な場合に使用するのが適切。今回シングルを使用するとechoでそのまま$nameと表示される。
// ダブルクォーテーションも文字列リテラルを表しますが、文字列内の変数や特殊文字が展開される文字列内で変数展開や特殊文字の解釈が必要な場合に使用するのが適切。ダブルクォーテーションを使うのが望ましいと考えられます。
// $nameに代入されている値のデータ型はなんでしょうか？→string型
// Q2 四則演算
$x = 5;
$y = 4;
$num= ($x * $y);
echo $num . "\n";
$num /= 2;
echo $num;
// int型を使用しているため()を用いました
// $xに代入されている値のデータ型はなんでしょうか？→整数を表すint型
// Q3 日付操作
echo date("現在時刻は、Y年m月d日 H時i分s秒です。");
// 調べると日時を出力するには、date()という関数を利用するとあり
// Unixのタイムスタンプを元に日付や時刻を文字列として返すための関数と出たので使用しました
// phpの機能自体に元々定義されている関数だから
// Q4 条件分岐-1 if文
$device =  'windows';
if ($device) {
    echo '使用OSは、windowsです。';
} else {
    echo 'どちらでもありません。';
}

$device =  'mac';
if ($device) {
    echo '使用OSは、macです。' ;
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 20;
$message = ($age > 18) ? '成人です。' : '未成年です。';

// Q6 配列
$age = 20;
$message = ($age > 18) ? '成人です。' : '未成年です。';
// Q6 配列
$kanto = ['東京', '千葉', '埼玉', '神奈川', '栃木', '茨城', '群馬', '山梨'];
var_dump($kanto);
echo '' . $kanto[2]  . '県と' . $kanto[3] . '県は関東地方の都道府県です';

// Q7 連想配列-1
$kanto1 = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県'  => 'さいたま市',
  '栃木県'  => '宇都宮市',
  '群馬県'  => '前橋市',
  '茨城県'  => '水戸市'
];
var_dump($kanto1);


$array = ['新宿区', '横浜市', '千葉市', 'さいたま市', '宇都宮市', '前橋市', '水戸市'];
foreach ($array as $kanto1) {
    echo  $kanto1.  "\n";
}

// Q8 連想配列-2
foreach ($kanto1 as $X =>$city) {
  if ($city == 'さいたま市') {
      echo $X. 'の県庁所在地は、' . $city. 'です';
  }
}


// Q9 連想配列-3
foreach ($kanto1 as $X =>$city) {
  if ($city == '名古屋市'||$city=="大阪市"){
    echo $X. 'は関東地方ではありません。' ."\n";
    }else {
      echo $X. 'の県庁所在地は、' . $city. 'です' ."\n";
  }
}


// Q10 関数-1
function sayHi($name)
{
    echo  $name. 'こんにちは ' ."\n";
}
sayHi('金谷さん');
sayHi('安藤さん');


// Q11 関数-2
$price=1000;
function calcTaxInPrice($price){
    $taxInPrice = $price * 1.1;
    return  $price.'の商品の税込価格は'. $taxInPrice."円です。"."\n";
}
calcTaxInPrice(1000);
$taxInPrice = calcTaxInPrice($price);
echo($taxInPrice);

// Q12 関数とif文
function distinguishNum($number)
{
if(($number % 2) == 0){
  echo $number.'は偶数です' ."\n";
}else{
  echo $number.'は奇数です' ."\n";
}
}
distinguishNum(11);
distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($Grades)
{
  switch ($Grades) {
    case 'A||B':
      echo '合格です。'."\n";
        break;
            
    case 'C':
      echo '合格ですが追加課題があります。'."\n";;
        break;
            
    case 'D':
      echo '不合格です。'."\n";;
        break;
            
        default:
      echo '判定不明です。講師に問い合わせてください。'."\n";;
        break;
    }
}

evaluateGrade('A||B');
evaluateGrade('F');


?>