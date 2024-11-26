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
        <h1>Ticket</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Ticket</a></li>
                <li class="breadcrumb-item active">List Ticket</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card p-4">
                    <div class="card-body">


                        <!-- General Form Elements -->
                        <form>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label class="mb-2">Terminal<span class="text-danger">*</span></label>
                                    <div class="">
                                        <input type="text" class="form-control" id="subject" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="mb-2">Status <span class="text-danger">*</span></label>
                                    <div class="">
                                        <select class="form-select" aria-label="Default select example" id="status">
                                            <option value="0">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="mb-2">Plat <span class="text-danger">*</span></label>
                                    <div class="">
                                        <input type="text" class="form-control" id="plat" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="mb-2">Priority <span class="text-danger">*</span></label>
                                    <div class="">
                                        <select class="form-select" aria-label="Default select example" id="priority">
                                            <option value="0">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="">
                                    <label class="mb-2">Description <span class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" style="height: 196px" id="description"></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class=" d-flex align-items-center flex-column  pb-3 pe-2 mt-5 ">
                                <a type="button" class="btn btn-primary" id="createTicket">
                                    Simpan User
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
