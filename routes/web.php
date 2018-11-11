<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Chapter2 46/355
// Route::get('hello',function(){
// 	return '<html>
// 				<body>
// 					<h1>
// 						hello
// 					</h1>
// 					<p>
// 						This is sample page.
// 					</p>
// 				</body>
// 			</html>';
// });


// Chapter2 47/355 ヒアドキュメント
// $html = <<<EOF
// <html>
// <head>
// 	<title>Hello</title>
// </head>
// <style>
// 	body{
// 		font-size:16pt;
// 		color:#999;
// 	}

// 	h1{
// 		font-size:100pt;
// 		text-align:right;
// 		color:#eee;
// 		margin:-40px 0px -50px 0px;
// 	}
// </style>
// <body>
// 	<h1>
// 		Hello
// 	</h1>
// 	<p>
// 		This is sample page.
// 	</p>
// 	<p>
// 		これはサンプルで作ったページです。
// 	</p>
// </body>
// </html>
// EOF;

// Route::get('hello',function() use ($html){
// 	return $html;
// });



//Chapter2 49/355 リスト2-5 パラメータ
// Route::get('hello/{msg?}',function($msg='no massage'){

// $html = <<<EOF
// <html>
// <head>
// 	<title>Hello</title>
// </head>
// <style>
// 	body{
// 		font-size:16pt;
// 		color:#999;
// 	}

// 	h1{
// 		font-size:100pt;
// 		text-align:right;
// 		color:#eee;
// 		margin:-40px 0px -50px 0px;
// 	}
// </style>
// <body>
// 	<h1>
// 		Hello
// 	</h1>
// 	<p>
// 		{$msg}
// 	</p>
// 	<p>
// 		これはサンプルで作ったページです。
// 	</p>
// </body>
// </html>
// EOF;
// 	return $html;
// });


// Chapter2 57/355 リスト2-8
// Route::get('hello','c');


// Chapter2 58/355 リスト2-9
// Route::get('hello/{id?}/{pass?}','HelloController@Index');


// Chapter2 60/355 リスト2-11 複数アクションの利用
// Route::get('hello','HelloController@Index');
// Route::get('hello/other','HelloController@other');


// Chapter2 60/355 リスト2-11 複数アクションの利用
// Route::get('hello','HelloController');


// Chapter2 65/355 リスト2-15 request/response
// Route::get('hello','HelloController@Index');


// Chapter3 73/355 リスト3-2 template
// Route::get ('hello', function(){
// 	return view('hello.index');
// });


// Chapter3 75/355 リスト3-4 template
// Route::get('hello', 'HelloController@Index');


// Chapter3 78/355 リスト3-9 template
// Route::get('hello/{id?}', 'HelloController@index');


// Chapter3 79/355 リスト3-11 template
// Route::get('hello', 'HelloController@index');


// Chapter3 85/355 リスト3-16 Blade
// Route::post('hello', 'HelloController@post');

Route::get('home', 'HomeController@index');
// Route::get('about', 'HomeController@index');
// Route::get('contact', 'HomeController@index');

?>