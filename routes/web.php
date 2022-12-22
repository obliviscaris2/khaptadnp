<?php

use App\Models\About;
use App\Models\Publication;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CoverImageController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\SitesettingController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserFeedbackController;
use App\Models\BlogPost;

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

//ROUTES FOR HOME CONTROLLER

Route::get('/', [HomeController::class, 'index'])->name('home');


// ROUTES FOR ADMIN/USER REGISTRATION 

// Route::get('register', [RegistrationController::class, 'create']);
// Route::post('register-store', [RegistrationController::class, 'store']);

Route::get('/login', [SessionsController::class, 'create']);
Route::post('/login', [SessionsController::class, 'store']);
Route::get('/logout', [SessionsController::class, 'destroy']);

// ROUTES FOR ADMIN CONTROLLER HERE BELOW

Route::get("admin", [SessionsController::class, "create"])->name("admin.index");

Route::get("enteradmin", [AdminController::class, "adminIndex"])->name("enteradmin.index");

// ROUTES FOR ADMIN POSTS 

Route::get("admin/posts/index", [PostController::class, "index"])->name("posts.index");
Route::get("admin/posts/create", [PostController::class, "create"])->name("posts.create");
Route::post("admin/posts/store", [PostController::class, "store"])->name('posts.store');
Route::get("admin/posts/edit/{id}", [PostController::class, "edit"])->name('posts.edit');
Route::post("admin/posts/update", [PostController::class, "update"])->name('posts.update');
Route::get("admin/posts/destroy/{id}", [PostController::class, 'destroy'])->name('posts.destroy');

// ROUTES FOR ADMIN CATEGORIES

Route::get("admin/categories/index", [CategoryController::class, 'index'])->name('categories.index');
Route::get("admin/categories/create", [CategoryController::class, 'create'])->name('categories.create');
Route::post("admin/categories/store", [CategoryController::class, 'store'])->name('categories.store');
Route::get("admin/categories/edit/{id}", [CategoryController::class, 'edit'])->name('categories.edit');
Route::post("admin/categories/update", [CategoryController::class, 'update'])->name('categories.update');
Route::get("admin/categories/destroy/{id}", [CategoryController::class, 'destroy'])->name('categories.destroy');


// ROUTES FOR ADMIN SITESETTINGS

Route::get("admin/sitesettings/index", [SitesettingController::class, 'index'])->name('sitesettings.index');
Route::get("admin/sitesettings/create", [SitesettingController::class, 'create'])->name('sitesettings.create');
Route::post("admin/sitesettings/store", [SitesettingController::class, 'store'])->name('sitesettings.store');
Route::post("admin/sitesettings/update", [SitesettingController::class, 'update'])->name('sitesettings.update');
Route::get("admin/sitesettings/edit/{id}", [SitesettingController::class, 'edit'])->name('sitesettings.edit');
Route::get("admin/sitesettings/destroy/{id}", [SitesettingController::class, 'destroy'])->name('sitesettings.destroy');


// ROUTES FOR ADMIN ABOUTS

Route::get("admin/abouts/index", [AboutController::class, 'index'])->name('abouts.index');
Route::get("admin/abouts/create", [AboutController::class, 'create'])->name('abouts.create');
Route::post("admin/abouts/store", [AboutController::class, 'store'])->name('abouts.store');
Route::post("admin/abouts/update", [AboutController::class, 'update'])->name('abouts.update');
Route::get("admin/abouts/edit/{id}", [AboutController::class, 'edit'])->name('abouts.edit');
Route::get("admin/abouts/destroy/{id}", [AboutController::class, 'destroy'])->name('abouts.destroy');


// ROUTES FROR ADMIN SERVICES

Route::get("admin/services/index", [ServiceController::class, 'index'])->name("services.index");
Route::get("admin/services/create", [ServiceController::class, 'create'])->name("services.create");
Route::post("admin/services/store", [ServiceController::class, 'store'])->name("services.store");
Route::post("admin/services/update", [ServiceController::class, 'update'])->name("services.update");
Route::get("admin/services/edit/{id}", [ServiceController::class, 'edit'])->name("services.edit");
Route::get("admin/services/destroy/{id}", [ServiceController::class, 'destroy'])->name("services.destroy");


