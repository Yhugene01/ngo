<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/about-us', [WelcomeController::class, 'aboutUs'])->name('about.us');
Route::get('/privacy-policy', [WelcomeController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/faq', [WelcomeController::class, 'faq'])->name('faq');



Route::get('/donation', [DonationController::class, 'donation'])->name('user.donation');
Route::get('/medical-equipment', [DonationController::class, 'medicalEquipment'])->name('user.medical.equipment');
Route::get('/financial-giving', [DonationController::class, 'financialGiving'])->name('user.financial.giving');
Route::post('/donate-now', [DonationController::class, 'donateNow'])->name('donate.now');

Route::get('/volunteering', [DonationController::class, 'volunteer'])->name('user.volunteer');
Route::post('/volunteer-opportunities', [DonationController::class, 'volunteerOpportunities'])->name('volunteer.opportunities');


Route::get('/contact-us', [UsersController::class, 'contactUs'])->name('user.contact.us');
Route::get('/donation-details', [UsersController::class, 'donationDetails'])->name('user.donation.details');
Route::get('/gallery', [UsersController::class, 'gallery'])->name('user.gallery');
Route::get('/partner-with-us', [UsersController::class, 'partnerWithUs'])->name('user.partner.with.us');
Route::get('/blog', [UsersController::class, 'blog'])->name('user.blog');
Route::get('/testimonial', [UsersController::class, 'testimonial'])->name('user.testimonial');
Route::get('/blog-details', [UsersController::class, 'blogDetails'])->name('user.blog.details');



Route::get('/outreach-request', [RequestController::class, 'outreachRequest'])->name('user.outreach.request');
Route::get('/individual-request', [RequestController::class, 'individualRequest'])->name('user.individual.request');
Route::get('/health-social-request', [RequestController::class, 'healthSocialRequest'])->name('user.health.social.request');
Route::get('/organisation-community-request', [RequestController::class, 'organisationCommunityRequest'])->name('user.organisation.community.request');
Route::post('/request-now', [RequestController::class, 'requestNow'])->name('request.now');



Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
