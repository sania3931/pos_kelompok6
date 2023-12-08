@extends('templates.admin.main')
@section('content')
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header d-flex justify-content-between align-items-center">
                <h4 class="page-title">Daftar Akun</h4>
            </div>
            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambahData">
                        Tambah <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </button>
                    <div class="main">
                        <div class="content-wrapper">
                            <div class="row">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            @if(session()->has('success'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('success') }}
                                                </div>
                                            @endif
                                            @if ($errors->any())
                                                @foreach ($errors->all() as $error)
                                                    <div>{{$error}}</div>
                                                @endforeach
                                            @endif
                                            <table class="table table-sm table-hover table-bordered rounded overflow-hidden"
                                                id="table" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Username</th>
                                                        <th scope="col">Level</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($user as $userss)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $userss->username }}</td>
                                                            <td>{{ $userss->level }}</td>
                                                            <td>{{ $userss->status }}</td>
                                                            <td>
                                                                <form
                                                                    action="{{ route('users.destroy', $userss->id_user) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <div class="btn-group m-3" role="group">
                                                                        <a href="{{ route('users.edit', $userss->id_user) }}"
                                                                            class="btn btn-sm btn-success d-flex align-items-center">
                                                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                                                        </a>
                                                                        <button type="submit"
                                                                            class="btn btn-sm btn-danger text-white d-flex align-items-center"
                                                                            onclick="return confirm('Apakah Anda yakin menghapus data ini?');">
                                                                            <i class="fa fa-times" aria-hidden="true"></i>
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                                {{-- <button class="btn btn-danger">Delete</button> --}}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <form action="{{ url('super-admin/users') }}" method="post" name="create_form"
                    enctype="multipart/form-data">
                    @method('post')
                    @csrf
        <div class="modal fade" id="modalTambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-12 font-weight-bold col-form-label">Username <span
                                class="text-danger">*</span></label>
                        <div class="col-12">
                            <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
                        </div>
                        <div class="col-12 error-notice" id="nama_error"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 font-weight-bold col-form-label">Password <span
                                class="text-danger">*</span></label>
                        <div class="col-12">
                            <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                        </div>
                        <div class="col-12 error-notice" id="password_error"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 font-weight-bold col-form-label">Level <span
                                class="text-danger">*</span></label>
                        <div class="col-12">
                            <select class="form-control" name="level">
                                <option value="super admin">Super Admin</option>
                                <option value="administrator">Administrator</option>
                            </select>
                        </div>
                        <div class="col-12 error-notice" id="level_error"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 font-weight-bold col-form-label">Status <span
                                class="text-danger">*</span></label>
                        <div class="col-12">
                            <select class="form-control" name="status">
                                <option value="aktif">Aktif</option>
                                <option value="tidak aktif">Tidak Aktif</option>
                            </select>
                        </div>
                        <div class="col-12 error-notice" id="status_error"></div>
                    </div>
                    {{-- <div class="row mt-5">
                        <div class="col-12 d-flex justify-content-end">
                            <button class="btn simpan-btn btn-sm" type="submit"><i class="mdi mdi-content-save"></i>
                                Simpan</button>
                            <a href="{{ url('super-admin/users') }}" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Batal
                            </a>
                        </div>
                    </div> --}}

                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            </div>
        </div>
    </form>
    {{-- <form action="{{ url('super-admin/users') }}" method="post" name="create_form" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="modal fade" id="modaleditData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Username</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="username" placeholder="Username"
                                    class="form-control @error('username') is-invalid @enderror"
                                    value="{{ $user->username }}">
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="password-input" class=" form-control-label">password</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="password-input" name="password" placeholder="password"
                                    class="form-control @error('password') is-invalid @enderror">
                                <span>*kosongkan jika tidak diubah</span>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="select" class=" form-control-label">Level</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="level" id="select"
                                    class="form-control @error('level') is-invalid @enderror">
                                    <option selected hidden value="{{ $user->level }}">
                                        {{ $user->level }}
                                    </option>
                                    <option value="member">Super Admin</option>
                                    <option value="admin">Administrator</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="select" class=" form-control-label">Status</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="status" id="select"
                                    class="form-control @error('status') is-invalid @enderror">
                                    <option selected hidden value="{{ $user->status }}">
                                        {{ $user->status }}
                                    </option>
                                    <option value="member">Aktif</option>
                                    <option value="admin">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form> --}}

@endsection
@section('script')
    <script>
        $(document).ready(function() {
            var table = $("#table").DataTable({
                columnDefs: [{
                    searchable: false,
                    orderable: false,
                    targets: 0
                }],
                responsive: true,
            });
        });
    </script>
    {{-- <script>
        $(document).ready(function() {
            var table = $('#user').DataTable({
                processing: true,
                serverSide: true,
                searching: true,
                ajax: {
                    url: "{{ url('super-admin/users/showUser') }}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}"
                    }
                }
            });
        })

        function destroyUser(id) {
            Swal.fire({
                    title: 'are You Sure?',
                    text: "you Will Delete This Data!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'yes Delete It',
                    cancelButtonText: 'no Cancel It')
                ',
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: `{{ url(Auth::user()->level . '/users/${id}') }}`,
                    type: "post",
                    data: {
                        'id': id,
                        '_method': 'DELETE',
                        '_token': "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response.success == true) {
                            Swal.fire(
                                'deleted',
                                'your File Has Been Deleted',
                                'success'
                            ).then(function() {
                                window.location.reload()

                            })
                        } else {
                            Swal.fire(
                                'data Saved',
                                'data Is Not Deleted',
                                'error'
                            ).then(function() {
                                window.location.reload()
                            })
                        }
                    },
                    error: {

                    }
                });
            }
        })
        };
    </script> --}}
@endsection

{{-- @extends('templates.admin.main')
@section('content')
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header d-flex justify-content-between align-items-center">
                <h4 class="page-title">Daftar Akun</h4>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <a href="{{ url('super-admin/users/create') }}" type="button" class="btn btn-primary mb-3"</a>
                        <div class="card card-noborder b-radius">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 table-responsive">
                                        <table class="table table-custom" id="user">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Username</th>
                                                    <th>Level</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(document).ready(function() {
            var table = $('#user').DataTable({
                processing: true,
                serverSide: true,
                searching: true,
                ajax: {
                    url: "{{ url('super-admin/users/showUser') }}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}"
                    }
                }
            });
        })

        function destroyUser(id) {
            Swal.fire({
                    title: 'are You Sure?',
                    text: "you Will Delete This Data!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'yes Delete It',
                    cancelButtonText: 'no Cancel It')
                ',
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: `{{ url(Auth::user()->level . '/users/${id}') }}`,
                    type: "post",
                    data: {
                        'id': id,
                        '_method': 'DELETE',
                        '_token': "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response.success == true) {
                            Swal.fire(
                                'deleted',
                                'your File Has Been Deleted',
                                'success'
                            ).then(function() {
                                window.location.reload()

                            })
                        } else {
                            Swal.fire(
                                'data Saved',
                                'data Is Not Deleted',
                                'error'
                            ).then(function() {
                                window.location.reload()
                            })
                        }
                    },
                    error: {

                    }
                });
            }
        })
        };
    </script>
@endsection --}}