// ROUTES FOR ADMIN TEAMS

Route::get("admin/teams/index", [TeamController::class, 'index'])->name('teams.index');
Route::get("admin/teams/create", [TeamController::class, 'create'])->name('teams.create');
Route::post("admin/teams/store", [TeamController::class, 'store'])->name('teams.store');
Route::post("admin/teams/update", [TeamController::class, 'update'])->name('teams.update');
Route::get("admin/teams/edit/{id}", [TeamController::class, 'edit'])->name('teams.edit');
Route::get("admin/teams/destroy/{id}", [TeamController::class, 'destroy'])->name('teams.destroy');

// ROUTES FOR ADMIN REPORT CONTROLLER

Route::get("admin/reports/index", [ReportController::class, 'index'])->name('reports.index');
Route::get("admin/reports/create", [ReportController::class, 'create'])->name('reports.create');
Route::post("admin/reports/store", [ReportController::class, 'store'])->name('reports.store');
Route::post("admin/reports/update", [ReportController::class, 'update'])->name('reports.update');
Route::get("admin/reports/edit/{id}", [ReportController::class, 'edit'])->name('reports.edit');
Route::get("admin/reports/destroy/{id}", [ReportController::class, 'destroy'])->name('reports.destroy');

// ROUTES FOR ADMIN POLICIES CONTROLLER

Route::get("admin/policies/index", [PolicyController::class, 'index'])->name('policies.index');
Route::get("admin/policies/create", [PolicyController::class, 'create'])->name('policies.create');
Route::post("admin/policies/store", [PolicyController::class, 'store'])->name('policies.store');
Route::post("admin/policies/update", [PolicyController::class, 'update'])->name('policies.update');
Route::get("admin/policies/edit/{id}", [PolicyController::class, 'edit'])->name('policies.edit');
Route::get("admin/policies/destroy/{id}", [PolicyController::class, 'destroy'])->name('policies.destroy');


// ROUTES FOR ADMIN PROGRAMS CONTROLLER

Route::get("admin/programs/index", [ProgramController::class, 'index'])->name('programs.index');
Route::get("admin/programs/create", [ProgramController::class, 'create'])->name('programs.create');
Route::post("admin/programs/store", [ProgramController::class, 'store'])->name('programs.store');
Route::post("admin/programs/update", [ProgramController::class, 'update'])->name('programs.update');
Route::get("admin/programs/edit/{id}", [ProgramController::class, 'edit'])->name('programs.edit');
Route::get("admin/programs/destroy/{id}", [ProgramController::class, 'destroy'])->name('programs.destroy');

// ROUTES FOR ADMIN NEWS CONTROLLER

Route::get("admin/news/index", [NewsController::class, 'index'])->name('news.index');
Route::get("admin/news/create", [NewsController::class, 'create'])->name('news.create');
Route::post("admin/news/store", [NewsController::class, 'store'])->name('news.store');
Route::post("admin/news/update", [NewsController::class, 'update'])->name('news.update');
Route::get("admin/news/edit/{id}", [NewsController::class, 'edit'])->name('news.edit');
Route::get("admin/news/destroy/{id}", [NewsController::class, 'destroy'])->name('news.destroy');


// ROUTES FOR ADMIN CONTACTS CONTROLLER

