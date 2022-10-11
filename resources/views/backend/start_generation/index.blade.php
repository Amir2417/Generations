@extends('home')
@section('admin')
<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h2>First Generation List</h2>
                    <a href="{{ route('add.member') }}" class="btn btn-primary">Add First Generation</a>
                </div>

                <div class="card-body">
                    <div class="basic-data-table">
                        <table id="basic-data-table" class="table nowrap"  style="width:100%">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Date Of Birth</th>
                                    <th>Birth Place</th>
                                    <th>Wife</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>
                                        @if ($item->photo == null)
                                        <img class="border border-rounded border-success rounded-circle" src="{{ url('upload/no_image.jpg') }}" width="80px">

                                        @else
                                        <img class="border border-rounded border-success rounded-circle" src="{{ asset($item->photo) }}" width="80px">
                                        @endif

                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->date_of_birth }}</td>
                                    <td>{{ $item->birth_place }}</td>
                                    <td>{{ $item->wife }}</td>
                                    <td>
                                        <a href="{{ url('first_generation/edit/'.$item->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ url('first_generation/delete/'.$item->id) }}" class="btn btn-danger">Delete</a>
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
@endsection
