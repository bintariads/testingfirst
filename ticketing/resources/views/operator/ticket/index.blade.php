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

        <!-- Table with stripped rows -->
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

        <div class="modal fade" id="verticalycentered" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ticket Information</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="card-modal">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="card-detail-title"> ID 1001- Test Ticket</p>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <p class="card-detail-priority-low">Low</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row card-detail-body">
                                <div class="col-6">
                                    <p class="card-detail-body-title">
                                        Terminal
                                    </p>
                                    <p class="card-detail-body-value">
                                        Jakarta
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p class="card-detail-body-title">
                                        Terminal
                                    </p>
                                    <p class="card-detail-body-value">
                                        Jakarta
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p class="card-detail-body-title">
                                        Terminal
                                    </p>
                                    <p class="card-detail-body-value">
                                        Jakarta
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p class="card-detail-body-title">
                                        Terminal
                                    </p>
                                    <p class="card-detail-body-value">
                                        Jakarta
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="card-detail-notes">Notes</div>
                        <div class="card-modal">

                            <div class="row card-detail-notes">
                                Lorem ipsum dolor sit amet consectetur. Sit ullamcorper ornare ligula nullam
                                condimentum. Massa venenatis congue fermentum a rhoncus. Faucibus cursus porttitor
                                pellentesque dui nec nibh. Et eu vulputate condimentum ac. Pulvinar nulla non dui
                                ullamcorper sollicitudin morbi.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- End Vertically centered Modal-->

        <div class="row">
            <div class="col-lg-12">

                <div class="card p-2">
                    <div class="card-body">

                        <table class="table datatable p-2">
                            <thead>
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>TERMINAL</th>
                                    <th>PLAT</th>
                                    <th>NOTES</th>
                                    <th>STATUS</th>
                                    <th>PRIORITY</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>                           
                            <tbody>
                                @for ($i = 1; $i <= 100; $i++)

                                <tr>
                                    <td>00001</td>
                                    <td>Jakarta</td>
                                    <td>B 00001 RV</td>
                                    <td>Kerusakan...</td>
                                    <td> <button type="button" class="btn btn-outline-success mb-2">Done </button>
                                    </td>
                                    <td><span class="badge rounded-pill bg-danger ps-3 pe-3 pt-2 pb-2">Non
                                            Active</span>
                                    </td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <button type="button" class="btn btn-outline-success"
                                                data-bs-toggle="modal" data-bs-target="#verticalycentered">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-outline-secondary">
                                                <i class="bi bi-pencil-square "></i>
                                            </button>
                                            <button type="button" class="btn btn-outline-danger">
                                                <i class="bi bi-trash "></i>
                                            </button>
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

</main><!-- End #main -->
@extends('layouts.footer')


