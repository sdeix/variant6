<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SubscriberController;

Route::any('/', [SubscriberController::class, 'index']);

Route::any('/register', [AuthController::class, 'register']);
Route::any('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout']);

Route::any('/subscribers', [SubscriberController::class, 'subscribers'])->middleware('auth');
Route::any('/debts', [SubscriberController::class, 'debts'])->middleware('auth');

Route::any('/addDebt', [SubscriberController::class, 'addDebt'])->middleware('auth');
Route::any('/addSub', [SubscriberController::class, 'addSub'])->middleware('auth');

Route::any('/deleteSubscriber/{id}', [SubscriberController::class, 'deleteSubscriber'])->middleware('auth')->name('deleteSubscriber');
Route::any('/deleteDebt/{id}', [SubscriberController::class, 'deleteDebt'])->middleware('auth')->name('deleteDebt');

