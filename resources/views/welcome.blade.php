<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Laravel</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    {{-- DataTables --}}
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- Styles -->
    <style>
        html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
    </style>
    
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<body class="antialiased">
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="d-flex">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdd">New User</button>
            </div>
        </div>
        <div class="row mt-4">
            <div class="table-responsive">
                <table id="myTable" class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Date of Birth</th>
                            <th>Nationality</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
    
    <!-- Modal Edit -->
    <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEdit" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <form id="form" class="form-edit">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">User</h5>
                    </div>
                    <div class="modal-body">
                        <div class="mb-2 form-group">
                            <label for="cst_name" class="form-label">Name <font style="color: red;">*</font></label>
                            <input autocomplete="off" type="text" class="form-control" id="cst_name" name="cst_name" required>
                        </div>
                        <div class="mb-2 form-group">
                            <label for="cst_dob" class="form-label">Date of Birth <font style="color: red;">*</font></label>
                            <input type="datetime-local" class="form-control" id="cst_dob" name="cst_dob" required>
                        </div>
                        <div class="mb-2 form-group">
                            <label for="cst_email" class="form-label">Email <font style="color: red;">*</font></label>
                            <input autocomplete="off" type="email" name="cst_email" id="cst_email" class="form-control" required>
                        </div>
                        <div class="mb-2 form-group" class="form-label">
                            <label for="cst_phone_num">Phone Number <font style="color: red;">*</font></label>
                            <input autocomplete="off" type="tel" name="cst_phone_num" id="cst_phone_num" class="form-control" required>
                        </div>
                        <div class="mb-3 form-group">
                            <label for="nationality_id" class="form-label">Nationality <font style="color: red;">*</font></label>
                            <select class="form-select" name="nationality_id" id="nationality_id" aria-label="nationality" required>
                                <option value="" selected>-------</option>
                                @foreach ($nationality as $national)
                                <option value="{{ $national->nationality_id }}">{{ $national->nationality_code }} - {{ $national->nationality_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <table class="table table-striped table-bordered" id="formTable" style="width: 100%">
                            <tbody>
                                <tr>
                                    <td colspan="3" align="center">Family</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary w-100" id="addListFamily">Add</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">Name</td>
                                    <td align="center">Date of Birth</td>
                                    <td align="center">Relationship</td>
                                    <td align="center">Action</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <div>
                            <p style="color: red; font-size:1em;">* Note: If you don't want to add a family, please delete all family lists</p>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Exit</button>
                        <button type="submit" class="btn btn-primary" id="saveEditButton">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Modal Add -->
    <div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="modalAdd" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <form id="form" class="form-add">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">User</h5>
                    </div>
                    <div class="modal-body">
                        <div class="mb-2 form-group">
                            <label for="cst_name" class="form-label">Name <font style="color: red;">*</font></label>
                            <input autocomplete="off" type="text" class="form-control" id="cst_name" name="cst_name" required>
                        </div>
                        <div class="mb-2 form-group">
                            <label for="cst_dob" class="form-label">Date of Birth <font style="color: red;">*</font></label>
                            <input type="datetime-local" class="form-control" id="cst_dob" name="cst_dob" required>
                        </div>
                        <div class="mb-2 form-group">
                            <label for="cst_email" class="form-label">Email <font style="color: red;">*</font></label>
                            <input autocomplete="off" type="email" name="cst_email" id="cst_email" class="form-control" required>
                        </div>
                        <div class="mb-2 form-group" class="form-label">
                            <label for="cst_phone_num">Phone Number <font style="color: red;">*</font></label>
                            <input autocomplete="off" type="tel" name="cst_phone_num" id="cst_phone_num" class="form-control" required>
                        </div>
                        <div class="mb-3 form-group">
                            <label for="nationality_id" class="form-label">Nationality <font style="color: red;">*</font></label>
                            <select class="form-select" name="nationality_id" id="nationality_id" aria-label="nationality" required>
                                <option value="" selected>-------</option>
                                @foreach ($nationality as $national)
                                <option value="{{ $national->nationality_id }}">{{ $national->nationality_code }} - {{ $national->nationality_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <table class="table table-striped table-bordered" id="formTable" style="width: 100%">
                            <tbody>
                                <tr>
                                    <td colspan="3" align="center">Family</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary w-100" id="addListFamily">Add</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">Name</td>
                                    <td align="center">Date of Birth</td>
                                    <td align="center">Relationship</td>
                                    <td align="center">Action</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <div>
                            <p style="color: red; font-size:1em;">* Note: If you don't want to add a family, please delete all family lists</p>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Exit</button>
                        <button type="submit" class="btn btn-primary" id="addButton">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <script>
        let start = 0;
        
        document.addEventListener('DOMContentLoaded', function () {
            const urlWithoutParams = window.location.href.split('?')[0];
            history.replaceState(null, null, urlWithoutParams);
            
            const myModal = new bootstrap.Modal(document.getElementById('modalAdd'));
            myModal._element.addEventListener('hidden.bs.modal', function() {
                start = 0;
                $('.form-add #cst_name').val('');
                $('.form-add #cst_dob').val('');
                $('.form-add #cst_email').val('');
                $('.form-add #cst_phone_num').val('');
                $('.form-add #nationality_id').val('');
                $('.form-add table#formTable tbody tr.data-row').remove();
                console.log(start);
            });
        });
        
        $(function() {
            
            function formatDate(date) {
                var now = new Date(date);
                var year = now.getFullYear();
                var month = String(now.getMonth() + 1).padStart(2, '0');
                var day = String(now.getDate()).padStart(2, '0');
                var hours = String(now.getHours()).padStart(2, '0');
                var minutes = String(now.getMinutes()).padStart(2, '0');
                
                var formattedDateTime = year + '-' + month + '-' + day + 'T' + hours + ':' + minutes;
                return formattedDateTime;
            }
            
            var table = $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: {
                    url: "{{ route('user.list') }}",
                    type: "GET",
                },
                columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', searchable: false},
                {data: 'cst_name', name: 'cst_name'},
                {data: 'cst_dob', name: 'cst_dob'},
                {data: 'nationality_name', name: 'nationality_name'},
                {data: 'cst_phone_num', name: 'cst_phone_num'},
                {data: 'cst_email', name: 'cst_email'},
                {data: 'action', name: 'action', orderable: true, searchable: false},
                ],
                columnDefs: [
                { className: 'text-center', targets: [0], width: '5%' },
                { className: 'text-center', targets: [1, 2, 3, 4, 5] },
                ]
            });
            
            $('button#addListFamily').on('click', function() {
                start = start + 1;
                $('table#formTable tbody').append(`
                <tr class="data-row" id="row-${start}">
                    <td>
                        <input autocomplete="off" type="text" name="fl_name" id="fl_name" data-id="${start}" class="form-control" required>
                    </td>
                    <td>
                        <input type="datetime-local" name="fl_dob" id="fl_dob" data-id="${start}" class="form-control" required>
                    </td>
                    <td>
                        <input autocomplete="off" type="text" name="fl_relation" id="fl_relation" data-id="${start}" class="form-control" required>
                    </td>
                    <td>
                        <button type="button" class="btn btn-md btn-danger deleteRowFamily w-100" data-id="${start}">Delete</button>
                    </td>
                </tr>
                `)
            })
            
            $(document).on('click', 'button.deleteRowFamily', function () {
                let id = $(this).data('id');
                $(`tr.data-row#row-${id}`).remove();
            })
            
            $("#form.form-add").validate({
                submitHandler: function(form) {
                    let cst_name = $('.form-add #cst_name').val();
                    let cst_dob = $('.form-add #cst_dob').val();
                    let cst_email = $('.form-add #cst_email').val();
                    let cst_phone_num = $('.form-add #cst_phone_num').val();
                    let nationality_id = $('.form-add #nationality_id').val();
                    let familyList = document.querySelectorAll(".form-add table#formTable tbody tr.data-row");
                    
                    let familyData = [];
                    for (let x = 0; x < familyList.length; x++) {
                        let fl_relation = $(`.form-add table#formTable tbody tr#row-${x+1} #fl_relation`).val();
                        let fl_name = $(`.form-add table#formTable tbody tr#row-${x+1} #fl_name`).val();
                        let fl_dob = $(`.form-add table#formTable tbody tr#row-${x+1} #fl_dob`).val();
                        
                        if (fl_relation != "" || fl_name != "" || fl_dob != "") {
                            familyData.push({
                                fl_relation: fl_relation,
                                fl_name: fl_name,
                                fl_dob: fl_dob
                            });
                        }
                        
                    }
                    axios({
                        method: 'POST',
                        url: `{{ route('user.add') }}`,
                        data: {
                            user_data: {
                                cst_name: cst_name,
                                cst_dob: cst_dob,
                                cst_email: cst_email,
                                cst_phone_num: cst_phone_num,
                                nationality_id: nationality_id
                            },
                            family_data: familyData
                        }
                    })
                    .then(function (response) {
                        let result = response.data;
                        alert(result.data);
                    }).catch((e) => {
                        console.log(JSON.stringify(e))
                        alert(e.error)
                    }).finally(() => {
                        table.ajax.reload();
                        $('#modalAdd').modal('toggle');
                    });
                }
            });
            
            $(document).on('click', '#showModalEdit', function () {
                $('.form-edit table#formTable tbody tr.data-row').remove();
                let id = $(this).data('id');
                
                axios({
                    method: 'GET',
                    url: `/user/${id}`,
                })
                .then(function (response) {
                    let result = response.data;
                    let user = result.user;
                    let family = result.family;
                    
                    $('.form-edit #cst_name').val(user.cst_name);
                    $('.form-edit #cst_email').val(user.cst_email);
                    $('.form-edit #cst_phone_num').val(user.cst_phone_num);
                    $('.form-edit #nationality_id').val(user.nationality_id);
                    $('.form-edit #cst_dob').val(formatDate(user.cst_dob));
                    $('#modalEdit .form-edit').attr('data-id', user.cst_id);
                    
                    if (family.length > 0) {
                        for (let x = 0; x < family.length; x++) {
                            $('.form-edit table#formTable tbody').append(`<tr class="data-row" id="row-${family[x].fl_id}"><td><input autocomplete="off" type="text" name="fl_name" value="${family[x].fl_name}" id="fl_name" data-id="${family[x].fl_id}" class="form-control" required></td><td><input type="datetime-local" name="fl_dob" id="fl_dob" value="${formatDate(family[x].fl_dob)}" data-id="${family[x].fl_id}" class="form-control" required><td><input autocomplete="off" type="text" name="fl_relation" id="fl_relation" value="${family[x].fl_relation}" data-id="${family[x].fl_id}" class="form-control" required></td><td><button type="button" class="btn btn-md btn-danger deleteRowFamilyUpdate w-100" data-id="${family[x].fl_id}">Delete</button></td></tr>`);
                        }
                    }
                    
                    $('#modalEdit').modal('show');
                }).catch((e) => {
                    $('#modalEdit').modal('hide');
                    alert("Failed to load data");
                })
            })

            $(document).on('click', 'button.deleteRowFamilyUpdate', function() {
                let id = $(this).data('id');
                console.log(id);

                axios({
                    method: `DELETE`,
                    url: `/family/${id}`
                }).then((response) => {
                    $(`.form-edit table#formTable tbody tr.data-row#row-${response}`).remove();
                }).catch((e) => {
                    console.log(JSON.stringify(e));
                    alert(e);
                });
            })
            
            $("#modalEdit .form-edit").validate({
                submitHandler: function(form) {
                    let cst_id = $("#modalEdit .form-edit").data('id');
                    let cst_name = $('.form-edit #cst_name').val();
                    let cst_dob = $('.form-edit #cst_dob').val();
                    let cst_email = $('.form-edit #cst_email').val();
                    let cst_phone_num = $('.form-edit #cst_phone_num').val();
                    let nationality_id = $('.form-edit #nationality_id').val();
                    let familyList = document.querySelectorAll(".form-edit table#formTable tbody tr.data-row");
                    
                    let familyData = [];
                    for (let x = 0; x < familyList.length; x++) {
                        let fl_relation = $(`.form-edit table#formTable tbody tr#row-${x+1} #fl_relation`).val();
                        let fl_name = $(`.form-edit table#formTable tbody tr#row-${x+1} #fl_name`).val();
                        let fl_dob = $(`.form-edit table#formTable tbody tr#row-${x+1} #fl_dob`).val();
                        
                        if (fl_relation != "" || fl_name != "" || fl_dob != "") {
                            familyData.push({
                                fl_relation: fl_relation,
                                fl_name: fl_name,
                                fl_dob: fl_dob
                            });
                        }
                        
                    }

                    axios({
                        method: 'PUT',
                        url: `{{ route('user.update') }}`,
                        data: {
                            id: cst_id,
                            user_data: {
                                cst_name: cst_name,
                                cst_dob: cst_dob,
                                cst_email: cst_email,
                                cst_phone_num: cst_phone_num,
                                nationality_id: nationality_id
                            }
                        }
                    })
                    .then(function (response) {
                        let result = response.data;
                        alert("Successfully updated user data");
                    }).catch((e) => {
                        console.log(JSON.stringify(e))
                        alert("Failed to update user data")
                    })
                    .finally(() => {
                        table.ajax.reload();
                        $('#modalEdit').modal('toggle');
                    });
                }
            });
            
            $(document).on('click', 'button#deleteUser', function() {
                let id = $(this).data('id');
                
                axios({
                    method: `DELETE`,
                    url: `/user/${id}`,
                    
                }).then((response) => {
                    var result = response.data;
                    alert("User data has been successfully deleted")
                }).catch((e) => {
                    console.log(e);
                    alert("User data failed to delete");
                }).finally(() => {
                    table.ajax.reload();
                });
            })
        })
    </script>
</body>
</html>
