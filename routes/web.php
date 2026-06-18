<?php
use App\Http\Controllers\MarketingPageController;
use Illuminate\Support\Facades\Route;
Route::get('/', [MarketingPageController::class,'show'])->defaults('slug','home')->name('home');
Route::get('/{slug}', [MarketingPageController::class,'show'])->whereIn('slug',['features','pricing','enterprise','franchise-management','mobile-apps','integrations','customers','case-studies','blog','about-us','contact-us','help-center','faq']);
