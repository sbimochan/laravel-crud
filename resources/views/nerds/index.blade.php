@extends('layouts.app')
@section('title','listing')
@section('content')
    <h1>All the nerds</h1>
    @if(Session::has('message'))
        <div class="alert alert-info">{{Session::get('message')}}</div>
        @endif
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>
            <td>nerd level</td>
            <td>actions</td>
        </tr>
        <tbody>
        @foreach($nerds as $nerd)
            <tr>
                <td>{{$nerd->id}}</td>
                <td>{{$nerd->name}}</td>
                <td>{{$nerd->email}}</td>
                <td>{{$nerd->nerd_level}}</td>
                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                    <a class="btn btn-small btn-success" href="{{ action('NerdController@show',$nerd['id'])}}">Show this Nerd</a>

                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                    <a class="btn btn-small btn-warning" href="{{action('NerdController@edit',$nerd['id'])}}">Edit this Nerd</a>

                </td>
            </tr>
    @endforeach
        </tbody>
        </thead>
    </table>
@endsection
