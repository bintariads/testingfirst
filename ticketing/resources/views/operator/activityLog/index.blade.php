@extends('layouts.operatorLayout')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Assets Control</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Assets Control</a></li>
                <li class="breadcrumb-item active">Assets Control List</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="d-flex justify-content-between" style="margin-bottom: 24px">
        <div class="">
            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">

                    <li>
                        <div class="filter-bar">
                            <img src="{{ asset('assets/img/filter.png') }}" alt="Profile"
                                style="margin-right: 40px; margin-left:25;">
                            <div class="profile-details">
                                <div class="filter-bar-title">Filter By</div>
                            </div>
                        </div>
                    </li>


                    <li class="nav-item dropdown filters">

                        <a class="nav-link d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

                            <div class="filters-title">ID</div>
                            <span class="d-none d-md-block dropdown-toggle ps-2"></span>

                            {{-- </div> --}}
                        </a>

                        <ul class="dropdown-menu profile" aria-labelledby="dropdownMenuButton"
                            style="padding: 15px; min-width: 300px;">
                            <li class="dropdown-header">
                                <h6 class="filter-select-title"><b>Select ID</b></h6>
                                <select id="mySelect" class="form-select" style="width: 100%">
                                    <option value="1">00001</option>
                                    <option value="2">00002</option>
                                    <option value="3">00003</option>
                                    <option value="4">00004</option>
                                    <option value="5">00005</option>
                                    <option value="6">00006</option>
                                </select>
                            </li>

                        </ul>

                    </li><!-- End Profile Nav -->
                    <li class="nav-item dropdown filters">

                        <a class="nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown">

                            <div class="filters-title">Status</div>
                            <span class="d-none d-md-block dropdown-toggle ps-2"></span>
                        </a>

                        <ul class="dropdown-menu profile" style="">
                            <li class="dropdown-header">
                                <h6 class="filter-select-title"><b>Select Status</b></h6>
                                <button class="status-done"> Done</button>
                                <button class="status-rejected"> Rejected</button>
                                <button class="status-processing"> Processing</button>
                                <button class="status-waiting"> Waiting Assign</button>
                            </li>
                        </ul>
                    </li><!-- End Profile Nav -->
                    <li class="nav-item dropdown filters">

                        <a class="nav-link d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

                            <div class="fiters-title">Priority</div>
                            <span class="d-none d-md-block dropdown-toggle ps-2"></span>

                            {{-- </div> --}}
                        </a>

                        <ul class="dropdown-menu profile" style="">
                            <li class="dropdown-header">
                                <h6 class="filter-select-title"><b>Select Priority</b></h6>
                                <button class="priority-low">Low</button>
                                <button class="priority-medium"> Medium</button>
                                <button class="priority-high"> High</button>
                            </li>
                        </ul>
                    </li><!-- End Profile Nav -->

                    <li>
                        <div class="filter-reset">
                            {{-- <div class="profile-details"> --}}
                            <img src="{{ asset('assets/img/reset.png') }}" alt="Profile"
                                style="margin-right: 8px; margin-left:25;">

                            <div class="filter-title-reset">Reset Filter</div>
                            {{-- </div> --}}
                        </div>
                    </li>


                </ul>
            </nav><!-- End Icons Navigation -->
        </div>
        <div class="">
            <div class=" d-flex align-items-end flex-column  pb-3 pe-2 ">
                <a type="button" class="btn btn-primary" href="<?= url('/operator/ticket/create') ?>">
                    <i class="bi bi-person-plus-fill pe-2"></i>Create Ticket
                </a>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card p-2">
                    <div class="card-body">
                        <h6 class="card-title-report">List Assets Control</h6>

                        <!-- Table with stripped rows -->
                        <div class=" d-flex align-items-end flex-column  pb-3 pe-2 ">
                            <a type="button" class="btn btn-primary"
                                href="<?= url('/operator/assets-control/create') ?>">
                                <i class="bi bi-person-plus-fill pe-2"></i>Create Assets Control
                            </a>
                        </div>

                        <div class="modal fade" id="verticalycentered" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Asset Information</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="card-modal">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <p class="card-detail-title">GPS</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row card-detail-body">
                                                <div class="col-6">
                                                    <p class="assets-body-title">
                                                        Name
                                                    </p>
                                                    <p class="assets-body-value">
                                                        Global Positioning System
                                                    </p>
                                                </div>
                                                <div class="col-6">

                                                    <p class="assets-body-title">
                                                        Amount
                                                    </p>

                                                    <p class="assets-body-value">
                                                        <input type="number" value="12" name=""
                                                            id="" class="form-add">
                                                    </p>
                                                    <div class="d-flex justify-content-start">

                                                        <div class="d-flex align-items-left button-container"
                                                            style="margin-left:20px ">
                                                            <img src="{{ asset('assets/img/add.png') }}"
                                                                class="button-add">
                                                        </div>
                                                        <div class="d-flex align-items-left button-container"
                                                            style="margin-left:20px ">
                                                            <img src="{{ asset('assets/img/min.png') }}"
                                                                class="button-add">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="assets-body-reason">Notes</div>
                                        <div class="card-modal">


                                            <div class="row card-detail-notes">
                                                <div class="quill-editor-bubble">
                                                    <p>Hello World!</p>

                                                </div>
                                            </div>
                                        </div>

                                        <div class=" d-flex align-items-center flex-column  pb-3 pe-2 ">
                                            <a type="button" class="btn btn-primary"
                                                href="<?= url('/operator/assets-control/create') ?>">
                                                Submit
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- End Vertically centered Modal-->

                        <table class="table datatable p-2">
                            <thead>
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>Activity</th>
                                    <th>Timestamp</th>
                                    <th>Terminal</th>
                                    <th>Detail</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="">
                                            <h5 class="notification-card-title">1101</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <h5 class="notification-card-title">Created Ticket</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <h5 class="notification-card-title">10:26</h5>
                                            <p class="notification-card-desc">5 Minutes Ago</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <h5 class="notification-card-title">Jakarta</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <h5 class="notification-card-title">Successful create a ticket</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <button type="button" class="btn btn-outline-danger"><i
                                                    class="bi bi-trash "></i></button>
                                        </div>
                                    </td>
                                </tr>



                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
@extends('layouts.footer')
