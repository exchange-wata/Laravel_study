<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hello/Index</title>
	<style>
		body{
			font-size:16pt;
			color:#999;
		}

		h1{
			font-size:50pt;
			text-align:right;
			color:#fafafa;
			margin:-20px 0px 30px 0px;
			letter-spacing: -4pt;
		}
	</style>
</head>
<body>

	<!-- 3-12 -->
	<h1>Blade/Index</h1>
	<!-- <p>{{$msg}}</p> -->

	<!-- 3-17 -->
	<!-- @if($msg != '')
	<p>こんにちは、{{$msg}}さん。</p>
	@else()
	<p>何か書いて下さい。</p>
	@endif -->

	<!-- 3-19 -->
	@isset($msg)
	<p>こんにちは{{$msg}}さん。</p>
	@else
	<p>何か書いて下さい。</p>
	@endisset

	<!-- 3-14 -->
	<form action="/hello" method="POST">
		{{csrf_field()}}
		<input type="text" name="msg">
		<input type="submit">
	</form>
</body>
</html>