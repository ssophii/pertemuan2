<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();

        // dd($users); // untuk cek isi variabel
        return view('home', ['users' => $users ]);
    }
}
