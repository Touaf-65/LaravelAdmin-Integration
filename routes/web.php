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

Route::get('/user-account-setting', function () {
    return view('dashboard.user_management.user-account-setting');
})-> name('User Account Setting');

Route::get('/user-privacy-setting', function () {
    return view('dashboard.user_management.user-privacy-setting');
})-> name('User Privacy Setting');

Route::get('/user-profile-edit', function () {
    return view('dashboard.user_management.user-profile-edit');
})-> name('Edit User Profile');

Route::get('/user-add', function () {
    return view('dashboard.user_management.user-add');
})-> name('Add User');

Route::get('/user-list', function () {
    return view('dashboard.user_management.user-list');
})-> name('User List');

Route::get('/user-contact-detail', function () {
    return view('dashboard.contact.contact-detail');
})-> name('User Contact Detail');

Route::get('/user-contact-list', function () {
    return view('dashboard.contact.contact-list');
})-> name('User Contact List');

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

Route::get('/remixicon', function () {
    return view('dashboard.icon.icon-remixicon');
})-> name('Remixicon');

Route::get('/form-checkbox', function () {
    return view('dashboard.forms.form-checkbox');
})-> name('Checkbox');

Route::get('/form-datepicker', function () {
    return view('dashboard.forms.form-datepicker');
})-> name('Datepicker');

Route::get('/form-file-uploader', function () {
    return view('dashboard.forms.form-file-uploader');
})-> name('File Uploader');

Route::get('/form-input-group', function () {
    return view('dashboard.forms.form-input-group');
})-> name('Input Group');

Route::get('/form-layout', function () {
    return view('dashboard.forms.form-layout');
})-> name('Layout');

Route::get('/form-radio', function () {
    return view('dashboard.forms.form-radio');
})-> name('Radio');

Route::get('/form-select', function () {
    return view('dashboard.forms.form-select');
})-> name('Select');

Route::get('/form-switch', function () {
    return view('dashboard.forms.form-switch');
})-> name('Switch');

Route::get('/form-textarea', function () {
    return view('dashboard.forms.form-textarea');
})-> name('Textarea');

Route::get('/form-validation', function () {
    return view('dashboard.forms.form-validation');
})-> name('Validation');

Route::get('/form-wizard-validate', function () {
    return view('dashboard.forms.form-wizard-validate');
})-> name('Wizard Validate');

Route::get('/form-wizard-vertical', function () {
    return view('dashboard.forms.form-wizard-vertical');
})-> name('Wizard Vertical');

Route::get('/form-wizard', function () {
    return view('dashboard.forms.form-wizard');
})-> name('Wizard');

Route::get('/form-quill', function () {
    return view('dashboard.forms.form-quill');
})-> name('Quill');

Route::get('/table-data', function () {
    return view('dashboard.table.table-data');
})-> name('Table Data');

Route::get('/table-editable', function () {
    return view('dashboard.table.table-editable');
})-> name('Table Editable');

Route::get('/table-basic', function () {
    return view('dashboard.table.table-basic');
})-> name('Table Basic');

Route::get('/table-tree', function () {
    return view('dashboard.table.table-tree');
})-> name('Table Tree');

Route::get('/pricing-1', function () {
    return view('dashboard.pricing.pricing');
})-> name('Pricing 1');

Route::get('/pricing-2', function () {
    return view('dashboard.pricing.pricing-1');
})-> name('Pricing 2');

Route::get('/pricing-3', function () {
    return view('dashboard.pricing.pricing-2');
})-> name('Pricing 3');

Route::get('/pricing-4', function () {
    return view('dashboard.pricing.pricing-3');
})-> name('Pricing 4');

Route::get('/timeline', function () {
    return view('dashboard.timeline.timeline');
})-> name('Timeline');

Route::get('/invoice', function () {
    return view('dashboard.invoice.pages-invoice');
})-> name('Invoice');

Route::get('/error404', function () {
    return view('dashboard.error.pages-error');
})-> name('Error 404');

Route::get('/error500', function () {
    return view('dashboard.error.pages-error-500');
})-> name('Error 500');

Route::get('/blank-page', function () {
    return view('dashboard.pages.pages-blank-page');
})-> name('Blank Page');

Route::get('/comingsoon', function () {
    return view('dashboard.pages.pages-comingsoon');
})-> name('Coming Soon');

Route::get('/faq', function () {
    return view('dashboard.pages.pages-faq');
})-> name('FAQ');

Route::get('/suscribers', function () {
    return view('dashboard.pages.pages-subscribers');
})-> name('Subscribers');

Route::get('/in-maintenance', function () {
    return view('dashboard.maintenance.pages-maintenance');
})-> name('Maintenance');

Route::get('/chart-am', function () {
    return view('dashboard.charts.chart-am');
})-> name('Chart am');

Route::get('/chart-apex', function () {
    return view('dashboard.charts.chart-apex');
})-> name('Chart apex');

Route::get('/chart-high', function () {
    return view('dashboard.charts.chart-high');
})-> name('Chart high');

Route::get('/chart-morries', function () {
    return view('dashboard.charts.chart-morries');
})-> name('Chart morries');
