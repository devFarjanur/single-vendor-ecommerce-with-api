<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

require __DIR__ . '/auth.php';


Route::get('/admin-login', [AdminController::class, 'adminLogin'])->name('admin.login');
Route::post('/admin-login-store', [AuthenticatedSessionController::class, 'adminStore'])->name('admin.login.store');
Route::get('/admin-register', [AdminController::class, 'adminRegister'])->name('admin.register');
Route::post('/admin-register', [RegisteredUserController::class, 'adminRegister'])->name('admin.register.store');

Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');
    Route::get('/Profile', [AdminController::class, 'adminProfile'])->name('admin.profile');
    Route::post('/Profile/store', [AdminController::class, 'adminProfileStore'])->name('admin.profile.store');
    Route::get('/change/password', [AdminController::class, 'adminChangePassword'])->name('admin.change.password');
    Route::post('/update/password', [AdminController::class, 'adminUpdatePassword'])->name('admin.update.password');
    
    Route::get('/category-subcategory-list', [AdminController::class, 'adminCategoryList'])->name('admin.category.list');
    Route::get('/add-subcategory', [AdminController::class, 'adminAddSubcategory'])->name('admin.add.subcategory');
    Route::post('/subcategory-store', [AdminController::class, 'adminSubcategoryStore'])->name('admin.subcategory.store');
    Route::get('/edit-subcategory/{id}', [AdminController::class, 'adminEditSubcategory'])->name('admin.edit.subcategory');
    Route::post('/update-subcategory/{id}', [AdminController::class, 'adminUpdateSubcategory'])->name('admin.update.subcategory');
    Route::delete('/subcategory-delete/{id}', [AdminController::class, 'adminSubcategoryDelete'])->name('admin.subcategory.delete');

    Route::get('/customer-list', [AdminController::class, 'adminCustomerList'])->name('admin.customer.list');
    Route::get('/customer-profile', [AdminController::class, 'adminCustomerProfile'])->name('admin.customer.profile');

    Route::get('/product-list', [AdminController::class, 'adminProductList'])->name('admin.product.list');
    Route::get('/upload-product', [AdminController::class, 'adminProductUpload'])->name('admin.upload.product');
    Route::post('/product-store', [AdminController::class, 'adminProductStore'])->name('admin.product.store');
    Route::get('/product/details', [AdminController::class, 'adminDetailsProduct'])->name('admin.product.details');
    Route::get('/get-subcategories/{categoryId}', [AdminController::class, 'getVensorSubcategories']);

    Route::get('/invoice', [AdminController::class, 'adminInvoice'])->name('admin.invoice');
    Route::get('/chat/message', [AdminController::class, 'adminChatMessage'])->name('admin.chat.message');
    Route::get('/pages/faqs', [AdminController::class, 'adminPagesFaqs'])->name('admin.pages.faqs');
    Route::get('/history', [AdminController::class, 'adminHistory'])->name('admin.history');
    Route::get('/invoice/print', [AdminController::class, 'adminInvoicePrint'])->name('admin.invoice.print');
    Route::get('/language', [AdminController::class, 'adminLanguage'])->name('admin.language');
    Route::get('/pages/notifications', [AdminController::class, 'adminNotification'])->name('admin.pages.notifications');
    Route::get('/pages/terms-conditions', [AdminController::class, 'adminTermsCondition'])->name('admin.pages.terms-conditions');
});
