<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\donationDB;
use App\confirmationDB;

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
    public function payment(Request $request)
    {
        $pay = new donationDB();
        $ref = str_random(6);
        $nama_don = $request->namalengkap;
        $metode = $request->metode;
        $nilai = $request->currency;
        $pay->refnumber = $ref;
        $pay->status = 'unpaid';
        $pay->jumlah_donasi = $nilai;
        $pay->metode = $metode;
        $pay->nama_donatur = $nama_don;
        $pay->email = $request->email;
        $pay->telp = $request->nohp;
        $pay->instagram = $request->instagram;
        $pay->note = $request->notes;
        $pay->gender = $request->gender;
        $pay->logIp = $request->getClientIp();
        if ($request->hasFile('pic')) {
            $request->file('pic')->move('file/profilepic/' . $request->namalengkap, $request->file('pic')->getClientOriginalName());
            $pay->pic = $request->file('pic')->getClientOriginalName();
        }
        $pay->save();
        return view('home.paymentdone', ['ref' => $ref, 'nama_don' => $nama_don, 'nilai' => $nilai, 'metode' => $metode]);
    }
    public function confirmation(Request $request)
    {
        $conf = new confirmationDB();
        $nama = $request->nama;
        $email = $request->email;
        $telp = $request->notelp;

        $conf->date = $request->date;
        $conf->nama = $nama;
        $conf->notelp = $telp;
        $conf->email = $email;
        $conf->jumlah_donasi = $request->jumlahdonasi;
        $conf->senderbank = $request->senderbank;
        $conf->sendername = $request->sendername;
        $conf->tobank = $request->tobank;
        $conf->receivedbank = $request->receivedbank;
        $conf->refnumber = $request->refnumber;
        $conf->notes = $request->notes;
        if ($request->hasFile('bukti')) {
            $request->file('bukti')->move('file/buktitransaksi/' . $request->nama, $request->file('bukti')->getClientOriginalName());
            $conf->bukti = $request->file('bukti')->getClientOriginalName();
        }
        $conf->save();
        return view('home.confirmationdone', ['nama' => $nama, 'email' => $email, 'telp' => $telp]);
    }
}
