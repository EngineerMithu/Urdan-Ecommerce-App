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

Route::get('/',[
    'uses' => '\App\Http\Controllers\front\UrdanController@index',
    'as' => '/'
    ]);

Route::get('/category-page/{id}',[
    'uses' => '\App\Http\Controllers\front\UrdanController@categoryPage',
    'as' => 'category-page'
]);

Route::get('/get-product-info-for-modal',[
    'uses' => '\App\Http\Controllers\front\UrdanController@getProductInfoForModal',
    'as' => 'get-product-info-for-modal'
]);
Route::get('/product-details/{id}',[
    'uses' => '\App\Http\Controllers\front\UrdanController@productDetails',
    'as' => 'product-details'
]);




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard',[
    'uses' => '\App\Http\Controllers\Admin\AdminController@index',
    'as' => 'dashboard',
    'middleware' => ['auth:sanctum','verified'],
]);

/*
|--------------------------------------------------------------------------
| Features Routes
|--------------------------------------------------------------------------
|
*/
Route::group(['middleware' =>['auth:sanctum','verified']],function (){
    /*
     |----------------------------------------------------
     | Category Routes
     |----------------------------------------------------
     */
    Route::get('/add-category',[
        'uses' => '\App\Http\Controllers\Admin\CategoryController@addCategory',
        'as' => 'add-category',
    ]);
    Route::post('/new-category',[
        'uses' => '\App\Http\Controllers\Admin\CategoryController@newCategory',
        'as' => 'new-category',
    ]);
    Route::get('/manage-category',[
        'uses' => '\App\Http\Controllers\Admin\CategoryController@manageCategory',
        'as' => 'manage-category',
    ]);
    Route::get('/edit-category/{id}',[
        'uses' => '\App\Http\Controllers\Admin\CategoryController@editCategory',
        'as' => 'edit-category',
    ]);
    Route::post('/update-category',[
        'uses' => '\App\Http\Controllers\Admin\CategoryController@updateCategory',
        'as' => 'update-category',
    ]);
    Route::get('/delete-category/{id}',[
        'uses' => '\App\Http\Controllers\Admin\CategoryController@deleteCategory',
        'as' => 'delete-category',
    ]);
    /*
    |----------------------------------------------------
    | Sub Category Routes
    |----------------------------------------------------
    */
    Route::get('/add-subCategory',[
        'uses' => '\App\Http\Controllers\Admin\SubCategoryController@addSubCategory',
        'as' => 'add-subCategory',
    ]);
    Route::post('/new-subCategory',[
        'uses' => '\App\Http\Controllers\Admin\SubCategoryController@newSubCategory',
        'as' => 'new-subcategory',
    ]);
    Route::get('/manage-subCategory',[
        'uses' => '\App\Http\Controllers\Admin\SubCategoryController@manageSubCategory',
        'as' => 'manage-subcategory',
    ]);
    Route::get('/edit-subCategory/{id}',[
        'uses' => '\App\Http\Controllers\Admin\SubCategoryController@editSubCategory',
        'as' => 'edit-subcategory',
    ]);
    Route::post('/update-subCategory',[
        'uses' => '\App\Http\Controllers\Admin\SubCategoryController@updateSubCategory',
        'as' => 'update-subcategory',
    ]);
    Route::get('/delete-subCategory/{id}',[
        'uses' => '\App\Http\Controllers\Admin\SubCategoryController@deleteSubCategory',
        'as' => 'delete-subcategory',
    ]);
    /*
  |----------------------------------------------------
  | Brand Routes
  |----------------------------------------------------
  */
    Route::get('/add-brand',[
        'uses' => '\App\Http\Controllers\Admin\BrandController@addBrand',
        'as' => 'add-brand',
    ]);
    Route::post('/new-brand',[
        'uses' => '\App\Http\Controllers\Admin\BrandController@newBrand',
        'as' => 'new-brand',
    ]);
    Route::get('/manage-brand',[
        'uses' => '\App\Http\Controllers\Admin\BrandController@manageBrand',
        'as' => 'manage-brand',
    ]);
    Route::get('/edit-brand/{id}',[
        'uses' => '\App\Http\Controllers\Admin\BrandController@editBrand',
        'as' => 'edit-brand',
    ]);
    Route::post('/update-brand',[
        'uses' => '\App\Http\Controllers\Admin\BrandController@updateBrand',
        'as' => 'update-brand',
    ]);
    Route::get('/delete-brand/{id}',[
        'uses' => '\App\Http\Controllers\Admin\BrandController@deleteBrand',
        'as' => 'delete-brand',
    ]);
    /*
|----------------------------------------------------
| Unit Routes
|----------------------------------------------------
*/
    Route::get('/add-unit',[
        'uses' => '\App\Http\Controllers\Admin\UnitController@addUnit',
        'as' => 'add-unit',
    ]);
    Route::post('/new-unit',[
        'uses' => '\App\Http\Controllers\Admin\UnitController@newUnit',
        'as' => 'new-unit',
    ]);
    Route::get('/manage-unit',[
        'uses' => '\App\Http\Controllers\Admin\UnitController@manageUnit',
        'as' => 'manage-unit',
    ]);
    Route::get('/edit-unit/{id}',[
        'uses' => '\App\Http\Controllers\Admin\UnitController@editUnit',
        'as' => 'edit-unit',
    ]);
    Route::post('/update-unit',[
        'uses' => '\App\Http\Controllers\Admin\UnitController@updateUnit',
        'as' => 'update-unit',
    ]);
    Route::get('/delete-unit/{id}',[
        'uses' => '\App\Http\Controllers\Admin\UnitController@deleteUnit',
        'as' => 'delete-unit',
    ]);
    /*
|----------------------------------------------------
| Product Routes
|----------------------------------------------------
*/
    Route::get('/add-product',[
        'uses' => '\App\Http\Controllers\Admin\ProductController@addProduct',
        'as' => 'add-product',
    ]);
    Route::get('/get-sub-category-by-category-id/{id}',[
        'uses' => '\App\Http\Controllers\Admin\ProductController@getSubCategoryId',
        'as' => 'get-sub-category-by-category-id'
    ]);

    Route::post('/new-product',[
        'uses' => '\App\Http\Controllers\Admin\ProductController@newProduct',
        'as' => 'new-product',
    ]);
    Route::get('/manage-product',[
        'uses' => '\App\Http\Controllers\Admin\ProductController@manageProduct',
        'as' => 'manage-product',
    ]);
    Route::get('/edit-product/{id}',[
        'uses' => '\App\Http\Controllers\Admin\ProductController@editProduct',
        'as' => 'edit-product',
    ]);
    Route::post('/update-product',[
        'uses' => '\App\Http\Controllers\Admin\ProductController@updateProduct',
        'as' => 'update-product',
    ]);
    Route::get('/delete-product/{id}',[
        'uses' => '\App\Http\Controllers\Admin\ProductController@deleteProduct',
        'as' => 'delete-product',
    ]);
});



//Card

Route::post('/add-to-cart',[
    'uses' => '\App\Http\Controllers\Front\CartController@addToCart',
    'as' => 'add-to-cart',
]);
Route::get('/view-cart',[
    'uses' => '\App\Http\Controllers\Front\CartController@viewCart',
    'as' => 'view-cart',
]);