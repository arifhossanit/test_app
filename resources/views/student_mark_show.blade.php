@extends('layouts.master')
@section('content')
    <main class="col-6 m-auto card my-5">
        <h1 class="text-center">Find Result</h1>
        <form action="{{route('show.mark')}}" method="POST" class="m-auto">
            @csrf
            <div class="row my-5">
                <div class="col-11">
                    <input type="number" class="form-control" name="reg_no" placeholder="Find mark by registraion no">
                </div>
                <div class="col-1">
                   <input type="submit" class="btn btn-primary" value="Search"> 
                </div>
                
            </div>
        </form>
        @if (isset($info))
        <table class="table">
                <h3>Name: {{$info->full_name}}</h3>
                <h3>Reg No: {{$info->registration_no}}</h3>
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Subject</th>
                <th scope="col">Mark</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($marks))
                @foreach($marks as $key=>$mark)
                <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$mark->subject}}</td>
                <td>{{$mark->mark}}</td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
        @endif
    </main>
@endsection