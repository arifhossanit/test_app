@extends('layouts.master')
@section('content')
<main class="col-6 m-auto card my-5">
@if($message = Session::get('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">{{$message}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<h1 class="text-center">Registraion Form</h1>
<form class="m-3" action="{{route('create.register')}}" method="POST">
    @csrf
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Full Name</label>
    <div class="col-sm-10">
      <input type="text" name="full_name" class="form-control" id="inputPassword3" required>
    </div>
  </div>
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="male" checked>
        <label class="form-check-label" for="gridRadios1">
          Male
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female">
        <label class="form-check-label" for="gridRadios2">
          Female
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gridRadios3" value="others">
        <label class="form-check-label" for="gridRadios3">
          Others
        </label>
      </div>
    </div>
  </fieldset>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="inputEmail3" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="input3" class="col-sm-2 col-form-label">Contact</label>
    <div class="col-sm-10">
      <input type="text" name="contact" class="form-control" id="input3" placheholder="contact number">
    </div>
  </div>
  <div class="row mb-3">
    <label for="input4" class="col-sm-2 col-form-label">Registraion Number</label>
    <div class="col-sm-10">
      <input type="number" name="reg_no" class="form-control" id="input4" placheholder="registraion number" required>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
</main>

@endsection