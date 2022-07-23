@extends('layouts.front')

@section('title', 'Industries')

@section('content')

<div class="page-title-area bg-17">
    <div class="container">
        <div class="page-title-content">
            <h2>Industries</h2>
            <ul>
                <li> <a href="/">Home</a> </li>
                <li class="act">Industries</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<section class="service-details-area product-area pt-70 pb-70">
    <div class="container">
        <div class="row">
            @foreach ($industries as $item)
            <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInLeft"
                style="visibility: visible; animation-name: fadeInLeft;">
                <div class="single-product-box">
                    <div class="product-image"> <img src="{{ $item->photo }}" alt="Image"> </div>
                    <div class="product-content">
                        <h2>{{ $item->title }}</h2>
                        <h3>{{ $item->sub_title }}</h3>
                        <p>{{ $item->information }}</p>
                        <a href="/contact-us" class="read-more">Enquiry Now <i class="bx bx-plus"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
