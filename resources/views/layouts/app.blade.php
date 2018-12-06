<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Virtual Code Library</title>
    <link rel="stylesheet" href="/css/app.css">
    	<link href="/css/prism.css" rel="stylesheet" />
</head>
<body>
@include('inc.navbar')

<div class="container-fluid">
    @include('inc.messages')
    @yield('content')
</div>

<footer id="footer" class="text-center">
    <p>Copyright &copy; 2018 Virtual Code Library</p>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="/js/prism.js"></script>

<script>
	
	$("code").each(function() {
    $(this).html(
        $(this).html().replace(/</g,'&lt;').replace(/>/g,'&gt;')
    );
});



</script>

{{--       <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
  <script type="text/javascript">
    bkLib.onDomLoaded(nicEditors.allTextAreas);
  </script> --}}
</body>
</html>