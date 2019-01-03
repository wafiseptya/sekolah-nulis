@extends('template/base')
@section('pageTitle', 'Belajar Nulis Buku Kapanpun Dimanapun')
@section('content')
<header class="masthead text-center text-white d-flex">
  <div class="container my-auto">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <h1 class="text">
          <strong>Belajar Nulis Buku Kapanpun Dimanapun</strong>
        </h1>
        <hr>
      </div>
      <div class="col-lg-8 mx-auto">
        <p class="text-faded mb-5">Platform belajar nulis buku online yang menghubungkan calon penulis dengan profesional di semua genre, dilengkapi fasilitas konseling penulisan, penerbitan dan penjualan.</p> 
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#subscribe">Lebih Lanjut</a>
      </div>
    </div>
  </div>
</header>
<!--
<section class="bg-primary" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="section-heading text-white">We've got what you need!</h2>
        <hr class="light my-4">
        <p class="text-faded mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
        <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
      </div>
    </div>
  </div>
</section> -->

<section id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">Layanan Kami</h2>
        <hr class="my-4">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box mt-5 mx-auto">
          <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
          <h3 class="mb-4">Guru Berpengalaman</h3>
          <p class="text-muted mb-0">Belajar langsung dengan penulis - penulis berpengalaman yang sesuai dengan bidangnya.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box mt-5 mx-auto">
          <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
          <h3 class="mb-4">Berbagi di Komunitas</h3>
          <p class="text-muted mb-0">Berbagi dalam komunitas akan sangat membantumu dalam mengukuhkan skill yang kamu miliki. Kamu bisa membantu dan atau meminta bantuan ketika kamu mengalami kesulitan melalui forum yang disediakan.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box mt-5 mx-auto">
          <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
          <h3 class="mb-3">Belajarnya Fleksible</h3>
          <p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box mt-5 mx-auto">
          <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
          <h3 class="mb-4">Nerbitin & Jualin Bukumu</h3>
          <p class="text-muted mb-0">You have to make your websites with love these days!</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Ini yang bagian subscribe -->
<section class="bg-dark text-white" id="subscribe">
  <div class="container text-center">
    <h2 class="section-heading text-center">Dapatkan informasi terkini dan ikuti kelas premium dengan diskon 10% bagi 100 pendaftar pertama. </h2> <br>
    <div class="subcription-info text-center">
      <form class="subscribe_form" action="/subscribes" method="post">
        <input required="" value="" placeholder="Masukkan email..." class="email" id="email" name="email" type="email">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input class="subscribe" value="Langganan!" type="submit">
      </form>
      <p class="sub-p">Jangan lupa mengajak yang lain yaa ^_^</p>
    </div>
</section>

<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="section-heading">Hubungi Kami</h2>
        <hr class="my-4">
        <p class="mb-5">Kami sangat menanti pertanyaan, saran, dan kritik dari Anda. Kami merespons email dan telepon berdasarkan urutan masuk yang kami terima, dan kami akan memberikan balasan secepatnya.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 ml-auto text-center">
        <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
        <p>+62-857-2964-0918</p>
      </div>
      <div class="col-lg-4 mr-auto text-center">
        <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
        <p>
          <a href="mailto:admin@sekolahnulis.com">admin@sekolahnulis.com</a>
        </p>
      </div>
    </div>
  </div>
</section>
@endsection
@section('js')
$(function() {
  var onHomepage = 1;
});
@endsection