<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/article', [ArticleController::class,'listeArticle']);
Route::get('/ajouter', [ArticleController::class, 'ajouterArticle']);
Route::get('/update-article/{id}', [ArticleController::class, 'updateArticle']);
Route::get('/delete-article/{id}', [ArticleController::class, 'deleteArticle']);

Route::get('/ajouter/traitement', [ArticleController::class, 'ajouterArticleTraitement']);
Route::get('/modifier/traitement', [ArticleController::class, 'modifierArticleTraitement']);


