<?php
$year = 0;
$month = 0;
$day = 0;
for ($i=1990; $i <= 2021; $i++) {
  $year .= '<option value="'.$i.'">'.$i.'年</option>';
}

for ($i=1; $i <= 12; $i++) {
  $month .= '<option value="'.$i.'">'.$i.'月</option>';
}

for ($i=1; $i <= 31; $i++) {
  $day .= '<option value="'.$i.'">'.$i.'日</option>';
}

$y1 =  $_POST['year'][0];
$y2 =  $_POST['year'][1];
$y3 =  $_POST['year'][2];
$y4 =  $_POST['year'][3];
$y_sum = $y1 + $y2 + $y3 + $y4;
$sum1 = $y_sum + $_POST['month'] + $_POST['day'];
$s1 = mb_substr($sum1, 0, 1);
$s2 = mb_substr($sum1, 1, 1);
$sum2 = 0;
if($s1 == $s2) {
  $sum2 = $sum1;
} else {
  $sum2 = (int)$s1 + (int)$s2;
}
?>
<!DOCTYPE html>
<html lang=ja>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
.select {
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
}
  </style>
  <title>Document</title>
</head>
<body>
<div class="form_area">
  <div class="fortune-form">
    <form method="post"action="">
      <div class="select">
        <label>あなたの生年月日:</label>
          <div>
            <select name="year"><?php echo $year ?></select>
          </div>年
          <div>
            <select name="month"><?php echo $month ?></select>
          </div>月
          <div>
            <select name="day"><?php echo $day ?></select>
          </div>日
      </div>
      <div style="text-align:center; margin:20px;">
          <input style="border-radius:10px; background-color:#a3d1cb; color:#000;" type="submit" value="占う">
      </div>
    </form>
  </div>
  <div style="text-align: center;">

    <?php
  if(strlen($sum2) == 2 ) {
    echo "11";
  }
  else {
    if($sum2 == 0) {
      echo "0";
    }
    elseif($sum2 == 1){
      echo "<h2>あなたのキーワード</h2>
            <p>✨リーダー、✨正直、✨活発、✨勇気、✨カリスマ性、✨オリジナリティ、✨創造、✨はじまり✨閃き、✨情熱、✨有能、✨自立、✨パワフル、✨直感</p>
            <h2>あなたの性格</h2>
            <p><b>①ゼロから生み出す才能あり</b>
            ゼロの状態から新しいものを
            生み出していくことが得意。
            パワーもバイタリティもすごい。
            最初から最後まで、
            ひとりで完成させてしまうのが得意。</p>
            <p><b>②一人を好む</b>
            他人と一緒に
            わいわいお仕事は、
            とっても楽しいけど、
            ちょっと
            わずらわしく感じてしまうかも。
            ひとりでやった方が早い
            と思ってしまうから。（笑）
            もちろん、悪気はないんですよ。
            まどろっこしいのは苦手で
            白か黒かはっきりしている方が好き。
            シンプルでわかりやすいのが
            とっても好きだから。
            わかりにくい、
            オブラートに包まれた表現は時間の無駄かも。</p>
            <p><b>③リーダーになってしまう</b>
            オープンマインドで
            人に頼られることが多いかも。
            この人に任せておけば大丈夫、
            と思わせてしまう、
            そんな自信たっぷりの
            オーラ満載なので、
            知らず知らずのうちに
            リーダー的な立場に
            なってしまうことも多い。
            「自信」がキーポイント
            自信がある人、
            そう見られるけれど、
            「自信」
            実はそこが一番のポイント。
            この自信が欲しい。
            自信ある人でいたい。
            そう強く望んでいる。
            人と同じことはイヤ！
            オリジナリティが大事なので、
            人と違ったことがしたい。
            他の人と同じじゃイヤ、そんな心の声が聞こえてきそう。
            このオリジナリティがあなたの魅力です</p>";
    }
    elseif($sum2 == 2){
      echo "<h2>あなたのキーワード</h2>
            <p>✨パートナーシップ、✨優しさ、✨サポート、✨ゆらぎ、<br/> ✨芸術家肌、✨調和、✨繋ぐ、✨思いやり、✨受動的</p>
            <h2>あなたの性格</h2>
            <p><b>①サポート名人</b>
            人をサポートするのが得意。
            優しくて、恩着せがましくない
            絶妙のアドバイスができる聞き上手。
            生まれながらの
            カウンセラーです</p>
            <p><b>②芸術家肌でセンスよし</b>
            美的センスがよく、
            穏やかで静かなセンスのいい環境を
            求めています。
            物事をよく観察し、
            分析する鋭い視点を持っているので、
            優れた審美眼を持ちます。</p>
            <p><b>③控え目さん</b>
            敏感で、周りの人の気持ちが
            わかってしまう能力があります。
            そのために、自分の意見を
            なにがなんでも押し通す、
            なんてことは絶対にしない、
            控えめさんです。
            調和を保つ方が、心地よいのです。
            </p>";
    }
    elseif($sum2 == 3){
      echo "3";
    }
    elseif($sum2 == 4){
      echo "4";
    }
    elseif($sum2 == 5){
      echo "5";
    }
    elseif($sum2 == 6){
      echo "6";
    }
    elseif($sum2 == 7){
      echo "7";
    }
    elseif($sum2 == 8){
      echo "8";
    }
    elseif($sum2 == 9){
      echo "9";
    }
  }
  ?>
  </div>
</div>
</body>
</html>