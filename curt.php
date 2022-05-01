<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
  <style>
  .curtain {
  width: 100%;
  height: 100vh;
  overflow: hidden;
}

.curtain__wrapper {
  width: 100%;
  height: 100%;
}

.curtain__panel {
  background:#580201;
  width: 50%;
  height: 100vh;
  float: left;
  position: relative;
  z-index: 2;
  transition: all 10s ease;

}

.curtain__panel--left {
  transform: translateX(-100%);
}

.curtain__panel--right {
  transform: translateX(100%);
}

.curtain__prize {
  background: #333;
  position: absolute;
  z-index: 1;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

input[type=checkbox] {
  position: absolute;
  cursor: pointer;
  width: 100%;
  height: 100%;
  z-index: 100;
  opacity: 0;
}

input[type=checkbox]:checked ~ div.curtain__panel--left {
  transform: translateX(0);
}

input[type=checkbox]:checked ~ div.curtain__panel--right {
  transform: translateX(0);
}

img {
  width: 100vw;
  height: 100vh;
}
</style>
</head>

<body>
  <div class="curtain">
    <div class="curtain__wrapper">

      <input type="checkbox" id="myButton"  checked>
      <div class="curtain__panel curtain__panel--left">

      </div>
      <div class="curtain__prize">
        <img src="images/curt.png">
      </div>
      <div class="curtain__panel curtain__panel--right">
		
      </div>

    </div>
  </div>

  <script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "index.php";
    };
</script>
</body>

</html>