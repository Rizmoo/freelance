<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/wallet', 'HomeController@wallet')->name('wallet');
Route::post('/wallet', 'HomeController@loadWallet')->name('wallet.load');
Route::post('/wallet-withdraw', 'HomeController@withdrawWallet')->name('wallet.withdraw');

Route::get('/job-apply/{job}', 'JobController@apply')->name('job.apply');
Route::get('/job-applied', 'JobController@applied')->name('jobs.applied');
Route::post('/job-apply/{job}', 'JobController@applyStore')->name('job.apply.post');

Route::resource('job','JobController');
Route::resource('jobProposal','JobProposalController');
Route::get('/job-proposal-accept/{jobProposal}', 'JobProposalController@acceptProposal')->name('jobProposal.accept');
