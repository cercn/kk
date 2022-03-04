@extends('layouts.errors')

@section('title', __('Not Found'))
@section('code', '404')
@section('message')
    @isset($data)
        {{$data}}
    @else
    , __('Not Found')
    @endisset
@endsection
