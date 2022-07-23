@extends('layouts.back')

@section('content')

<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Facility</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('facilities.update', $facility->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                @include('partials.alert')
                                <div class="mb-3">
                                    <label for="">Facility Text</label>
                                    <input type="text" class="form-control input-default " placeholder="facility text" name="title" value="{{ $facility->title }}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Facility Description</label>
                                    <textarea class="form-control" rows="30" id="description" name="description">{{ $facility->description }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="">Facility Image</label>
                                    <input type="file" class="form-control input-default " placeholder="" name="photo">
                                    <img width="100" class="mt-4" src="{{ $facility->photo }}"
                                    alt="custom-image">
                                </div>
                                <div class="mb-3">
                                    <label for="">Status</label>
                                    <select class="default-select form-control wide mb-3" name="status">
                                        <option value="active" {{ $facility->status == 'active' ? ' selected' : '' }}>Active</option>
                                        <option value="disabled" {{ $facility->status == 'disabled' ? ' selected' : '' }}>Disabled</option>
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
