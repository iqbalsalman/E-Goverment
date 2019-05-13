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
                        <img src="{{URL::to('Home/images/peta.jpg')}}" alt="" class="img-fluid img-rounded">
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
