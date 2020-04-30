@extends('welcome')
@section('title','Portal Donasi')
@section('content')
<div id="slider" class="inspiro-slider dots-creative" data-height-xs="360">

    <div class="slide kenburns"
        style="background-image:url('https://res.cloudinary.com/sarjanamalam/image/upload/v1588135536/cos/media/sec_mzw7e4.jpg');">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="slide-captions text-center text-light">

                <span class="strong">Charities For Humanity</span>
                <h1>Portal Donasi</h1>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="container">
        <div class="row donasisection">
            <div class="col-lg-5">
                <h2>#Berdonasi</h2>
                <p>Dengan nilai berapapun yang kamu donasikan, kamu sudah membantu 1 jiwa dengan makanan dan vitamin
                    gratis. Kami berharap, aksi ini dapat menjadi sumber kebahagiaan bagi para mereka yang membutuhkan
                    bantuan ini.</p>
            </div>
            <div class="col-lg-7">
                <form action="/request-payment" method="POST">
                    {{ csrf_field() }}
                    <h3>1. Isi Form Donasi</h3>
                    <div class="form-row">
                        <div class="form-group col-lg-6">
                            <label for="">Jumlah Donasi</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                {{-- <input type="text" name="currency" class="form-control" id="currency-field"
                                    pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" data-type="currency"
                                    placeholder="Rp.1,000,000.00" required> --}}
                                <input type="text" name="currency" class="form-control" id="">
                            </div>
                            <small>Tidak ada minimum jumlah donasi.</small>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="">Pilih Metode Pembayaran</label>
                            <select name="metode" class="form-control custom-select" required>
                                <option value="BCA Transfer">Pembayaran via bank BCA Transfer</option>
                                <option value="Mandiri Transfer">Pembayaran via bank Mandiri Transfer</option>
                                <option value="Cash">Pembayaran secara langsung</option>
                            </select>
                        </div>
                    </div>
                    <div class="m-t-30">
                        <h3>2. Isi Data Diri</h3>
                        <div class="form-row">
                            <div class="form-group col-lg-12">
                                <label for="">Foto Kamu (Opsional)</label>
                                <input type="file" name="pic" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-8">
                                <label for="">Nama Lengkap</label>
                                <input type="text" name="namalengkap" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="">Jenis Kelamin</label>
                                <select name="gender" id="" class="form-control custom-select" required>
                                    <option value="L">Pria</option>
                                    <option value="P">Wanita</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label for="">Email</label>
                                <input type="email" name="email" placeholder="mail@mail.com" class="form-control"
                                    required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="">No Ponsel</label>
                                <input type="text" name="nohp" class="form-control" placeholder="0888-8888-8888"
                                    required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="Instagram (Opsional)">Instagram (Opsional)</label>
                                <input type="text" name="instagram" class="form-control" placeholder="@exampleexample">
                            </div>
                        </div>
                    </div>
                    <div class="m-t-30">
                        <h3>3. Informasi / Pesan yang ingin disampaikan</h3>
                        <div class="form-row">
                            <div class="form-group col-lg-12">
                                <textarea name="notes"
                                    placeholder="Tulis disini tentang informasi tambahan ataupun pesan yang ingin kamu sampaikan kepada mereka yang membutuhkan ataupun kepada tim pergerakan Charities For Humanity..."
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
