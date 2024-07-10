<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sign-in', function () {
    return view('dashboard.auth.auth-sign-in');
})-> name('Sign In');

Route::get('/sign-up', function () {
    return view('dashboard.auth.auth-sign-up');
})-> name('Sign Up');

Route::get('/recover-password', function () {
    return view('dashboard.auth.auth-recoverpw');
})-> name('Recover Password');

Route::get('/confirm-mail', function () {
    return view('dashboard.auth.auth-confirm-mail');
})-> name('Confirm Mail');

Route::get('/lock-screen', function () {
    return view('dashboard.auth.auth-lock-screen');
})-> name('Lock Screen');

Route::get('/dashboard', function () {
    return view('dashboard.pages.index');
})-> name('Dashboard');

Route::get('/projects', function () {
    return view('dashboard.pages.page-project');
})-> name('Projects');

Route::get('/tasks', function () {
    return view('dashboard.pages.page-task');
})-> name('Tasks');

Route::get('/employees', function () {
    return view('dashboard.pages.page-employee');
})-> name('Employees');

Route::get('/desk', function () {
    return view('dashboard.pages.page-desk');
})-> name('Desk');

Route::get('/calendar', function () {
    return view('dashboard.pages.page-calendar');
})-> name('Calendar');

Route::get('/user-profile', function () {
    return view('dashboard.user_management.user-profile');
})-> name('User Profile');

Route::get('/user-profile-edit', function () {
    return view('dashboard.user_management.user-profile-edit');
})-> name('Edit User Profile');

Route::get('/user-add', function () {
    return view('dashboard.user_management.user-add');
})-> name('Add User');

Route::get('/user-list', function () {
    return view('dashboard.user_management.user-list');
})-> name('User List');

Route::get('/ui-avatars', function () {
    return view('dashboard.ui-elements.ui-avatars');
})-> name('Avatars');

Route::get('/ui-alerts', function () {
    return view('dashboard.ui-elements.ui-alerts');
})-> name('Alerts');

Route::get('/ui-badges', function () {
    return view('dashboard.ui-elements.ui-badges');
})-> name('Badges');

Route::get('/ui-boxshadow', function () {
    return view('dashboard.ui-elements.ui-boxshadow');
})-> name('Box Shadow');

Route::get('/ui-breadcrumb', function () {
    return view('dashboard.ui-elements.ui-breadcrumb');
})-> name('Breadcrumb');

Route::get('/ui-buttons', function () {
    return view('dashboard.ui-elements.ui-buttons');
})-> name('Buttons');

Route::get('/ui-buttons-group', function () {
    return view('dashboard.ui-elements.ui-buttons-group');
})-> name('Buttons Group');

Route::get('/ui-cards', function () {
    return view('dashboard.ui-elements.ui-cards');
})-> name('Cards');

Route::get('/ui-carousel', function () {
    return view('dashboard.ui-elements.ui-carousal');
})-> name('Carousel');

Route::get('/ui-colors', function () {
    return view('dashboard.ui-elements.ui-colors');
})-> name('Colors');

Route::get('/ui-video', function () {
    return view('dashboard.ui-elements.ui-embed-video');
})-> name('Video');

Route::get('/ui-grid', function () {
    return view('dashboard.ui-elements.ui-grid');
})-> name('Grid');

Route::get('/ui-helper-classes', function () {
    return view('dashboard.ui-elements.ui-helper-classes');
})-> name('Helper Classes');

Route::get('/ui-images', function () {
    return view('dashboard.ui-elements.ui-images');
})-> name('Images');

Route::get('/ui-list-group', function () {
    return view('dashboard.ui-elements.ui-list-group');
})-> name('List Group');

Route::get('/ui-media', function () {
    return view('dashboard.ui-elements.ui-media-object');
})-> name('Media');

Route::get('/ui-modal', function () {
    return view('dashboard.ui-elements.ui-modal');
})-> name('Modal');

Route::get('/ui-notifications', function () {
    return view('dashboard.ui-elements.ui-notifications');
})-> name('Notifications');

Route::get('/ui-pagination', function () {
    return view('dashboard.ui-elements.ui-pagination');
})-> name('Pagination');

Route::get('/ui-popovers', function () {
    return view('dashboard.ui-elements.ui-popovers');
})-> name('Popovers');

Route::get('/ui-progressbars', function () {
    return view('dashboard.ui-elements.ui-progressbars');
})-> name('Progressbars');

Route::get('/ui-tabs', function () {
    return view('dashboard.ui-elements.ui-tabs');
})-> name('Tabs');

Route::get('/ui-tooltips', function () {
    return view('dashboard.ui-elements.ui-tooltips');
})-> name('Tooltips');

Route::get('/ui-typography', function () {
    return view('dashboard.ui-elements.ui-typography');
})-> name('Typography');