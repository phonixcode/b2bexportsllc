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
                        <h4 class="card-title">Notification List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Sno.</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->subject }}</td>
                                        <td>{{ Carbon\Carbon::parse($item->created_at)->isoFormat('MMMM Do YYYY, hh:mm:ssa') }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('notifications.show', $item->id) }}" class="btn btn-info shadow btn-sm sharp me-1">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <form action="{{ route('notifications.destroy', $item->id) }}" method="post">
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
