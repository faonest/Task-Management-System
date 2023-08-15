@extends('layouts.app')
@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Tasks</h4>
                                <div class="table-responsive datatable-primary">
                                    <table id="dataTable2" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Title</th>
                                                <th>Desciption</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tasks as $item)
                                                <tr>
                                                    <td>{{ $item->title }}</td>
                                                    <td>{{ $item->description }}</td>
                                                    <td>{{ $item->status }}</td>
                                                    <td>
                                                        <i class="ti-pencil mr-1 btn btn-success"></i>
                                                        <i class="ti-trash btn btn-danger"></i>
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
    </div>
@endsection
