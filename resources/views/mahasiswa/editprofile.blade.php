
@extends('mahasiswa.layouts.app')
@section('title', 'Mahasiswa | Ubah Profile')
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
                                    <form method="POST" action="/mhs/profile/update">
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
                                                    <label class="font-weight-bold" for="npm">NPM</label>
                                                    <input type="number" class="form-control" name="npm" id="npm" value="{{ Auth::user()->npm_nisn }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="email">Email</label>
                                                    <input type="email" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="email">Jenis Kelamin</label>
                                                    <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" 
                                                    value="{{ old('gender') }}" placeholder="Jenis Kelamin" required autocomplete="gender">
                                                        <option selected="true" value="{{ Auth::user()->gender }}">{{ Auth::user()->gender }}</option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="email">Email</label>
                                                    <select name="ps" id="ps" class="form-control @error('ps') is-invalid @enderror" name="ps" value="{{ old('ps') }}" placeholder="Program Studi" required autocomplete="ps">
                                                        <option selected="true" value="{{ Auth::user()->ps }}">{{ Auth::user()->ps }}</option>
                                                        <option value="S1 Ilmu Komputer">S1 Ilmu Komputer</option>
                                                        <option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
                                                        <option value="S1 Fisika">S1 Fisika</option>
                                                        <option value="S2 Fisika">S2 Fisika</option>
                                                        <option value="S1 Matematika">S1 Matematika</option>
                                                        <option value="S2 Matematika">S2 Matematika</option>
                                                        <option value="S1 Kimia">S1 Kimia</option>
                                                        <option value="S2 Kimia">S2 Kimia</option>
                                                        <option value="S1 Biologi">S1 Biologi</option>
                                                        <option value="S2 Biologi">S2 Biologi</option>
                                                    </select>
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
                                                    <label class="font-weight-bold" for="dosen_pa">Dosen PA</label>
                                                    <input type="text" class="form-control" name="dosen_pa" id="dosen_pa" value="{{ Auth::user()->dosen_pa }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="dosen_ta">Dosen Pembimbing TA/Skripsi/Tesis</label>
                                                    <input type="text" class="form-control" name="dosen_ta" id="dosen_ta" value="{{ Auth::user()->dosen_ta }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="password">Password</label>
                                                    <input type="password" name="password" class="form-control" id="password">
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