<?php

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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'PagesController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/addbranch', function()
{
    return view('pages.addbranch');
});
Route::get('/addExpenditure', function()
{
    return view('pages.addExpenditure');
});
Route::get('/addStock', function()
{
    return view('pages.addStock');
});
Route::get('/addPurchase', function()
{
    return view('pages.addPurchase');
});
Route::get('/addSale', function()
{
    return view('pages.addSale');
});
Route::get('/addBatch', function()
{
    return view('pages.addBatch');
});
Route::get('/addEmployee', function()
{
    return view('pages.addEmployee');
});
Route::get('/addfeed', function()
{
    return view('pages.addfeed');
});
Route::get('/addMortality', function()
{
    return view('pages.addMortality');
});
Route::get('/addVaccination', function()
{
    return view('pages.addVaccination');
});
Route::get('/signUp', function()
{
    return view('pages.signUp');
});
// view pages
Route::get('/viewbranch', function()
{
    return view('pages.viewbranch');
});
Route::get('/viewbatch', function()
{
    return view('pages.viewbatch');
});
Route::get('/viewfeed', function()
{
    return view('pages.viewfeed');
});
Route::get('/viewstock', function()
{
    return view('pages.viewstock');
});
Route::get('/viewemployee', function()
{
    return view('pages.viewemployee');
});
Route::get('/viewsale', function()
{
    return view('pages.viewsale');
});
Route::get('/viewpurchase', function()
{
    return view('pages.viewpurchase');
});
Route::get('/viewvaccination', function()
{
    return view('pages.viewvaccination');
});
Route::get('/viewexpenditure', function()
{
    return view('pages.viewexpenditure');
});
Route::get('/viewmortality', function()
{
    return view('pages.viewmortality');
});
Route::get('/index', function()
{
    return view('pages.index');
});
