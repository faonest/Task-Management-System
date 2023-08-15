@extends('layouts.app')
@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="row justify-content-between mb-4">
                                    <h4 class="header-title">TASK LIST</h4>
                                    <a href={{ route('addTask') }} class="btn btn-primary" type="submit">Add
                                        Task</a>
                                </div>

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
                                                    <td style="max-width: 150px;">{{ $item->title }}
                                                    </td>
                                                    <td>{{ $item->description }}</td>
                                                    <td>{{ $item->status }}</td>
                                                    <td>
                                                        <a href="{{ route('editTask', ['id' => $item->id]) }}"
                                                            class="ti-pencil mr-1 btn btn-success"></a>

                                                        <a href="{{ route('deleteTask', ['id' => $item->id]) }}"
                                                            class="ti-trash btn btn-danger"></a>
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

@section('toastr')
    @include('layouts.toastr')
@endsection

@endsection
