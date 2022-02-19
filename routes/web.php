<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', 'HomeController@index');
Route::get('/trangchu','HomeController@index');
Route::get('/login','AdminController@index');
Route::get('/admin/login','AdminController@index');

Route::get('/admin','AdminController@admin_index');

Route::post('/admin/home','AdminController@admin_home');

Route::get('/ThemSP','CategoryProductController@add_category_product');
Route::get('/XemSP','CategoryProductController@view_category_product');

Route::post('/LuuSP','CategoryProductController@save_category_product');

Route::get('/SuaSP/{category_product_id}','CategoryProductController@edit_category_product');
Route::get('/XoaSP/{category_product_id}','CategoryProductController@delete_category_product');

Route::post('/CapNhatSP/{category_product_id}','CategoryProductController@update_category_product');
