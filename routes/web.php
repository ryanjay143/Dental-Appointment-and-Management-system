<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserpageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DentistController;
use App\Http\Controllers\Appointments;
use App\Http\Controllers\TreatmentsController;
use App\Http\Controllers\Dentistdashboard;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DentistProfile; 
use App\Http\Controllers\AddtoCartController;

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
// landing Page
Route::get('/',[UserController::class, 'index'])->name('landing');

Route::get('index/aboutUs',[UserpageController::class, 'about'])->name('about');
Route::get('index/contact',[UserpageController::class, 'contact'])->name('contact');
Route::get('index/appointment',[UserpageController::class, 'appointment'])->name('appointments');
Route::get('index/patienceInformation',[UserpageController::class, 'patienceInformation'])->name('patienceInformation');
Route::get('index/products',[UserpageController::class, 'products'])->name('products');
Route::get('index/services',[UserpageController::class, 'services'])->name('services');
Route::get('index/dentist',[UserpageController::class, 'dentist'])->name('our.dentist');


// Login
Route::get('login',[UserController::class, 'login'])->name('login');
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

// Homepage
Route::get('dental/home',[UserpageController::class, 'dental'])->name('home');
Route::get('dental/about',[UserpageController::class, 'dentalAbout'])->name('userAbout');
Route::get('dental/contact',[UserpageController::class, 'dentalContact'])->name('userContact');
Route::get('dental/patientInformation',[UserpageController::class, 'pInformation'])->name('pinformation');
Route::post('dental/pInfo',[UserpageController::class, 'pInfo'])->name('pinfo');
Route::post('appointment',[UserpageController::class, 'setAppointment'])->name('set.appointment');
Route::get('dental/appointments',[UserpageController::class, 'dentalApp'])->name('userApp');
Route::get('dental/services',[UserpageController::class, 'dentalServices'])->name('dentalServices');
Route::get('homepage/dentist',[UserpageController::class, 'userdentist'])->name('userDentist');
Route::get('homepage/dashboard',[UserpageController::class, 'appointmentTable'])->name('appointmentTable');
Route::get('homepage/doneAppointments',[UserpageController::class, 'done'])->name('doneApp');
Route::get('cancelApp/{id}',[UserpageController::class, 'cancelApp']);
Route::get('viewMyOrder/{id}',[UserpageController::class, 'myOrder']);


// CategoryController
Route::get('category/dentalCategory',[CategoryController::class, 'index'])->name('category.products');
Route::get('add/category',[CategoryController::class, 'create'])->name('add.category');
Route::post('add.categories',[CategoryController::class, 'store'])->name('add.categories');
Route::get('view.category/{category_id}',[CategoryController::class, 'show']);

// Category List
// Route::get('/view/category/1',[UserpageController::class, 'viewCategory1']);

// Admin
Route::get('admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('admin/reports',[AdminController::class, 'reports'])->name('admin.reports');
Route::get('/show/appointments/{id}',[AdminController::class, 'showApp']);
Route::post('/updateAppointments/{id}',[AdminController::class, 'update']);
Route::get('admin/profile',[AdminController::class, 'profile'])->name('admin.profile');
Route::get('admin/Editprofile',[AdminController::class, 'editProfile'])->name('edit.Editprofile');
Route::get('admin/orders',[AdminController::class, 'orders'])->name('orders');
Route::post('/updateStatus/{id}',[AdminController::class, 'changeStatus']);
Route::get('admin/payment',[AdminController::class, 'payment'])->name('payment');
Route::get('view/Receipt/{id}',[AdminController::class, 'receipt']);
Route::post('/payment_details/{id}',[AdminController::class, 'paymentDetails']);
Route::post('/service_payment/{id}',[AdminController::class, 'servicePayment']);
Route::get('adminViewOrder/{id}',[AdminController::class, 'adminViewOrder']);
Route::get('viewOrder/{id}',[AdminController::class, 'viewOrder']);
Route::post('changeOrderStatus/{id}',[AdminController::class, 'changeOrderStatus']);
Route::get('view/Receipt/service/{id}',[AdminController::class, 'serviceReceipt']);
Route::post('/update-quantity', [AdminController::class, 'updateQuantity'])->name('updateQuantity');
Route::post('product/details', [AdminController::class, 'product_details'])->name('product.details');






// Patient Controller
Route::resource('patients',PatientController::class);
Route::get('viewPatient/{id}',[PatientController::class, 'show']);
Route::get('dental/Patient',[PatientController::class, 'index'])->name('dental.patient');
Route::post('/delete/appointment/{id}',[PatientController::class, 'destroy']);
Route::get('users',[PatientController::class, 'user'])->name('users.manage');
Route::get('/viewUsers/{id}',[PatientController::class, 'viewUser']);

// Admin Product 
Route::resource('products',ProductController::class);
Route::get('dental/products/',[ProductController::class, 'index'])->name('product.view');
Route::get('add/products',[ProductController::class, 'create'])->name('add.products');
Route::post('add/product',[ProductController::class, 'store'])->name('add.product');
Route::post('product/stock/{id}',[ProductController::class, 'stock']);

// Homepage Products
Route::get('homepage/products',[UserpageController::class, 'dentalProduct'])->name('userProducts');
Route::get('homepage/showCart',[UserpageController::class, 'showcart'])->name('showCart');
Route::get('/show/product/{id}',[UserpageController::class, 'showProduct']);
Route::get('/view/product/{id}',[UserpageController::class, 'viewProduct']);
Route::get('/deleteCart/{id}',[UserpageController::class, 'deleteCart']);

// Add to Cart
Route::post('/addcart/{id}',[AddtoCartController::class, 'addcart']);
Route::post('checkout',[AddtoCartController::class, 'checkout'])->name('order');
Route::post('orderDetails',[AddtoCartController::class, 'orderdetails'])->name('orderDetails');
Route::get('cancelOrder',[AddtoCartController::class, 'cancelOrder'])->name('cancelOrder');
Route::get('confirmOrder',[AddtoCartController::class, 'confirm'])->name('confirm.order');

// Treatments
Route::get('admin/dentalTreatments',[TreatmentsController::class, 'index'])->name('dental.treatments');
Route::resource("/treatments", TreatmentsController::class);
Route::post('dental/treatments',[TreatmentsController::class, 'store'])->name('dental.treat');
Route::get('admin/dentalTreatments',[TreatmentsController::class, 'index'])->name('dental.treatments');

// Dentist Controller
Route::get('dentist/list',[DentistController::class, 'list'])->name('dentist.list');
Route::get('create/account',[DentistController::class, 'account'])->name('create.account');
Route::get('/viewPatients/{id}',[DentistController::class, 'showPatient']);
Route::post('registered/account',[DentistController::class, 'registered'])->name('account.action');
Route::resource('dental', DentistController::class);
Route::resource('appointments', Appointments::class);
Route::get('admin/appointments',[Appointments::class, 'index'])->name('appointment');
Route::post('/dentistAppointmentUpdate/{id}',[DentistController::class, 'updateStatus']);
Route::post('/addTreatment/{treatment_id}',[DentistController::class, 'addtreatment']);
Route::post('/addDrugs/{id}',[DentistController::class, 'adddrugs']);
Route::get('/myPatients/{id}',[DentistController::class, 'myPatient']);
Route::get('/deleteService/{id}',[DentistController::class, 'deleteService']);
Route::get('/deleteMedical/{id}',[DentistController::class, 'deleteMedical']);
Route::get('printPrescription',[DentistController::class, 'print'])->name('printPrescription');
Route::get('dentist/calendar',[DentistController::class, 'calendar'])->name('calendar');
Route::get('payment/information',[DentistController::class, 'paymentInfo'])->name('payment.info');
Route::get('dentist/reports',[DentistController::class, 'dentalReports'])->name('dental.reports');
Route::get('dentist/schedule',[DentistController::class, 'schedule'])->name('dentist.schedule');
Route::post('schedules', [DentistController::class, 'dentist_schedule'])->name('schedules.store');


// Dentist Profile
Route::get('dentist/profile',[DentistProfile::class, 'index'])->name('dentist.profile');
Route::get('edit/profile',[DentistProfile::class, 'edit'])->name('edit.profile');
Route::post('store/profile',[DentistProfile::class, 'store'])->name('store.profile');

// Admin Profile
Route::get('admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('admin/profile',[AdminController::class, 'profile'])->name('admin.profile');
Route::get('admin/Editprofile',[AdminController::class, 'editProfile'])->name('edit.Editprofile');
Route::post('admin/Updateprofile',[AdminController::class, 'adminUpdateProfile'])->name('store.adminProfile');

// Dentist-dashboard
Route::get('dentist/dashboard',[Dentistdashboard::class, 'index'])->name('dentist.dashboard');
Route::get('dentist/patients',[AdminController::class, 'dentalpatients'])->name('dental.patients');


//User Page
Route::get('homepage/myprofile',[UserpageController::class, 'profile'])->name('profile');
Route::get('homepage/editprofile',[UserpageController::class, 'editProfile'])->name('editProfile');
Route::post('homepage/updateProfile',[UserpageController::class, 'updateProfile'])->name('updateProfile');
