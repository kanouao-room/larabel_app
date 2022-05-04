<?php

use Illuminate\Support\Facades\Route;

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

$html = <<<EOF
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
body {font-size:20pt; color:#999; }
h1{ font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}

</style>


</head>
<body>
    <h1>Hello</h1>
    <p>this is sample pages</p>
</body>
</html>
EOF;

use App\Http\Middleware\HelloMiddleware;
Route::get('hello','HelloController@index')
->middleware(HelloMiddleware::class);
// Route::get('hello','HelloController@post');



//ここのpostは元々存在しなかった。
// Route::post('hello','HelloController@post');






// Route::get('hello', 'HelloController@index');

// Route::get('hello/{id?}', 'helloController@index');


// Route::get('hello', function(){
//     return view('hello.index');
// });



// Route::get('hello', 'HelloController@index');


// Route::get('hello', function () use ($html){
//     return $html;
// });


// Route::get('/', function () {
//     return view('welcome');
// });
