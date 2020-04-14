<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin/dashboard');
    }
}
// Route::get('/admin', function () {
//     return view('admin/dashboard');
// });