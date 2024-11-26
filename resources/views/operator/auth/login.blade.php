@extends('layouts.header')
<main>
    <div class="login-box" style="">
        <div class="col-3 login-box-left" style="">
            <div class="login-box-left-img">
                <img src="{{ asset('assets/img/logo-login.png') }}"/>
            </div>
            <div class="login-box-left-form">
                <form id="loginForm">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="floatingInput">Email</label>
                      </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" placeholder="name@example.com">
                        <label for="floatingInput">Password</label>
                      </div>

                    <div class=" d-flex align-items-center flex-column pb-3 pe-2 mt-5">
                        <button type="submit" class="login-box-left-btn"  id="login">Sign in</button>
                    </div>

                    <div class="col-12">
                        <p class="small mb-0">Don't have an account? <a href="pages-register.html">Create an account</a></p>
                    </div>
                </form>
            </div>
        </div>
        <div class="" style="width: 849px; padding:12px">
            <img src="{{ asset('assets/img/login-bg.png') }}"/>

        </div>
    </div>
    {{-- <div class="container">logo-login
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6" class="bg-danger" >
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                    <p class="text-center small">Enter your email & password to login</p>
                                </div>

                                <form id="loginForm">
                                    <div class="col-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="textx  " class="form-control" id="email" required>
                                        <div class="invalid-feedback">Please enter your email.</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" required>
                                        <div class="invalid-feedback">Please enter your password!</div>
                                    </div>

                                    <div class=" d-flex align-items-center flex-column pb-3 pe-2 mt-5">
                                        <button type="submit" class="btn btn-primary" id="login">Login</button>
                                    </div>

                                    <div class="col-12">
                                        <p class="small mb-0">Don't have an account? <a href="pages-register.html">Create an account</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-6" class="bg-success" style="height: 1000px">
                        jhsdjhs
                    </div>

                </div>
            </div>
        </section>
    </div> --}}
</main>
@extends('layouts.footer')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $('#loginForm').on('submit', function(event) {
            event.preventDefault(); // Mencegah form dari submit default

            let email = $("#email").val();
            let password = $("#password").val();

            Swal.fire({
                title: 'Please wait...',
                text: 'Processing your request...',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            $.ajax({
                url: "{{ url('/login') }}",
                type: 'POST',
                dataType: 'json',
                data: {
                    email: email,
                    password: password,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    Swal.close();
                    if (response.token) {
                        localStorage.setItem('accessToken', response.token);
                        Swal.fire({
                            icon: 'success',
                            title: 'SUCCESS',
                            text: response.message
                        }).then(() => {
                            // Redirect ke halaman dashboard setelah login
                            window.location.href = "{{ url('/dashboard') }}";
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
                    Swal.close(); // Menutup Swal loading
                    Swal.fire({
                        icon: 'error',
                        title: 'ERROR',
                        text: 'Failed to login, please check your credentials'
                    });
                }
            });
        });
    });


</script>
