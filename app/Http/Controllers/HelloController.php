<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;



//Chapter2 56/355
// class Hellocontroller extends Controller
// {
//     public function index(){
//     	return <<<EOF
// <html>
// <head>
// 	<title>Hello/Index</title>
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
// 		Index
// 	</h1>
// 	<p>
// 		これは、HelloコントローラーのIndexアクションです。
// 	</p>
// </body>
// </html>
// EOF;
// 	}
// }


// Chapter2 58/355 リスト2-9
// class Hellocontroller extends Controller
// {
//     public function index($id='noname',$pass='unknown'){
//     	return <<<EOF
// <html>
// <head>
// 	<title>Hello/Index</title>
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
// 		Index
// 	</h1>
// 	<p>
// 		これは、HelloコントローラーのIndexアクションです。
// 	</p>
// 	<ul>
// 		<li>
// 			ID:{$id}
// 		</li>
// 		<li>
// 			PASS:{$pass}
// 		</li>
// 	</ul>
// </body>
// </html>
// EOF;
// 	}
// }
   

// Chapter2 60/355 リスト2-11 複数アクションの利用
// global $head, $style, $body, $end;
// $head = '<html><head>';
// $style = <<<EOF
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
// EOF;
// $body = '</head><body>';
// $end = '</body></head>';

// function tag($tag, $txt){
// 	return "<{$tag}>" . $txt . "</{$tag}>";
// }

// class HelloController extends Controller{
// 	public function index(){
// 		global $head, $style, $body, $end;

// 		$html = $head . tag('title','Hello/Index') . $style . $body . tag('h1','Index') . tag('p','this is Index page') . '<a href="/hello/other">go to Other pade</a>' . $end;
// 		return $html;
// 	}

// 	public function other(){
// 		global $head, $style, $body, $end;

// 		$html = $head . tag('title','Hello/Other') . $style . $body . tag('h1','Other') . tag('p','this is Other page') . $end;
// 		return $html;		
// 	}
// }


// Chapter2 63/355 リスト2-13 シングルアクション
// class HelloController extends Controller{
// 	public function __invoke(){
// 		return <<<EOF

// <html>
// <head>
// <title>Hello</title>
// <style>
// body{
// 	font-size:16pt;
// 	color:#999;
// }

// h1{
// 	font-size:30pt;
// 	text-align:right;
// 	color:#eee;
// 	margin:-15px 0px 0px 0px;
// 	}
// </style>
// </head>
// <body>
// 	<h1>
// 		Single Action
// 	</h1>
// 	<p>
// 		これは、シングルアクションコントローラーのアクションです。
// 	</p>
// </body>
// </html>
// EOF;
// 	}
// }


// Chapter2 65/355 リスト2-15 request/response
// class HelloController extends Controller{
// 	public function index(Request $request, Response $response){

// $html = <<<EOF
// <html>
// <head>
// 	<title>Hello/Index</title>
// 	<style>
// 		body{
// 			font-size:16pt;
// 			color:#999;
// 		}

// 		h1{
// 			font-size:120pt;
// 			text-align:right;
// 			color:#fafafa;
// 			margin:-50px 0px -120px 0px;
// 	}
// 	</style>
// </head>
// <body>
// 	<h1>Hello</h1>
// 	<h3>Request</h3>
// 	<pre>{$request}</pre>
// 	<h3>Response</h3>
// 	<pre>{$response}</pre>
	
// </body>
// </html>
// EOF;
// 	$response->setContent($html);
// 	return $response;
// 	}

// }


// Chapter3 73/355 リスト3-3 template
// class HelloController extends Controller{
// 	public function index(){
// 		return view('hello.index');
// 	}
// }


// Chapter3 76/355 リスト3-6 template
// class HelloController extends Controller{
// 	public function index(){
// 		$data = ['msg'=>'これはコントローラーから渡されたメッセージです。'];
// 		return view('hello.index',$data);
// 	}
// }

// Chapter3 78/355 リスト3-8 template
// class HelloController extends Controller{
// 	public function index($id='zero'){
// 		$data = [
// 			'msg'=>'これはコントローラーから渡されたメッセージです。',
// 			'id'=>$id
// 		];
// 		return view('hello.index',$data);
// 	}
// }



// Chapter3 79/355 リスト3-10 template
// class HelloController extends Controller{
// 	public function index(Request $request){
// 		$data = [
// 			'msg'=>'これはコントローラーから渡されたメッセージです。',
// 			'id'=>$request->id
// 		];
// 		return view('hello.index',$data);
// 	}
// }


// Chapter3 81/355 リスト3-13 Blade
// class HelloController extends Controller{
// 	public function index(){
// 		$data = [
// 			'msg'=>'これはBlade利用したサンプルです。'
// 		];
// 		return view('hello.index',$data);
// 	}
// }

// Chapter3 84/355 リスト3-15 Blade
// class HelloController extends Controller{
// 	// /helloにアクセスした時
// 	public function index(){
// 		$data = [
// 			'msg'=>'お名前を入力して下さい。'		
// 		];
// 		return view('hello.index',$data);
// 	}

// 	// フォームを送信した時
// 	public function post(Request $request){
// 		$msg = $request->msg;
// 		$data = [
// 			'msg'=>'こんにちは、'. $msg . 'さん！' 
// 		];
// 		return view('hello.index',$data);
// 	}
// }


// Chapter3 89/355 リスト3-18 Blade
// class HelloController extends Controller{
// 	// /helloにアクセスした時
// 	public function index(){
// 		return view('hello.index',['msg'=>'']);
// 	}

// 	// フォームを送信した時
// 	public function post(Request $request){
// 		return view('hello.index',['msg'=>$request->msg]);
// 	}
// }


// Chapter3 91/355 リスト3-20 Blade
class HelloController extends Controller{
	// /helloにアクセスした時
	public function index(){
		return view('hello.index');
	}

	// フォームを送信した時
	public function post(Request $request){
		return view('hello.index',['msg'=>$request->msg]);
	}
}