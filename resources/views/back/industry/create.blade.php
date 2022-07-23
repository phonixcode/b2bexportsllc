@extends('layouts.back')

@section('content')

<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Facility</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('industries.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @include('partials.alert')
                                <div class="mb-3">
                                    <label for="">Title</label>
                                    <input type="text" class="form-control input-default " placeholder="" name="title">
                                </div>
                                <div class="mb-3">
                                    <label for="">Sub Title</label>
                                    <textarea class="form-control" rows="30" id="" name="sub_title" placeholder=""></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="">Image</label>
                                    <input type="file" class="form-control input-default " placeholder="" name="photo">
                                </div>
                                <div class="mb-3">
                                    <label for="">Informations</label>
                                    <textarea class="form-control" style="height: 150px;" rows="30" id="information" name="information" placeholder=""></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="">Status</label>
                                    <select class="default-select form-control wide mb-3" name="status">
                                        <option value="active">Active</option>
                                        <option value="disabled">Disabled</option>
                                    </select>
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
