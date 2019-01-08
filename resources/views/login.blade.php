@extends('template/base')
@section('pageTitle', 'Login')
@section('css')
<style>
  body {
    background-color: #32292F;
    color: #FFF;
  }
  hr {
    max-width: 100px;
    border-width: 5px;
    border-color: #f05f40;
  }

</style>
@endsection
@section('content')
<section class="pt-5 mt-5 pb-0 mb-0">
  <div class="container my-auto">
    <div class="row justify-content-center">
      <div class="col-md-10 mx-auto">
        <h1 class="text-center">Masuk</h1>
        <hr>
      </div>
      <div class="col-md-10 mx-auto">
        <div class="row justify-content-center">
          <div class="col-md-auto mb-3">
              <button class="btn btn-logwith btn-fb" type="submit"><i class="fa fa-lg fa-facebook mr-3"></i>Masuk dengan Facebook</button>
          </div>
          <div class="col-md-auto mb-3">
              <button class="btn btn-logwith btn-primary" type="submit"><i class="fa fa-lg fa-google mr-3"></i>Masuk dengan Google</button>
          </div>
        </div>
      </div>
      <div class="col-md-10 mx-auto mb-3">
        <div class="row justify-content-center">
          <div class="col align-self-center">
            <div class="thin-hline"></div>
          </div>
          <div class="col-md-auto">
            <span>Atau</span>
          </div>
          <div class="col align-self-center">
            <div class="thin-hline"></div>
          </div>
        </div>
      </div>
      <div class="col-md-10">
        <form action="" method="">
          <div class="row justify-content-center mb-3">
            @csrf
            <div class="form-group col-md-12">
                <input type="text" class="form-control login-form" name="username" placeholder="Username / Email">
            </div>
            <div class="form-group col-md-12">
                <input type="password" class="form-control login-form" name="password" placeholder="Password">
            </div>
            <div class="form-check col-md-12 pl-5">
                <input type="checkbox" id="rememberMe" class="form-check-input login-form" name="remember">
                <label class="form-check-label" for="rememberMe">Ingat saya</label>
            </div>
            <div class="col-sm-auto">
                <button type="submit" class="btn btn-primary btn-login">Masuk</button>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-sm-auto">
              <p>Lupa akun? Klik disini !</p>
            </div>    
            <div class="w-100"></div>
            <div class="col-sm-auto">
              <p>Belum punya akun? Register disini !</p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection