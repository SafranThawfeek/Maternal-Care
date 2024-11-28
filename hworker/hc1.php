<!DOCTYPE html>
<html>
<head><title>hc</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  color: white;
}
.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}
.left {
  left: 0;
  background-image: url(../image/image68.jpg);
  background-repeat: no-repeat;
  background-position: left;
  background-size: cover;
}
.right {
  right: 0;
  background-image: url(../image/image68.jpg);
  background-repeat: no-repeat;
  background-position: right;
  background-size: cover;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
.centered img {
  width: 300px;
  border-radius: 50%;
}
</style>
</head>
<body>
<div class="split left">
  <div class="centered">
    <img src="../image/image93.jpg" alt="Avatar woman">
    <h2><a href="maternalhc1.php"><font size="6" color="white">MATERNAL</font></a></h2>
    <p>HEALTH CARE..</p>
  </div>
</div>

<div class="split right">
  <div class="centered">
    <img src="../image/image48.png" alt="Avatar child">
    <h2><a href="childhc1.php"><font size="6" color="white">CHILD</font></a></h2>
    <p>HEALTH CARE..</p>
  </div>
</div>

</body>
</html> 
