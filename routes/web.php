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


require_once __DIR__ . '/frontend.php';
require_once __DIR__ . '/admin.php';

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/filter/{value}', function ($value) {


    $dashed_value = str_replace('_', '-', $value);

    $html = <<<EOT
    
<div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="$dashed_value-yes" name="$value"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="$dashed_value-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="$dashed_value-no" name="$value"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="$dashed_value-no"></label>
                                            </div>
                                        </div>

EOT;


    $html_family = <<<DOT
    
<div class="checkboxes radio-boxes">
                                            <div class="custom-control custom-radio custom-control-inline first mr-2">
                                                <input type="radio" id="$dashed_value-family-yes" name="{$value}_family"
                                                       class="custom-control-input"
                                                       value="1">
                                                <label class="custom-control-label" for="$dashed_value-family-yes"></label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="$dashed_value-family-no" name="{$value}_family"
                                                       class="custom-control-input"
                                                       value="0">
                                                <label class="custom-control-label" for="$dashed_value-family-no"></label>
                                            </div>
                                        </div>
DOT;

    return "<textarea style='width: 100%; height: 100%;'> $html </textarea>
<textarea  style='width: 100%; height: 100%;'>$html_family</textarea>";

});
