<?php

use App\Http\Livewire\Home\Home;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Admin\AddFish;
use App\Http\Livewire\Admin\AddPort;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Admin\Settings;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\AddRecord;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\ManageFish;
use App\Http\Livewire\Admin\ManagePort;
use App\Http\Livewire\Admin\EditFishPage;
use App\Http\Livewire\Admin\ManageRecord;
use App\Http\Livewire\Home\FishProfile;
use App\Http\Livewire\Home\FishProfileMap;

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

Route::get('/', Home::class)->name('user.home');
Route::get('/fish/profiles', FishProfile::class)->name('user.fish_profiles');
Route::get('/fish/profiles/{id}', FishProfileMap::class)->name('user.fish_map');


Route::middleware(['AuthCheck'])->prefix('admin')->group(function () {
    Route::get('/login', Login::class)->name('admin.login');
    Route::get('/register', Register::class)->name('admin.register');

    Route::get('/dashboard', Dashboard::class)->name('admin.dashboard');

    Route::get('/fish/add', AddFish::class)->name('admin.add_fish');
    Route::get('/fish/manage', ManageFish::class)->name('admin.manage_fish');
    Route::get('/fish/manage/edit/{fish_id}', EditFishPage::class)->name('admin.edit_fish');
    
    Route::get('/port/add', AddPort::class)->name('admin.add_port');
    Route::get('/port/manage', ManagePort::class)->name('admin.manage_port');
    
    Route::get('/record/add', AddRecord::class)->name('admin.add_record');
    Route::get('/record/manage', ManageRecord::class)->name('admin.manage_record');
    
    Route::get('/settings', Settings::class)->name('admin.settings');
});
