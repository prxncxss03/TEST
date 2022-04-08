@extends('structure')
@section('title','Employee')
@section('employeesTable')
<div class="col-11">

    <div class="d-block w-100 d-flex justify-content-end">
        <button type="button" class="btn btn-success my-2">Add Employee</button>
    </div>
    <table class="table table-striped bg-light ">
    
        <thead>
            <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Position</th>
            <th scope="col">Sick Leave Credits</th>
            <th scope="col">Vacation Leave Credits</th>
            <th scope="col">Hourly Rate</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>
                <button type="button" class="btn btn-info">
                    <i class="fa-solid fa-pen"></i>
                </button>
                <button type="button" class="btn btn-danger">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection