<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
//use App\Http\Controllers\Master;


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
    return view('Welcome');
});

//Company Routes-------------------------------------------------------------------

Route::get('/Company','App\Http\Controllers\Master\CompanyMaster@index');
Route::get('/CreateCompany','App\Http\Controllers\Master\CompanyMaster@create');
Route::post('/StoreCompany','App\Http\Controllers\Master\CompanyMaster@store');
Route::get('/show/{id}','App\Http\Controllers\Master\CompanyMaster@show');
Route::patch('/CompanyUpdate/{id}','App\Http\Controllers\Master\CompanyMaster@update');

//Route::get('/CompanyUpdate/{id}', function ($id) {
  //  return $id;
//});

//complex Routes------------------------------------------------------------------
Route::get('/Complex','App\Http\Controllers\Master\ComplexMaster@index');
Route::get('/CreateComplex','App\Http\Controllers\Master\ComplexMaster@create');
Route::post('/StoreComplex','App\Http\Controllers\Master\ComplexMaster@store');
Route::get('/ComplexShow/{id}','App\Http\Controllers\Master\ComplexMaster@show');
Route::patch('/ComplexUpdate/{id}','App\Http\Controllers\Master\ComplexMaster@update');


//Tower Routes----------------------------
Route::get('/Tower','App\Http\Controllers\Master\TowerMaster@index');
Route::get('/CreateTower','App\Http\Controllers\Master\TowerMaster@create');
Route::post('/StoreTower','App\Http\Controllers\Master\TowerMaster@store');
Route::get('/Towershow/{id}','App\Http\Controllers\Master\TowerMaster@show');
Route::patch('/Towerupdate/{id}','App\Http\Controllers\Master\TowerMaster@update');

//Bill group Routes----------------------------
Route::get('/BillGroup','App\Http\Controllers\Master\BillGroupMaster@index')->name('BillGroup.index');
Route::get('/CreateBillGroup','App\Http\Controllers\Master\BillGroupMaster@create');
Route::post('/StoreBillGroup','App\Http\Controllers\Master\BillGroupMaster@store');
Route::get('/BillGroupShow/{id}','App\Http\Controllers\Master\BillGroupMaster@show');
Route::patch('/BillGroupUpdate/{id}','App\Http\Controllers\Master\BillGroupMaster@update');

//Process Types Routes----------------------------
Route::get('/ProcessType','App\Http\Controllers\Master\ProcessTypesMaster@index');
Route::get('/CreateProcessType','App\Http\Controllers\Master\ProcessTypesMaster@create');
Route::Post('/StoreProcessType','App\Http\Controllers\Master\ProcessTypesMaster@Store');
Route::get('/ProcessTypeShow/{id}','App\Http\Controllers\Master\ProcessTypesMaster@show');
Route::patch('/ProcessTypesupdate/{id}','App\Http\Controllers\Master\ProcessTypesMaster@update');

//Tax Master Routes----------------------------
Route::get('/TaxType','App\Http\Controllers\Master\TaxMaster@index');
Route::get('/CreateTax','App\Http\Controllers\Master\TaxMaster@create');
Route::Post('/StoreTax','App\Http\Controllers\Master\TaxMaster@store');
Route::get('/Taxshow/{id}','App\Http\Controllers\Master\TaxMaster@show');
Route::patch('/Taxupdate/{id}','App\Http\Controllers\Master\TaxMaster@update');

//Charge Master Routes

Route::get('/Charge','App\Http\Controllers\Master\ChargeMaster@index');
Route::get('/CreateCharge','App\Http\Controllers\Master\ChargeMaster@create');
Route::get('/Chargeshow/{id}','App\Http\Controllers\Master\ChargeMaster@show');
Route::Post('/StoreCharge','App\Http\Controllers\Master\ChargeMaster@store');
Route::patch('/Chargeupdate/{id}','App\Http\Controllers\Master\ChargeMaster@update');



//Apartments
Route::get('/Apartment','App\Http\Controllers\Master\ApartmentMaster@index');
Route::get('/CreateApartment','App\Http\Controllers\Master\ApartmentMaster@create');
Route::Post('/StoreApartment','App\Http\Controllers\Master\ApartmentMaster@store');
Route::get('/Apartmentshow/{id}','App\Http\Controllers\Master\ApartmentMaster@show');
Route::patch('/Apartmentupdate/{id}','App\Http\Controllers\Master\ApartmentMaster@update');

//Clients
Route::get('/Client','App\Http\Controllers\Master\ClientMaster@index');
Route::get('/CreateClient','App\Http\Controllers\Master\ClientMaster@create');
Route::Post('/StoreClient','App\Http\Controllers\Master\ClientMaster@store');
Route::get('/Clientshow/{id}','App\Http\Controllers\Master\ClientMaster@show');
Route::patch('/Clientupdate/{id}','App\Http\Controllers\Master\ClientMaster@update');

//TRANSACTIONS
Route::get('/UploadMeterReadings','App\Http\Controllers\Transactions\UploadMeterReadings@index');
Route::post('/upload/cv', 'App\Http\Controllers\Transactions\UploadMeterReadings@uploadCsv')->name('upload.cv');