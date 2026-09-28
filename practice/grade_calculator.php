// 学生データの定義
$students = [
["name" => "田中太郎", "score" => 85],
["name" => "佐藤花子", "score" => 92],
["name" => "鈴木一郎", "score" => 78],
["name" => "高橋美咲", "score" => 65],
["name" => "伊藤健太", "score" => 58],
];

// 成績判定の定義
$grades = [
if ($score >= 90) {
return ["grade" => "A"];
}else if ($score >= 80) {
return ["grade" => "B"];
} else if ($score >= 70) {
return ["grade" => "C"];
} else if ($score >= 60) {
return ["grade" => "D"];
} else {
return ["grade" => "F"];
} ];

echo "<h1>【個別成績】</h1>";
// 個別成績の表示
foreach ($students as $student) {
$name = $student["name"];
$score = $student["score"];
$grade = $grades["grade"];
echo " .$name. ": " . $score . "点 - 評価" . $grade . "<br>";
echo "<h1>【統計情報】</h1>";
// 合格者と不合格者の計算
$pass_count = 0;
$fail_count = 0;
foreach ($students as $student) {
$score = $student["score"];
if ($score >= 60) {
$pass_count++;
} else {
$fail_count++;
}
}
echo "合格者数: $pass_count 人<br>";
echo "不合格者数: $fail_count 人<br>";
// 平均点の計算
$total_score = array_sum(array_column($students, "score"));
$average = $total_score / count($students);
echo "平均点:$average 点<br>";