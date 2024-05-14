<?php

use App\Http\Controllers\about;
use App\Http\Controllers\add_trainer;
use App\Http\Controllers\alluser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\file\FileController;
use App\Http\Controllers\courseCategory\CourseCategoryController;
use App\Http\Controllers\courseInfo\CourseInfoController;
use App\Http\Controllers\content\ContentController;
use App\Http\Controllers\courseContent\CourseContentController;
use App\Http\Controllers\courseBatch\CourseBatchController;
use App\Http\Controllers\customAuth\CustomAuthController;
use App\Http\Controllers\studentAdmission\StudentAdmissionController;
use App\Http\Controllers\assignBatch\AssignBatchController;
use App\Http\Controllers\homepage;
use App\Http\Controllers\galleryview;
use App\Http\Controllers\blogcontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\enrollcontroller;
use App\Http\Controllers\student_panal;
use App\Http\Middleware\cheak_stud;
use App\Http\Middleware\cheak_admin;
use App\Http\Controllers\BkashController;

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
// Route::get('/', function () {
//     return view('welcome');
// });
require __DIR__.'/auth.php';


Route::middleware(['cheak_admin'])->group(function () {

Route::get('/file-up/view', [FileController::class, 'fileUpPageView'])->name('fileUp');
Route::post('file-up/create', [FileController::class, 'fileUpPageCreate']);
Route::get('/file-up/edit/view/{id}', [FileController::class, 'fileUpPageEditView']);
Route::post('/file-up/edit/update/{id}', [FileController::class, 'fileUpPageEditUpdate']);
Route::get('/file-up/delete/{id}', [FileController::class, 'fileUpPageDelete']);


Route::get('/course-category/view', [CourseCategoryController::class, 'courseCategoryPageView']);
Route::post('/course-category/create', [CourseCategoryController::class, 'courseCategoryPageCreate']);
Route::get('/course-category/edit/view/{id}', [CourseCategoryController::class, 'courseCategoryPageEditView']);
Route::post('/course-category/edit/update/{id}', [CourseCategoryController::class, 'courseCategoryPageEditUpdate']);
Route::get('/course-category/delete/{id}', [CourseCategoryController::class, 'courseCategoryPageDelete']);


Route::get('/course-info/view', [CourseInfoController::class, 'courseInfoPageView']);
Route::post('/course-info/create', [CourseInfoController::class, 'courseInfoPageCreate']);
Route::get('/course-info/edit/view/{id}', [CourseInfoController::class, 'courseInfoPageEditView']);
Route::post('/course-info/edit/update/{id}', [CourseInfoController::class, 'courseInfoPageEditUpdate']);
Route::get('/course-info/delete/{id}', [CourseInfoController::class, 'courseInfoPageDelete']);

Route::get('/course-content/view', [CourseContentController::class, 'courseContentPageView']);
Route::post('/course-content/create', [CourseContentController::class, 'courseContentPageCreate']);
Route::get('/course-content/edit/view/{id}', [CourseContentController::class, 'courseContentPageEditView']);
Route::post('/course-content/edit/update/{id}', [CourseContentController::class, 'courseContentPageEditUpdate']);
Route::get('/course-content/delete/{id}', [CourseContentController::class, 'courseContentPageDelete']);

Route::get('/course-batch/view', [CourseBatchController::class, 'courseBatchPageView']);
Route::post('/course-batch/create', [CourseBatchController::class, 'courseBatchPageCreate']);
Route::get('/course-batch/edit/view/{id}', [CourseBatchController::class, 'courseBatchPageEditView']);
Route::post('/course-batch/edit/update/{id}', [CourseBatchController::class, 'courseBatchPageEditUpdate']);
Route::get('/course-batch/delete/{id}', [CourseBatchController::class, 'courseBatchPageDelete']);

Route::get('/student-admit/view', [StudentAdmissionController::class, 'studentAdmissionView']);
Route::post('/student-admit/create', [StudentAdmissionController::class, 'studentAdmissionCreate']);
Route::get('/student-admit/accept/{id}', [StudentAdmissionController::class, 'studentAdmissionAccept']);
Route::get('/student-admit/edit/view/{id}', [StudentAdmissionController::class, 'studentAdmissionEditView']);
Route::post('/student-admit/edit/update/{id}', [StudentAdmissionController::class, 'studentAdmissionEditUpdate']);
Route::get('/student-admit/delete/{id}', [StudentAdmissionController::class, 'studentAdmissionDelete']);

Route::get('/assign-batch/view', [AssignBatchController::class, 'assignBatchPageView']);
Route::post('/assign-batch/create', [AssignBatchController::class, 'assignBatchPageCreate']);

// Route::get('/custom-regist/view', [CustomAuthController::class, 'customRegistrationView']);
// Route::post('custom-regist/create', [CustomAuthController::class, 'customRegistrationCreate']);
// Route::get('/', [CustomAuthController::class, 'customLoginView']);
// Route::post('custom-login/create', [CustomAuthController::class, 'customLoginCreate']);
// Route::post('/custom-logout', [CustomAuthController::class, 'customLogout']);
// Route::get('/custom-auth/edit/view/{id}', [CustomAuthController::class, 'customLoginRegistEditView']);
// Route::post('/custom-auth/edit/update/{id}', [CustomAuthController::class, 'customLoginRegistEditUpdate']);
// Route::get('/custom-auth/delete/{id}', [CustomAuthController::class, 'customLoginRegistDelete']);
// Route::get('/custom-auth-user/view', [CustomAuthController::class, 'customUserCredentialInfo']);


Route::get('/admin-home-page', [homepage::class, 'fastsection']);
Route::post('/fastsection-submit', [homepage::class, 'fastsection_submit']);
Route::get('/fastedit/{id}', [homepage::class, 'fastedit']);
Route::post('/fastupdate/{id}', [homepage::class, 'fastupdate']);

Route::get('/second-section', [homepage::class, 'secondsection']);
Route::post('/second-section-submit', [homepage::class, 'secondsection_submit']);
Route::get('/second-section-edit/{id}', [homepage::class, 'secondsection_edit']);
Route::post('/second-section-update/{id}', [homepage::class, 'secondsection_update']);


Route::get('/third-section', [homepage::class, 'thirdsection']);
Route::post('/third-section-submit', [homepage::class, 'thirddsection_submit']);
Route::get('/third-section-edit/{id}', [homepage::class, 'thirdsection_edit']);
Route::post('/third-section-update/{id}', [homepage::class, 'thirdsection_update']);


Route::get('/forth-section', [homepage::class, 'forthsection']);
Route::post('/forth-section-submit', [homepage::class, 'forthsection_submit']);
Route::get('/forth-section-edit/{id}', [homepage::class, 'forthsection_edit']);
Route::post('/forth-section-update/{id}', [homepage::class, 'forthsection_update']);

Route::get('/fifth-section', [homepage::class, 'fifthsection']);
Route::post('/fifth-section-submit', [homepage::class, 'fifthsection_submit']);
Route::get('/fifth-section-edit/{id}', [homepage::class, 'fifthsection_edit']);
Route::post('/fifth-section-update/{id}', [homepage::class, 'fifthsection_update']);

// blog start

Route::get('/six-section', [blogcontroller::class, 'sixsection']);
Route::post('/six-section-submit', [blogcontroller::class, 'sixsection_submit']);
Route::get('/six-section-edit/{id}', [blogcontroller::class, 'sixsection_edit']);
Route::post('/six-section-update/{id}', [blogcontroller::class, 'sixsection_update']);



// blog end

Route::get('/gallery-section', [galleryview::class, 'add_photo']);
Route::post('/gallery-section-submit', [galleryview::class, 'submit']);

Route::get('/trainer-add', [add_trainer::class, 'add_trainer']);
Route::post('/trainer-submit', [add_trainer::class, 'trainer_submit']);
Route::get('/traier-edit/{id}', [add_trainer::class, 'trainer_edit']);
Route::post('/trainer-update/{id}', [add_trainer::class, 'trainer_update']);
Route::get('/traier-delete/{id}', [add_trainer::class, 'trainer_delete']);


Route::get('/about-add', [about::class, 'add_about']);
Route::post('/about-submit', [about::class, 'about_submit']);
Route::get('/about-edit/{id}', [about::class, 'about_edit']);
Route::post('/about-update/{id}', [about::class, 'about_update']);


Route::post('/enroll-submit', [enrollcontroller::class, 'submit']);
Route::get('/enroll-admin', [enrollcontroller::class, 'admin_show']);
Route::get('/enroll-delete/{id}', [enrollcontroller::class, 'delete']);

Route::get('/admin-contact-show', [contactcontroller::class, 'contact_show']);
Route::get('/admin-contact-delete/{id}', [contactcontroller::class, 'contact_delete']);


Route::get('/all-user', [alluser::class, 'show']);
Route::get('/user-edit/{id}', [alluser::class, 'edit']);
Route::post('/user-submit/{id}', [alluser::class, 'submit']);
Route::get('/user-delete/{id}', [alluser::class, 'delete']);


});


