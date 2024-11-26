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

                <div class="card p-2">
                    <div class="card-body">

                        <table class="table datatable p-2">
                      
                            <tbody>
                                @for ($i = 1; $i <= 6; $i++)

                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-between">

                                            <div class="d-flex align-items-start">
                                                <div class="">
                                                    <img src="{{ asset('assets/img/notif-blue.png') }}"
                                                        class="notification-card-img">
                                                </div>
                                                <div class="">
                                                    <h5 class="notification-card-title-new">New Notification</h5>
                                                    <p class="notification-card-desc">5 Minutes Ago</p>
                                                </div>
                                                <div class="notification-card-status">New Ticket</div>
                                            </div>
            
                                            <div class="">
                                                <button type="button" class="btn btn-outline-danger"
                                                    onclick="deleteData(${row.userID})">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </div>
            
                                    </td>
                                    
                                </tr>
                                @endfor
                                @for ($i = 1; $i <= 6; $i++)

                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-between">

                                            <div class="d-flex align-items-start">
                                                <div class="">
                                                    <img src="{{ asset('assets/img/notif-blue.png') }}"
                                                        class="notification-card-img">
                                                </div>
                                                <div class="">
                                                    <h5 class="notification-card-title">New Notification</h5>
                                                    <p class="notification-card-desc">5 Minutes Ago</p>
                                                </div>
                                            </div>
            
                                            <div class="">
                                                <button type="button" class="btn btn-outline-danger"
                                                    onclick="deleteData(${row.userID})">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </div>
            
                                    </td>
                                    
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</main><!-- End #main -->
@extends('layouts.footer')


