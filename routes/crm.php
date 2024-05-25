<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\EmployReportController;
use App\Http\Controllers\EmploysReportsController;

 Route::get('users/create/employs', [UserController::class, 'createEmploys'])->name('users.create.employs');
 Route::get('companies/create/{country}', [CompanyController::class, 'create'])->name('companies.create');


 Route::middleware(['auth'])->prefix('crm/chat')->group(function () {
    Route::get('/index', [MessageController::class, 'index'])->name('crm.chat.index');
});



 Route::middleware(['auth'])->prefix('crm/reports')->group(function () {
    Route::get('/index', [EmploysReportsController::class, 'index'])->name('reports.index');
});
 Route::middleware(['auth','employ'])->prefix('crm/employ')->group(function () {
    Route::get('/main', function () {
        return view('crmEmploy');
    })->name('crm.employ.main');


    Route::get('/{user}', [EmployReportController::class, 'index'])->name('crm.employ.report');


});


Route::middleware(['auth','admin'])->prefix('crm/users')->group(function () {
    Route::get('/superAdmins', [UserController::class, 'superAdmins'])->name('superAdmins');
    Route::get('/admins', [UserController::class, 'admins'])->name('admins');
    Route::get('/employs', [UserController::class, 'employs'])->name('employs');
    Route::get('/registerEmploys', [UserController::class, 'registerEmploys'])->name('registerEmploys');
    Route::get('/freelancers', [UserController::class, 'freelancers'])->name('freelancers');

    Route::get('/create', [UserController::class, 'create'])->name('users.create.admins');

    Route::get('/{user}', [UserController::class, 'show'])->name('users.show');
    Route::post('/store', [UserController::class, 'store'])->name('users.store');
    Route::put('/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::put('/{user}/block', [UserController::class, 'block'])->name('users.block');

    // Route::get('/create', [UserController::class, 'create'])->name('users.create');
    // Route::get('/createEmploys', [UserController::class, 'createEmploys'])->name('users.create.employs');
});


Route::middleware(['auth','admin'])->prefix('crm/contracts')->group(function () {
    Route::get('/index/{user}', [ContractController::class, 'index'])->name('contracts.index');
    Route::get('/create/{user}', [ContractController::class, 'create'])->name('contracts.create');
});


Route::middleware(['auth','superAdmin'])->prefix('crm/companies')->group(function () {
    Route::get('/index', [CompanyController::class, 'index'])->name('companies.index');

  Route::get('/edit/{company}', [CompanyController::class, 'edit'])->name('companies.edit');

    Route::get('/registerCompanies', [CompanyController::class, 'registerCompanies'])->name('companies.registerCompanies');
    Route::get('/notWorking', [CompanyController::class, 'notWorking'])->name('companies.notWorking');
});


Route::middleware(['auth','admin'])->prefix('crm/projects')->group(function () {
    Route::get('/index', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/create', [ProjectController::class, 'create'])->name('projects.create');
});

Route::middleware(['auth','admin'])->prefix('crm/tasks')->group(function () {
    Route::get('/index', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/create', [TaskController::class, 'create'])->name('tasks.create');
});