Route::get('/student-panal', [student_panal::class, 'show'])->middleware('cheak_stud');
Route::get('/student-apruv', [student_panal::class, 'apruv'])->middleware('cheak_apruv');
Route::get('/logout', [student_panal::class, 'logout']);

// frontend

Route::get('/', [homepage::class, 'show']);

Route::get('/gallery-view', [galleryview::class, 'show']);


Route::get('/course', [CourseInfoController::class, 'show_course']);
Route::get('/course-single/{id}', [CourseInfoController::class, 'show_single']);

Route::get('/about', [about::class, 'show']);

Route::get('/enroll/{id}', [enrollcontroller::class, 'show']);

Route::get('/contact', [contactcontroller::class, 'show']);

Route::post('/contact-submit', [contactcontroller::class, 'submit']);

Route::get('/blog', [blogcontroller::class, 'show']);
Route::get('/blog-single/{id}', [blogcontroller::class, 'single_show']);




// Checkout (URL) User Part
Route::get('/bkash/pay', [BkashController::class, 'payment'])->name('url-pay');
Route::post('/bkash/create', [BkashController::class, 'createPayment'])->name('url-create');
Route::get('/bkash/callback', [BkashController::class, 'callback'])->name('url-callback');

// Checkout (URL) Admin Part
Route::get('/bkash/refund', [BkashController::class, 'getRefund'])->name('url-get-refund');
Route::post('/bkash/refund', [BkashController::class, 'refundPayment'])->name('url-post-refund');
