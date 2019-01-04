@extends('template/base')
@section('pageTitle', 'Register')
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
      <div class="col-md-10 mx-auto mb-3">
        <h1 class="text-center">Form Pendaftaran</h1>
        <hr>
      </div>
      
      <div class="col-md-10">
        <form action="" method="">
          <div class="row justify-content-center mb-3">
            @csrf
            <div class="form-group col-md-6">
                <label class="corner" for="username">Username</label>
                <input type="text" class="form-control sm-label login-form" id="username" name="username" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label class="corner" for="username">Nama Lengkap</label>
                <input type="text" class="form-control sm-label login-form" id="fullname" name="fullname" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label class="corner" for="username">Email</label>
                <input type="text" class="form-control sm-label login-form" id="email" name="email" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label class="corner" for="username">Nomor HP</label>
                <input type="text" class="form-control sm-label login-form" id="email" name="email" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label class="corner" for="username">Domisili</label>
                <input type="text" class="form-control sm-label login-form" id="email" name="email" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label class="corner" for="username">Situs Wwb / Blog</label>
                <input type="text" class="form-control sm-label login-form" id="email" name="email" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label class="corner" for="username">Password</label>
                <input type="password" class="form-control sm-label login-form" id="password" name="password" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label class="corner" for="username">Konfirmasi Password</label>
                <input type="password" class="form-control sm-label login-form" id="confirm" name="confirm" placeholder="">
            </div>
            <div class="col-md-6">
              <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div>
            <div class="form-group col-md-6">
              <div class="col-md-12">
                <div class="row mt-1">
                  <div class="col-md-3 custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                      <label class="custom-control-label" for="customCheck1">Fiksi</label>
                  </div>
                  <div class="col-md-3 custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck2">
                      <label class="custom-control-label" for="customCheck2">Horror</label>
                  </div>
                  <div class="col-md-3 custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck3">
                      <label class="custom-control-label" for="customCheck3">Humor</label>
                  </div>
                  <div class="col-md-3 custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck4">
                      <label class="custom-control-label" for="customCheck4">Roman</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group col-md-6">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline1">Laki - laki</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="col-md-12">
                <div class="row mt-1">
                  <div class="col-md-3 custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck5">
                      <label class="custom-control-label" for="customCheck5">Novel</label>
                  </div>
                  <div class="col-md-3 custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck6">
                      <label class="custom-control-label" for="customCheck6">Drama</label>
                  </div>
                  <div class="col-md-3 custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck7">
                      <label class="custom-control-label" for="customCheck7">Fantasi</label>
                  </div>
                  <div class="col-md-3 custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck8">
                      <label class="custom-control-label" for="customCheck8">Misteri</label>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row justify-content-center mt-3">
              <div class="col-md-7">
                <p class="text-center smaller-text">Dengan menekan tombol daftar, Anda setuju dengan ketentuan dan syarat yang berlaku.</p>
              </div>
            </div>
            <div class="w-100"></div>
            <div class="col-sm-auto">
                <button type="submit" class="btn btn-primary btn-login">Daftar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection