<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Admin\AdminAboutUsController;
use App\Http\Controllers\Admin\AdminAchievementController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminEventController;
use App\Http\Controllers\Admin\AdminGalleryController;
use App\Http\Controllers\Admin\AdminHeaderController;
use App\Http\Controllers\Admin\AdminHomepageController;
use App\Http\Controllers\Admin\AdminMissionController;
use App\Http\Controllers\Admin\AdminOpenVolunteerController;
use App\Http\Controllers\Admin\AdminPartnerController;
use App\Http\Controllers\Admin\AdminPartnershipAndSponsorshipController;
use App\Http\Controllers\Admin\AdminSlideBannerController;
use App\Http\Controllers\Admin\AdminSponsorController;
use App\Http\Controllers\Admin\AdminTeamController;
use App\Http\Controllers\Admin\AdminTestimonialController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\OpenVolunteerController;
use App\Http\Controllers\PartnershipAndSponsorshipController;
use App\Http\Controllers\TeamController;

Route::get('/', [HomepageController::class, 'index'])->name('homepage');

Route::name('open-volunteers.')->prefix('open-volunteers')->group(function () {
    Route::get('/', [OpenVolunteerController::class, 'index'])->name('index');
    Route::get('{openVolunteer}', [OpenVolunteerController::class, 'show'])->name('show');
});

Route::name('events.')->prefix('events')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('index');
    Route::get('{event}', [EventController::class, 'show'])->name('show');
});

Route::name('blogs.')->prefix('blogs')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('{blog}', [BlogController::class, 'show'])->name('show');
});

Route::get('partnership', [PartnershipAndSponsorshipController::class, 'showPartnership'])->name('showPartnership');
Route::get('sponsorship', [PartnershipAndSponsorshipController::class, 'showSponsorship'])->name('showSponsorship');

