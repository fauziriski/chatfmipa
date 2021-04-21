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
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($chat as $item)
                            
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->to->npm_nisn }}</td>
                            <td>{{ $item->to->name }}</td>
                            <td>{{ $item->from->npm_nisn }}</td>
                            <td>{{ $item->from->name }}</td>
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
                            @if ($item->status == '0' || $item->status == '2')
                            <td><a href="/dsn/consultation/show/{{ $item->id }}" class="btn btn-secondary btn-sm">
                                <i class="fas fas fa-eye"></i>
                                </a>
                            </td>
                            @else
                            <td><a href="/dsn/consultation/show/{{ $item->id }}" class="btn btn-secondary btn-sm">
                                <i class="fas fas fa-eye"></i>
                                </a>
                                <a href="#" name="complete" value="{{ $item->id }}" class="btn btn-success btn-sm">
                                    <i class="fas fa-check"></i>
                                </a>
                                <a href="#" name="not-complete" value="{{ $item->id }}" class="btn btn-danger btn-sm">
                                    <i class="fas fa-window-close"></i>
                                </a>
                            </td>
                            @endif
                            
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
   
     $(document).ready(function() {
        $('a[name="complete"]').on('click', function() {
            var id = $(this).attr('value');
            swal({
                title: "Apakah Anda Yakin?",
                text: "Ingin Menyelesaikan Konfultasi",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type: "GET",
                        url: '/dsn/consultation/complete/' + encodeURI(id),
                        dataType: "json",
                        success: function(data) {
                            swal(
                                'Berhasil',
                                'Konsultasi Selesai',
                                'success'
                            );
                            location.reload();
                        }
                    });
                }
                else {
                    swal("Pengguna Tidak Dihapus!");
                }
            });
        });
        $('a[name="not-complete"]').on('click', function() {
            var id = $(this).attr('value');
            swal({
                title: "Apakah Anda Yakin?",
                text: "Tidak Ingin Menyelesaikan Konfultasi",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type: "GET",
                        url: '/dsn/consultation/not-complete/' + encodeURI(id),
                        dataType: "json",
                        success: function(data) {
                            swal(
                                'Berhasil',
                                'Konsultasi Tidak Selesai',
                                'success'
                            );
                            location.reload();
                        }
                    });
                }
                else {
                    swal("Pengguna Tidak Dihapus!");
                }
            });
        });
     });
</script>



@endsection