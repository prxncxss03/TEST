@extends('structure')
@section('title','Employee')
@section('employeesModal')
<div class=" d-flex flex-column align-content-start mt-4  col-11" >

    <div class="alert alert-danger d-none mt-2" id="errorMsg" role="alert">
        Something went wrong!
    </div>
    <div class="w-100 d-flex justify-content-end">
        <button id="addEmployeeBtn"  type="button" class="btn btn-success my-2" data-toggle="modal" data-target="#employeeModal">Add Employee</button>
            
    </div>

    

<!-- addCourseBtn = addEmployeeBtn -->
<!-- #courseModal = #employeeModal -->
<!-- courseModalLabel = employeeModalLabel -->
<!-- closeCourseModal = closeEmployeeModal -->
<!-- saveCourse = saveEmployee -->
<!-- course = firstName -->
<!-- years = lastName -->
<!-- courseList = employeeList -->
  

    <!-- Add/Update Modal -->
    <div class="modal fade" id="employeeModal" tabindex="-1" role="dialog" aria-labelledby="employeeModalLabel" aria-hidden="true" >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="employeeModalLabel">Manage Employees</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Enter First Name">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name">
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" class="form-control" id="position" placeholder="Enter Position">
                    </div>
                    <div class="form-group">
                        <label for="sickLeaveCredits">Sick Leave Credits</label>
                        <input type="text" class="form-control" id="sickLeaveCredits" placeholder="Enter Sick Leave Credits">
                    </div>
                    <div class="form-group">
                        <label for="sickLeaveCredits">Sick Leave Credits</label>
                        <input type="text" class="form-control" id="sickLeaveCredits" placeholder="Enter Sick Leave Credits">
                    </div>
                    <div class="form-group">
                        <label for="vacationLeaveCredits">Vacation Leave Credits</label>
                        <input type="text" class="form-control" id="vacationLeaveCredits" placeholder="Enter Vacation Leave Credits">
                    </div>
                    <div class="form-group">
                        <label for="hourlyRate">Hourly Rate</label>
                        <input type="text" class="form-control" id="hourlyRate" placeholder="Enter Hourly Rate">
                    </div>
                
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="closeEmployeeModal" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveEmployee">Save</button>
            </div>
            </div>
        </div>
    </div>

@endsection
@section('employeesTable')

    
    <table class="table table-striped bg-light ">
        <thead>
            <tr>
            <th scope="col">No.</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Position</th>
            <th scope="col">Sick Leave Credits</th>
            <th scope="col">Vacation Leave Credits</th>
            <th scope="col">Hourly Rate</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody id="employeeList">
            
        </tbody>
    </table>
</div>
@endsection