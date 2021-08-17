@extends('frontend.defaults')
@section('title', '| home')
@section('content')

    <!-- Header Section End -->
    <!-- Start Hero Section -->
    <div class="hero-section section overlay" style="background-image: url('img/download.png')">
        <div class="container">
            <div class="row">
                <div class="hero-content text-center col-12">
                    <h1><strong>I'am Onyebuchi okofu</strong>Backend Developer</h1>
                    <a class="buy-btn" href="{{route('contact')}}">Contact me</a>
                </div>
            </div>
        </div>
    </div>
    @endsection
