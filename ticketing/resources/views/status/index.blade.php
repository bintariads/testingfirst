@extends('layouts.operatorLayout')
<main id="main" class="main">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- jQuery (required for Select2) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <div class="pagetitle">
        <h1><?= $title?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><?= $title?></a></li>
                <li class="breadcrumb-item active">List <?= $title?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">

        <div class="row">
            <div class="col-lg-12">
                <div class="card p-2">
                    <div class="card-body">

                        <table class="table datatable p-2">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Icon</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody >
                                <tr >
                                    <td >Done</td>
                                    <td > <div class="status-icon d-flex justify-content-center " style="border: 1px solid #2CD85A; color: #2CD85A; "> Done </div></td>
                                    <td >
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <button type="button" class="btn btn-outline-secondary">
                                                <i class="bi bi-pencil-square "></i>
                                            </button>
                                            <button type="button" class="btn btn-outline-danger" onclick="deleteData()">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <script>
        function deleteData() {
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
    Swal.fire({
        title: 'Mengambil Data',
        text: 'Mohon Tunggu...',
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading()
        }
    });


}
});
  
        }
    </script>



@extends('layouts.footer')


