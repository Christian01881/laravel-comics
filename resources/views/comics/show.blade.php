@extends('layouts.general')

@section('content')
    <div class="container">
        <h1 class="mt-5">{{ $comic['title'] }}</h1>
        <div class="d-flex w-100 mt-5">
            <div class="parte-1">
                <p class="font">{{ $comic['description']}}</p>
            </div>
            <div class="parte-2">
                <img class="thumb" src="{{ $comic['thumb'] }}" alt="">
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <div class="d-flex flex-column  align-items-center me-5 pe-5">
                <h3>Art by:</h3>
                @foreach ($comic['artists'] as $artist)
                    <span class="pres">{{ $artist }}</span>
                @endforeach
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center ms-5 ps-5">
                <h3>Written by by:</h3>
                @foreach ($comic['writers'] as $writer)
                    <span class="pres">{{ $writer }}</span>
                @endforeach
            </div>
        </div>
    </div>

@endsection
