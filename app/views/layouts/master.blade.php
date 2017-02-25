<?php   $html = new \Libs\HTML();?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
  {{ $html->script("public/js/jquery-3.1.1.min.js") }}
  {{ $html->script("public/js/bootstrap.min.js") }}
  {{ $html->style("public/css/bootstrap.min.css") }}
  
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  
</head>
<body>
  <div class="container">
  	@yield('content')
  </div>
</body>
</html>
