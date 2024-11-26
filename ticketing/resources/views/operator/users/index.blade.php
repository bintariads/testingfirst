
@extends('layouts.operatorLayout')
<main id="main" class="main">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- jQuery (required for Select2) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <div class="pagetitle">
        <h1>User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">User</a></li>
                <li class="breadcrumb-item active">User List</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card p-2">
                    <div class="card-body">
                        <h6 class="card-title-report">List Operator</h6>

                        <!-- Table with stripped rows -->
                        <div class=" d-flex align-items-end flex-column  pb-3 pe-2 ">
                            <a type="button" class="btn btn-primary" href="<?= url('/operator/user/create') ?>">
                                <i class="bi bi-person-plus-fill pe-2"></i>Buat Akun
                            </a>
                        </div>

                        <table class="table table-separate table-head-custom table-checkable"
                            id="table_penelitian_dosen" data-toggle="table" data-pagination="true"
                            data-toolbar="#toolbar" data-search="true" data-page-size="10">
                            <thead>
                                <tr>
                                    <th data-formatter="noFormatter" data-align="center">No</th>
                                    <th data-field="name" data-sortable="true">Name</th>
                                    <th data-field="email" data-sortable="true">Email</th>
                                    <th data-field="terminalName" data-sortable="true">Terminal</th>
                                    <th data-field="roleName" data-sortable="true">Role</th>
                                    <th data-formatter="statusFormatter" data-align="center">Status</th>
                                    <th data-field="id" data-formatter="actionFormatter" data-align="center">Action</th>
                                </tr>
                            </thead>
                        </table>


                    </div>
                </div>

            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


    <script>

        $(document).ready(function() {
            Swal.fire({
            title: 'Mengambil Data',
            text: 'Mohon Tunggu...',
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading()
            }
        });
        load_data();

        setInterval(load_data, 10000);

        window.noFormatter = function(value, row, index) {
            return index + 1;
        }

        window.statusFormatter = function(value, row, index) {


            if (row.status == 1) {
                return `<span class="badge rounded-pill bg-success ps-3 pe-3 pt-2 pb-2">Active</span>`;
            } else {
                return `<span class="badge rounded-pill bg-danger ps-3 pe-3 pt-2 pb-2">Non Active</span>`;
            }
        }

        window.actionFormatter = function(value, row, index) {

            return `<div class="btn-group" role="group" aria-label="Basic outlined example">
                <button type="button" class="btn btn-outline-secondary" onclick="editData(${row.userID})">
                    <i class="bi bi-pencil-square"></i>
                    </button>
                    <button type="button" class="btn btn-outline-danger" onclick="deleteData(${row.userID})">
                        <i class="bi bi-trash"></i>
                        </button>
                        <button type="button" class="btn btn-outline-success">
                            <i class="bi bi-box-arrow-in-right"></i>
                            </button>
                            <button type="button" class="btn btn-outline-warning">
                                <i class="bi bi-house-lock"></i>
                                </button>
                    </div>`;
                }


                function load_data() {
                    $.ajax({
                        url: 'user/getdata',
                        type: 'GET',
                        dataType: 'json',
                        success: function(response) {
                            $('#table_penelitian_dosen').bootstrapTable('removeAll');
                            $('#table_penelitian_dosen').bootstrapTable('load', response.data);
                            Swal.close();
                        },
                        error: function(response) {
                            Swal.fire({
                                icon: 'error',
                                title: 'ERROR'
                            });
                        }
                    });
                }

                window.deleteData = function(id) {
                    return Swal.fire({
                        title: 'You are about to delete',
                        text: 'Are you sure you want to delete this post? This action cannot be undone.',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#bcbcbc',
                        confirmButtonText: '<i class="fa fa-trash"></i> Delete',
                        cancelButtonText: '<i class="fa fa-times"></i> Cancel',
                        customClass: {
                            popup: 'custom-swal-popup',
                            title: 'custom-swal-title',
                            htmlContainer: 'custom-swal-text',
                            confirmButton: 'custom-swal-confirm',
                            cancelButton: 'custom-swal-cancel'
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            let formData = new FormData();
                            formData.append('_token', "{{ csrf_token() }}");
                    formData.append('id', id);
                    Swal.fire({
                        title: 'Mengambil Data',
                        text: 'Mohon Tunggu...',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading()
                        }
                    });

                    $.ajax({
                        url: "{{ url('/operator/user/delete') }}",
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            return Swal.fire({
                                title: 'Success',
                                text: 'User Deleted',
                                icon: 'Success',
                                showCancelButton: true,
                                customClass: {
                                    popup: 'custom-swal-popup',
                                    title: 'custom-swal-title',
                                    htmlContainer: 'custom-swal-text',
                                }
                            }).then(() => {
                                Swal.fire({
                                    title: 'Mengambil Data',
                                    text: 'Mohon Tunggu...',
                                    allowOutsideClick: false,
                                    didOpen: () => {
                                        Swal.showLoading()
                        }
                    });
                            load_data();
                        });
                    },
                    error: function(response) {
                        Swal.fire({
                            icon: 'error',
                            title: 'ERROR',
                            text: 'Failed to retrieve data'
                        });
                    }
                    });
                }
            });
        }

        window.editData = function(id) {
            console.log('Edit ID: ' + id);
        }

    });
</script>
</main><!-- End #main -->
@extends('layouts.footer')
