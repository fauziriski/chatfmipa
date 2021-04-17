
@extends('dosen.layouts.app')
@section('title', 'Dosen | Ubah Profile')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Ubah Profile</h1>
                    </div>
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Form Ubah Profile</h6>
                        
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <form method="POST" action="/dsn/profile/update">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="name">Nama</label>
                                                    <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="npm">NIP</label>
                                                    <input type="number" class="form-control" name="nip" id="nip" value="{{ Auth::user()->npm_nisn }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="email">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="notlpn">No Tlpn</label>
                                                    <div class="input-group">
                                                        
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">+62</div>
                                                        </div>
                                                        <input type="number" class="form-control" name="notlpn" id="notlpn" value="{{ Auth::user()->phone }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="password">Password</label>
                                                    <input type="password" class="form-control" name="password" id="password">
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