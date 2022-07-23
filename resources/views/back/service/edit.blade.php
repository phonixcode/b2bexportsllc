@extends('layouts.back')

@section('content')

<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Service</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('services.update', $service->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                
                                @include('partials.alert')
                                <div class="mb-3">
                                    <label for="">Service Title</label>
                                    <input type="text" class="form-control input-default " placeholder="service title" name="title" value="{{ $service->title }}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Service Image</label>
                                    <input type="file" class="form-control input-default " placeholder="" name="photo">
                                    <img width="100" class="mt-4" src="{{ $service->photo }}"
                                    alt="custom-image">
                                </div>
                                <div class="mb-3">
                                    <label for="">Service Summary</label>
                                    <textarea class="form-control" rows="30" id="summary" name="summary" placeholder="service summary">{{ $service->summary }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="">Service Description</label>
                                    <textarea class="form-control" rows="30" id="description" name="description" placeholder="service description">{{ $service->description }}</textarea>
                                    <script src="{{ asset('back/js/ckeditor/ckeditor.js') }}"></script>
                                    <script>
                                        CKEDITOR.replace('description');
                                    </script>
                                </div>

                                <div class="mb-3">
                                    <label for="">Status</label>
                                    <select class="default-select form-control wide mb-3" name="status">
                                        <option value="active" {{ $service->status == 'active' ? ' selected' : '' }}>Active</option>
                                        <option value="disabled" {{ $service->status == 'disabled' ? ' selected' : '' }}>Disabled</option>
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
