<?php
    include 'Control/Function.php';
    $digit = randCard();
    $date = date('Y/m/d');
    $cost = 50000;
    $cmd ='Control/SaveCard.php?digit='.$digit.'&date='.$date.'&cost='.$cost
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BÁN THẺ</title>>
<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.65;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("wall.png");
  height: 100%;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}
</style>
</head>
<body>

<div class="bgimg-1">
  <div class="caption">
    <span class="border">MỆNH GIÁ: <?php echo $cost; ?> VNĐ</span><br>
    <span class="border">MÃ THẺ: <?php echo $digit; ?></span><br>
    <span class="border">NGÀY BÁN: <?php echo $date; ?></span><br>
    <span class="border" ><a href="<?php echo $cmd; ?>">Bán thẻ</a><span>
  </div>
</div>
</body>
</html>