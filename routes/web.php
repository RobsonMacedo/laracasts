<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;
use App\Http\Controllers\Tags;
use App\Http\Controllers\Contact;
use App\Http\Livewire\Posts as LivewirePosts;

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
})->name('welcome');

/* Route::get('/post/{post}', function ($post) {
    $posts = [
       'my-first-post' => 'This is my first post',
       'my-second-post' => 'This is my second post'
    ];
    /* if (! array_key_exists($post, $posts)) {
        abort(404, "Sorry, post not found");
    } */
  /*
    return view('posts', ['posts'=>$posts[$post] ?? "Nothing here yet!"]); //traited here
}); */

Route::post('/posts', [Posts::class, 'store'])->name('store-posts');
Route::get('/post/{id}', [Posts::class, 'show'])->name('show-posts');
Route::get('/post/{id}/edit', [Posts::class, 'edit'])->name('edit-posts');
Route::post('/post/{id}/update', [Posts::class, 'update'])->name('update-posts');
Route::get('/post/{id}/delete', [Posts::class, 'delete'])->name('delete-posts');
//Route::get('/posts', [Posts::class, 'index'])->name('posts');
Route::get('/posts', LivewirePosts::class)->name('posts');
Route::get('/posts/create', [Posts::class, 'create'])->name('create-posts');
Route::get('/contact', [Contact::class, 'show'])->name('contact');


Route::prefix('tag')->group(function () {
    Route::get('/', [Tags::class, 'index'])->name('tags');
    Route::get('/create', [Tags::class, 'create'])->name('create-tag');
    Route::post('/', [Tags::class, 'store'])->name('store-tag');
    Route::get('/{id}', [Tags::class, 'show'])->name('show-tag');
    Route::get('/{id}/edit', [Tags::class, 'edit'])->name('edit-tag');
    Route::post('/{id}/update', [Tags::class, 'update'])->name('update-tag');
    Route::get('/{id}/delete', [Tags::class, 'delete'])->name('delete-tag');
});


Route::get('/test', function () {
    $col = collect([
        ['id' => 1, 'name' =>'Robson'],
        ['id' => 2, 'name' =>'Flavia'],
    ]);
    dd($col->pluck('name'));
});


Route::post('/post/{id}', [Comments::class, 'store'])->name('comments-store');
