@extends('layout')

@section('contant')
<h4>This is Contant Page.</h4>
@foreach($data as $key => $value)
    {{$key .' = '.$value}}
@endforeach    
@endsection