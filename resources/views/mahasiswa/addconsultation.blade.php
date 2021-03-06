
@extends('mahasiswa.layouts.app')
@section('title', 'Mahasiswa | Tambah Konsultasi')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Konsultasi</h1>
                    </div>
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Form Konsultasi</h6>
                        
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <form method="POST" action="/mhs/consultation/store">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="exampleInputEmail1">Nama Dosen </label>
                                                    <select id="inputState" name="dosen_id" class="form-control">
                                                        <option selected="true" disabled="disabled">Choose...</option>
                                                        @foreach ($user as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                      </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="exampleInputEmail1">Jenis Konsultasi</label>
                                                    <select id="inputState" name="type" class="form-control">
                                                        <option selected="true" disabled="disabled">Choose...</option>
                                                        <option value="Pribadi/Keluarga">Pribadi/Keluarga</option>
                                                        <option value="Akademik/Perkuliahan">Akademik/Perkuliahan</option>
                                                        <option value="Keuangan">Keuangan</option>
                                                      </select>
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="date_consul">Tanggal Konsultasi</label>
                                                    <input type="date" class="form-control" id="date_consul">
                                                </div>
                                            </div> --}}
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="topic">Topik</label>
                                                    <input type="text" class="form-control" name="topic" id="topic">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="information">Keterangan</label>
                                                    <textarea class="form-control" id="information" name="information" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="message">Pesan</label>
                                                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
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