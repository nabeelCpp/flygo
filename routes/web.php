<?php
// namespace  App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\Dashboard as AdminDashboard;
use App\Http\Controllers\Agent\Dashboard as AgentDashboard;
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

Route::get('/', function () {
    return view('landing');
});

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});
// Admin routes
Route::middleware('auth:admin')->prefix('admin')->group(function(){
    Route::get('', [AdminDashboard::class, 'index'])->name('admin');
    Route::get('settings', [AdminDashboard::class, 'settings'])->name('admin.settings');
    Route::get('agents', [AdminDashboard::class, 'agents'])->name('admin.agents');
    Route::post('agents', [AdminDashboard::class, 'agentsPost'])->name('admin.agents.post');
    Route::post('agent/status', [AdminDashboard::class, 'agentsStatus'])->name('admin.agent.status');
});
// Agent Routes

Route::middleware('auth:agent')->prefix('agent')->group(function(){
    Route::get('', [AgentDashboard::class, 'index'])->name('agent');
    Route::get('settings', [AgentDashboard::class, 'settings'])->name('admin.settings');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/admin/login',[LoginController::class,'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin/login',[LoginController::class,'adminLogin'])->name('admin.login');
Route::get('/agent/login',[LoginController::class,'showAgentLoginForm'])->name('agent.login-view');
Route::post('/agent/login',[LoginController::class,'agentLogin'])->name('agent.login');

Route::get('/agent/register',[RegisterController::class,'showAgentRegisterForm'])->name('agent.register-view');
Route::post('/agent/register',[RegisterController::class,'agentRegister'])->name('agent.register');


