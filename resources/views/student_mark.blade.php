@extends('layouts.master')
@section('content')
<main class="col-6 m-auto card my-5">
@if($message = Session::get('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">{{$message}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<h1 class="text-center">Add Mark</h1>
<form class="m-3" action="{{route('store.mark')}}" method="POST">
    @csrf
  <div class="row mb-3">
    <label for="reg" class="col-sm-2 col-form-label">Registration Number</label>
    <div class="col-sm-10">
      <select name="reg_no" id="reg" class="form-control" required>
        <option value="" selected disabled>--select one--</option>
        @forelse ($data as $reg)
            <option>{{ $reg->registration_no }}</option>
        @empty
            <option value="" disabled>No data</option>
        @endforelse
      </select>
    </div>
  </div>
  <div class="row mb-3">
    <label for="reg" class="col-sm-2 col-form-label">Subject</label>
    <div class="col-sm-10">
      <select name="subject" id="reg" class="form-control" required>
        <option value="" selected disabled>--select one--</option>
        <option value="bangla">Bangla</option>
        <option value="english">English</option>
        <option value="math">Math</option>
      </select>
    </div>
  </div>
  <div class="row mb-3">
    <label for="input3" class="col-sm-2 col-form-label">Mark</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="input3" name="mark" placheholder="provide subject mark" required>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
</main>

@endsection