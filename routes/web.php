<?php

use App\Http\Controllers\ProfileController;
use App\Models\Article;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $articles = Article::paginate(5);

    return view('welcome',['articles' => $articles],compact('articles'));
})->name('welcome');
Route:: get('/aceuil',function(){
    return view('home');
})->name('aceuil');

Route::middleware('auth')->group(function () {
    
    Route::middleware('isactive')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        Route::get('/user', function (Request $request) {
            return $request->user();
        });
        Route::match(['post', 'get'],'/savearticle', [ArticleController::class, 'save'])->name('savearticle');
        Route::post('/updatearticle', [ArticleController::class, 'updat'])->name('updatearticle');
        Route::get('/detailarticle/updatearticle/{id}', [ArticleController::class,'vueupdate']);
    
        Route::post('/updatecommentaire', [CommentaireController::class, 'updatecomment'])->name('updatecomment');
        Route::get('/detailarticle/updatecommentaire/{id}', [CommentaireController::class,'vueupdatecoment']);
    
        Route::get('/detailarticle/deletearticle/{id}', [ArticleController::class, 'delete'])->name('deletesarticle');
        // Route::get('/creerarticle', [ArticleController::class, 'save'])->name('creerarticle');
        Route::post('/commentaire', [CommentaireController::class, 'savecomment',])->name('savecomment');
        Route::get('/layout', function () {
            return view('layout');
        });
        Route::get('/creerarticle', function () {
            return view('creerarticle');
        })->name('creerarticle');
        Route::get('/detailarticle/{id}', [ArticleController::class, 'details']);
        Route::middleware('isadmin')->group(function () {
            Route::get('/listuser', [ArticleController::class, 'showuser'])->name('listuser');
            Route::get('/listuserbloque', [ArticleController::class, 'bloquer'])->name('bloquer');
            Route::get('/listuserdebloque', [ArticleController::class, 'debloquer'])->name('debloquer');
        });    
    });
});



Route::get('/listarticle', [ArticleController::class, 'show'])->name('articleshow');
Route::get('/listsellers', [ArticleController::class, 'showseller'])->name('listsellers');



//route pour les fonction de securité
Route::post('/register', [ArticleController::class, 'register']);
Route::post('/login', [ArticleController::class, 'login']);



Route::get('/dashboard', [ArticleController::class, 'article_user'])->name ('dashboard');


require __DIR__.'/auth.php';
