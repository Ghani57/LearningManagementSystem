<!DOCTYPE html>
<html lang="en">
<head>
<style>
h2{
	color: white;
}
body{
	background-image: linear-gradient(to right, blue, red, green);
}
header {
  position: relative;
  background-color: black;
  height: 75vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}

header video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

header .container {
  position: relative;
  z-index: 2;
}

header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}

@media (pointer: coarse) and (hover: none) {
  header {
    background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
  }
  header video {
    display: none;
  }
}
</style>
	<script src="jquery/jquery.min.js"> </script>
	<link  href ="bootstrap/css/bootstrap.min.css"  rel="stylesheet">
	<link  href ="bootstrap/js/bootstrap.bundle.min.js"  rel="stylesheet">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<header>
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
  </video>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3">UET Mardan LMS</h1>
        <p class="lead mb-0">The UET Mardan offers different online courses for its students!!!</p>
      </div>
    </div>
  </div>
</header>

<section class="my-5">
<div class="container">
	<div class="row">
    	<div class="col-md-6">
		<h2>React JS</h2>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLq82_U-w62rigF0KA9qFO4H0VFpvjceJj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		
		<div class="col-md-6">
		<h2>Data Structures & Algorithms</h2>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLq82_U-w62rgkhbsOvl_pixyB8SrDxf1u" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		
		<div class="col-md-6">
		<h2>Node JS</h2>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLq82_U-w62rhfmbQ10CDjn5CPk6yeMkVI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		
		
    </div>
</div>
</section>
</body>
</html>