Route::get('about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('teams', [TeamController::class, 'index'])->name('teams');

Route::post('register', [RegisterController::class, 'store']);
Route::post('login', [LoginController::class, 'store']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::name('admin.')->prefix('admin')->group(function () {
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

        Route::name('homepage.')->prefix('homepage')->group(function () {
            Route::get('/', [AdminHomepageController::class, 'show'])->name('show');
            Route::get('edit', [AdminHomepageController::class, 'edit'])->name('edit');
            Route::put('update', [AdminHomepageController::class, 'update'])->name('update');
        });

        Route::name('mission.')->prefix('mission')->group(function () {
            Route::get('add', [AdminMissionController::class, 'create'])->name('create');
            Route::post('store', [AdminMissionController::class, 'store'])->name('store');
            Route::get('edit/{id}', [AdminMissionController::class, 'edit'])->name('edit');
            Route::put('update/{id}', [AdminMissionController::class, 'update'])->name('update');
            Route::get('delete/{id}', [AdminMissionController::class, 'destroy'])->name('destroy');
        });

        Route::name('testimonials.')->prefix('testimonials')->group(function () {
            Route::get('/', [AdminTestimonialController::class, 'index'])->name('index');
            Route::get('{id}', [AdminTestimonialController::class, 'show'])->name('show');
        });

        Route::name('testimonial.')->prefix('testimonial')->group(function () {
            Route::get('add', [AdminTestimonialController::class, 'create'])->name('create');
            Route::post('store', [AdminTestimonialController::class, 'store'])->name('store');
            Route::get('edit/{id}', [AdminTestimonialController::class, 'edit'])->name('edit');
            Route::put('update/{id}', [AdminTestimonialController::class, 'update'])->name('update');
            Route::get('delete/{id}', [AdminTestimonialController::class, 'destroy'])->name('destroy');
        });

        Route::name('slide-banner.')->prefix('slide-banner')->group(function () {
            Route::get('/', [AdminSlideBannerController::class, 'index'])->name('index');
            Route::get('add', [AdminSlideBannerController::class, 'create'])->name('create');
            Route::get('{id}', [AdminSlideBannerController::class, 'show'])->name('show');
            Route::post('store', [AdminSlideBannerController::class, 'store'])->name('store');
            Route::get('edit/{id}', [AdminSlideBannerController::class, 'edit'])->name('edit');
            Route::put('update/{id}', [AdminSlideBannerController::class, 'update'])->name('update');
            Route::get('delete/{id}', [AdminSlideBannerController::class, 'destroy'])->name('destroy');
        });

        Route::name('open-volunteer.')->prefix('open-volunteer')->group(function () {
            Route::get('/', [AdminOpenVolunteerController::class, 'index'])->name('index');
            Route::get('add', [AdminOpenVolunteerController::class, 'create'])->name('create');
            Route::get('{id}', [AdminOpenVolunteerController::class, 'show'])->name('show');
            Route::post('store', [AdminOpenVolunteerController::class, 'store'])->name('store');
            Route::get('edit/{id}', [AdminOpenVolunteerController::class, 'edit'])->name('edit');
            Route::put('update/{id}', [AdminOpenVolunteerController::class, 'update'])->name('update');
            Route::get('delete/{id}', [AdminOpenVolunteerController::class, 'destroy'])->name('destroy');
        });

        Route::name('events.')->prefix('events')->group(function () {
            Route::get('/', [AdminEventController::class, 'index'])->name('index');
            Route::get('{id}', [AdminEventController::class, 'show'])->name('show');
        });

        Route::name('event.')->prefix('event')->group(function () {
            Route::get('add', [AdminEventController::class, 'create'])->name('create');
            Route::post('store', [AdminEventController::class, 'store'])->name('store');
            Route::get('edit/{id}', [AdminEventController::class, 'edit'])->name('edit');
            Route::put('update/{id}', [AdminEventController::class, 'update'])->name('update');
            Route::get('delete/{id}', [AdminEventController::class, 'destroy'])->name('destroy');
        });

        Route::name('gallery.')->prefix('gallery')->group(function () {
            Route::get('add/{eventId}', [AdminGalleryController::class, 'create'])->name('create');
            Route::post('store/{eventId}', [AdminGalleryController::class, 'store'])->name('store');
            Route::get('edit/{id}', [AdminGalleryController::class, 'edit'])->name('edit');
            Route::put('update/{id}', [AdminGalleryController::class, 'update'])->name('update');
            Route::get('delete/{id}', [AdminGalleryController::class, 'destroy'])->name('destroy');
        });

        Route::name('blogs.')->prefix('blogs')->group(function () {
            Route::get('/', [AdminBlogController::class, 'index'])->name('index');
            Route::get('{id}', [AdminBlogController::class, 'show'])->name('show');
        });

        Route::name('blog.')->prefix('blog')->group(function () {
            Route::get('add', [AdminBlogController::class, 'create'])->name('create');
            Route::post('store', [AdminBlogController::class, 'store'])->name('store');
            Route::get('edit/{id}', [AdminBlogController::class, 'edit'])->name('edit');
            Route::put('update/{id}', [AdminBlogController::class, 'update'])->name('update');
            Route::get('delete/{id}', [AdminBlogController::class, 'destroy'])->name('destroy');
        });

        Route::name('partnership.')->prefix('partnership')->group(function () {
            Route::get('/', [AdminPartnershipAndSponsorshipController::class, 'index'])->name('index');
            Route::get('edit/{id}', [AdminPartnershipAndSponsorshipController::class, 'edit'])->name('edit');
            Route::put('update/{id}', [AdminPartnershipAndSponsorshipController::class, 'update'])->name('update');
        });

        Route::name('partner.')->prefix('partner')->group(function () {
            Route::get('add', [AdminPartnerController::class, 'create'])->name('create');
            Route::post('store', [AdminPartnerController::class, 'store'])->name('store');
            Route::get('edit/{id}', [AdminPartnerController::class, 'edit'])->name('edit');
            Route::put('update/{id}', [AdminPartnerController::class, 'update'])->name('update');
            Route::get('delete/{id}', [AdminPartnerController::class, 'destroy'])->name('destroy');
        });

        Route::name('sponsor.')->prefix('sponsor')->group(function () {
            Route::get('add', [AdminSponsorController::class, 'create'])->name('create');
            Route::post('store', [AdminSponsorController::class, 'store'])->name('store');
            Route::get('edit/{id}', [AdminSponsorController::class, 'edit'])->name('edit');
            Route::put('update/{id}', [AdminSponsorController::class, 'update'])->name('update');
            Route::get('delete/{id}', [AdminSponsorController::class, 'destroy'])->name('destroy');
        });

        Route::name('about-us.')->prefix('about-us')->group(function () {
            Route::get('/', [AdminAboutUsController::class, 'show'])->name('show');
            Route::get('edit', [AdminAboutUsController::class, 'edit'])->name('edit');
            Route::put('update', [AdminAboutUsController::class, 'update'])->name('update');
        });

        Route::name('team.')->prefix('team')->group(function () {
            Route::get('add', [AdminTeamController::class, 'create'])->name('create');
            Route::post('store', [AdminTeamController::class, 'store'])->name('store');
            Route::get('edit/{id}', [AdminTeamController::class, 'edit'])->name('edit');
            Route::put('update/{id}', [AdminTeamController::class, 'update'])->name('update');
            Route::get('delete/{id}', [AdminTeamController::class, 'destroy'])->name('destroy');
            Route::get('edit-order', [AdminTeamController::class, 'editTeamOrder'])->name('editOrder');
            Route::post('update-order', [AdminTeamController::class, 'updateTeamOrder'])->name('updateOrder');
        });

        Route::name('achievement.')->prefix('achievement')->group(function () {
            Route::get('add', [AdminAchievementController::class, 'create'])->name('create');
            Route::post('store', [AdminAchievementController::class, 'store'])->name('store');
            Route::get('edit/{id}', [AdminAchievementController::class, 'edit'])->name('edit');
            Route::put('update/{id}', [AdminAchievementController::class, 'update'])->name('update');
            Route::get('delete/{id}', [AdminAchievementController::class, 'destroy'])->name('destroy');
        });

        Route::name('contact.')->prefix('contact')->group(function () {
            Route::get('/', [AdminContactController::class, 'show'])->name('show');
            Route::get('edit', [AdminContactController::class, 'edit'])->name('edit');
            Route::put('update', [AdminContactController::class, 'update'])->name('update');
        });

        Route::name('header.')->prefix('header')->group(function () {
            Route::get('/', [AdminHeaderController::class, 'show'])->name('show');
            Route::get('edit', [AdminHeaderController::class, 'edit'])->name('edit');
            Route::put('update', [AdminHeaderController::class, 'update'])->name('update');
        });
    });
});
