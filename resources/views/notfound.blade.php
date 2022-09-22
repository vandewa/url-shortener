<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="{{ asset('image/soul.ico')}}">
    <title>URL SHORTENER KABUPATEN WONOSOBO</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
  
<div class="background-image"></div>
</body>
<style>
  * { 
    margin: 0;
    padding: 0;
  }

.background-image {
  background-image: url({{ asset('image/404.png') }});
  background-size: cover;
  background-repeat: no-repeat;
  height: 100vh;
}
@media only screen and (min-device-width: 480px){

.background-image {
  background-image: url({{ asset('image/404.png') }});
  background-position: 80% 80%;
  background-size: cover;
  }
}


</style>
</html>