
@extends('admin.layouts.app')
@section('title', 'Admin | Detail Konsultasi')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Konsultasi</h1>
                    </div>
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Detail Konsultasi</h6>
                        
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row mt-2">
                                                <div class="font-weight-bold col-md-6">Mahasiswa</div>
                                                <div class="col-md-6">{{ $chat->from->npm_nisn }} - {{ $chat->from_name }}</div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="font-weight-bold col-md-6">No Telp</div>
                                                <div class="col-md-6">+62{{ $chat->from->phone }}</div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="font-weight-bold col-md-6">Program Studi</div>
                                                <div class="col-md-6">{{ $chat->from->ps }}</div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="font-weight-bold col-md-6">Dosen</div>
                                                <div class="col-md-6">{{ $chat->to->npm_nisn }} - {{ $chat->to_name }}</div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="row mt-2">
                                                <div class="font-weight-bold col-md-6">Topik</div>
                                                <div class="col-md-6">{{ $chat->topic }}</div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="font-weight-bold col-md-6">Jenis Konsultasi</div>
                                                <div class="col-md-6">Konsultasi {{ $chat->type }}</div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="font-weight-bold col-md-6">Keterangan</div>
                                                <div class="col-md-6">
                                                    {{ $chat->information }}
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="font-weight-bold col-md-6">Tanggal Konsultasi</div>
                                                <div class="col-md-6">{{ $chat->created_at }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4 justify-content-between">
                                        <div class="col-md-1">
                                            <h6 class="m-0 font-weight-bold text-primary">Percakapan</h6>
                                        </div>
                                    </div>

                                    <hr style=" border: 1px solid;">

                                    <div class="row">
                                        <div class="col-md-12">
                                            @foreach ($message as $item)
                                            @if ($item->to_id == Auth::user()->id)
                                            <div class="row justify-content-start">
                                                <div class="col-md-7 col-sm-7 p-3 mt-2" style="border-radius:50px; border-top-left-radius: 0px;  background-color: #D9EDF7">
                                                    <div class="row justify-content-between ">
                                                        <div class="col-md-9">
                                                            <p class="text-dark" id="name_dosen">198808072019031011 - {{ $item->from->name }}</p>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <p class="text-dark" id="date_chat">{{ $item->created_at }}</p>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p class="text-dark font-weight-bold text" id="dosen_text">{{ $item->text }}</p>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            @else
                                            <div class="row justify-content-end">
                                                <div class="col-md-7 col-sm-3 p-3 mt-2 mr-0" style="right: 0;border-radius:50px; border-top-right-radius: 0px;  background-color: #dff0d8">
                                                    <div class="row justify-content-between">
                                                        <div class="col-md-9">
                                                            <p class="text-dark" id="name_dosen">198808072019031011 - {{ $item->from->name }}</p>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <p class="text-dark" id="date_chat">{{ $item->created_at }}</p>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p class="text-dark font-weight-bold text" id="dosen_text">{{ $item->text }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


@endsection