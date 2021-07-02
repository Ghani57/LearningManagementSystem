<!DOCTYPE html>
<html lang="en">
<head>
<style>
:root {
  --color: #4973ff;
}

body {
  font-size: 16px;
  font-family: 'Montserrat', sans-sherif;
  margin: 0;
  padding: 0;
  background-image: linear-gradient(to right, red, grey, green);
}

.content {
  max-width: 600px;
  margin: 0 auto;
  padding: 0 20px;
}

.hero {
  position: relative;
  background: #333333;
  color: white;
  height: 200px;
  display: flex;
  align-items: center;
  overflow: hidden;
}

.hero h2 {
  position: relative;
  z-index: 1;
  font-size: 4.5rem;
  margin: 0 0 10px;
  line-height: 1;
  color: rgba(255, 255, 255, 0.9);
}

.hero p {
  position: relative;
  z-index: 1;
  font-size: 1.1rem;
  color: rgba(255, 255, 255, 0.5);
  line-height: 1.4;
}

/* ========================= */

.waves {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 200px;
  background-color: var(--color);
  box-shadow: inset 0 0 50px rgba(0, 0, 0, 0.5);
  transition: 500ms;
}

.waves::before,
.waves::after {
  content: '';
  position: absolute;
  width: 300vw;
  height: 300vw;
  top: -65vw;
  left: 50%;
  transform: translate(-50%, -75%);
}

.waves::before {
  border-radius: 44%;
  background: rgba(51, 51, 51, 1);
  animation: waves 8s linear infinite;
}

.waves::after {
  border-radius: 44%;
  background: rgba(51, 51, 51, 0.5);
  animation: waves 15s linear infinite;
}

@keyframes waves {
  0% {
    transform: translate(-50%, -75%) rotate(0deg);
  }
  
  100% {
    transform: translate(-50%, -75%) rotate(360deg);
  }
}

</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="hero">
  <div class="content">
    <h2>UET Mardan LMS</h2>
    <p style="text-align: center">Admin dashboard</p>
    </div>
  <div class="waves"></div>
</section>
</body>
</html>