@extends('layouts.operatorLayout')
<main id="main" class="main">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- jQuery (required for Select2) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <div class="pagetitle">
        <h1>Vehicle</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Vehicle</a></li>
                <li class="breadcrumb-item active">Vehicle List</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card p-2">
                    <div class="card-body">
                        <h6 class="card-title-report">List Vehicle</h6>

                        <!-- Table with stripped rows -->
                        <div class=" d-flex align-items-end flex-column  pb-3 pe-2 ">
                            <a type="button" class="btn btn-primary" href="<?= url('/operator/vehicle/create') ?>">
                                <i class="bi bi-person-plus-fill pe-2"></i>Create Vehicle
                            </a>
                        </div>
                        <div class="modal fade custom-modal" id="verticalycentered" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content d-flex justify-content-center">

                                    <div class="modal-body">
                                        <div class="d-flex justify-content-end">
                                            <button type="button" class="btn-close custom-close"
                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('assets/img/pdf-logo.png') }}" alt="Profile"
                                                class="modal-excel-logo">
                                        </div>
                                        <div>
                                            <p class="modal-download-body">File Document .Pdf</p>
                                        </div>
                                        <div class="d-flex justify-content-center" style="margin-bottom:56px">
                                            <button type="button" class="btn btn-primary">Download</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal fade custom-modal-img" id="verticalycenteredImg" tabindex="-1">
                            <div class="modal-dialog modal-lg custom-modal-dialog">
                                <div class="modal-content custom-modal-content d-flex justify-content-center">
                                    <div class="modal-header">
                                        <h5 class="modal-title">View Image</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                    <div class="modal-body">
                                        <div class="d-flex justify-content-center">
                                            <div>
                                                <img data-bs-toggle="modal" class="modal-img" data-bs-target="#verticalycentered" src="{{ asset('assets/img/front-camera.png') }}" alt="">
                                                <p class="title-modal-img">Front Camera</p>
                                            </div>
                                            <div>
                                                <img data-bs-toggle="modal" class="modal-img" data-bs-target="#verticalycentered" src="{{ asset('assets/img/right-camera.png') }}" alt="">
                                                <p class="title-modal-img">Right Camera</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div>
                                                <img data-bs-toggle="modal" class="modal-img" data-bs-target="#verticalycentered" src="{{ asset('assets/img/left-camera.png') }}" alt="">
                                                <p class="title-modal-img">Left Camera</p>
                                            </div>
                                            <div>
                                                <img data-bs-toggle="modal" class="modal-img" data-bs-target="#verticalycentered" src="{{ asset('assets/img/drive-camera.png') }}" alt="">
                                                <p class="title-modal-img">Driver Camera</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <table class="table datatable p-2">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        ID
                                    </th>
                                    <th class="text-center">No. Vehicle</th>
                                    <th class="text-center">Installation Date</th>
                                    <th class="text-center">Document</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 1; $i <= 100; $i++)
                                    <tr>
                                        <td class="text-center">112726 {{ $i }}</td>
                                        <td class="text-center">9958{{ $i }}</td>
                                        <td class="text-center">Curicó</td>
                                        <td class="text-center">
                                            <img class="" data-bs-toggle="modal"
                                                data-bs-target="#verticalycentered"
                                                src="{{ asset('assets/img/vehicle-dokumen.png') }}" alt="">
                                        </td>
                                        <td class="text-center"> <img class=""
                                            data-bs-toggle="modal"
                                                data-bs-target="#verticalycenteredImg"
                                                src="{{ asset('assets/img/vehicle-image.png') }}" alt="">
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                <button type="button" class="btn btn-outline-secondary"><i
                                                        class="bi bi-pencil-square "></i></button>
                                                <button type="button" class="btn btn-outline-danger"><i
                                                        class="bi bi-trash "></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


    {{-- <script>

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
</script> --}}
</main><!-- End #main -->
@extends('layouts.footer')
