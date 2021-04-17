
@extends('mahasiswa.layouts.app')
@section('title', 'Mahasiswa | Ubah Password')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Ubah Password</h1>
                    </div>
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Form Ubah Passowrd</h6>
                        
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <form method="POST" action="/mhs/password/update">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="oldpassword">Passowrd Lama</label>
                                                    <input type="password" class="form-control" name="oldpassword" id="oldpassword">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="newpassword">Passowrd Baru</label>
                                                    <input type="password" class="form-control" name="newpassword" id="newpassword">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="repassword">Ulangi Password Baru</label>
                                                    <input type="password" class="form-control" name="repassword" id="repassword">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


@endsection