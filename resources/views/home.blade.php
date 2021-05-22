@extends('layout')

@section('contant')
   <div class="container">
        <div class="card">
            <div class="card-header">
                Contents
            </div>
            <div class="card-body">
                @foreach($data as $post)
                    <h5 class="card-title">{{ $post -> name }}</h5>
                    <p>{{ $post -> description }}</p>
                    <a href="#" class="btn btn-primary">View</a>
                @endforeach
            </div>
        </div>
   </div>
@endsection