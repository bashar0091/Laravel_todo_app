@extends('layouts.app')

@section('page_title', 'Todo List')

@section('main-section')
<section class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <a href="{{route('todo.add')}}" class="btn btn-lg btn-primary">Add New List</a>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <th>#</th>
                        <th>Task Name</th>
                        <th>Assign</th>
                        <th>Start Date</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Website Designing</td>
                            <td>Bashar</td>
                            <td>03/03/2023</td>
                            <td>06/03/2023</td>
                            <td>
                                <span class="btn btn-sm btn-danger">Pending</span>
                            </td>
                            <td>
                                <a href="" class="btn btn-sm btn-success">Edit</a>
                                <a href="" class="btn btn-sm btn-warning">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Website Designing</td>
                            <td>Bashar</td>
                            <td>03/03/2023</td>
                            <td>06/03/2023</td>
                            <td>
                                <span class="btn btn-sm btn-warning">Pending</span>
                            </td>
                            <td>
                                <a href="" class="btn btn-sm btn-success">Edit</a>
                                <a href="" class="btn btn-sm btn-warning">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Website Designing</td>
                            <td>Bashar</td>
                            <td>03/03/2023</td>
                            <td>06/03/2023</td>
                            <td>
                                <span class="btn btn-sm btn-success">Pending</span>
                            </td>
                            <td>
                                <a href="" class="btn btn-sm btn-success">Edit</a>
                                <a href="" class="btn btn-sm btn-warning">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection