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
                    <a href="{{ url('super-admin/users/create') }}" type="button" class="btn btn-primary mb-3">Tambah</a>
                    <div class="main">
                        <div class="content-wrapper">
                            <div class="row">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered" id="user" width="100%" cellspacing="0">
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
                                                                <button type="button" action="{{ url('super-admin/users/'. $userss->id )}}" class="btn btn-success btn-sm mb-1 btn-edit" data-id="{{$userss->id}}">Edit</button>
                                                                <form id="form-delete-{{ $userss->id }}" method="post"
                                                                    {{-- action="{{ route('users.destroy'. $userss->id)}}"> --}}
                                                                    {{-- <a href="{{ url('super-admin/users/'. $userss->id) }}"
                                                                        class="btn btn-success btn-sm">Edit</a> --}}
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="button" class="btn-delete btn btn-danger btn-sm "
                                                                        value="{{ $userss->id }}">Hapus</button>

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
