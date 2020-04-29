@extends('welcome')
@section('title','Konfirmasi Pembayaran')
@section('content')
<div id="slider" class="inspiro-slider dots-creative" data-height-xs="360">

    <div class="slide kenburns"
        style="background-image:url('https://res.cloudinary.com/sarjanamalam/image/upload/v1588135536/cos/media/sec_mzw7e4.jpg');">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="slide-captions text-center text-light">

                <span class="strong">Charities For Humanity</span>
                <h1>Konfirmasi Pembayaran</h1>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <form action="/confirmation-payment" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h3>Konfirmasi pembayaran anda disini</h3>
                    <div class="form-row">
                        <div class="form-group col-lg-4">
                            <label for="">Nama Lengkap <span class="requiredstarr">*</span></label>
                            <input type="text" name="nama" id="" class="form-control" required>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="">Email <span class="requiredstarr">*</span></label>
                            <input type="email" name="email" id="" class="form-control" required>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="">No Ponsel <span class="requiredstarr">*</span></label>
                            <input type="text" name="notelp" id="" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-12">
                            <label for="">Tanggal Transfer <span class="requiredstarr">*</span></label>
                            <input type="text" class="form-control" name="date" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-12">
                            <label for="">Jumlah Donasi <span class="requiredstarr">*</span></label>
                            <input type="text" class="form-control" name="jumlahdonasi" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-6">
                            <label for="">Bank Pengirim</label>
                            <input type="text" name="senderbank" id="" class="form-control">
                            <small>Jika pembayaran secara langsung, tidak perlu diisi.</small>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="">Atas Nama Rekening Pengirim</label>
                            <input type="text" name="sendername" id="" class="form-control">
                            <small>Jika pembayaran secara langsung, tidak perlu diisi.</small>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-6">
                            <label for="">Metode Pembayaran <span class="requiredstarr">*</span></label>
                            <select name="tobank" class="form-control custom-select" required>
                                <option value="BCA Transfer">Pembayaran via bank BCA Transfer</option>
                                <option value="Mandiri Transfer">Pembayaran via bank Mandiri Transfer</option>
                                <option value="Cash">Pembayaran secara langsung</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="">Rekening Tujuan</label>
                            <input type="text" name="receivedbank" id="" class="form-control">
                            <small>Jika pembayaran secara langsung, tidak perlu diisi.</small>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-6">
                            <label for="">Kode Refrensi <span class="requiredstarr">*</span></label>
                            <input type="text" name="refnumber" id="" class="form-control" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="">Bukti Transaksi <span class="requiredstarr">*</span></label>
                            <input type="file" name="bukti" id="" class="form-control" required>
                        </div>
                    </div>
                    <div class="m-t-30">
                        <h3>Informasi / Pesan yang ingin disampaikan</h3>
                        <div class="form-row">
                            <div class="form-group col-lg-12">
                                <textarea name="notes"
                                    placeholder="Tulis disini tentang informasi pembayaran anda, agar dapat mempercepat proses konfirmasi pembayaran anda."
                                    id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-rounded">Selesaikan pembayaran</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
