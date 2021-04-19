@extends('admin.layouts.app')
@section('title', 'Admin | Pengguna')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pengguna</h1>
    
    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mt-4 mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <div class="row mt-4 mb-2 justify-content-start">
                    <div class="col-md-2">
                        <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Tambah Dosen</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <form action="/akses-admin/user/add-dosen" method="POST">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Dosen</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Nama</label>
                                                    <input type="text" name="name" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Email</label>
                                                    <input type="email" name="email" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">NIP</label>
                                                    <input type="text" name="nip" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Password</label>
                                                    <input type="password" name="password" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Tambah</button>
                                    </div>
                                </form>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP/NPM</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Program Studi</th>
                            <th>Dosen PA</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $item)
                            
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->npm_nisn }}</td>
                            <td>{{ $item->name }}</td>
                            @if ($item->status == 'dosen')
                            <td>Dosen</td>
                            @elseif ($item->status == 'admin')
                            <td>Admin</td>
                            @elseif ($item->status == 'user')
                            <td>Mahasiswa</td>
                            @else
                            <td></td>
                            @endif
                            
                            <td>{{ $item->ps }}</td>
                            <td>{{ $item->dosen_pa }}</td>
                            <td><a href="" class="btn btn-warning btn-sm"
                                data-toggle="modal" name="change-password" value="{{ $item->id }}" data-target="#exampleModal1">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" value="{{ $item->id }}" name="delete-user" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <form action="/akses-admin/user/change-password" method="POST">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Password</label>
                                                            <input type="hidden" value="" id="user-id" name="id">
                                                            <input type="password" name="password" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success">Ubah</button>
                                            </div>
                                        </form>
                                      </div>
                                    </div>
                                </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
   
     $(document).ready(function() {
        $('a[name="delete-user"]').on('click', function() {
            var id = $(this).attr('value');
            swal({
                title: "Apakah Anda Yakin?",
                text: "Pengguna yang dihapus tidak dapat kembali",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type: "GET",
                        url: '/akses-admin/user/delete/' + encodeURI(id),
                        dataType: "json",
                        success: function(data) {
                            swal(
                                'Berhasil',
                                'Hapus Pengguna Berhasil',
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
        $('a[name="change-password"]').on('click', function() {
            var id = $(this).attr('value');
            console.log(id);
            $("#user-id").replaceWith('<input type="hidden" value="'+id+'" id="user-id" name="id">');
        });
     });
</script>


@endsection