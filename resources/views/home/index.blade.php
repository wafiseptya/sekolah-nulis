@extends('template/base')
@section('pageTitle', 'Belajar Nulis Buku Kapanpun Dimanapun')
@section('css')
<style>
    
    .login-form {
      font-size: 1rem;
      padding: 0.5rem;
      text-align: center;
      background-color: transparent;
      border: solid #fff 2px;
      color: #f05f40;
    }
    .login-form::placeholder {
      color: #f05f40!important;
    }
  
</style>
@endsection
@section('content')
<header class="masthead text-center text-white d-flex">
  <div class="container my-auto">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <h1 class="text">
          <strong>Belajar Nulis Buku Kapanpun Dimanapun</strong>
        </h1>
        
      </div>
      <div class="col-lg-8 mx-auto">
        <p class="text-faded mb-3">Platform belajar nulis buku online yang menghubungkan calon penulis dengan profesional di semua genre, dilengkapi fasilitas konseling penulisan, penerbitan dan penjualan.</p>
        <form action="" method="">
          <div class="row justify-content-center mb-3">
            @csrf
            <div class="form-group col-md-12">
                <input type="text" class="form-control login-form" name="username" placeholder="Nama Anda">
            </div>
            <div class="form-group col-md-12">
                <input type="text" class="form-control login-form" name="username" placeholder="Email">
            </div>
            <div class="form-group col-md-12">
                <input type="password" class="form-control login-form" name="password" placeholder="Password">
            </div>
            <div class="col-sm-auto">
                <button type="submit" class="btn btn-primary btn-login">Daftar</button>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-sm-auto">
              <p class="smaller-text">Sudah punya akun? Login disini !</p>
            </div>
          </div>
        </form> 
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
          <img class="icon-front mb-3 sr-icons" src="{{asset('img/icons8-video-chat-filled-500.png')}}" alt="">
          <h3 class="mb-4">Guru Berpengalaman</h3>
          <p class="text-muted mb-0">Belajar bareng penulis berpengalaman yang handal di bidangnya.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box mt-5 mx-auto">
          <img class="icon-front mb-3 sr-icons" src="{{asset('img/icons8-user-groups-filled-500.png')}}" alt="">
          <h3 class="mb-4">Berbagi di Komunitas</h3>
          <p class="text-muted mb-0">Berbagi permasalahan dan karya yang sudah kamu buat dengan rekan komunitas.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box mt-5 mx-auto">
          <img class="icon-front mb-3 sr-icons" src="{{asset('img/icons8-school-filled-500.png')}}" alt="">
          <h3 class="mb-3">Belajarnya Fleksible</h3>
          <p class="text-muted mb-0">Belajar bisa menyesuaikan dimana saja dan kapan saja sesuai waktu luangmu.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box mt-5 mx-auto">
          <img class="icon-front mb-3 sr-icons" src="{{asset('img/icons8-sell-filled-500.png')}}" alt="">
          <h3 class="mb-4">Nerbitin & Jualin Bukumu</h3>
          <p class="text-muted mb-0">Terbitkan karyamu dan jual di store kami.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- testimoni section  --}}
<section id="testimoni">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 text-center">
        <h2 class="section-heading">Apa Kata Mereka</h2>
        <hr class="my-4">
      </div>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row justify-content-center">
            <div class="col-md-4 text-center">
              <div class="service-box mt-5 mx-auto">
                  <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/Fountain_pen_writing_%28literacy%29.jpg/300px-Fountain_pen_writing_%28literacy%29.jpg" alt="Card image cap">
              </div>
            </div>
            <div class="col-md-6 mt-5 text-justify">
                  <p>Content 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas finibus dui at arcu euismod, nec hendrerit arcu sodales. Integer interdum ultricies orci, et tempor est suscipit eget. Vestibulum viverra nec dui vitae gravida. Morbi non auctor dui, id suscipit elit. Etiam accumsan blandit ex, et pulvinar sapien mollis eget. Etiam sagittis non ligula sed laoreet. Donec convallis, elit ac gravida dictum, ante lectus porttitor velit, sit amet elementum leo ante vitae velit. Duis finibus ac magna at fringilla. Aliquam risus purus, ultrices vitae malesuada non, cursus sed nulla.</p>
                  <p class="smaller-text bold-text mb-1">Full Names</p>
                  <p class="smaller-text">Full Title</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row justify-content-center">
            <div class="col-lg-4 text-center">
              <div class="service-box mt-5 mx-auto">
                  <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/Fountain_pen_writing_%28literacy%29.jpg/300px-Fountain_pen_writing_%28literacy%29.jpg" alt="Card image cap">
              </div>
            </div>
            <div class="col-md-6 mt-5 text-justify">
                  <p>Content 2 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas finibus dui at arcu euismod, nec hendrerit arcu sodales. Integer interdum ultricies orci, et tempor est suscipit eget. Vestibulum viverra nec dui vitae gravida. Morbi non auctor dui, id suscipit elit. Etiam accumsan blandit ex, et pulvinar sapien mollis eget. Etiam sagittis non ligula sed laoreet. Donec convallis, elit ac gravida dictum, ante lectus porttitor velit, sit amet elementum leo ante vitae velit. Duis finibus ac magna at fringilla. Aliquam risus purus, ultrices vitae malesuada non, cursus sed nulla.</p>
                  <p class="smaller-text bold-text mb-1">Full Names</p>
                  <p class="smaller-text">Full Title</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row justify-content-center">
            <div class="col-md-4 text-center">
              <div class="service-box mt-5 mx-auto">
                  <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/Fountain_pen_writing_%28literacy%29.jpg/300px-Fountain_pen_writing_%28literacy%29.jpg" alt="Card image cap">
              </div>
            </div>
            <div class="col-md-6 mt-5 text-justify">
                  <p>Content 3 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas finibus dui at arcu euismod, nec hendrerit arcu sodales. Integer interdum ultricies orci, et tempor est suscipit eget. Vestibulum viverra nec dui vitae gravida. Morbi non auctor dui, id suscipit elit. Etiam accumsan blandit ex, et pulvinar sapien mollis eget. Etiam sagittis non ligula sed laoreet. Donec convallis, elit ac gravida dictum, ante lectus porttitor velit, sit amet elementum leo ante vitae velit. Duis finibus ac magna at fringilla. Aliquam risus purus, ultrices vitae malesuada non, cursus sed nulla.</p>
                  <p class="smaller-text bold-text mb-1">Full Names</p>
                  <p class="smaller-text">Full Title</p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <i class="mr-5 fa fa-angle-left orange bigger-text" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <i class="ml-5 fa fa-angle-right orange bigger-text" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
      </a>
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
@endsection