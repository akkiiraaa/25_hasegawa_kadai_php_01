<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>従業員満足度調査</title>
</head>

<body>
<h1>従業員満足度調査</h1>
<p>現在の職場環境を改善すべく、満足度調査を実施しております。つきましては以下のアンケートへのご協力をお願い致します。なお、このアンケートの回答内容は他の目的で利用したり、回答者個人が特定されたりすることはありません。</p>
<form method="POST" action="write.php">
<p>氏名<input type="text" name="name" ></p>
<p>性別
<label><input type="radio" value = "男" name="gender" >男</label>
<label><input type="radio" value = "女" name="gender" >女</label>
<label><input type="radio" value = "その他" name="gender" >その他</label>
</p>
<p>年齢<input type="number" name="age" ></p>
<p>入社年次(西暦)<input type="number" name="year" ></p>
<p>所属部署<input type="text" name="dept" ></p>
<p>職務内容<input type="text" name="job" ></p>
<p>1. あなたは今の職場に総合的に満足していますか？
<label><input type="radio" value = "満足" name="satis" >満足</label>
<label><input type="radio" value = "普通" name="satis" >普通</label>
<label><input type="radio" value = "不満" name="satis" >不満</label>
</p>
<p class="reason">2. 1.のように答えた理由をお聞かせください
<textarea name="reason_1" id="#" cols="30" rows="10"></textarea></p>
<p>3. 以下の項目についてどの程度満足していますか？<br>１〜５の数字でお答えください<br>１：思う ２：やや思う ３：どちらでもない ４：あまり思わない ５：全く思わない
<br>
<ul>
<li>やりがいのある仕事である<input type="number" name="yarigai"></li>
<li>仕事内容が自分に合っている<input type="number" name="naiyou"></li>
<li>スキル・能力が身につく仕事環境である<input type="number" name="skill"></li>
<li>社員教育・キャリア開発などの制度が充実している<input type="number" name="career"></li>
<li>仕事に集中しやすいオフィス環境である<input type="number" name="office"></li>
<li>社内の人間関係は良好である<input type="number" name="human"></li>
<li>評価制度に納得感がある<input type="number" name="hyouka"></li>
<li>仕事と私生活のバランスが保たれている<input type="number" name="life"></li>
<li>ハセガワはハゲている<input type="number" name="hage"></li>
</ul>
</p>
<p>4. 今後も現在の職場で働き続けたいと思いますか
<label><input type="radio" value = "はい" name="comit" >はい</label>
<label><input type="radio" value = "わからない" name="comit" >わからない</label>
<label><input type="radio" value = "いいえ" name="comit" >いいえ</label>
</p>
<p class="reason">5. 職場に対して悩みや要望がございましたら、ご自由にお書きください。
<textarea name="reason_5" id="#" cols="30" rows="10"></textarea></p>

<p>アンケートは以上となります。お疲れさまでした！</p>

<input type="submit" value="送信">

</form>

</body>

<style>
.reason{
    display: flex;
    flex-direction: column;
    
}
</style>


</html>