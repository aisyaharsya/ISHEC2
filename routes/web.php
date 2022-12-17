    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\userController;
    use App\Http\Controllers\LoginController;
    use App\Http\Controllers\RegisterController;
    use App\Http\Controllers\PuskesmasController;
    use App\Http\Controllers\DocrmformController;
    use App\Http\Controllers\DoctorScheduleController;
use App\Http\Controllers\ScheduleController;
use App\Models\DoctorSchedule;

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

    Route::get('/', [HomeController::class, 'home']);
    Route::post('/', [HomeController::class, 'findjadwal']);
    Route::post('/lihat-artikel', [PuskesmasController::class, 'lihatartikel']);

    Route::get('/login', [LoginController::class, 'login'])->middleware('guest')->name('login');


    Route::post('/login', [LoginController::class, 'authenticate']);

    Route::any('/logout', [LoginController::class, 'logout']);
    Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/docregister', [PuskesmasController::class, 'docregister']);
    route::get('/logout',[LoginController::class,'logout']);
    // 0 admin
    Route::get('/profile',[PuskesmasController::class,'profile'])->middleware('auth');
    Route::post('/profile',[PuskesmasController::class,'profilepost'])->middleware('auth');

    Route::group(['middleware'=>['auth','cekLevel:0']],function ()
    {
        route::get('/ad',[PuskesmasController::class, 'ad']);
        route::post('/ad',[PuskesmasController::class, 'adpost']);
        Route::get('/rekam-medis',[PuskesmasController::class,'rekammedis']);
        Route::post('/rekam-medis',[PuskesmasController::class,'rekammedisfind']);
        Route::get('/input-data',[PuskesmasController::class,'InputData']);
        Route::post('/input-data',[PuskesmasController::class,'InputDatafind']);
        Route::post('/update-profile-pasien',[PuskesmasController::class,'updateProfile']);
        Route::post('/update-profile-dokter',[PuskesmasController::class,'updateProfile']);
        Route::get('/adartikel', [PuskesmasController::class, 'adartikel']);
    });
    // 1 dokter
    Route::group(['middleware'=>['auth','cekLevel:1']],function ()
    {
        Route::get('/docjadwal', [PuskesmasController::class, 'docjadwal']);
        Route::get('/doc',[DoctorScheduleController::class, 'index']);
        Route::get('/docprofile', [PuskesmasController::class, 'docprofile']);
        Route::get('/docrmform', [DocrmformController::class, 'docrmform']);
        Route::post('/insertdata', [DocrmformController::class, 'insertdata']);
        Route::get('/docrm', [DocrmformController::class, 'view']);
        Route::post('/lihatrm', [DocrmformController::class, 'lihatrm']);
        Route::get('/docrmformEdit/{id}', [DocrmformController::class, 'edit']);
        Route::post('/edit', [DocrmformController::class, 'editpost']);
        Route::delete('/hapus/{id}', [DocrmformController::class, 'destroy']);

    });
    // 2 pasien
    Route::group(['middleware'=>['auth','cekLevel:2']],function ()
    {
        Route::get('/dashboard-pasien', [PuskesmasController::class ,'dashboardpasien']);
        Route::get('/reservasi',[PuskesmasController::class,'reservasi']);
    

    });
    Route::resource('/schedule', ScheduleController::class);
    
    