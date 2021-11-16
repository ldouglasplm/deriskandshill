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

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/', 'App\Http\Controllers\KriptonadminController@dashboard_1');
Route::get('/index', 'App\Http\Controllers\KriptonadminController@dashboard_1');
Route::get('/index-2', 'App\Http\Controllers\KriptonadminController@dashboard_2');
Route::get('/index-3', 'App\Http\Controllers\KriptonadminController@dashboard_3');
Route::get('/index-4', 'App\Http\Controllers\KriptonadminController@dashboard_4');
// Route::post('/latest-sales', 'App\Http\Controllers\KriptonadminController@latest_sales');
Route::get('/coin-details', 'App\Http\Controllers\KriptonadminController@coin_details');
Route::get('/my-wallets', 'App\Http\Controllers\KriptonadminController@my_wallets');
Route::get('/transactions', 'App\Http\Controllers\KriptonadminController@transactions');
Route::get('/portofolio', 'App\Http\Controllers\KriptonadminController@portofolio');
Route::get('/market-capital', 'App\Http\Controllers\KriptonadminController@market_capital');
Route::get('/app-calender', 'App\Http\Controllers\KriptonadminController@app_calender');
Route::get('/app-profile', 'App\Http\Controllers\KriptonadminController@app_profile');
Route::get('/post-details', 'App\Http\Controllers\KriptonadminController@post_details');
Route::get('/chart-chartist', 'App\Http\Controllers\KriptonadminController@chart_chartist');
Route::get('/chart-chartjs', 'App\Http\Controllers\KriptonadminController@chart_chartjs');
Route::get('/chart-flot', 'App\Http\Controllers\KriptonadminController@chart_flot');
Route::get('/chart-morris', 'App\Http\Controllers\KriptonadminController@chart_morris');
Route::get('/chart-peity', 'App\Http\Controllers\KriptonadminController@chart_peity');
Route::get('/chart-sparkline', 'App\Http\Controllers\KriptonadminController@chart_sparkline');
Route::get('/ecom-checkout', 'App\Http\Controllers\KriptonadminController@ecom_checkout');
Route::get('/ecom-customers', 'App\Http\Controllers\KriptonadminController@ecom_customers');
Route::get('/ecom-invoice', 'App\Http\Controllers\KriptonadminController@ecom_invoice');
Route::get('/ecom-product-detail', 'App\Http\Controllers\KriptonadminController@ecom_product_detail');
Route::get('/ecom-product-grid', 'App\Http\Controllers\KriptonadminController@ecom_product_grid');
Route::get('/ecom-product-list', 'App\Http\Controllers\KriptonadminController@ecom_product_list');
Route::get('/ecom-product-order', 'App\Http\Controllers\KriptonadminController@ecom_product_order');
Route::get('/email-compose', 'App\Http\Controllers\KriptonadminController@email_compose');
Route::get('/email-inbox', 'App\Http\Controllers\KriptonadminController@email_inbox');
Route::get('/email-read', 'App\Http\Controllers\KriptonadminController@email_read');
Route::get('/form-editor-summernote', 'App\Http\Controllers\KriptonadminController@form_editor_summernote');
Route::get('/form-element', 'App\Http\Controllers\KriptonadminController@form_element');
Route::get('/form-pickers', 'App\Http\Controllers\KriptonadminController@form_pickers');
Route::get('/form-validation-jquery', 'App\Http\Controllers\KriptonadminController@form_validation_jquery');
Route::get('/form-wizard', 'App\Http\Controllers\KriptonadminController@form_wizard');
Route::get('/map-jqvmap', 'App\Http\Controllers\KriptonadminController@map_jqvmap');
Route::get('/page-error-400', 'App\Http\Controllers\KriptonadminController@page_error_400');
Route::get('/page-error-403', 'App\Http\Controllers\KriptonadminController@page_error_403');
Route::get('/page-error-404', 'App\Http\Controllers\KriptonadminController@page_error_404');
Route::get('/page-error-500', 'App\Http\Controllers\KriptonadminController@page_error_500');
Route::get('/page-error-503', 'App\Http\Controllers\KriptonadminController@page_error_503');
Route::get('/page-forgot-password', 'App\Http\Controllers\KriptonadminController@page_forgot_password');
Route::get('/page-lock-screen', 'App\Http\Controllers\KriptonadminController@page_lock_screen');
Route::get('/page-login', 'App\Http\Controllers\KriptonadminController@page_login');
Route::get('/page-register', 'App\Http\Controllers\KriptonadminController@page_register');
Route::get('/table-bootstrap-basic', 'App\Http\Controllers\KriptonadminController@table_bootstrap_basic');
Route::get('/table-datatable-basic', 'App\Http\Controllers\KriptonadminController@table_datatable_basic');
Route::get('/uc-lightgallery', 'App\Http\Controllers\KriptonadminController@uc_lightgallery');
Route::get('/uc-nestable', 'App\Http\Controllers\KriptonadminController@uc_nestable');
Route::get('/uc-noui-slider', 'App\Http\Controllers\KriptonadminController@uc_noui_slider');
Route::get('/uc-select2', 'App\Http\Controllers\KriptonadminController@uc_select2');
Route::get('/uc-sweetalert', 'App\Http\Controllers\KriptonadminController@uc_sweetalert');
Route::get('/uc-toastr', 'App\Http\Controllers\KriptonadminController@uc_toastr');
Route::get('/ui-accordion', 'App\Http\Controllers\KriptonadminController@ui_accordion');
Route::get('/ui-alert', 'App\Http\Controllers\KriptonadminController@ui_alert');
Route::get('/ui-badge', 'App\Http\Controllers\KriptonadminController@ui_badge');
Route::get('/ui-button', 'App\Http\Controllers\KriptonadminController@ui_button');
Route::get('/ui-button-group', 'App\Http\Controllers\KriptonadminController@ui_button_group');
Route::get('/ui-card', 'App\Http\Controllers\KriptonadminController@ui_card');
Route::get('/ui-carousel', 'App\Http\Controllers\KriptonadminController@ui_carousel');
Route::get('/ui-dropdown', 'App\Http\Controllers\KriptonadminController@ui_dropdown');
Route::get('/ui-grid', 'App\Http\Controllers\KriptonadminController@ui_grid');
Route::get('/ui-list-group', 'App\Http\Controllers\KriptonadminController@ui_list_group');
Route::get('/ui-media-object', 'App\Http\Controllers\KriptonadminController@ui_media_object');
Route::get('/ui-modal', 'App\Http\Controllers\KriptonadminController@ui_modal');
Route::get('/ui-pagination', 'App\Http\Controllers\KriptonadminController@ui_pagination');
Route::get('/ui-popover', 'App\Http\Controllers\KriptonadminController@ui_popover');
Route::get('/ui-progressbar', 'App\Http\Controllers\KriptonadminController@ui_progressbar');
Route::get('/ui-tab', 'App\Http\Controllers\KriptonadminController@ui_tab');
Route::get('/ui-typography', 'App\Http\Controllers\KriptonadminController@ui_typography');
Route::get('/widget-basic', 'App\Http\Controllers\KriptonadminController@widget_basic');


