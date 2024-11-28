
<!DOCTYPE html>
<html>
<head><title>facility</title>
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
  background-image: url(../image/image133.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: left;
}
.right {
  right: 0;
  background-image: url(../image/image133.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: right;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
.centered img {
  width: 200px;
  border-radius: 50%;
}
</style>
</head>
<body>
<div class="split left">
  <div class="centered">
    <img src="../image/image111.jpg" alt="Avatar woman">
    <h2><a href="mamata.php"><font size="6" color="white">MAMATA</font></a></h2>
    <p>YOJANA</p>
  </div>
</div>

<div class="split right">
  <div class="centered">
    <img src="../image/image47.png" alt="Avatar man">
    <h2><a href="childv.php"><font size="6" color="white">CHILD</font></a></h2>
    <p>IMMUNIZATION</p>
  </div>
</div>
</body>
</html> 

