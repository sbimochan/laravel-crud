@extends('layouts.app')
@section('title','editing')

@section('content')
    <h1>Create a nerd</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                <p>{{$err}}</p>
            @endforeach
        </div>
    @endif
    <form action="{{action('NerdController@update',$hello->id)}}" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" class="form-control" value="{{$hello->name}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" class="form-control" value="{{$hello->email}}">
        </div>
        <div class="form-group">
            <label for="nerd_level">Nerd level</label>
            <input name="nerd_level" type="number" class="form-control" value="{{$hello->nerd_level}}">
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        {{method_field('patch')}}
        <button class="btn btn-primary">Update</button>
    </form>

@endsection