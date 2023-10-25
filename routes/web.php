<?php
use Core\Router\Web\Route;
Route::get('/' , [HomeController::class , 'index']);
Route::get('/users' , [\App\http\Controller\UserController::class , 'index']);
Route::get('/create_user' , [\App\http\Controller\UserController::class , 'create']);
Route::get('/index_user' , [\App\http\Controller\UserController::class , 'index']);
Route::get('/edit_user/{id}' , [\App\http\Controller\UserController::class , 'edit']);
Route::post('/store_user' , [\App\http\Controller\UserController::class , 'store']);
Route::put('/update_user/{id}' , [\App\http\Controller\UserController::class , 'update']);
Route::delete('/destroy_user/{id}' , [\App\http\Controller\UserController::class , 'destroy']);

echo CURRENT_ROUT;
echo "<br>";
global $routes;
print_r($routes);