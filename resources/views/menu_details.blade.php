@extends('layout/layout')

@section('title', $menu->title )

@section('content')

    <style>
        .content{
            padding: 40px; 
        }
    </style>

    <p>{!! $menu->content !!}</p>
	
@endsection
