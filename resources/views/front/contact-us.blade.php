@extends('layouts.front')

@section('title', 'Contact Us')

@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area bg-17">
    <div class="container">
      <div class="page-title-content">
        <h2>Contact Us</h2>
        <ul>
          <li> <a href="/"> Home </a> </li>
          <li class="act">Contact Us</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Page Title Area -->

  <!-- End Banner Area -->

  @include('partials.contact')

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3311.8592212952094!2d-84.30864458493767!3d33.89327933353817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f509ac0fdcecf3%3A0xa6521ab3f471571f!2sB2B%20EXPORTS%20LLC!5e0!3m2!1sen!2sin!4v1655719640578!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

@endsection
