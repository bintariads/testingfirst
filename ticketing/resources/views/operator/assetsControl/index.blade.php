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
                                                        <input type="number" value="12" name="amount" id="amount-input" class="form-add">
                                                    </p>
                                                    <div class="d-flex justify-content-start">

                                                    <div class="d-flex align-items-left button-container"
                                                        style="margin-left:20px " id="add-button"> 
                                                        <img src="{{ asset('assets/img/add.png') }}"
                                                                    class="button-add" >
                                                    </div>
                                                    <div class="d-flex align-items-left button-container"
                                                        style="margin-left:20px " id="min-button">
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
                                        Name
                                    </th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Unity Pugh</td>
                                    <td>9958</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <button type="button" class="btn btn-outline-secondary"><i
                                                    class="bi bi-pencil-square"data-bs-toggle="modal"
                                                    data-bs-target="#verticalycentered"></i></button>
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


<script>
    // Dapatkan elemen input dan tombol tambah
    const amountInput = document.getElementById('amount-input');
    const addButton = document.getElementById('add-button');
    const minButton = document.getElementById('min-button');

    // Fungsi untuk menambah 1 ke nilai input
    addButton.addEventListener('click', () => {
        let currentValue = parseInt(amountInput.value) || 0;
        amountInput.value = currentValue + 1;
    });

    // Fungsi untuk mengurangi 1 dari nilai input
    minButton.addEventListener('click', () => {
        let currentValue = parseInt(amountInput.value) || 0;
        amountInput.value = currentValue > 0 ? currentValue - 1 : 0; // mencegah nilai negatif
    });
</script>
@extends('layouts.footer')
