<?php

//POSTのデータを取得
$name = $_POST["name"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$year = $_POST["year"];
$dept = $_POST["dept"];
$job = $_POST["job"];
$satis = $_POST["satis"];
$reason_1 = $_POST["reason_1"];
$yarigai = $_POST["yarigai"];
$naiyou = $_POST["naiyou"];
$skill = $_POST["skill"];
$career = $_POST["career"];
$office = $_POST["office"];
$human = $_POST["human"];
$hyouka = $_POST["hyouka"];
$life = $_POST["life"];
$hage = $_POST["hage"];
$comit = $_POST["comit"];
$reason_5 = $_POST["reason_5"];

//回答時間の取得
$date = date("Y/m/d H:i:s");

//ファイルを読み込む
$file = fopen("data.csv", "a");

//データの配列を作る
$datas = array($date, $name, $gender, $age, $year,$dept, $job, $satis, $reason_1, $yarigai, $naiyou, $skill, $career, $office, $human, $hyouka, $life, $hage, $comit, $reason_5);

fputcsv($file, $datas);

// foreach($datas as $data){

//     //ファイルに書き込む
//     fwrite($file,$data."\n");
    
//     echo $line;
// };


fclose($file);

// read.phpにリダイレクト
header("Location: read.php");
exit();

?>