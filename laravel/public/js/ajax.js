$(function(){
  $('#logout').on('click', function(){
    
    $('#exitWeb').modal('show');
  })
    const BASEURL = "https://8000-j1hu-hackathonemploy-k893qi5hggf.ws-us38.gitpod.io";

    loadEmployees();
    function loadEmployees() {
        $('#employeeList').html("");
        var request = $.ajax({
            url: BASEURL + "/api/management/employee",
            type: "GET",
        });
        request.done(function (response, textStatus, jqXHR) {
            var data = response.data;
            
            data.map(employee => {
                $('#employeeList').append(`
                <tr>
                    <th scope="row">${employee.firstName}</th>
                    <td>${employee.lastName}</td>
                    <td>${employee.position}</td>
                    <td>${employee.sickLeaveCredits}</td>
                    <td>${employee.vacationLeaveCredits}</td>
                    <td>${employee.hourlyRate}</td>
                    <td>
                    <button type="button" 
                        class="btn btn-info edit" 
                        data-id="${employee.id}"
                        data-firstName="${employee.firstName}"
                        data-lastName="${employee.lastName}"
                        data-position="${employee.position}"
                        data-sickLeaveCredits="${employee.sickLeaveCredits}"
                        data-vacationLeaveCredits="${employee.vacationLeaveCredits}"
                        data-hourlyRate="${employee.hourlyRate}"
                        <i class="fa-solid fa-pen"></i>
                    </button>
                    <button class="btn btn-sm btn-danger delete" data-id="${employee.id}">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                    </td>
                </tr>
                `);
            });
        initializeButtonEvents();
    });

        request.fail(function (jqXHR, textStatus, errorThrown){
            var errorMsg = jqXHR.responseJSON;
            $('#errorMsg').html(errorMsg.error).removeClass('d-none');
        });
    }

    $('#addEmployeeBtn').on('click', function() {
        
        
        
      $('#saveEmployee').removeAttr('data-id');
      cleanModal();
    });
    $('#saveEmployee').on('click', function() {
        var firstName = $('#firstName').val();
        var lastName = $('#lastName').val();
        var position = $('#position').val();
        var sickLeaveCredits = $('#sickLeaveCredits').val();
        var vacationLeaveCredits = $('#vacationLeaveCredits').val();
        var hourlyRate = $('#hourlyRate').val();

        if (!firstName || !lastName ||!position || !sickLeaveCredits || !vacationLeaveCredits || !hourlyRate){
          alert('Please complete all the fields');
        }
        var id = $('#saveEmployee').data('id');
        var request = $.ajax({
            url: id ? BASEURL + `/api/management/employee/${id}` : "/api/management/employee",
            type: id ? "PUT" : "POST",
            data: {
                firstName, lastName, position, sickLeaveCredits, vacationLeaveCredits, hourlyRate
            }
      });
      request.done(function (response, textStatus, jqXHR){
        var data = response.data;
        loadCourses();
        $('#closeEmployeeModal').click();
        cleanModal();
      });
      request.fail(function (jqXHR, textStatus, errorThrown){
        var errorMsg = jqXHR.responseJSON
        $('#errorMsg').html(errorMsg.error).removeClass('d-none');
        $('#closeEmployeeModal').click();
        cleanModal();
      });
    });
    function cleanModal() {
      $('#firstName').val("");
      $('#lastName').val("");
      $('#position').val("");
      $('#sickLeaveCredits').val("");
      $('#vacationLeaveCredits').val("");
      $('#hourlyRate').val("");
    }
    function initializeButtonEvents() {
      $('.edit').on('click', function() {
        var id = $(this).data('id');
        var firstName = $(this).data('firstName');
        var lastName = $(this).data('lastName');
        var position = $(this).data('position');
        var sickLeaveCredits = $(this).data('sickLeaveCredits');
        var vacationLeaveCredits = $(this).data('vacationLeaveCredits');
        var hourlyRate = $(this).data('hourlyRate');
        $('#firstName').val(firstName);
        $('#lastName').val(lastName);
        $('#position').val(position);
        $('#sickLeaveCredits').val(sickLeaveCredits);
        $('#vacationLeaveCredits').val(vacationLeaveCredits);
        $('#hourlyRate').val(hourlyRate);
        $('#saveEmployee').attr('data-id', id);
        $('#employeeModal').modal('show');
      });
      $('.delete').on('click', function() {
        var id = $(this).data('id');
        if (confirm("Are you sure you want to delete this course?") == true) {
          var request = $.ajax({
            url:  BASEURL + `/api/management/employee/${id}`,
            type: "DELETE",
          });
          request.done(function (response, textStatus, jqXHR){
            var data = response.data;
            loadEmployees();
          });
          request.fail(function (jqXHR, textStatus, errorThrown){
            var errorMsg = jqXHR.responseJSON
            $('#errorMsg').html(errorMsg.error).removeClass('d-none');
          });
        }
      });
    }

    

});