@extends('layouts.operatorLayout')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Create User </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">User</a></li>
                <li class="breadcrumb-item">User List</li>
                <li class="breadcrumb-item active">Add User</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->




    <div class="container">

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card p-4">
                    <div class="card-body">


                        <!-- General Form Elements -->
                        <form>
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label>Name <span class="text-danger">*</span></label>
                                    <div class="">
                                        <input type="text" id="name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Terminal <span class="text-danger">*</span></label>
                                    <div class="">
                                        <select class="form-select" aria-label="Default select example" id="terminal">
                                            <option value="0">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <div class="">
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Role <span class="text-danger">*</span></label>
                                    <div class="">
                                        <select class="form-select" aria-label="Default select example" id="role">
                                            <option value="0">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Password <span class="text-danger">*</span></label>
                                    <div class="">
                                        <input type="password" class="form-control" id="password" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Confirm Password <span class="text-danger">*</span></label>
                                    <div class="">
                                        <input type="password" class="form-control" id="password2" required>
                                    </div>
                                </div>
                                <div class="">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">File Upload <span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="file" id="file" required>
                                    </div>
                                </div>
                            </div>


                            <div class=" d-flex align-items-center flex-column  pb-3 pe-2 mt-5 ">
                                <a type="button" id="createUser" class="btn btn-primary">
                                    Simpan User
                                </a>
                            </div>
                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>


        </div>

    </section>


</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function() { // Ensure the DOM is fully loaded
        $('#createUser').on('click', function() {
            let name = $("#name").val();
            let email = $("#email").val();
            let password = $("#password").val();
            let password2 = $("#password2").val();
            let terminal = $("#terminal").val();
            let role = $("#role").val();
            let fileInput = $('#file')[0];

            if (name == "" || email == "") {
                return Swal.fire({
                    icon: 'error',
                    title: 'ERROR',
                    text: 'Empty field are not allowed'
                });
            }

            if (terminal == '0') {
                return Swal.fire({
                    icon: 'error',
                    title: 'ERROR',
                    text: 'Choose Terminal'
                });
            }

            if (role == '0') {
                return Swal.fire({
                    icon: 'error',
                    title: 'ERROR',
                    text: 'Choose Role'
                });
            }

            if (password != password2) {
                return Swal.fire({
                    icon: 'error',
                    title: 'ERROR',
                    text: 'Password tidak sama harap cek kembali'
                });
            }

            if (fileInput.files.length === 0) {
                return Swal.fire({
                    icon: 'error',
                    title: 'ERROR',
                    text: 'Please upload an image file'
                });
            }

            let file = fileInput.files[0];
            let fileType = file.type;

            if (fileType !== 'image/png' && fileType !== 'image/jpeg') {
                return Swal.fire({
                    icon: 'error',
                    title: 'ERROR',
                    text: 'File format must be PNG or JPG'
                });
            }

            Swal.fire({
                title: 'Please wait...',
                text: 'Processing your request...',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            let formData = new FormData();
            formData.append('_token', "{{ csrf_token() }}");
            formData.append('name', name);
            formData.append('email', email);
            formData.append('password', password);
            formData.append('terminal', terminal);
            formData.append('role', role);
            formData.append('file', file);

            $.ajax({
                url: "{{ url('/operator/user/save') }}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.status == "200") {
                        return Swal.fire({
                            title: 'Success',
                            text: 'User Created',
                            icon: 'Success',
                            showCancelButton: true,
                            customClass: {
                                popup: 'custom-swal-popup',
                                title: 'custom-swal-title',
                                htmlContainer: 'custom-swal-text',
                            }
                        }).then(() => {
                            // Kosongkan input setelah SweetAlert ditutup
                            $('#name').val('');
                            $('#email').val('');
                            $('#password').val('');
                            $('#password2').val('');
                            $('#terminal').val('0');
                            $('#role').val('0');
                        });
                    } else {
                        return Swal.fire({
                            icon: 'error',
                            title: 'ERROR',
                            text: response.message
                        });
                    }
                },
                error: function(response) {
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
