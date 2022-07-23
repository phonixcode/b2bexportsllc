@extends('layouts.back')

@section('content')

<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Industry</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('industries.update', $industry->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                @include('partials.alert')
                                <div class="mb-3">
                                    <label for="">Title</label>
                                    <input type="text" class="form-control input-default " placeholder="" name="title" value="{{ $industry->title }}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Sub Title</label>
                                    <textarea class="form-control" rows="30" id="sub-title" name="sub_title" placeholder="">{{ $industry->summary }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="">Image</label>
                                    <input type="file" class="form-control input-default " placeholder="" name="photo">
                                    <img width="100" class="mt-4" src="{{ $industry->photo }}"
                                    alt="custom-image">
                                </div>
                                <div class="mb-3">
                                    <label for="">Description</label>
                                    <textarea class="form-control" rows="30" id="" name="information" placeholder="">{{ $industry->description }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="">Status</label>
                                    <select class="default-select form-control wide mb-3" name="status">
                                        <option value="active" {{ $industry->status == 'active' ? ' selected' : '' }}>Active</option>
                                        <option value="disabled" {{ $industry->status == 'disabled' ? ' selected' : '' }}>Disabled</option>
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
