<?php

use App\Models\Freelance;
use App\Models\komunitas;
use App\Models\Komunitas as ModelsKomunitas;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;
 


use function PHPUnit\Framework\returnSelf;

Route::get('/', function () {
    return view('home', ['title'=>'Beranda']);
});

Route::get('/tentang', function () {
    return view('tentang' , ['nama' => 'Tiara', 'title'=>'Tentang']);
});

Route::get('/kegiatan', function () {
    return view('kegiatan' , ['title'=>'Kegiatan']);
});

Route::get('/komunitas', function () {
    // melakukan query dengan eager loading-lawannya lazy loading (with)
    // contoh lain : $komunitas = Komunitas::with('created_by','kategori')->latest()->get(); =>kalo ada 2 fungsi yang mau di eager loading, dan berada di satu kelas
    $komunitas = Komunitas::with('created_by')->latest()->get();
    return view('komunitas' , ['title'=>'Komunitas','komunitas' => $komunitas]);
});

Route::get('/komunitas/{detailkomun:slug}', function (Komunitas $detailkomun) {
        // $detailkomun = Komunitas::find($slug);
        return view('detailkomun', ['title' => 'Detail Komunitas', 'detailkomun'=>$detailkomun]); 
});

// Route::get('/created_by/{user:username}', function (User $user) {
    
//         return view('komunitas', ['title' => 'Komunitas yang dibuat oleh ' . $user->name, 'komunitas'=>$user->komunitas]); 
// });
Route::get('/created_by/{user:username}', function (User $user) {
    $user->load('komunitas'); // Lazy-eager loading
    return view('komunitas', [
        'title' => 'Komunitas yang dibuat oleh ' . $user->name,
        'komunitas' => $user->komunitas
    ]);
});


Route::get('/freelance', function () {
    $freelance = Freelance::with('freelance_id')->latest()->get();
    return view('freelance' , ['title'=>'Freelance','freelance' => $freelance]);
});

Route::get('/freelance/{detailfree:slug}', function (Freelance $detailfree) {
        // $detailkomun = Komunitas::find($slug);
        return view('detailfree', ['title' => 'Detail Frelancer', 'detailfree'=>$detailfree]); 
});