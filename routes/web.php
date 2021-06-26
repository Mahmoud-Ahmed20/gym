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

            // --------------------------- front------------------------------------ 
            //------------------------- route home page-----------------------------
Route::get('/','homeController@index')->name('index');
            //--------------------------- route exercises page----------------------
Route::get('/exercises','exercisesCotroller@exercises');
            //--------------------------- route healthy page------------------------
Route::get('/healthy','HealthyController@healthy');


            // --------------------------- Back------------------------------------- 
Route::get('/backindex','BackHomeController@backindex');
            // --------------------------- View Insert Start Section ---------------
Route::get('/Insert','BackHomeController@ViewInsertStartSection');  
            // --------------------------- View Insert Start Section ---------------
Route::post('/PostInsert','BackHomeController@PostInsertStartSection');  
           // --------------------------- delete start_section_homepage ---------------
Route::post('/delete','BackHomeController@delete');  
           // --------------------------- Update View Start Section ---------------
Route::post('/Update','BackHomeController@Update');  
           // --------------------------- PostUpdate Start Section ---------------
Route::post('/PostUpdate','BackHomeController@PostUpdate');
// --------------------------- WHAT WECAN OFFER Start Section ---------------
Route::get('/WHATWECANOFFERSelectData','WHATWECANOFFERControllerBack@WHATWECANOFFERveiw');
// --------------------------- WHAT WECAN OFFER Insert view Start Section ---------------
Route::get('/ViewInsert','WHATWECANOFFERControllerBack@ViewInsert');
// --------------------------- WHAT WECAN OFFER Post Insert view Start Section ---------------
Route::post('/PostInsertWHATWECANOFFER','WHATWECANOFFERControllerBack@PostInsertWHATWECANOFFER');
           // --------------------------- delete WHAT WECAN OFFER---------------
Route::post('/DeleteWHATWECANOFFER','WHATWECANOFFERControllerBack@DeleteWHATWECANOFFER');  
           // --------------------------- Update WHAT WECAN OFFER View  Section ---------------
Route::post('/WHATWECANOFFERUpdate','WHATWECANOFFERControllerBack@WHATWECANOFFERUpdate'); 
           // --------------------------- Post Update WHAT WECAN OFFER   Section ---------------
Route::post('/PostUpdateWHATWECANOFFER','WHATWECANOFFERControllerBack@PostUpdateWHATWECANOFFER'); 
           // --------------------------- Post Update WHAT WECAN OFFER   Section ---------------
           // --------------------------- TRAIN WITH EXPERTS Section ---------------
Route::get('/TRAINWITHEXPERTS','TRAINWITHEXPERTSController@TRAINWITHEXPERTS'); 
           // --------------------------- TRAIN WITH EXPERTS Insert View ---------------
Route::get('/TRAINWITHEXPERTSInsertView','TRAINWITHEXPERTSController@TRAINWITHEXPERTSInsertView');
           // --------------------------- TRAIN WITH EXPERTS Insert Post Insert ---------------
Route::post('/PostInsertTRAINWITHEXPERTS','TRAINWITHEXPERTSController@PostInsertTRAINWITHEXPERTS'); 
           // --------------------------- TRAIN WITH EXPERTS Update View ---------------
Route::post('/TRAINWITHEXPERTSUpdateView','TRAINWITHEXPERTSController@TRAINWITHEXPERTSUpdateView');
           // --------------------------- TRAIN WITH EXPERTS Post Update ---------------
Route::post('/TRAINWITHEXPERTSPostUpdate','TRAINWITHEXPERTSController@PostUpdate');
           // --------------------------- TRAIN WITH EXPERTS Delete ---------------
Route::post('/Delete','TRAINWITHEXPERTSController@Delete');








