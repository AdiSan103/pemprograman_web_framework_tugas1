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


// Route::get('home', function() {
//     echo 'ini home';
// });

// kita punya variabel (wadah) dengan $nama
// Route::get('home/{nama}', function($nama) {
//     echo 'Selamat Datang ' . $nama;
// });

// Route::get('home/{nama}/{alamat}', function($nama, $alamat) {
//     echo 'Selamat Datang ' . $nama  . ' di ' . $alamat;
// });

// Route::get('/biodata', function() {
//     $data = [
//         'nama' => 'disan',
//     ];
//     $bilangan = [1,2,3];
//     return view('mahasiswa.biodata', compact('data','bilangan'));
// });

Route::get('/home', function() {
    return view('mahasiswa.home');
});

Route::get('/profile', function() {
    return view('mahasiswa.profile');
});

Route::get('/work', function() {
    return view('mahasiswa.work');
});