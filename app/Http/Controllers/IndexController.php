<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\donationDB;
use App\confirmationDB;

class IndexController extends Controller
{
    public function index()
    {
        $donations = donationDB::all();
        $countdonations = DB::table('donations')
            ->sum('donations.jumlah_donasi');
        return view('home.index', ['donations' => $donations, 'countdonations' => $countdonations]);
    }
}
