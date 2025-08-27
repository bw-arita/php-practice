<?php
// Q1 変数と文字列
$name = "有田";
echo "私の名前は「" . $name . "」です。\n";

// Q2 四則演算
$num = 5 * 4;
echo $num . "\n";
echo ($num / 2) . "\n";

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
$date = date("Y年m月d日 H時i分s秒");
echo "現在時刻は、" . $date . "です。\n";

// Q4 条件分岐-1 if文
$device = "mac";
if ($device === "windows") {
    echo "使用OSは、windowsです。\n";
} else {
    if ($device === "mac") {
        echo "使用OSは、macです。\n";
    } else {
        echo "どちらでもありません。\n";
    }
}

// Q5 条件分岐-2 三項演算子
$age = 20;
echo ($age < 18) ? "未成年です。\n" : "成人です。\n";

// Q6 配列
$pref = ["東京都", "神奈川県", "栃木県", "埼玉県", "茨城県", "群馬県", "千葉県"];
echo $pref[2] . "と" . $pref[6] . "は関東地方の都道府県です。\n";

// Q7 連想配列-1
$capital = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市"
];
foreach ($capital as $city) {
  echo $city . "\n";
}

// Q8 連想配列-2
if (isset($capital["埼玉県"])) {
  echo "埼玉県の県庁所在地は、" . $capital["埼玉県"] . "です。\n";
}

// Q9 連想配列-3
$capital["大阪府"] = "大阪市";
$capital["沖縄県"] = "那覇市";
$kanto = ["東京都", "神奈川県", "千葉県", "埼玉県", "栃木県", "群馬県", "茨城県"];

foreach ($capital as $prefname => $city) {
    if (in_array($prefname, $kanto)) {
        echo $prefname . "の県庁所在地は、" . $city . "です。\n";
    } else {
        echo $prefname . "は関東地方ではありません。\n";
    }
}

// Q10 関数-1
function hello($name) {
  return $name . "さん、こんにちは。";
}
echo hello("田中") . "\n";
echo hello("吉田") . "\n";

// Q11 関数-2
function calcTaxInPrice($price) {
  return $price * 1.1;
}
$price = 1000;
$taxInPrice = calcTaxInPrice($price);
echo $price . "円の商品の税込価格は" . $taxInPrice . "円です。\n";

// Q12 関数とif文
function distinguishNum($num) {
  if ($num % 2 === 0) {
      return $num . "は偶数です。";
  } else {
      return $num . "は奇数です。";
  }
}
echo distinguishNum(23) . "\n";
echo distinguishNum(74) . "\n";

// Q13 関数とswitch文
function evaluateGrade($grade) {
  switch ($grade) {
      case "A":
      case "B":
          return "合格です。";
      case "C":
          return "合格ですが追加課題があります。";
      case "D":
          return "不合格です。";
      default:
          return "判定不明です。講師に問い合わせてください。";
  }
}
echo evaluateGrade("C") . "\n";
echo evaluateGrade("E") . "\n";

?>
