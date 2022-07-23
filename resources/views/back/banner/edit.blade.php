@extends('layouts.back')

@section('content')

<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Banner</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('banners.update', $banner->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                @include('partials.alert')
                                <div class="mb-3">
                                    <label for="">Banner Text</label>
                                    {{-- <input type="text" class="form-control input-default " placeholder="banner text" name="title"> --}}
                                    <textarea class="form-control" rows="30" id="title" name="title">{{ $banner->title }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="">Banner Image</label>
                                    <input type="file" class="form-control input-default " placeholder="" name="image">
                                    <img width="100" class="mt-4" src="{{ $banner->image }}"
                                    alt="custom-image">
                                </div>
                                <div class="mb-3">
                                    <label for="">Status</label>
                                    <select class="default-select form-control wide mb-3" name="status">
                                        <option value="active" {{ $banner->status == 'active' ? ' selected' : '' }}>Active</option>
                                        <option value="disabled" {{ $banner->status == 'disabled' ? ' selected' : '' }}>Disabled</option>
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
