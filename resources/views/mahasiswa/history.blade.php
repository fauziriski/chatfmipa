@extends('mahasiswa.layouts.app')
@section('title', 'Mahasiswa | Riwayat Konsultasi')
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
                            <th>NPM</th>
                            <th>Nama Mahasiswa</th>
                            <th>NIP</th>
                            <th>Dosen</th>
                            <th>Topik</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($chat as $item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->from->npm_nisn }}</td>
                            <td>{{ $item->from->name }}</td>
                            <td>{{ $item->to->npm_nisn }}</td>
                            <td>{{ $item->to->name }}</td>
                            <td>{{ $item->topic }}</td>
                            @if ($item->status == '1')
                            <td>On Proses</td>
                            @elseif($item->status == '2')
                            <td>Selesai</td>
                            @elseif($item->status == '0')
                            <td>Tidak Selesai</td>
                            @else
                            <td></td>
                            @endif
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a href="/mhs/consultation/show/{{ $item->id }}" class="btn btn-success btn-sm">
                                <i class="fas fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


@endsection