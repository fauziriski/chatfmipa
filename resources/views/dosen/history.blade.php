@extends('dosen.layouts.app')
@section('title', 'Dosen | Riwayat Konsultasi')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Riwayat Konsultasi</h1>
    
    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mt-4 mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama Dosen</th>
                            <th>NPM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Topik</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>198808072019031011</td>
                            <td>Rizky Prabowo, M.Kom., M.Kom.</td>
                            <td>1717051029</td>
                            <td>Fauzi Riski</td>
                            <td>Permintaan Validasi KRS</td>
                            <td>Selesai</td>
                            <td><a href="/dsn/consultation/show" class="btn btn-success btn-sm">
                                    <i class="fas fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>198808072019031011</td>
                            <td>Rizky Prabowo, M.Kom., M.Kom.</td>
                            <td>1717051031</td>
                            <td>Fauzi Riski</td>
                            <td>Permintaan Validasi KRS</td>
                            <td>Selesai</td>
                            <td>                                
                                <a href="/dsn/consultation/show" class="btn btn-success btn-sm">
                                    <i class="fas fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>198808072019031011</td>
                            <td>Rizky Prabowo, M.Kom., M.Kom.</td>
                            <td>1717051032</td>
                            <td>Fauzi Riski</td>
                            <td>Permintaan Validasi KRS</td>
                            <td>Selesai</td>
                            <td>
                                <a href="/dsn/consultation/show" class="btn btn-success btn-sm">
                                    <i class="fas fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


@endsection