@extends('layouts.home')

@section('title', 'Ne Ararsan.com - Kerem Hasan Çelik')

@section('description')
    Ne Ararsan.com Türkiye'nin en yeni ve en yenilikçi e-ticaret platformudur.
@endsection

@section('keywords', 'Ne Ararsan, e-ticaret, online ticaret, alışveriş')

@section('author', 'Kerem Çelik')

@section('content')
    <!-- Slider Start -->
    @include('home._slider')
    <!-- Slider Stop -->

    <!-- Band1 Start -->
    @include('home._band1')
    <!-- Band1 Stop -->

    <!-- Band2 Categorys Start -->
    @include('home._band2')
    <!-- Band2 Categorys Stop -->

    <!-- Band3  Start -->
    @include('home._band3')
    <!-- Band3 Stop -->

    <!-- Band4  Start -->
    @include('home._band4')
    <!-- Band4 Stop -->

    <!-- Band5  Start -->
    @include('home._band5')
    <!-- Band5 Stop -->

    <!-- Band6  Start -->
    @include('home._band6')
    <!-- Band6 Stop -->
@endsection
