@extends('layouts.back')

@section('content')
@php
$notifications = \App\Models\Contact::where('is_read', 0)->get();
$industries = \App\Models\Industry::get();
$banners = \App\Models\Banner::get();
$services = \App\Models\Service::get();
@endphp
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-3 col-sm-3">
                        <div class="card">
                            <div class="card-body d-flex px-4 pb-0 justify-content-between">
                                <div>
                                    <h4 class="fs-18 font-w600 mb-4 text-nowrap">New Messages</h4>
                                    <div class="d-flex align-items-center">
                                        <h2 class="fs-32 font-w700 mb-5">{{ count($notifications) }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-3">
                        <div class="card">
                            <div class="card-body d-flex px-4 pb-0 justify-content-between">
                                <div>
                                    <h4 class="fs-18 font-w600 mb-4 text-nowrap">Total Banners</h4>
                                    <div class="d-flex align-items-center">
                                        <h2 class="fs-32 font-w700 mb-5">{{ count($banners) }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-3">
                        <div class="card">
                            <div class="card-body d-flex px-4 pb-0 justify-content-between">
                                <div>
                                    <h4 class="fs-18 font-w600 mb-4 text-nowrap">Total Services</h4>
                                    <div class="d-flex align-items-center">
                                        <h2 class="fs-32 font-w700 mb-5">{{ count($services) }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-3">
                        <div class="card">
                            <div class="card-body d-flex px-4 pb-0 justify-content-between">
                                <div>
                                    <h4 class="fs-18 font-w600 mb-4 text-nowrap">Total Industries</h4>
                                    <div class="d-flex align-items-center">
                                        <h2 class="fs-32 font-w700 mb-5">{{ count($industries) }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
