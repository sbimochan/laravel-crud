@extends('layouts.app')
@section('title','showing')
@section('content')
    <h1>Your name is {{$nerd->name}}</h1>
    <h2>Your email is {{$nerd->email}}</h2>
    <p class="lead"> your nerd level is {{$nerd->nerd_level}}</p>
    <form action="{{action('NerdController@destroy',$nerd->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('delete')}}
        <button class="btn btn-danger ">Delete this record</button>
    </form>
@endsection