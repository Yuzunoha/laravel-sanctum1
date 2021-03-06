<?php

use App\Repositories\ReplyRepository;
use App\Repositories\ThreadRepository;
use App\Services\ReplyService;
use App\Services\ThreadService;
use App\Services\UtilService;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return [Auth::user(), Auth::id()];
});

// 本番 start
Route::middleware('auth:sanctum')->get('/threads', 'ThreadController@getAll');
Route::middleware('auth:sanctum')->post('/threads', 'ThreadController@create');
Route::middleware('auth:sanctum')->get('/replies', 'ReplyController@selectAll');
Route::middleware('auth:sanctum')->post('/replies', 'ReplyController@create');
// 本番 end

Route::get('/test', function () {
    $service = new ReplyService(
        new ReplyRepository,
        new ThreadService(
            new ThreadRepository
        )
    );
    return count($service->selectByThreadId(1));
});