Route::get('admin/contacts/index', [ContactController::class, 'index'])->name('contacts.index');
Route::get('admin/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('admin/contacts/store', [ContactController::class, 'store'])->name('contacts.store');
Route::post('admin/contacts/update', [ContactController::class, 'update'])->name('contacts.update');
Route::get('admin/contacts/edit/{id}', [ContactController::class, 'edit'])->name('contacts.edit');
Route::get('admin/contacts/destroy/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');


// ROUTES FOR ADMIN GALLERY CONTROLLER
Route::get('admin/gallery/index', [GalleryController::class, 'index'])->name('gallery.index'); 
Route::get('admin/gallery/create', [GalleryController::class, 'create'])->name('gallery.create'); 
Route::post('admin/gallery/store', [GalleryController::class, 'store'])->name('gallery.store'); 
Route::post('admin/gallery/update', [GalleryController::class, 'update'])->name('gallery.update'); 
Route::get('admin/gallery/edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit'); 
Route::get('admin/gallery/destroy/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');

// ROUTES FOR ADMIN COVER IMAGE CONTROLLER

Route::get('admin/coverimage/index', [CoverImageController::class, 'index'])->name('coverimage.index');

Route::get('admin/coverimage/create', [CoverImageController::class, 'create'])->name('coverimage.create');
Route::post('admin/coverimage/store', [CoverImageController::class, 'store'])->name('coverimage.store');

Route::get('admin/coverimage/edit/{id}', [CoverImageController::class, 'edit'])->name('coverimage.edit');
Route::post('admin/coverimage/update', [CoverImageController::class, 'update'])->name('coverimage.update');
Route::get('admin/coverimage/destroy/{id}', [CoverImageController::class, 'destroy'])->name('coverimage.destroy');


// ROUTES FOR ADMIN BLOG 

Route::get('admin/blog/index', [BlogPostController::class, 'index'])->name('blog.index');
Route::get('admin/blog/create', [BlogPostController::class, 'create'])->name('blog.create');
Route::post('admin/blog/store', [BlogPostController::class, 'store'])->name('blog.store');
Route::get('admin/blog/edit/{id}', [BlogPostController::class, 'edit'])->name('blog.edit');
Route::post('admin/blog/update', [BlogPostController::class, 'update'])->name('blog.update');
Route::get('admin/blog/destroy/{id}', [BlogPostController::class, 'destroy'])->name('blog.destroy');



// ROUTES FOR PUBLICATIONS

Route::get('admin/publications/index', [PublicationController::class, 'index'])->name('publications.index');
Route::get('admin/publications/create', [PublicationController::class, 'create'])->name('publications.create');
Route::post('admin/publications/store', [PublicationController::class, 'store'])->name('publications.store');
Route::get('admin/publications/edit/{id}', [PublicationController::class, 'edit'])->name('publications.edit');
Route::post('admin/publications/update', [PublicationController::class, 'update'])->name('publications.update');
Route::get('admin/publications/destroy/{id}', [PublicationController::class, 'destroy'])->name('publications.destroy');

// ROUTES FOR USER FEEDBACK 

Route::get('admin/userfeedback/index', [UserFeedbackController::class, 'index'])->name('userfeedback.index');
Route::post('admin/userfeedback/store', [UserFeedbackController::class, "store"])->name("userfeedback.store");
Route::post('admin/userfeedback/homestore', [UserFeedbackController::class, 'HomeStore'])->name("userfeedback.homestore");

Route::get('admin/userfeedback/destroy/{id}', [UserFeedbackController::class, "destroy"])->name("userfeedback.destroy");


// ROUTES FOR PAGES/SINGLE CONTROLLER

Route::get('introduction', [SingleController::class, 'renderIntroduction'])->name('introduction');
Route::get('services', [SingleController::class, 'renderServices'])->name('services');
Route::get('team', [SingleController::class, 'renderTeam'])->name('team');
Route::get('reports', [SingleController::class, 'renderReports'])->name('reports');
Route::get('policies', [SingleController::class, 'renderPolicies'])->name('policies');
Route::get('programs', [SingleController::class, 'renderPrograms'])->name('programs');
Route::get('news', [SingleController::class, 'renderNews'])->name('news');

Route::get('blog', [SingleController::class, 'renderBlog'])->name('blog');
Route::get('blogpost/{id}', [SingleController::class, 'singleBlogPost'])->name('blogpost');

Route::get('gallery', [SingleController::class, 'renderGallery'])->name('gallery');
Route::get('contact', [SingleController::class, 'renderContact'])->name('contact');
Route::get('publications', [SingleController::class, 'renderPublications'])->name('publications');



