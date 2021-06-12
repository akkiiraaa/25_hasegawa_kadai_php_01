<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>従業員満足度調査結果</title>
</head>
<body>
<h1>従業員満足度調査結果</h1>
<table border="1">
<tr>
<th>入力時間</th>
<th>氏名</th>
<th>性別</th>
<th>年齢</th>
<th>入社年次</th>
<th>所属部署</th>
<th>職務内容</th>
<th>総合評価</th>
<th>総合評価の理由</th>
<th>やりがいがある</th>
<th>仕事内容が合っている</th>
<th>スキルが身につく</th>
<th>キャリア開発が充実</th>
<th>オフィス環境が良い</th>
<th>人間関係が良い</th>
<th>評価に納得感ある</th>
<th>公私のバランスが良い</th>
<th>ハセガワがハゲている</th>
<th>働き続けるか</th>
<th>その他要望</th>
</tr>

<?php

//XSS対策用関数
function h ($value){
    return htmlspecialchars($value, ENT_QUOTES);
};

//ファイルの読み込み
$file = fopen("data.csv", "r");

//csvデータを配列に変換し、HTMLに埋め込む
while($line = fgetcsv($file)){
    echo "<tr>";
    for($i=0; $i<count($line); $i++){
        echo"<td>".$line[$i]."</td>";
    };
    echo "</tr>";
};

//ファイルを閉じる
fclose($file);

?>

</table>

<ul>
<button><a href="post.php">アンケートへ戻る</a>
</ul>


</body>
</html>
