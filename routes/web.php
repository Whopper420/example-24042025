<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', function () {
//     // return view('welcome');
// });

// Route::get('/test', function () {
//     echo "<h1>test</h1>";
//     $name = "rudolfs";
//     echo $name;
//     $re = [1, 2, 3, 4, 5];
//     foreach ($re as $r) {
//         echo "<ul>";
//         echo "<li>" . $r . "</li>";
//         echo "</ul>";
//     };
// });

Route::get('/test', function () {
    return view('test2');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/about2', function () {
    return view('about2',  ['variable' => 'works']);
});


Route::get('/post', function () {
    return view('post');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/index', [CommentController::class, 'index']);
Route::get('/index/create', [CommentController::class, 'create']);
Route::post('/index', [CommentController::class, 'store']);
