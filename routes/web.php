<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EnquiryController as AdminEnquiryController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\LeadController as AdminLeadController;
use App\Http\Controllers\Admin\ProcessStepController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\StatController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\WhyItemController;
use App\Http\Controllers\Admin\WorkItemController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/privacy', function () {
    return view('privacy');
});

Route::post('/enquiries', [EnquiryController::class, 'store'])->name('enquiries.store');

Route::get('/lead-funnel', function () {
    return view('lead-funnel');
})->name('lead-funnel');

Route::post('/leads', [LeadController::class, 'store'])->name('leads.store');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('work-items', WorkItemController::class)->except(['show']);
        Route::resource('services', ServiceController::class)->except(['show']);
        Route::resource('process-steps', ProcessStepController::class)->except(['show']);
        Route::resource('why-items', WhyItemController::class)->except(['show']);
        Route::resource('testimonials', TestimonialController::class)->except(['show']);
        Route::resource('faqs', FaqController::class)->except(['show']);
        Route::resource('stats', StatController::class)->except(['show']);

        Route::resource('enquiries', AdminEnquiryController::class)->only(['index', 'show', 'update', 'destroy']);
        Route::resource('leads', AdminLeadController::class)->only(['index', 'show', 'update', 'destroy']);

        Route::get('settings', [SiteSettingController::class, 'edit'])->name('settings.edit');
        Route::put('settings', [SiteSettingController::class, 'update'])->name('settings.update');
    });
});
