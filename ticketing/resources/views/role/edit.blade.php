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

                <div class="card p-4">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label>Name <span class="text-danger">*</span></label>
                                    <div class="">
                                        <input type="text" class="form-control" id="subject">
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label>Amount  <span class="text-danger">*</span></label>
                                    <div class="">
                                        <input type="number" class="form-control" id="subject">
                                    </div>
                                </div>

                            </div>


                            <div class=" d-flex align-items-center flex-column mt-2 ">
                                <a type="button" class="btn btn-primary" id="createVehicle">
                                    Save 
                                </a>
                            </div>
                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>


        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</main><!-- End #main -->
<script>
    $(document).ready(function() { // Ensure the DOM is fully loaded
        $('#createTicket').on('click', function() {
            let subject = $("#subject").val();
            let plat = $("#plat").val();
            let status = $("#status").val();
            let priority = $("#priority").val();
            let description = $("#description").val();

            console.log(status, priority);

            if(subject == ""||plat==""){
                return Swal.fire({
                        icon: 'error',
                        title: 'ERROR',
                        text: 'Empty field are not allowed'
                    });
            }
            if(status == '0'){
                return Swal.fire({
                        icon: 'error',
                        title: 'ERROR',
                        text: 'Choose status'
                    });
            }
            if(priority == '0'){
                return Swal.fire({
                        icon: 'error',
                        title: 'ERROR',
                        text: 'Choose priority'
                    });
            }

            $.ajax({
                url: "{{ url('/operator/user/save') }}",
                type: 'POST',
                dataType: 'json',
                data: {
                    _token: "{{ csrf_token() }}",
                    subject: subject,
                    plat:plat,
                    description:description,
                    status:status,
                    priority:priority
                },
                success: function(response) {

                },
                error: function(response) {
                    // Show an error message if AJAX fails
                    Swal.fire({
                        icon: 'error',
                        title: 'ERROR',
                        text: 'Failed to retrieve data'
                    });
                }
            });
        });
    });
</script>
@extends('layouts.footer')
