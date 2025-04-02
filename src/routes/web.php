<?php


use ClientRoutes\App\Http\Controllers\ReporHistoryApolice;
use ClientRoutes\App\Http\Controllers\DashBenefixController;
use ClientRoutes\App\Http\Controllers\MyHistoryAtendController;

use ClientRoutes\App\Http\Controllers\ReporMyInformation;
use ClientRoutes\App\Http\Controllers\UserProfilePackage;
use Illuminate\Support\Facades\Route;



Route::prefix('')->group(function () {
    Route::get("/entidade-beneficiario/{id}", [DashBenefixController::class, 'index'])->name('beneficiario.login');
    Route::get("/entidade-historico/{id}", [MyHistoryAtendController::class, 'index'])->name('historico.entidade');
    Route::get("/apolice-historico/{id}", [ReporHistoryApolice::class, 'index'])->name('apolice.historico');
    Route::get("/info-historico/{id}", [ReporMyInformation::class, 'index'])->name('info.historico');
    Route::get("/user-profile/{id}", [UserProfilePackage::class, 'index'])->name('profile.user');
});