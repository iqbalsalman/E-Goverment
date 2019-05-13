@extends('layout/layout2')
@section('contens')
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>Sejarah Berdirinya Kabupaten Bandung</h4>
                        <p>Kabupaten Bandung terletak di Cekungan Bandung dengan ciri khas dataran tinggi luas di bagian tengah yang dikelilingi pegunungan di sebelah barat, selatan, utara dan timurnya. Sungai Citarum yang berhulu di Gunung Wayang mengalir di kawasan ini sebelum masuk ke waduk Saguling. Sebagian besar kota-kota Kecamatan padat penduduk di Kabupaten ini seperti Majalaya, Soreang, Banjaran, Rancaekek, Dayeuhkolot, Margahayu, Cileunyi, Baleendah, Bojongsoang dan lain-lain terletak di dataran ini. Kawasan ini juga selalu dihantui banjir yang melanda setiap musim hujan dikarenakan aliran kali yang ada di seluruh Cekungan Bandung bermuara ke sungai Citarum ditambah drainase yang buruk, pencemaran sungai yang parah serta dangkalnya sungai.</p>

                        <p>Adapun wilayah yang terletak di Pegunungan yaitu Ciwidey, Pangalengan di selatan serta Cimenyan dan Cilengkrang di bagian utara yang jika dilihat dari peta seolah terpisah dari wilayah utama Kabupaten Bandung karena terhalang Kota Bandung. Gunung yang ada di Kabupaten Bandung antara lain: Gunung Patuha (2.334 m), Gunung Malabar (2.321 m), Gunung Papandayan (2.262 m), dan Gunung Manglayang</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15839.566300485307!2d107.5277443!3d-7.0220295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68edcd39c739eb%3A0xf6fcdb83e67e9d06!2sKantor+Bupati+Bandung!5e0!3m2!1sid!2sid!4v1557174041494!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
			<div class="row align-items-center">

				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>Daftar Bupati Kabupaten Bandung</h4>
                        <p>Berikut adalah para Bupati Bandung dari masa ke masa, mulai dari Periode Tahun 1846 sampai dengan Tahun 2010. Silahkan klik pada foto masing-masing Bupati untuk mendapatkan informasi lebih lanjut tentang kepemimpinannya di Kabupaten Bandung.</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="{{URL::to('Home/images/bupati.jpg')}}" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->


            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
@endsection
