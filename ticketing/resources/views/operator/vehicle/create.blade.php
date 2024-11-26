@extends('layouts.operatorLayout')
<main id="main" class="main">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- jQuery (required for Select2) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <div class="pagetitle">
        <h1>Create Vehicle </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Vehicle</a></li>
                <li class="breadcrumb-item">Vehicle List</li>
                <li class="breadcrumb-item active">Add Vehicle</li>
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
                                    <label>No Vehicle <span class="text-danger">*</span></label>
                                    <div class="">
                                        <input type="text" class="form-control" id="vehicleID">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Installation Date <span class="text-danger">*</span></label>
                                    <div>
                                        <input type="date" class="form-control" id="instalationDate">
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label>Document <span class="text-danger">*</span></label>
                                    <div class="">
                                        <input class="form-control" type="file" id="document">
                                    </div>
                                </div>

                                <div class="row col-12">
                                    <label>No Vehicle <span class="text-danger">*</span></label>

                                    <div class="col-lg-6 mb-3" class="checkbox-container">
                                        <input type="checkbox" id="frontCamera" onclick="showInputFrontCamera()" />
                                        <label for="frontCamera">Front Camera</label>
                                        <input type="text" id="checkFrontCamera" readonly hidden>
                                        <div id="inputFrontCamera" style="display: none;">
                                            <input class="form-control" type="file" id="frontCameraFile">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3" class="checkbox-container">
                                        <input type="checkbox" id="leftCamera" class="myCheckbox"onclick="showInputLeftCamera()" />
                                        <label for="leftCamera">Left Camera</label>
                                        <input type="text" id="checkLeftCamera" readonly hidden>
                                        <div id="inputLeftCamera" style="display: none;">
                                            <input class="form-control" type="file" id="leftCameraFile">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <input type="checkbox" id="rightCamera" onclick="showInputRightCamera()" />
                                        <label for="rightCamera">Right Camera</label>
                                        <input type="text" id="checkRightCamera" readonly hidden>
                                        <div id="inputRightCamera" style="display: none;">
                                            <input class="form-control" type="file" id="rightCameraFile">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <input type="checkbox" id="driverCamera" onclick="showInputDriverCamera()" />
                                        <label for="driverCamera">Driver Camera</label>
                                        <input type="text" id="checkDriverCamera" readonly hidden>
                                        <div id="inputDriverCamera" style="display: none;">
                                            <input class="form-control" type="file" id="driverCameraFile">
                                        </div>
                                    </div>
                                </div>



                            </div>


                            <div class=" d-flex align-items-center flex-column  pb-3 pe-2 mt-5 ">
                                <a type="button" class="btn btn-primary" id="createVehicle">
                                    Save Vehicle
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


    <script>
        function showInputFrontCamera() {
            const inputFrontCamera = document.getElementById("inputFrontCamera");
            const frontCamera = document.getElementById("frontCamera");

            if (frontCamera.checked) {
                inputFrontCamera.style.display = "block";
                $("#checkFrontCamera").val("1")

            } else {
                inputFrontCamera.style.display = "none";
                $("#checkFrontCamera").val("")
            }
        }

        function showInputLeftCamera() {
            const inputLeftCamera = document.getElementById("inputLeftCamera");
            const leftCamera = document.getElementById("leftCamera");

            if (leftCamera.checked) {
                inputLeftCamera.style.display = "block";
                $("#checkLeftCamera").val("1")

            } else {
                inputLeftCamera.style.display = "none";
                $("#checkLeftCamera").val("")

            }
        }


        function showInputDriverCamera() {
            const inputDriverCamera = document.getElementById("inputDriverCamera");
            const driverCamera = document.getElementById("driverCamera");

            if (driverCamera.checked) {
                inputDriverCamera.style.display = "block";
                $("#checkDriverCamera").val("1")

            } else {
                inputDriverCamera.style.display = "none";
                $("#checkDriverCamera").val("")

            }
        }

        function showInputRightCamera() {
            const inputRightCamera = document.getElementById("inputRightCamera");
            const rightCamera = document.getElementById("rightCamera");

            if (rightCamera.checked) {
                $("#checkRightCamera").val("1")

                inputRightCamera.style.display = "block";
            } else {
                $("#checkRightCamera").val("")

                inputRightCamera.style.display = "none";
            }
        }


        $(document).ready(function() { // Ensure the DOM is fully loaded
            $('#createVehicle').on('click', function() {
                // let checked = getCheckboxStatus()
                let vehicleID = $("#vehicleID").val();
                let instalationDate = $("#instalationDate").val();
                let noVehicle = $("#noVehicle").val();
                let fileInputDoc = $('#document')[0];
                let fileinputFrontCamera = $('#frontCameraFile')[0];
                let fileinputLeftCamera = $('#leftCameraFile')[0];
                let fileinputRightCamera = $('#rightCameraFile')[0];
                let fileinputDriverCamera = $('#driverCameraFile')[0];
                let checkFrontCamera = $("#checkFrontCamera").val()
                let checkLeftCamera = $("#checkLeftCamera").val()
                let checkRightCamera = $("#checkRightCamera").val()
                let checkDriverCamera = $("#checkDriverCamera").val()

                if (checkFrontCamera == "1" && fileinputFrontCamera.files.length === 0) {
                    return Swal.fire({
                        icon: 'error',
                        title: 'ERROR',
                        text: 'Front camera checked but file is empty'
                    });
                }

                if (checkLeftCamera == "1" && fileinputLeftCamera.files.length === 0) {
                    return Swal.fire({
                        icon: 'error',
                        title: 'ERROR',
                        text: 'Left camera checked but file is empty'
                    });
                }

                if (checkRightCamera == "1" && fileinputRightCamera.files.length === 0) {
                    return Swal.fire({
                        icon: 'error',
                        title: 'ERROR',
                        text: 'Right camera checked but file is empty'
                    });
                }

                if (checkDriverCamera == "1" && fileinputDriverCamera.files.length === 0) {
                    return Swal.fire({
                        icon: 'error',
                        title: 'ERROR',
                        text: 'Driver camera checked but file is empty'
                    });
                }

                if (vehicleID == "") {
                    return Swal.fire({
                        icon: 'error',
                        title: 'ERROR',
                        text: 'Empty field are not allowed'
                    });
                }
                if (noVehicle == "") {
                    return Swal.fire({
                        icon: 'error',
                        title: 'ERROR',
                        text: 'Empty field are not allowed'
                    });
                }
                if (instalationDate == "") {
                    return Swal.fire({
                        icon: 'error',
                        title: 'ERROR',
                        text: 'Empty field are not allowed'
                    });
                }

                if (fileInputDoc.files.length === 0) {
                    return Swal.fire({
                        icon: 'error',
                        title: 'ERROR',
                        text: 'Please upload an Document file'
                    });
                }

                let document = fileInputDoc.files[0];

                if (document.type !== 'application/pdf') {
                    return Swal.fire({
                        icon: 'error',
                        title: 'ERROR',
                        text: 'Document format must be pdf'
                    });
                }

                if (document.size > 5 * 1024 * 1024) {
                    return Swal.fire({
                        icon: 'error',
                        title: 'ERROR',
                        text: 'Document size must not exceed 5 MB'
                    });
                }

                let frontCamera = fileinputFrontCamera.files[0];
                if (checkFrontCamera == "1") {
                    if (frontCamera.type !== 'image/png' && frontCamera.type !== 'image/jpeg') {
                        return Swal.fire({
                            icon: 'error',
                            title: 'ERROR',
                            text: 'Front camera format must be png or jpeg'
                        });
                    }

                    if (frontCamera.size > 5 * 1024 * 1024) {
                        return Swal.fire({
                            icon: 'error',
                            title: 'ERROR',
                            text: 'Front camera size must not exceed 5 MB'
                        });
                    }
                }

                let leftCamera = fileinputLeftCamera.files[0];
                if (checkLeftCamera == "1") {
                    if (leftCamera.type !== 'image/png' && leftCamera.type !== 'image/jpeg' &&
                        checkLeftCamera === "1") {
                        return Swal.fire({
                            icon: 'error',
                            title: 'ERROR',
                            text: 'Left camera format must be png or jpeg'
                        });
                    }

                    if (leftCamera.size > 5 * 1024 * 1024 && checkLeftCamera == "1") {
                        return Swal.fire({
                            icon: 'error',
                            title: 'ERROR',
                            text: 'Left camera size must not exceed 5 MB'
                        });
                    }
                }

                let rightCamera = fileinputRightCamera.files[0];
                if (checkRightCamera == "1") {
                    if (rightCamera.type !== 'image/png' && rightCamera.type !== 'image/jpeg' &&
                        checkRightCamera == "1") {
                        return Swal.fire({
                            icon: 'error',
                            title: 'ERROR',
                            text: 'Right camera format must be png or jpeg'
                        });
                    }

                    if (rightCamera.size > 5 * 1024 * 1024 && checkRightCamera == "1") {
                        return Swal.fire({
                            icon: 'error',
                            title: 'ERROR',
                            text: 'Right camera size must not exceed 5 MB'
                        });
                    }
                }

                let driverCamera = fileinputDriverCamera.files[0];
                if (checkDriverCamera == "1") {
                    if (driverCamera.type !== 'image/png' && driverCamera.type !== 'image/jpeg' &&
                        checkDriverCamera == "1") {
                        return Swal.fire({
                            icon: 'error',
                            title: 'ERROR',
                            text: 'Driver camera format must be png or jpeg'
                        });
                    }

                    if (driverCamera.size > 5 * 1024 * 1024 && checkDriverCamera == "1") {
                        return Swal.fire({
                            icon: 'error',
                            title: 'ERROR',
                            text: 'Driver camera size must not exceed 5 MB'
                        });
                    }
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
                formData.append('vehicleID', vehicleID);
                formData.append('instalationDate', instalationDate);
                formData.append('noVehicle', noVehicle);
                formData.append('document', document);
                formData.append('frontCamera', frontCamera);
                formData.append('leftCamera', leftCamera);
                formData.append('rightCamera', rightCamera);
                formData.append('driverCamera', driverCamera);

                $.ajax({
                    url: "{{ url('/operator/vehicle/save') }}",
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

        function getCheckboxStatus() {
            const checkboxes = [{
                    id: "gridCheck1",
                    label: "Front Camera"
                },
                {
                    id: "gridCheck2",
                    label: "Right Camera"
                },
                {
                    id: "gridCheck3",
                    label: "Left Camera"
                },
                {
                    id: "gridCheck4",
                    label: "Driver Camera"
                }
            ];

            let checked = [];
            let unchecked = [];

            checkboxes.forEach(box => {
                const checkbox = document.getElementById(box.id);
                if (checkbox.checked) {
                    checked.push(box.label);
                } else {
                    unchecked.push(box.label);
                }
            });

            return checked;
        }
    </script>
</main><!-- End #main -->
@extends('layouts.footer')
