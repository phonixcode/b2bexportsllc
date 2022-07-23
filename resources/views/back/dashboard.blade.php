@extends('layouts.back')

@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-6 col-sm-6">
                        <div class="card">
                            <div class="card-body d-flex px-4 pb-0 justify-content-between">
                                <div>
                                    <h4 class="fs-18 font-w600 mb-4 text-nowrap">New Messages</h4>
                                    <div class="d-flex align-items-center">
                                        <h2 class="fs-32 font-w700 mb-5">0</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-6">
                        <div class="card">
                            <div class="card-body d-flex px-4 pb-0 justify-content-between">
                                <div>
                                    <h4 class="fs-18 font-w600 mb-4 text-nowrap">New Tickets</h4>
                                    <div class="d-flex align-items-center">
                                        <h2 class="fs-32 font-w700 mb-5">0</h2>
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
