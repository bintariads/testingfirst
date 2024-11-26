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
        <h1><?= $title?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><?= $title?></a></li>
                <li class="breadcrumb-item active">List <?= $title?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="Width:1140px;">
                    <div class="form-card d-flex justify-content-between">
                        <div class="" style="width: 520px;">
                            <div class="form-group">
                                <label for="subject" class="subject" id="subject">Subject <span style="color: red;">*</span></label>
                                <input type="text" id="subjecttext" name="subject" value="High" oninput="updateText()"/>
                            </div>
                        </div>
                        <div style="margin-top: 40px; width: 520px;">
                            <!-- Pills Tabs -->
                            <ul class="nav nav-pills mb-3 nav-container" id="pills-tab" role="tablist">
                                <li class="nav-item d-flex align-items-center" role="presentation">
                                <button class="nav-link active custom-active " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" style="width:250px; height:40px; margin-left:6px;" >Text Color <span style="color: red;">*</span></button>
                                </li>
                                <li class="nav-item d-flex align-items-center" role="presentation">
                                <button class="nav-link custom-active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" style="width:250px; height:40px; margin-left:6px;">Icon Color <span style="color: red;">*</span></button>
                                </li>
                            </ul>
                            <div class="result-container d-flex justify-content-center align-items-center">
                                <div class="result d-flex justify-content-center align-items-center" id="result-icon">
                                Hight
                                </div>
                            </div>
                            <div class="tab-content pt-2" id="myTabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" style="margin-left:16px">
                                    <div class="color-container d-flex justify-content-center align-items-center">
                                        <div class="color" style="background-color: #FF0000;" onclick="selectColor(this)"></div>
                                        <div class="color" style="background-color: #FF7300;" onclick="selectColor(this)"></div>
                                        <div class="color" style="background-color: #FBFF00;" onclick="selectColor(this)"></div>
                                        <div class="color" style="background-color: #08FF00;" onclick="selectColor(this)"></div>
                                        <div class="color" style="background-color: #00F2FF;" onclick="selectColor(this)"></div>
                                        <div class="color" style="background-color: #007BFF;" onclick="selectColor(this)"></div>
                                        <div class="color" style="background-color: #8000FF;" onclick="selectColor(this)"></div>
                                        <div class="color" style="background-color: #FF00E5;" onclick="selectColor(this)"></div>
                                        <div class="color" style="background-color: #FF0037;" onclick="selectColor(this)"></div>
                                    </div>
                                    <div class="color-container d-flex justify-content-center align-items-center">
                                        <div class="color" style="background-color: #61FFC5;" onclick="selectColor(this)"></div>
                                        <div class="color" style="background-color: #62B8FF;" onclick="selectColor(this)"></div>
                                        <div class="color" style="background-color: #C5FF52;" onclick="selectColor(this)"></div>
                                        <div class="color" style="background-color: #F8E400;" onclick="selectColor(this)"></div>
                                        <div class="color" style="background-color: #EEEEEE;" onclick="selectColor(this)"></div>
                                        <div class="color" style="background-color: #202020;" onclick="selectColor(this)"></div>
                                        <div class="color" style="background-color: #67401B;" onclick="selectColor(this)"></div>
                                        <div class="color" style="background-color: #206034;" onclick="selectColor(this)"></div>
                                        <div class="color" style="background-color: #570181;" onclick="selectColor(this)"></div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" style="margin-left:16px">
                                    <div class="color-container d-flex justify-content-center align-items-center">
                                        <div class="color" style="background-color: #FF0000;" onclick="selectBackgroundColor(this)"></div>
                                        <div class="color" style="background-color: #FF7300;" onclick="selectBackgroundColor(this)"></div>
                                        <div class="color" style="background-color: #FBFF00;" onclick="selectBackgroundColor(this)"></div>
                                        <div class="color" style="background-color: #08FF00;" onclick="selectBackgroundColor(this)"></div>
                                        <div class="color" style="background-color: #00F2FF;" onclick="selectBackgroundColor(this)"></div>
                                        <div class="color" style="background-color: #007BFF;" onclick="selectBackgroundColor(this)"></div>
                                        <div class="color" style="background-color: #8000FF;" onclick="selectBackgroundColor(this)"></div>
                                        <div class="color" style="background-color: #FF00E5;" onclick="selectBackgroundColor(this)"></div>
                                        <div class="color" style="background-color: #FF0037;" onclick="selectBackgroundColor(this)"></div>
                                    </div>
                                    <div class="color-container d-flex justify-content-center align-items-center">
                                        <div class="color" style="background-color: #61FFC5;" onclick="selectBackgroundColor(this)"></div>
                                        <div class="color" style="background-color: #62B8FF;" onclick="selectBackgroundColor(this)"></div>
                                        <div class="color" style="background-color: #C5FF52;" onclick="selectBackgroundColor(this)"></div>
                                        <div class="color" style="background-color: #F8E400;" onclick="selectBackgroundColor(this)"></div>
                                        <div class="color" style="background-color: #EEEEEE;" onclick="selectBackgroundColor(this)"></div>
                                        <div class="color" style="background-color: #202020;" onclick="selectBackgroundColor(this)"></div>
                                        <div class="color" style="background-color: #67401B;" onclick="selectBackgroundColor(this)"></div>
                                        <div class="color" style="background-color: #206034;" onclick="selectBackgroundColor(this)"></div>
                                        <div class="color" style="background-color: #570181;" onclick="selectBackgroundColor(this)"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
        <div class=" d-flex align-items-center flex-column mt-2 mb-5">
            <a type="button" class="btn btn-primary" id="">
                Save 
            </a>
        </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</main><!-- End #main -->
<script>

    function updateText() {
        const subjectText = $("#subjecttext").val();
        console.log(subjectText);
        document.getElementById('result-icon').textContent = subjectText;
    }
   function selectColor(element) {
        document.querySelectorAll('.color').forEach(color => color.classList.remove('selected'));
        element.classList.add('selected');
        const color = window.getComputedStyle(element).backgroundColor;
        document.getElementById('result-icon').style.color = color;
    }

    function selectBackgroundColor(element) {
        document.querySelectorAll('.color').forEach(color => color.classList.remove('selected'));
        element.classList.add('selected');
        const color = window.getComputedStyle(element).backgroundColor;
        document.getElementById('result-icon').style.backgroundColor = color;
    }


    $(document).ready(function() { // Ensure the DOM is fully loaded
        $('#createTicket').on('click', function() {
            let subject = $("#subject").val();
            let plat = $("#plat").val();
            let status = $("#status").val();
            let priority = $("#priority").val();
            let description = $("#description").val();

            if(subject == ""||plat==""){
                return Swal.fire({
                        icon: 'error',
                        title: 'ERROR',
                        text: 'Empty field are not allowed'
                    });
            }
            if(status == '0'){
                return Swal.fire({
                        icon: 'error',
                        title: 'ERROR',
                        text: 'Choose status'
                    });
            }
            if(priority == '0'){
                return Swal.fire({
                        icon: 'error',
                        title: 'ERROR',
                        text: 'Choose priority'
                    });
            }

            $.ajax({
                url: "{{ url('/operator/user/save') }}",
                type: 'POST',
                dataType: 'json',
                data: {
                    _token: "{{ csrf_token() }}",
                    subject: subject,
                    plat:plat,
                    description:description,
                    status:status,
                    priority:priority
                },
                success: function(response) {

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
