<?php

use App\Http\Controllers\admin\CauHoiController;
use App\Http\Controllers\admin\CauTraLoiController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DiemController;
use App\Http\Controllers\admin\KetLuanController;
use App\Http\Controllers\admin\LuatController;
use App\Http\Controllers\admin\NganhController;
use App\Http\Controllers\admin\NhomNganhController;
use App\Http\Controllers\admin\TieuChiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TVTSController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RuleEngineController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/TVTS-diem', [TVTSController::class, 'diem'])->name('TVTS-diem');
Route::post('/TVTS-diem', [TVTSController::class, 'resultdiem'])->name('result_diem');
Route::get('/getmonthi/{id}', [TVTSController::class, 'getmonthi']);

Route::get('/TVTS-holland', [TVTSController::class, 'holland'])->name('TVTS-holland');
Route::post('/TVTS-holland', [TVTSController::class, 'resultHolland'])->name('result_holland');
// Route::get('/test', function () {
//     // Sử dụng hệ suy diễn tiến

//     // Tạo đối tượng hệ suy diễn
//     $ruleEngine = new RuleEngineController();

//     // Thêm các quy tắc luật
//     $ruleEngine->addRule(['Sở thích' => 'Khoa học tự nhiên'], 'Khoa học tự nhiên');
//     $ruleEngine->addRule(['Sở thích' => 'Nghệ thuật'], 'Mỹ thuật');
//     $ruleEngine->addRule(['Sở thích' => 'Kinh doanh', 'Học lực' => 'Giỏi'], 'Quản trị kinh doanh');
//     $ruleEngine->addRule(['Sở thích' => 'Kinh doanh', 'Học lực' => 'Khá'], 'Marketing');
//     $ruleEngine->addRule(['Sở thích' => 'Khoa học xã hội'], 'Khoa học xã hội');
//     $ruleEngine->addRule(['Khả năng' => 'Năng động', 'Sở thích' => 'Thể thao'], 'Giáo dục thể chất');
//     $ruleEngine->addRule(['Khả năng' => 'Logic', 'Sở thích' => 'Toán học'], 'Toán học');

//     // Thêm các sự kiện đầu vào
//     $ruleEngine->addFact(['Sở thích' => 'Kinh doanh']);
//     $ruleEngine->addFact(['Học lực' => 'Giỏi']);

//     // Suy diễn
//     $ruleEngine->infer();

//     // Lấy danh sách các sự kiện đã suy diễn
//     $inferredFacts = $ruleEngine->getInferredFacts();

//     // In kết quả suy diễn
//     echo "Các sự kiện đã suy diễn:\n";
//     foreach ($inferredFacts as $fact) {
//         foreach ($fact as $key => $value) {
//             echo $key . ': ' . $value . "\n";
//         }
//         echo "\n";
//     }
// });


Route::get('/TVTS-kethop', [TVTSController::class, 'kethop'])->name('TVTS-kethop');
Route::post('/TVTS-kethop', [TVTSController::class, 'result'])->name('result-kethop');




Route::get('/login', [LoginController::class, 'index'])->name('login');


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/', [DashboardController::class, 'index']);

    //ngành
    Route::get('nganh', [NganhController::class, 'index'])->name('nganh');

    Route::get('nganh/form', [NganhController::class, 'loadForm'])->name('add-nganh');
    Route::post('nganh/form', [NganhController::class, 'insert'])->name('add-nganh');

    Route::get('nganh/formUpdate/{id}', [NganhController::class, 'loadFormUpdate'])->name('update-nganh');
    Route::post('nganh/formUpdate/{id}', [NganhController::class, 'update']);

    Route::delete('nganh/delete/{id}', [NganhController::class, 'delete'])->name('delete-nganh');
    //điểm
    Route::get('diem', [DiemController::class, 'index'])->name('diem');
    Route::post('diem', [DiemController::class, 'import'])->name('import-diem');


    //nhóm ngành
    Route::get('/nhom-nganh', [NhomNganhController::class, 'index'])->name('nhom-nganh');
    Route::get('/nhom-nganh/add-nhom-nganh', [NhomNganhController::class, 'loadForm'])->name('add-nhom-nganh');
    Route::get('/nhom-nganh/{id}', [NhomNganhController::class, 'loadFormUpdate'])->name('form-update-nhom-nganh');

    Route::post('/nhom-nganh/add-nhom-nganh', [NhomNganhController::class, 'insert'])->name('insert_nhom_nganh');
    Route::post('/nhom-nganh/{id}', [NhomNganhController::class, 'update'])->name('update_nhom_nganh');
    Route::delete('/nhom-nganh/delete/{id}', [NhomNganhController::class, 'delete'])->name('delete-nhom-nganh');


    //Cau hoi
    Route::get('/cau-hoi', [CauHoiController::class, 'index'])->name('cau-hoi');
    Route::post('/cau-hoi', [CauHoiController::class, 'insert'])->name('insert-cau-hoi');
    Route::delete('/cau-hoi/delete/{id}', [CauHoiController::class, 'delete'])->name('delete-cau-hoi');

    //cau tra loi
    Route::get('/cau-tra-loi', [CauTraLoiController::class, 'index'])->name('cau-tra-loi');
    Route::get('/cau-tra-loi/{id}', [CauTraLoiController::class, 'loadformupdate'])->name('form-update-cau-tra-loi');
    // Route::get('/cau-tra-loi/add-cau-tra-loi', [CauTraLoiController::class, 'loadForm'])->name('add-cau-tra-loi');
    Route::post('/cau-tra-loi', [CauTraLoiController::class, 'insert'])->name('add-cau-tra-loi');
    Route::delete('/cau-tra-loi/delete/{id}', [CauTraLoiController::class, 'delete'])->name('delete-cau-tra-loi');

    // Luật
    Route::get('/luat', [LuatController::class, 'index'])->name('luat');
    Route::post('/luat', [LuatController::class, 'insert'])->name('insert-luat');
    // Route::get('/luat/add', [LuatController::class, 'loadform'])->name('add-luat');
    // Route::post('/luat/add', [LuatController::class, 'insert'])->name('insert-luat');
    Route::delete('/luat/delete/{id}', [LuatController::class, 'delete'])->name('delete-luat');


    //Kết luân
    Route::get('/ket-luan', [KetLuanController::class, 'index'])->name('ket-luan');
    Route::post('/ket-luan', [KetLuanController::class, 'insert'])->name('insert-ket-luan');
    Route::delete('/ket-luan/delete/{id}', [KetLuanController::class, 'delete'])->name('delete-ket-luan');

    //tiêu chí
    Route::get('/tieu-chi', [TieuChiController::class, 'index'])->name('tieu-chi');
    Route::post('/tieu-chi', [TieuChiController::class, 'insert'])->name('tieu-chi');
    Route::delete('/tieu-chi/delete/{id}', [TieuChiController::class, 'delete'])->name('delete-tieu-chi');
});
