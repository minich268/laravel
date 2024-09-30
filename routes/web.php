<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\MailController;

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
Route::middleware('lang')->group(function () {
    Route::get('/', [Controllers\BaseController::class,'getIndex']
    )->middleware('lang');
    Route::get('map', [Controllers\MapController::class,'getIndex']
    );
    Route::get('review', [Controllers\ReviewController::class,'getIndex']
);
Route::post('review', [Controllers\ReviewController::class,'postIndex']
);
Route::get('format', [Controllers\FormatController::class,'getIndex']
);
Route::post('format', [Controllers\FormatController::class,'postIndex']
);

Route::get('feed', [Controllers\FeedController::class, 'getIndex']);

    Route::get('blogs', [Controllers\BlogController::class, 'getAll']);
    Route::get('blog/{blog}', [Controllers\BlogController::class, 'getOne']);
    Route::get('gallery', [Controllers\GalleryController::class, 'getAll']);
    Route::get('star/add', [Controllers\StarController::class, 'getAll']);
    Route::get('plan', [Controllers\PlanController::class, 'getAll']);
   // Route::post('mail', [Controllers\MailController::class, 'postIndex']);
    //Route::get('mail', [Controllers\MailController::class, 'postIndex']);
    Route::get('/send-welcome-email', [MailController::class, 'sendWelcomeEmail']);
    Route::get('contact', [Controllers\ContactController::class, 'getAll']);
    Route::get('programm', [Controllers\ProgrammController::class, 'getAll']);
    Route::get('question', [Controllers\QuestionController::class, 'getAll']);
    Route::get('cookie/close', [Controllers\CookieController::class, 'getClose']);
    Route::middleware('auth')->group(function () {
        Route::post('blog/{blog}/add_text', [Controllers\BlogController::class, 'postBlogText']);
        Route::post('blogtext/{blog_text}/add_picture', [Controllers\BlogController::class, 'addPicture']);
        Route::post('blog_text/{blog_text}/edit', [Controllers\BlogController::class, 'updateBlogText']);
        Route::get('blog_picture/{blog_text_picture}/delete', [Controllers\BlogController::class, 'deletePicture']);
        Route::post('blog/{blog}/add_comment', [Controllers\BlogController::class, 'postAddComment']);
    });
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    
    require __DIR__.'/auth.php';
    //всегда последний
    Route::get('/{url}', [Controllers\BaseController::class,'getUrl']); 
});





