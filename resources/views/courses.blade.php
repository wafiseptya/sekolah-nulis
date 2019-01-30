@extends('template/base')
@section('pageTitle', 'Belajar Nulis Buku Kapanpun Dimanapun')
@section('css')
    
@endsection
@section('content')
    
@endsection
@section('js')
<section class="content-page">
  <div class="bl-header">
    <p><strong>Halo username ! Jangan lupa berdoa dulu ya.</strong><br>Luruskan niat dan tebarkan manfaat.</p>
  </div>
  <div class="container mt-3">
    <div class="row">
      <div class="col-md-6">
        <div class="search-bar orn-border">
          <input class="p-2 pl-3" type="text" placeholder="Belajar apa ?">
          <button class="search-btn" type="submit">Cari</button>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group orn-border">
          <select class="custom-select custom-select-lg p-2 pl-3 genre-bar" id="">
            <option>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
            <option>Option 4</option>
            <option>Option 5</option>
          </select>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="course-card">
  <div class="container mb-5">
      <div class="row">
          <div class="col-5">
              <div class="col">
                  <a class="color-inherit" href="#">
                      <div class="img" style="background-image:url('{{asset('img/portfolio/fullsize/1.jpg')}}');"></div>
                  </a>
              </div>
          </div>
          <div class="col-7">
            <hr class="full-hr">
              <a class="reg" href="#">
                  <h3 class="c-bl text">Title Lorem ipsum dolor sit amet</h3>
              </a>
              <p class="course-text">Guru : Lorem</p>
              <p class="course-text">
                Genre : 
                <br>Lorem, ipsum
              </p>
              <p class="course-text">
                Didesain Untuk : 
                <br>Lorem, ipsum, dolor
              </p>
              <p class="course-text">
                Pembahasan : 
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum possimus rem id harum, ducimus animi totam architecto assumenda reprehenderit ex aspernatur expedita! Id voluptates porro sunt eaque laborum a voluptate.
              </p>
              <button type="button" class="mt-1 btn btn-course btn-primary">Mulai Belajar</button>
          </div>
      </div>
  </div>

  <div class="container mb-5">
      <div class="row">
          <div class="col-5">
              <div class="col">
                  <a class="color-inherit" href="#">
                      <div class="img" style="background-image:url('{{asset('img/portfolio/fullsize/2.jpg')}}');"></div>
                  </a>
              </div>
          </div>
          <div class="col-7">
            <hr class="full-hr">
              <a class="reg" href="#">
                  <h3 class="c-bl text">Title Lorem ipsum dolor sit amet</h3>
              </a>
              <p class="course-text">Guru : Lorem</p>
              <p class="course-text">
                Genre : 
                <br>Lorem, ipsum
              </p>
              <p class="course-text">
                Didesain Untuk : 
                <br>Lorem, ipsum, dolor
              </p>
              <p class="course-text">
                Pembahasan : 
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum possimus rem id harum, ducimus animi totam architecto assumenda reprehenderit ex aspernatur expedita! Id voluptates porro sunt eaque laborum a voluptate.
              </p>
              <button type="button" class="mt-1 btn btn-course btn-primary">Mulai Belajar</button>
          </div>
      </div>
  </div>

  <div class="container mb-5">
      <div class="row">
          <div class="col-5">
              <div class="col">
                  <a class="color-inherit" href="#">
                      <div class="img" style="background-image:url('{{asset('img/portfolio/fullsize/3.jpg')}}');"></div>
                  </a>
              </div>
          </div>
          <div class="col-7">
            <hr class="full-hr">
              <a class="reg" href="#">
                  <h3 class="c-bl text">Title Lorem ipsum dolor sit amet</h3>
              </a>
              <p class="course-text">Guru : Lorem</p>
              <p class="course-text">
                Genre : 
                <br>Lorem, ipsum
              </p>
              <p class="course-text">
                Didesain Untuk : 
                <br>Lorem, ipsum, dolor
              </p>
              <p class="course-text">
                Pembahasan : 
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum possimus rem id harum, ducimus animi totam architecto assumenda reprehenderit ex aspernatur expedita! Id voluptates porro sunt eaque laborum a voluptate.
              </p>
              <button type="button" class="mt-1 btn btn-course btn-primary">Mulai Belajar</button>
          </div>
      </div>
  </div>

  <div class="container mb-5">
      <div class="row">
          <div class="col-5">
              <div class="col">
                  <a class="color-inherit" href="#">
                      <div class="img" style="background-image:url('{{asset('img/portfolio/fullsize/4.jpg')}}');"></div>
                  </a>
              </div>
          </div>
          <div class="col-7">
            <hr class="full-hr">
              <a class="reg" href="#">
                  <h3 class="c-bl text">Title Lorem ipsum dolor sit amet</h3>
              </a>
              <p class="course-text">Guru : Lorem</p>
              <p class="course-text">
                Genre : 
                <br>Lorem, ipsum
              </p>
              <p class="course-text">
                Didesain Untuk : 
                <br>Lorem, ipsum, dolor
              </p>
              <p class="course-text">
                Pembahasan : 
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum possimus rem id harum, ducimus animi totam architecto assumenda reprehenderit ex aspernatur expedita! Id voluptates porro sunt eaque laborum a voluptate.
              </p>
              <button type="button" class="mt-1 btn btn-course btn-primary">Mulai Belajar</button>
          </div>
      </div>
  </div>

</section>
@endsection