
@extends('layouts.operatorLayout')
<main id="main" class="main">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- jQuery (required for Select2) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <div class="pagetitle">
        <h1>Dashboard</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Sales Card -->
            <div class="col-xxl-3 col-md-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <div class="row sales-card d-flex justify-content-between">
                            <div class="col-6">
                                <p class="card-title-dashboard">All Ticket</p>
                                <h6
                                    style="font-family: Roboto;font-size: 28px;font-weight: 700;line-height: 30px;letter-spacing: 1px;text-align: left;color: #202224;">
                                    145</h6>
                            </div>
                            <div
                                class="card-icon d-flex align-items-center justify-content-center col-6 position-relative">
                                <i class="bi bi-ticket-perforated-fill"></i>
                                <div class="notification-badge">2</div>
                            </div>

                        </div>
                        <span class="text-success small  fw-bold">12%</span>
                        <span class="text-muted small text-align-end ml-auto ">increase</span>
                    </div>
                </div>
            </div><!-- End Sales Card -->
            <div class="col-xxl-3 col-md-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <div class="row sales-card d-flex justify-content-between">
                            <div class="col-6">
                                <p class="card-title-dashboard">All Ticket</p>
                                <h6
                                    style="font-family: Roboto;font-size: 28px;font-weight: 700;line-height: 30px;letter-spacing: 1px;text-align: left;color: #202224;">
                                    145</h6>
                            </div>
                            <div
                                class="card-icon d-flex align-items-center justify-content-center col-6 position-relative">
                                <i class="bi bi-ticket-perforated-fill"></i>
                                <div class="notification-badge">2</div>
                            </div>

                        </div>
                        <span class="text-success small  fw-bold">12%</span>
                        <span class="text-muted small text-align-end ml-auto ">increase</span>
                    </div>
                </div>
            </div><!-- End Sales Card -->
            <div class="col-xxl-3 col-md-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <div class="row sales-card d-flex justify-content-between">
                            <div class="col-6">
                                <p class="card-title-dashboard">All Ticket</p>
                                <h6
                                    style="font-family: Roboto;font-size: 28px;font-weight: 700;line-height: 30px;letter-spacing: 1px;text-align: left;color: #202224;">
                                    145</h6>
                            </div>
                            <div
                                class="card-icon d-flex align-items-center justify-content-center col-6 position-relative">
                                <i class="bi bi-ticket-perforated-fill"></i>
                                <div class="notification-badge">2</div>
                            </div>

                        </div>
                        <span class="text-success small  fw-bold">12%</span>
                        <span class="text-muted small text-align-end ml-auto ">increase</span>
                    </div>
                </div>
            </div><!-- End Sales Card -->
            <div class="col-xxl-3 col-md-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <div class="row sales-card d-flex justify-content-between">
                            <div class="col-6">
                                <p class="card-title-dashboard">All Ticket</p>
                                <h6
                                    style="font-family: Roboto;font-size: 28px;font-weight: 700;line-height: 30px;letter-spacing: 1px;text-align: left;color: #202224;">
                                    145</h6>
                            </div>
                            <div
                                class="card-icon d-flex align-items-center justify-content-center col-6 position-relative">
                                <i class="bi bi-ticket-perforated-fill"></i>
                                <div class="notification-badge">2</div>
                            </div>

                        </div>
                        <span class="text-success small  fw-bold">12%</span>
                        <span class="text-muted small text-align-end ml-auto ">increase</span>
                    </div>
                </div>
            </div><!-- End Sales Card -->


        </div>

        <div class="col-12">
            <div class="card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <p class="card-title-report">Tickets</p>

                <!-- Line Chart -->
                <div id="reportsChart"></div>

                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    new ApexCharts(document.querySelector("#reportsChart"), {
                      series: [{
                        name: 'All Tickets',
                        data: [31, 40, 28, 51, 42, 82, 56],
                      }, {
                        name: 'Open Tickets',
                        data: [11, 32, 45, 32, 34, 52, 41]
                      }, {
                        name: 'Closed Tickets',
                        data: [15, 11, 32, 18, 9, 24, 11]
                      }],
                      chart: {
                        height: 350,
                        type: 'area',
                        toolbar: {
                          show: false
                        },
                      },
                      markers: {
                        size: 4
                      },
                      colors: ['#DBA5FF', '#2CD85A', '#C0722C'],
                      fill: {
                        type: "gradient",
                        gradient: {
                          shadeIntensity: 1,
                          opacityFrom: 0.3,
                          opacityTo: 0.4,
                          stops: [0, 90, 100]
                        }
                      },
                      dataLabels: {
                        enabled: false
                      },
                      stroke: {
                        curve: 'smooth',
                        width: 2
                      },
                      xaxis: {
                        type: 'datetime',
                        categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                      },
                      tooltip: {
                        x: {
                          format: 'dd/MM/yy HH:mm'
                        },
                      }
                    }).render();
                  });
                </script>
                <!-- End Line Chart -->

              </div>

            </div>
          </div><!-- End Reports -->

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




@extends('layouts.operatorLayout')
<main id="main" class="main">




</main><!-- End #main -->


@extends('layouts.footer')
