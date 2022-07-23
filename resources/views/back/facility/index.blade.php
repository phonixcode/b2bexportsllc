@extends('layouts.back')

@section('content')

<div class="content-body">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                @include('partials.alert')
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Facility List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Sno.</th>
                                        <th>Facility Title</th>
                                        <th>Facility Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($facilities as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td><img class="" width="50" height="50" src="{{ $item->photo }}" alt=""></td>
                                        <td>
                                            <span class="badge light badge-{{ $item->status == 'active' ? 'success' : 'danger' }}">{{ ucwords( $item->status ) }}</span>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('facilities.edit', $item->id) }}" class="btn btn-primary shadow btn-sm sharp me-1">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{ route('facilities.destroy', $item->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button onclick="document.getElementById('delete-{{$item->id}}').submit()" class="btn btn-danger shadow btn-sm sharp">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
