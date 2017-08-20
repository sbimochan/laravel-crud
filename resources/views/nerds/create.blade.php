@extends('layouts.app')
@section('title','creating')

@section('content')
    <h1>Create a nerd</h1>
    @if($errors->any())
        <div class="alert alert-danger">
        @foreach($errors->all() as $err)
            <p>{{$err}}</p>
        @endforeach
        </div>
    @endif
    <form action="{{action('NerdController@store')}}" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="nerd_level">Nerd level</label>
            <input name="nerd_level" type="number" class="form-control">
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button class="btn btn-primary">Create</button>
    </form>
 
@endsection