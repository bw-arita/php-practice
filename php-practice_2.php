<?php
// Q1 tic-tac問題
echo "1から100までのカウントを開始します\n";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 20 === 0) { // 4の倍数かつ5の倍数 = 20の倍数
        echo "tic-tac\n";
    } elseif ($i % 4 === 0) {
        echo "tic\n";
    } elseif ($i % 5 === 0) {
        echo "tac\n";
    } else {
        echo $i . "\n";
    }
}

//Q2 多次元配列
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
var_dump($personalInfos);

//Q2 問題１
echo $personalInfos[1]['name'] . "の電話番号は" . $personalInfos[1]['tel'] . "です。\n";

//Q2 問題２
foreach ($personalInfos as $idx => $info) {
  $num = $idx + 1;
  echo "{$num}番目の{$info['name']}のメールアドレスは{$info['mail']}で、電話番号は{$info['tel']}です。\n";
}

//Q2 問題３
$ageList = [25, 30, 18];
foreach ($personalInfos as $idx => &$info) {
    $info['age'] = $ageList[$idx];
}
unset($info); 
var_dump($personalInfos);

// Q2 多次元連想配列
$personalInfos = [
  ['name' => 'Aさん','mail' => 'aaa@mail.com','tel'  => '09011112222'],
  ['name' => 'Bさん','mail' => 'bbb@mail.com','tel'  => '08033334444'],
  ['name' => 'Cさん','mail' => 'ccc@mail.com','tel'  => '09055556666'],
];

// Q3 オブジェクト-1
class Student {
  public $studentId;
  public $studentName;

  public function __construct($id, $name) {
      $this->studentId = $id;
      $this->studentName = $name;
  }

  public function attend($subject = null) {
      if ($subject) {
          echo "{$this->studentName}は{$subject}の授業に参加しました。学籍番号：{$this->studentId}\n";
      } else {
          echo "授業に出席しました。\n";
      }
  }
}

$suzuki = new Student(100, 'スズキ');
echo "学籍番号{$suzuki->studentId}番の生徒は{$suzuki->studentName}です。\n";

// Q4 オブジェクト-2
$suzuki->attend('PHP');

// Q5 定義済みクラス
// Q5 問題１
$date = new DateTime();
$date->modify('-1 month');
echo $date->format('Y-m-d') . "\n";

// Q5 問題２
$birth = new DateTime('1992-04-25');
$today = new DateTime();
$diff = $today->diff($birth);
echo "あの日から{$diff->days}日経過しました。\n";
?>