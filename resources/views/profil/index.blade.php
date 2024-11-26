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
                <div class="card p-2">
                    <div class="profil-container d-flex align-items-center">
                        <div class="profile-image">
                            <img src="{{ asset('assets/img/profil/profil-img.jpg') }}"/>
                        </div>
                        <div class="">
                            <div class="profile-title">Profile Picture</div>
                            <div class="profile-subtitle">JPG, PNG under 5MB</div>
                        </div>
                        <div class="profile-buttons d-flex justify-content-center" >
                            <button class="blue-button" id="btn-update-profil" onclick="btnUploadData()">Upload</button>
                            <button class="grey-button" id="btn-delete">Delete</button>
                        </div>
                        <div class="profile-buttons" id="update-profil" style="display:none">
                            <div class="file-upload-container">
                                <label class="file-upload-button">
                                    <input type="file" class="file-input" />
                                    <span>Choose File</span>
                                </label>
                                <span class="file-name">No File Chosen</span>
                                <button class="clear-button"  onclick="btnClose()">✕</button>
                            </div>
                            <p class="file-info">JPG, GIF Max 2MB</p>
                            <button class="blue-button">Upload Now</button>
                        </div>
                    </div>
                        <form class="form-profil">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label>Name <span class="text-danger">*</span></label>
                                    <div class="">
                                        <input type="text" class="form-control" id="subject">
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label>Email  <span class="text-danger">*</span></label>
                                    <div class="">
                                        <input type="email" class="form-control" id="subject">
                                    </div>
                                </div>
                            </div>

                            <div class=" d-flex align-items-center flex-column mt-2 ">
                                <a type="button-save" class="btn btn-primary" id="createVehicle">
                                    Save 
                                </a>
                            </div>
                        </form>

                </div>
            </div>
        </div>
        
    </section>


    <script>
     function btnUploadData() {
            const updateProfil = document.getElementById("update-profil");
            const btnUpdateProfil = document.getElementById("btn-update-profil");
            const btnDelete = document.getElementById("btn-delete");
            updateProfil.style.display = "block";
            btnUpdateProfil.style.display = "none";
            btnDelete.style.display = "none";
        }
     function btnClose() {
            const updateProfil = document.getElementById("update-profil");
            const btnUpdateProfil = document.getElementById("btn-update-profil");
            const btnDelete = document.getElementById("btn-delete");
            updateProfil.style.display = "none";
            btnUpdateProfil.style.display = "";
            btnDelete.style.display = "";
        }
        function deleteData() {
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
    Swal.fire({
        title: 'Mengambil Data',
        text: 'Mohon Tunggu...',
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading()
        }
    });


}
});
  
        }
    </script>



@extends('layouts.footer')


