@extends('welcome')
@section('title','Confirmation Your Payment')
@section('content')
<section class="paymentdone">
    <div class="container">
        <div class="row">
            <div class="offset-3 col-lg-6 text-left">
                <div class="info-payment">
                    <h3>Donasi kamu hampir kami terima!</h3>
                    Terima kasih <b>{{$nama_don}}</b>! Telah bersedia menjadi donatur program ini.<br>Ayo bayar
                    pembayaran
                    mu sekarang lewat <b>{{$metode}}</b>.<br>
                    <b>Cara pembayarannya:</b><br><br>
                    @if($metode=='Mandiri Transfer')
                    Transfer ke nomor rekening<br>
                    Atas Nama: Agnes Magdalena Sirait<br>
                    Nomor Rekening: 1060-0132-9597-0<br>
                    Bank: Mandiri
                    @elseif($metode=='BCA Transfer')
                    Transfer ke nomor rekening<br>
                    Atas Nama: Bintang Cato Jeremia L Tobing<br>
                    Nomor Rekening: 383-124-6616<br>
                    Bank: Bank Central Asia (BCA)
                    @else
                    Kamu transfer melalui pembayaran langsung, kamu bisa datang ke basecamp nya Charities Of Humanity
                    dan langsung memberikan dana tersebut.
                    @endif
                    <br><br>
                    Dan jangan lupa untuk selalu mencantumkan kode refrensi kamu dibawah ini, ketika hendak
                    melakukan
                    transfer ya.</p>
                    <h3 title="Copy Kode Refrensi">{{$ref}}</h3>
                    Sudah bayar?<br><a href="/konfirmasi-pembayaran" class="btn btn-primary btn-sm">Konfirmasi
                        Pembayaran</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
