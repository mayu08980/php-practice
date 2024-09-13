<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します '."\n";
for ($i = 1; $i <=100; $i++) {
  if ($i % 4 == 0 && $i % 5 == 0){
        echo  'tic-tac'."\n";
      } elseif ($i % 4 == 0) {
        echo 'tic'."\n";
      } elseif ($i % 5 == 0) {
        echo 'tac'."\n";
      }else{
        echo $i."\n";
    }
}

// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];
var_dump($personalInfos[1]);
echo $personalInfos[1]['name'].'の電話番号は'.$personalInfos[1]['tel'].'です'."\n";

foreach ($personalInfos as $Y=>$personal){
  $Y +=1;
  echo $Y.'番目の'.$personal['name'].'メールアドレスは'.$personal['mail'].'で、電話番号は'.$personal['tel'].'です'."\n";
  }
  foreach ($personalInfos as $index => $personal) {
  $personalInfos[$index]['age']= $ageList[$index];
  
}
var_dump($personalInfos);
// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        var_dump($this);
        $this->studentId = $id;
        var_dump($this);
        $this->studentName = $name;
        var_dump($this);
    }

echo '学籍番号'.$yamada->studentId.'の生徒は'.$yamada->studentName.'です'."\n";

// Q4 オブジェクト-2
public function attend()
    {
      echo $this->studentName.'は'.$Subject.'の授業に出席しました。'.'学籍番号:'.$this->studentId."\n";
    }
}

$yamada = new Student('120', '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
$time = new DateTime();
$time->modify('-1 month');
$time2 = new DateTime('1992-04-25');
$diff = $time->diff($time2);
echo $time->format('Y-m-d');
echo $diff->format('あの日から%a日経過しました')."\n";
?>