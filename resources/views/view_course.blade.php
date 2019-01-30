@extends('template/base')
@section('pageTitle', 'Belajar Nulis Buku Kapanpun Dimanapun')
@section('css')
    
@endsection
@section('content')
    
@endsection
@section('js')
<section class="content-page">
  <div class="bl-header">
    <p><strong>Title Lorem ipsum dolor sit amet<span style="float:right">Halo Username</span></strong></p>
  </div>
</section>
<section class="course-view">
  <div class="container">
    <div class="row">
      <div class="col-4">
        <aside class="sidebar">
          <ul class="list-unstyled components colapsable colapsable-hover smaller">
            <li class="colapse">
                <a href="#">
                    <i class="fa fa-angle-right fa-lg mr-2"></i>
                    <p class="menu-list">Single Page</p>
                </a>
            </li>
            <li class="colapse colapsePage" id="">
                <a href="#pageSubmenu" id="pageToggle" data-toggle="collapse" aria-expanded="false">
                    <i class="fa fa-angle-right fa-lg mr-2"></i>
                    <p class="menu-list">Multi Pages</p>
                </a>
                <ul class="collapse list-unstyled subMenu" id="pageSubmenu">
                    <li class="mb-1">
                        <a class="justify-content-center" href="#">
                            <p>Sub-Menu 1</p>
                        </a>
                    </li>
                    <li class="mb-1">
                        <a class="justify-content-center" href="#">
                            <p>Sub-Menu 2</p>
                        </a>
                    </li>
                    <li class="mb-1">
                        <a class="justify-content-center" href="#">
                            <p>Sub-Menu 3</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="colapse colapsePage" id="">
                <a href="#pageSubmenu2" id="pageToggle" data-toggle="collapse" aria-expanded="false">
                    <i class="fa fa-angle-right fa-lg mr-2"></i>
                    <p class="menu-list">Multi Pages #2</p>
                </a>
                <ul class="collapse list-unstyled subMenu" id="pageSubmenu2">
                    <li class="mb-1">
                        <a class="justify-content-center" href="#">
                            <i class="fa fa-lock fa-lg mr-2"></i>
                            <p>Sub-Menu Locked</p>
                        </a>
                    </li>
                    <li class="mb-1">
                        <a class="justify-content-center" href="#">
                            <i class="fa fa-lock fa-lg mr-2"></i>
                            <p>Sub-Menu Locked</p>
                        </a>
                    </li>
                    <li class="mb-1">
                        <a class="justify-content-center" href="#">
                            <i class="fa fa-lock fa-lg mr-2"></i>
                            <p>Sub-Menu Locked</p>
                        </a>
                    </li>
                </ul>
            </li>
          </ul>
        </aside>
      </div>
      <div class="col-8">
        <div class="video-wrap">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Hnil5cRXNXs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('js')
<script>
  $(document).ready(function(){
    $('.colapsePage').on('click', function () {
        $(this).toggleClass('active');
    });
  });
</script>
@endsection