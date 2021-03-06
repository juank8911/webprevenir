<body>
  <h1>View in Chrome or Safari</h1>
  <h3>(hover over to pause)</h3>
  <div id="wrapper">
    <div id="image">
      <div class="image i1"><img style="width: 100%" src="../../img/1.jpeg" alt="Prevenir Express Oficinas"></div>
      <div class="image i2"><img style="width: 100%" src="../../img/2.jpeg" alt="Prevenir Express Oficinas"></div>
      <div class="image i3"><img style="width: 100%" src="../../img/3.jpeg" alt="Prevenir Express Instalaciones"></div>
      <div class="image i4"><img style="width: 100%" src="../../img/4.jpeg" alt="Prevenir Express Lineas de emergencia funeraria"></div>
      <div class="image i5"><img style="width: 100%" src="../../img/5.jpeg" alt="Prevenir Express Lineas de emergencia funeraria"></div>
   
    </div>
  </div>
</body>

<style type="text/css">
  body {
  background: #eee;
  font-family: arial, helvetica, sans-serif;
  margin: 50px auto;
  padding: 0;
}

h1 {
  font-family: 'Proxima Nova', 'Helvetica Neue', sans-serif;
  font-size: 36px;
  text-align: center;
}
h3 {
  font-family: 'Proxima Nova', 'Helvetica Neue', sans-serif;
  font-size: 22px;
  font-style: italic;
  color: #4e4e4e;
  text-align: center;
  margin-bottom: -100px;
}

#wrapper {
  width: 960px;
  margin: 0 auto;
}

#wrapper {
  perspective: 2500;
  -webkit-perspective: 2500;
  width: 800px;
  margin: 200px auto 0 auto;
  perspective-origin: 50% 150px;
  -webkit-perspective-origin: 50% 150px;
  transition: perspective, 1s;
  -o-transition: -o-perspective, 1s;
  -moz-transition: -moz-perspective, 1s;
  -webkit-transition: -webkit-perspective, 1s;
}

#image:hover {
  animation-play-state:paused;
  -o-animation-play-state:paused;
  -moz-animation-play-state:paused;
  -webkit-animation-play-state:paused;
}


@-webkit-keyframes spin {
  from {
    transform: rotateY(0);
    -o-transform: rotateY(0);
    -ms-transform: rotateY(0);
    -moz-transform: rotateY(0);
    -webkit-transform: rotateY(0);
  }
  to {
    transform: rotateY(-360deg);
    -o-transform: rotateY(-360deg);
    -ms-transform: rotateY(-360deg);
    -moz-transform: rotateY(-360deg);
    -webkit-transform: rotateY(-360deg);
  }
}

#image {
  margin: 0 auto;
  height: 300px;
  width: 400px;
  transform-style: preserve-3d;
  -webkit-transform-style: preserve-3d;
  animation: spin 24s infinite linear;
  -moz-animation: spin 24s infinite linear;
  -o-animation: spin 24s infinite linear;
  -webkit-animation: spin 24s infinite linear;
}

.image {
  position: absolute;
  height: 300px;
  width: 400px;
  border-radius: 25px;
  /*background-color: rgba(0,0,0,0.6);*/
  text-align: center;
  font-size: 0 !important;
  color: #fff;
}

#image > .i1 {
  transform: translateZ(485px);
  -moz-transform: translateZ(485px);
  -o-transform: translateZ(485px);
  -ms-transform: translateZ(485px);
  -webkit-transform: translateZ(485px);
}
#image > .i2 {
  transform: rotateY(45deg) translateZ(485px);
  -moz-transform: rotateY(45deg) translateZ(485px);
  -o-transform: rotateY(45deg) translateZ(485px);
  -ms-transform: rotateY(45deg) translateZ(485px);
  -webkit-transform: rotateY(45deg) translateZ(485px);
}
#image > .i3 {
  transform: rotateY(90deg) translateZ(485px);
  -moz-transform: rotateY(90deg) translateZ(485px);
  -o-transform: rotateY(90deg) translateZ(485px);
  -ms-transform: rotateY(90deg) translateZ(485px);
  -webkit-transform: rotateY(90deg) translateZ(485px);
}
#image > .i4 {
  transform: rotateY(135deg) translateZ(485px);
  -moz-transform: rotateY(135deg) translateZ(485px);
  -o-transform: rotateY(135deg) translateZ(485px);
  -ms-transform: rotateY(135deg) translateZ(485px);
  -webkit-transform: rotateY(135deg) translateZ(485px);
}
#image > .i5 {
  transform: rotateY(180deg) translateZ(485px);
  -moz-transform: rotateY(180deg) translateZ(485px);
  -o-transform: rotateY(180deg) translateZ(485px);
  -ms-transform: rotateY(180deg) translateZ(485px);
  -webkit-transform: rotateY(180deg) translateZ(485px);
}
#image > .i6 {
  transform: rotateY(225deg) translateZ(485px);
  -moz-transform: rotateY(225deg) translateZ(485px);
  -o-transform: rotateY(225deg) translateZ(485px);
  -ms-transform: rotateY(225deg) translateZ(485px);
  -webkit-transform: rotateY(225deg) translateZ(485px);
}
#image > .i7 {
  transform: rotateY(270deg) translateZ(485px);
  -moz-transform: rotateY(270deg) translateZ(485px);
  -o-transform: rotateY(270deg) translateZ(485px);
  -ms-transform: rotateY(270deg) translateZ(485px);
  -webkit-transform: rotateY(270deg) translateZ(485px);
}
#image > .i8 {
  transform: rotateY(315deg) translateZ(485px);
  -moz-transform: rotateY(315deg) translateZ(485px);
  -o-transform: rotateY(315deg) translateZ(485px);
  -ms-transform: rotateY(315deg) translateZ(485px);
  -webkit-transform: rotateY(315deg) translateZ(485px);
}

img {
  border-radius: 25px;
</style>