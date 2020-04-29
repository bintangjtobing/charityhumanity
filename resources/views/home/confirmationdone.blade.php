@extends('welcome')
@section('title','Konfirmasi Pembayaran')
@section('content')
<section class="confirmationdone">
    <div class="container">
        <div class="row">
            <div class="offset-3 col-lg-6 text-left">
                <div class="info-payment">
                    <h3>Konfirmasi Pembayaran Kamu, Kami Terima!</h3>
                    Terima kasih <b>{{$nama}}</b>! Telah melakukan konfirmasi pembayaran.<br>
                    <p>
                        Kami akan memberitahu jika pembayaran sudah sukses lewat email atau pemberitahuan SMS yang telah
                        terdaftar pada sistem pertama kali nya.<br><br>
                        Hormat kami,<br>
                        Team Chrities For Humanity!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
