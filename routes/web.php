<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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

    $owner = 'PG-Momik';
    $repo = 'Kanban-Tracking';
    $token = env('GITHUB_GENERAL_SCOPE_TOKEN');

    $response = Http::withToken($token)->get("https://api.github.com/repos/{$owner}/{$repo}/issues");

    $issues = $response->json();
//    nullOrEmptyString()
    dd($issues);
});
