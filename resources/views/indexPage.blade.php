@extends('layouts.app')
@section('app-title', 'Todo List')

@section('main-section')

<div class="container">
    <h2 class="text-center">Todo List</h2>
    <table class="table table-bordered  ">
        <thead class="thead-light">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Task Name</th>
            <th scope="col">Category</th>
            <th scope="col">Status</th>
            <th scope="col">Assigned</th>
            <th scope="col">Priority</th>
            <th scope="col">Start Date</th>
            <th scope="col">Due Date</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Media Source</th>
            <th scope="col">Note</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <th>Wordpress Fixup</th>
            <td>Wordpress</td>
            <td>Ongoing</td>
            <td>Tommy</td>
            <td>High</td>
            <td>9/11/23</td>
            <td>10/11/23</td>
            <td>John</td>
            <td>Skype</td>
            <td>N/A</td>
            <td>
                <a href="">View</a>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
          </tr>
        </tbody>
    </table>
</div>

@endsection