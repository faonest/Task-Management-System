@extends('layouts.app')
@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card_title">Edit Task</h4>
                                <form action="{{ route('updateTask') }}" method="POST">
                                    @csrf

                                    <input name="taskId" type="hidden" value="{{ $task->id }}">

                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label>Title</label>
                                            <input name="title" type="text" class="form-control" placeholder="Title"
                                                value="{{ $task->title }}" required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label>Description</label>
                                            <input name="description" type="text" value="{{ $task->description }}"
                                                class="form-control" placeholder="Description" required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label class="col-form-label">Status</label>
                                                <select class="custom-select" name="status">
                                                    <option value="completed"
                                                        {{ $task->status === 'completed' ? 'selected' : '' }}>Completed
                                                    </option>
                                                    <option value="pending"
                                                        {{ $task->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
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
