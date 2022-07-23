@extends('layouts.back')

@section('content')

<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Site Settings</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('settings.update') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                @include('partials.alert')
                                <div class="mb-3">
                                    <label for="">Site Title</label>
                                    <input type="text" class="form-control input-default"  name="site_title" value="{{ $setting->site_title }}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Meta Keywords</label>
                                    <input type="text" class="form-control input-default " placeholder="" name="meta_description" value="{{ $setting->meta_description }}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Meta Description</label>
                                    <textarea class="form-control" rows="30" id="meta_keywords" name="meta_keywords" placeholder="">{{ $setting->meta_keywords }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="">About Us Summary</label>
                                    <textarea class="form-control" style="height: 150px;" rows="30" id="about_us_summary" name="about_us_summary" placeholder="">{{ $setting->about_us_summary }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="">About Us Indformation</label>
                                    <textarea class="form-control" rows="30" id="about_us_desc" name="about_us_desc" placeholder="">{{ $setting->about_us_desc }}</textarea>
                                    <script src="{{ asset('back/js/ckeditor/ckeditor.js') }}"></script>
                                    <script>
                                        CKEDITOR.replace('about_us_desc');
                                    </script>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-6">
                                        <label for="">Site Mission</label>
                                        <textarea class="form-control" style="height: 150px;" rows="30" id="site_mission" name="site_mission" placeholder="">{{ $setting->site_mission }}</textarea>
                                    </div>
                                    <div class="col-6">
                                        <label for="">Site Vision</label>
                                        <textarea class="form-control" style="height: 150px;" rows="30" id="site_vision" name="site_vision" placeholder="">{{ $setting->site_vision }}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-6">
                                        <label for="">Site Logo</label>
                                        <input type="file" class="form-control input-default" placeholder="" name="site_logo">
                                        <img src="{{ $setting->site_logo }}" alt="{{ $setting->site_title }}" width="150">
                                    </div>
                                    <div class="col-6">
                                        <label for="">Site Favicon</label>
                                        <input type="file" class="form-control input-default " placeholder="" name="site_favicon">
                                        <img src="{{ $setting->site_favicon }}" alt="{{ $setting->site_title }}" width="50">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-6">
                                        <label for="">Site Phone Number</label>
                                        <input type="text" class="form-control input-default " placeholder="" name="site_phone_number" value="{{ $setting->site_phone_number }}">
                                    </div>
                                    <div class="col-6">
                                        <label for="">Site Email Address</label>
                                        <input type="email" class="form-control input-default " placeholder="" name="site_email" value="{{ $setting->site_email }}">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="">Site Address</label>
                                    <textarea class="form-control" rows="30" id="site_address" name="site_address" placeholder="">{{ $setting->site_address }}</textarea>
                                </div>

                                <div class="mb-3 row">
                                    <div class="col-6">
                                        <label for="">Facebook Url</label>
                                        <input type="url" class="form-control input-default " placeholder="" name="facebook_url" value="{{ $setting->facebook_url }}">
                                    </div>
                                    <div class="col-6">
                                        <label for="">Instagram Url</label>
                                        <input type="url" class="form-control input-default " placeholder="" name="instagram_url" value="{{ $setting->instagram_url }}">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <div class="col-6">
                                        <label for="">YouTube URL</label>
                                        <input type="url" class="form-control input-default " placeholder="" name="youtube_url" value="{{ $setting->youtube_url }}">
                                    </div>
                                    <div class="col-6">
                                        <label for="">Linkedin Url</label>
                                        <input type="url" class="form-control input-default " placeholder="" name="linkedin_url" value="{{ $setting->linkedin_url }}">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
