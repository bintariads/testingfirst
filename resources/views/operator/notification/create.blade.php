@extends('layouts.operatorLayout')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Create User </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">User</a></li>
                <li class="breadcrumb-item">User List</li>
                <li class="breadcrumb-item active">Add User</li>
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
                                    <label>Name <span class="text-danger">*</span></label>
                                    <div class="">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Terminal <span class="text-danger">*</span></label>
                                    <div class="">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <div class="">
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Role <span class="text-danger">*</span></label>
                                    <div class="">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Password <span class="text-danger">*</span></label>
                                    <div class="">
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Confirm Password <span class="text-danger">*</span></label>
                                    <div class="">
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                                <div class="">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">File Upload <span class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                </div>
                            </div>


                            <div class=" d-flex align-items-center flex-column  pb-3 pe-2 mt-5 ">
                                <a type="button" class="btn btn-primary" href="<?= url('/operator/user') ?>">
                                    Simpan User
                                </a>
                            </div>
                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>


        </div>
    </section>

</main><!-- End #main -->
@extends('layouts.footer')
