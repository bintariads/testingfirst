@extends('layouts.operatorLayout')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Report</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Report</a></li>
                <li class="breadcrumb-item">Charts</li>
                <li class="breadcrumb-item active">Report</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <p>ApexCharts Examples. You can check the <a href="https://apexcharts.com/javascript-chart-demos/"
            target="_blank">official website</a> for more examples.</p>
            <div class="modal fade custom-modal" id="verticalycentered" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content d-flex justify-content-center">

                        <div class="modal-body">
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn-close custom-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('assets/img/excel-logo.png') }}" alt="Profile" class="modal-excel-logo">
                            </div>
                            <div>
                                <p class="modal-download-body">File Document .XLS</p>
                            </div>
                            <div class="d-flex justify-content-center" style="margin-bottom:56px">
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

    <section class="section">
        <div class="">
            <div class="d-flex justify-content-center">
                <div class="report-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="report-title">Active Devices</h5>
                            <div class="d-flex justify-content-left">
                                <div class="btn-report d-flex justify-content-left" data-bs-toggle="modal"
                                    data-bs-target="#verticalycentered">
                                    <img class="img-download" src="{{ asset('assets/img/download-report.png') }}"
                                        alt="">
                                    <p class="export">Export</p>
                                </div>
                            </div>
                        </div>


                        <!-- Donut Chart -->
                        <div id="donutChart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#donutChart"), {
                                    series: [44, 55, 13, 43, 22],
                                    chart: {
                                        height: 325,            // Set chart height to 180px
                                        width: 325,             // Set chart width to 180px
                                        type: 'donut',

                                    },
                                    labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
                                    legend: {
                position: 'bottom'  // Position legend below the chart
            }
                                }).render();
                            });
                        </script>
                        <!-- End Donut Chart -->

                    </div>

                </div>


                <div class="report-card">

                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="report-title">Total Ticket</h5>
                            <div class="d-flex justify-content-left">
                                <div class="btn-report d-flex justify-content-left" data-bs-toggle="modal"
                                    data-bs-target="#verticalycentered">
                                    <img class="img-download" src="{{ asset('assets/img/download-report.png') }}"
                                        >
                                    <p class="export">Export</p>
                                </div>
                            </div>
                        </div>

                        <!-- Line Chart -->
                        <div class="d-flex justify-content-center" style="margin-top:30px">
                            <img src="{{ asset('assets/img/ticket.png') }}" alt="Profile" class="report-ticket">
                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="total-ticket">420</p>
                        </div>

                    </div>
                </div>

                <div class="report-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="report-title">Spare Device Stock</h5>
                            <div class="btn-report d-flex justify-content-left" data-bs-toggle="modal"
                                    data-bs-target="#verticalycentered">
                                    <img class="img-download" src="{{ asset('assets/img/download-report.png') }}"
                                        alt="">
                                    <p class="export">Export</p>
                                </div>
                        </div>
                        <!-- Pie Chart -->
                        <div id="pieChart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#pieChart"), {
                                    series: [44, 55, 13, 43, 22],
                                    chart: {
                                        height: 325,            // Set chart height to 180px
                                        width: 325,             // Set chart width to 180px
                                        type: 'pie',

                                    },
                                    labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
                                    legend: {
                position: 'bottom'  // Position legend below the chart
            }
                                }).render();
                            });
                        </script>
                        <!-- End Pie Chart -->

                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <div class="report-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="report-title">Radial Bar Chart</h5>
                            <div class="d-flex justify-content-left">
                                <div class="btn-report d-flex justify-content-left" data-bs-toggle="modal"
                                data-bs-target="#verticalycentered">
                                <img class="img-download" src="{{ asset('assets/img/download-report.png') }}"
                                    alt="">
                                <p class="export">Export</p>
                            </div>
                            </div>
                        </div>
                        <!-- Radial Bar Chart -->
                        <div id="radialBarChart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#radialBarChart"), {
                                    series: [44, 55, 67, 83],
                                    chart: {
                                        height: 325,            // Set chart height to 180px
                                        width: 325,             // Set chart width to 180px
                                        type: 'radialBar',

                                    },
                                    plotOptions: {
                                        radialBar: {
                                            dataLabels: {
                                                name: {
                                                    fontSize: '22px',
                                                },
                                                value: {
                                                    fontSize: '16px',
                                                },
                                                total: {
                                                    show: true,
                                                    label: 'Total',
                                                    formatter: function(w) {
                                                        // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                                                        return 249
                                                    }
                                                }
                                            }
                                        }
                                    },
                                    labels: ['Apples', 'Oranges', 'Bananas', 'Berries'],
                                }).render();
                            });
                        </script>
                        <!-- End Radial Bar Chart -->

                    </div>
                </div>


                <div class="report-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="report-title">Bar Chart</h5>
                            <div class="d-flex justify-content-left">
                                <div class="btn-report d-flex justify-content-left" data-bs-toggle="modal"
                                    data-bs-target="#verticalycentered">
                                    <img class="img-download" src="{{ asset('assets/img/download-report.png') }}"
                                        alt="">
                                    <p class="export">Export</p>
                                </div>
                            </div>
                        </div>
                        <!-- Bar Chart -->
                        <div id="barChart" style="min-height: 280px;" class="echart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                echarts.init(document.querySelector("#barChart")).setOption({
                                    xAxis: {
                                        type: 'category',
                                        data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                                    },
                                    yAxis: {
                                        type: 'value'
                                    },
                                    series: [{
                                        data: [120, 200, 150, 80, 70, 110, 130],
                                        type: 'bar'
                                    }]
                                });
                            });
                        </script>
                        <!-- End Bar Chart -->

                    </div>
                </div>
            </div>


        </div>
    </section>

</main><!-- End #main -->
@extends('layouts.footer')
