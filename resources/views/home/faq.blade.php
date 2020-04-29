@extends('welcome')
@section('title','Frequently Asked Questions')
@section('content')
<div id="slider" class="inspiro-slider dots-creative" data-height-xs="360">

    <div class="slide kenburns"
        style="background-image:url('https://res.cloudinary.com/sarjanamalam/image/upload/v1588135536/cos/media/sec_mzw7e4.jpg');">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="slide-captions text-center text-light">

                <span class="strong">Charities For Humanity | Pertanyaan yang sering diajukan</span>
                <h1>F.A.Q</h1>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3>Pertanyaan Umum <small>(4)</small></h3>
                <div class="accordion toggle fancy radius clean">
                    <div class="ac-item ac-active">
                        <h5 class="ac-title"><i class="fa fa-question-circle"></i>Apa Charities For Humanity?
                        </h5>
                        <div style="" class="ac-content">Charities For Humanity adalah pergerakan dari beberapa pemuda
                            yang domisili di Medan, yang memiliki ide dan pemikiran positif untuk bertujuan mendukung
                            pemerintah dalam menanggulangi pandemi covid-19. Pergerakan yang berbentuk sosial, dimana
                            kami menggalang donasi untuk ditukarkan kedalam makanan gratis dan vitamin gratis yang
                            nantinya akan kami bagikan ke orang yang sangat membutuhkan. Tunawisma, Kalangan Bawah akan
                            menjadi prioritas kami.</div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title"><i class="fa fa-question-circle"></i>Bagaimana cara gabung menjadi donatur
                            disini?</h5>
                        <div style="display: none;" class="ac-content">Kamu bisa menjadi donatur lewat mengirimkan dana
                            seikhlas kamu ke rekening yang telah kami sediakan di link website ini.</div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title"><i class="fa fa-question-circle"></i>Apakah kami bisa dipercaya?</h5>
                        <div style="display: none;" class="ac-content">Ya. Kami bisa dan yakin jika kami dapat
                            dipercaya. Karena disetiap penggalangan dana, kami akan membuka siapa saja yang sudah
                            memberikan donasi nya,dan juga membuka nilai yang kamu kasih. Jumlah nilai dana yang
                            terkumpulkan, apa yang kami beli dari nilai tersebut, dokumentasi kegiatan kami, kami akan
                            menerapkan sistem transparansi untuk kegiatan kami ini.</div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title"><i class="fa fa-question-circle"></i>Daerah yang dapat kami jangkau?</h5>
                        <div style="display: none;" class="ac-content">Saat ini, kami dapat menjangkau daerah kota Medan
                            dan sekitarnya, dikarenakan ini adalah langkah perdana kami dalam membangun kegiatan sosial
                            seperti ini. Mungkin dikedepannya, jika Tuhan meng-izinkan untuk kami dapat membantu lebih
                            banyak orang, kami akan menjangkau ke kota kota lainnya.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h3>Tentang hal donasi <small>(3)</small></h3>
                <div class="accordion toggle fancy radius clean">
                    <div class="ac-item ac-active">
                        <h5 class="ac-title"><i class="fa fa-question-circle"></i>Apakah nilai dana ditetapkan untuk
                            donasi?</h5>
                        <div class="ac-content" style="">Tidak. Sama sekali tidak. Kami hanya mengharapkan agar kamu
                            memberi dengan seikhlas hati kamu, seiring dengan doa agar apa yang kita berikan ke mereka
                            yang membutuhkan, dapat berguna bagi mereka, dan mereka lebih terbantu dengan adanya uluran
                            tangan bantuan kita. </div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title"><i class="fa fa-question-circle"></i>Kapan donasi ditutup?</h5>
                        <div class="ac-content" style="display: none;">Untuk langkah perdana kami, kami sepakat untuk
                            menutup donasi ini pada tanggal 17 Mei 2020. Agar kita tidak terlambat untuk membantu
                            mereka.</div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title"><i class="fa fa-question-circle"></i>Kami mau memberikan donasi, bagaimana
                            caranya?</h5>
                        <div class="ac-content" style="display: none;">Saat ini kami menerima pembayaran donasi lewat
                            bank transfer BCA dan Mandiri. Silahkan cek dan klik link ini agar dapat memberikan donasi.
                            <a href="/donasi">Donasi sekarang</a></div>
                    </div>
                </div>
                <div class="m-t-40">
                    <h3>Apakah kamu mempunyai pertanyaan lainnya?</h3>
                    <p>Kamu boleh mengirimkan pertanyaan kamu mengenai gerakan ini ke email<br>
                        <a href="mailto:ask-cfh@sarjanamalam.com">ask-cfh@sarjanamalam.com</a></p>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
