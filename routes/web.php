<?php

use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home', [
        'user' => auth()->user()
    ]);
})->name('home');

Route::get('homepage', function () {
    return view('homepage', ['user' => auth()->user()]);
})->name('homepage');

Route::get('profile', function () {
    return view('profile', ['user' => auth()->user()]);
})->name('profile');

Route::prefix('projects')->group(function () {
    Route::get('/', [ProjectController::class, 'listPage'])
        ->name('project.list.page');

    Route::get('{project_id}', [ProjectController::class, 'showPage'])
        ->name('project.show.page');
});

Route::get('best', [ProjectController::class, 'bestProject'])
    ->name('project.best.page');

Route::middleware('auth')->group(function () {
    Route::get('user/logout', [LoginController::class, 'logout'])
        ->name('user.logout');

    Route::prefix('project')->group(function () {
        Route::get('/create', [ProjectController::class, 'createPage'])
            ->name('project.create.page');

        Route::delete('/delete/{project_id}', [ProjectController::class, 'delete'])
            ->name('project.delete');

        Route::post('create', [ProjectController::class, 'create'])
            ->name('project.create');

        Route::get('change/{project_id}', [ProjectController::class, 'changePage'])
            ->name('project.change.page');

        Route::put('change/{project_id}', [ProjectController::class, 'change'])
            ->name('project.change');

        Route::prefix('evaluation')->group(function () {
            Route::post('/{project_id}', [EvaluationController::class, 'create'])
                ->name('project.evaluation.create');
        });
    });
});

Route::prefix('user')->group(function () {
    Route::get('create', [UserController::class, 'createPage'])
        ->name('user.create.page');

    Route::post('create', [UserController::class, 'create'])
        ->name('user.create');

    Route::get('login', [LoginController::class, 'loginPage'])
        ->name('user.login.page');

    Route::post('login', [LoginController::class, 'login'])
        ->name('user.login');
});
