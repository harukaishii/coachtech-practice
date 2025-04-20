<?php

require_once('functions/search_city_time.php');
$tokyo = searchCityTime('東京');

$city = htmlspecialchars($_GET['city'],ENT_QUOTES);
$comparison = searchCityTime($city);
?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>World Clock</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/result.css">
  <style>
    .result__content {
    margin: 0 auto;
    padding: 60px 15px;
    max-width: 1230px;
}

.result-cards {
    display: flex;
    justify-content: center;
}

.result-card {
    margin: 0 20px;
    width: 360px;
    border-radius: 3px;
    box-shadow: 0 3px 6px rgba(0, 0, 0, .15);
}

.result-card__img-wrapper {
    position: relative;
    padding-top: 56.25%;
}

.result-card__img {
    position: absolute;
    top: 50%;
    width: 100%;
    height: 100%;
    transform: translateY(-50%);
}

.result-card__body {
    display: flex;
    justify-content: space-between;
    padding: 15px;
}

.result-card__city,
.result-card__time,
.result-card__president,
.result-card__judge{
    margin: 0;
    font-size: 18px;
}

.test{
    color: blue;
}
  </style>
</head>

<body>
    <h2 class ="test">テスト</h2>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/php02/index.php">
        World Clock
      </a>
    </div>
  </header>

  <main>
    <div class="result__content">
      <div class="result-cards">
        <div class="result-card">
          <div class="result-card__img-wrapper">
            <img class="result-card__img" src="img/<?php echo $tokyo['img']?>" alt="国旗">
          </div>
          <div class="result-card__body">
            <p class="result-card__city">
              <?php echo $tokyo['name']?>
            </p>
            <p class="result-card__time">
              <?php echo $tokyo['time']?>
            </p>
            <p class="result-card__president">
              <?php echo $tokyo['president']?>
            </p>
            <p class="result-card__judge">
              <?php echo $tokyo['judge']?>
            </p>
          </div>
        </div>
        <div class="result-card">
          <div class="result-card__img-wrapper">
            <img class="result-card__img" src="img/<?php echo $comparison['img']?>" alt="国旗">
          </div>
          <div class="result-card__body">
            <p class="result-card__city">
              <?php echo $comparison['name']?>
            </p>
            <p class="result-card__time">
              <?php echo $comparison['time']?>
            </p>
            <p class="result-card__president">
              <?php echo $comparison['president']?>
            </p>
            <p class="result-card__judge">
              <?php echo $comparison['judge']?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>