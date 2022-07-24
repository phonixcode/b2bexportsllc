@extends('layouts.back')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="post-details">
                            {{-- <h3 class="mb-2 text-black">Collection of textile samples lay spread</h3>
                            <ul class="mb-4 post-meta d-flex flex-wrap">
                                <li class="post-author me-3">By Admin</li>
                                <li class="post-date me-3"><i class="far fa-calendar-plus me-2"></i>18 Nov 2020</li>
                                <li class="post-comment"><i class="far fa-comment me-2"></i>28</li>
                            </ul>
                            <img src="images/profile/8.jpg" alt="" class="img-fluid mb-3 w-100 rounded">
                            <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.</p>
                            <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                            <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Has been the industry's standard text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimencenturies.</blockquote>
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence was created for the bliss of souls like mine.I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                            <div class="profile-skills mt-5 mb-5">
                                <h4 class="text-primary mb-2">Skills</h4>
                                <a href="javascript:void();;" class="btn btn-primary light btn-xs mb-1">Admin</a>
                                <a href="javascript:void();;" class="btn btn-primary light btn-xs mb-1">Dashboard</a>
                                <a href="javascript:void();;" class="btn btn-primary light btn-xs mb-1">Photoshop</a>
                                <a href="javascript:void();;" class="btn btn-primary light btn-xs mb-1">Bootstrap</a>
                                <a href="javascript:void();;" class="btn btn-primary light btn-xs mb-1">Responsive</a>
                                <a href="javascript:void();;" class="btn btn-primary light btn-xs mb-1">Crypto</a>
                            </div> --}}
                            <div class="comment-respond" id="respond">
                                <h4 class="comment-reply-title text-primary mb-3" id="reply-title">Message Details</h4>
                                <form class="comment-form" id="commentform" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="author" class="text-black font-w600 form-label">Name </label>
                                                <p>{{ $contact->name }}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="email" class="text-black font-w600 form-label">Company Name </label>
                                                <p>{{ $contact->company_name }}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="email" class="text-black font-w600 form-label">Email </label>
                                                <p>{{ $contact->email }}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="email" class="text-black font-w600 form-label">Company Address </label>
                                                <p>{{ $contact->company_address }}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="email" class="text-black font-w600 form-label">Phone Number </label>
                                                <p>{{ $contact->phone_number }}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="comment" class="text-black font-w600 form-label">Subject</label>
                                                <p>{{ $contact->subject }}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="comment" class="text-black font-w600 form-label">Message</label>
                                                <p>{{ $contact->message }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
