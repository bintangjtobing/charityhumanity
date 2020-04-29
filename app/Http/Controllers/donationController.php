<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\donationDB;

class donationController extends Controller
{
    public function index()
    {
        return view('home.donasi');
    }
    public function konfirmasipembayaran()
    {
        return view('home.konfirmasi');
    }
}
