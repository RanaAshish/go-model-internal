<?php


Route::get('/partner/register','PartnerController@register')->name('partner-register');
Route::post('/partner/register','PartnerController@save_register');