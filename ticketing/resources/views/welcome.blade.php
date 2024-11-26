@extends('layouts.operatorLayout')
<main id="main" class="main">


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

</main><!-- End #main -->


@extends('layouts.footer')
