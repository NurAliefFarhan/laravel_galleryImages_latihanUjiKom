<?php

use App\Http\Controllers\GalleryPhotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GalleryPhotoControllerController;

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
    return view('landing');
});

Route::middleware('isGuest')->group(function () {
    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/register', [LoginController::class, 'inputRegister'])->name('inputRegister');
    
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'auth'])->name('auth');
}); 
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware('isLogin')->prefix('/uji_kom')->name('uji_kom.')->group(function () {
    Route::get('/home', [GalleryPhotoController::class, 'home'])->name('home');
    Route::get('/album', [GalleryPhotoController::class, 'album'])->name('album');
    Route::post('/create_album', [GalleryPhotoController::class, 'createAlbum'])->name('createAlbum');
    Route::get('/editAlbum/{id}', [GalleryPhotoController::class, 'editAlbum'])->name('editAlbum');
    Route::patch('/updateAlbum/{id}', [GalleryPhotoController::class, 'updateAlbum'])->name('updateAlbum');
    Route::delete('/deleteAlbum/{id}', [GalleryPhotoController::class, 'deleteAlbum'])->name('deleteAlbum');

    Route::get('/images/{id}', [GalleryPhotoController::class, 'images'])->name('images');
    Route::get('/createImages/{id}', [GalleryPhotoController::class, 'createImages'])->name('createImages');
    Route::post('/createImages/{id}', [GalleryPhotoController::class, 'createImagesPost'])->name('createImagesPost');
    Route::get('/editImages/{id}', [GalleryPhotoController::class, 'editImages'])->name('editImages');
    Route::patch('/updateImages/{id}', [GalleryPhotoController::class, 'updateImages'])->name('updateImages');
    Route::delete('/deleteImages/{id}', [GalleryPhotoController::class, 'deleteImages'])->name('deleteImages');

    Route::post('/likeImages/{id}', [GalleryPhotoController::class, 'likeImages'])->name('likeImages');
    Route::get('/messageImages/{id}', [GalleryPhotoController::class, 'messageImages'])->name('messageImages');
    Route::post('/messageImages/{id}', [GalleryPhotoController::class, 'messageImagesPost'])->name('messageImagesPost');
    Route::delete('/deleteMessageImages/{id}', [GalleryPhotoController::class, 'deleteMessageImages'])->name('deleteMessageImages');
    Route::get('/editMessageImages/{id}', [GalleryPhotoController::class, 'editMessageImages'])->name('editMessageImages');
    Route::patch('/messageImagesUpdate/{id}', [GalleryPhotoController::class, 'messageImagesUpdate'])->name('messageImagesUpdate');

});

