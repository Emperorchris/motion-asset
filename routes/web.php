<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\DailyInterestController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/calculate-interest', [DailyInterestController::class, 'calculateInterest']);
Route::post('/contact', [ContactMailController::class, 'contactMail'])->name('contact-mail');
Route::get('view-email',[adminController::class, 'viewemail'])->name('viewemail');
Route::post('send-email',[adminController::class, 'sendemail'])->name('sendemail');


Route::controller(FrontendController::class)->name('frontend.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/pricing', 'pricing')->name('pricing');
    Route::get('/services', 'services')->name('services');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/contact', 'contact')->name('contact');
    // Route::get('/logout', 'logout')->name('logout');
});


Route::controller(UserController::class)->middleware('auth')->name('userdashboard.')->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/deposit', 'deposit')->name('deposit');
    Route::post('/deposit', 'storeDeposit')->name('storeDeposit');
    Route::get('/withdraw', 'withdraw')->name('withdraw');
    Route::post('/withdraw', 'storeWithdraw')->name('storeWithdraw');
    Route::get('/deposit-history', 'depositHistory')->name('depositHistory');
    Route::get('/withdrawal-history', 'withdrawalHistory')->name('withdrawalHistory');
    Route::get('/earning-history', 'earningHistory')->name('earningHistory');
    Route::get('/referrals', 'referrals')->name('referrals');
    Route::get('/profile', 'profile')->name('profile');
    Route::patch('/profile', 'profileUpdate')->name('profileUpdate');
    Route::get('/kyc', 'kyc')->name('kyc');
    Route::patch('/kyc', 'verifyKyc')->name('verifyKyc');
});

// ADMIN DASHBOARD
Route::group(['prefix' => 'admin/', 'as' => 'admin.', 'middleware' => ['checkUserRole']], function () {
    Route::get('dashboard', [adminController::class, 'dashboard'])->name('dashboard');
    Route::get('email/{id}', [adminController::class, 'email'])->name('email');
    Route::get('edituser/{id}', [adminController::class, 'edituser'])->name('edituser');
    Route::patch('updateuser/{id}', [adminController::class, 'updateuser'])->name('updateuser');
    Route::get('referrals', [adminController::class, 'referrals'])->name('referrals');
    Route::patch('referrals/delete{id}', [adminController::class, 'referralDelete'])->name('referrals.delete');
    Route::patch('fund/{id}', [adminController::class, 'fund'])->name('fund');
    Route::patch('upgrade/{id}', [adminController::class, 'upgrade'])->name('upgrade');
    Route::get('deposits', [adminController::class, 'deposits'])->name('deposits');
    Route::patch('deposit/approve/{id}/{user_id}/{amount}', [adminController::class, 'depositApprove'])->name('deposits.approve');
    Route::patch('deposit/decline/{id}/{user_id}/{amount}', [adminController::class, 'depositDecline'])->name('deposits.decline');
    Route::patch('deposit/delete{id}', [adminController::class, 'depositDelete'])->name('deposits.delete');
    Route::patch('/pause/{id}', [adminController::class, 'depositPause'])->name('deposits.pause');
    Route::patch('earnings/delete{id}', [adminController::class, 'earnDelete'])->name('earnings.delete');
    Route::get('withdrawals', [adminController::class, 'withdrawals'])->name('withdrawals');
    Route::patch('withdrawal/approve/{id}/{user_id}/{amount}', [adminController::class, 'withdrawalApprove'])->name('withdrawals.approve');
    Route::patch('withdrawal/decline/{id}/{user_id}/{amount}', [adminController::class, 'withdrawalDecline'])->name('withdrawals.decline');
    Route::patch('withdrawal/delete{id}', [adminController::class, 'withdrawalDelete'])->name('withdrawals.delete');
    Route::get('users', [adminController::class, 'users'])->name('users');
    Route::patch('user/delete{id}', [adminController::class, 'userDelete'])->name('users.delete');
    Route::patch('user/activate-promo{id}', [adminController::class, 'ActivatePromo'])->name('activate-promo');
    Route::patch('/de-activate-promo{id}', [adminController::class, 'DeActivatePromo'])->name('de-activate-promo');
    Route::get('adminContent', [adminController::class, 'adminContent'])->name('adminContent');
    Route::patch('/approve-kyc/{id}', [adminController::class, 'approveKyc'])->name('approveKyc');
    Route::patch('/decline-kyc/{id}', [adminController::class, 'declineKyc'])->name('declineKyc');
    // Route::get('kyc', [adminController::class, 'kyc'])->name('kyc');
});



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
