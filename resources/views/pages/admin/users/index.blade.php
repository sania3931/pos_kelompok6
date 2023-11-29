@extends('templates.admin.main')
@section('content')
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header d-flex justify-content-between align-items-center">
                <h4 class="page-title">Daftar Akun</h4>
            </div>
            <div class="row m-t-30">
                <div class="col-md-12">
                    <a href="{{ url('superadmin/users/create') }}" type="button" class="btn btn-primary mb-3"</a>
                        <div class="card-body">
                            <h4 class="card-title">Basic Table</h4>
                            <table class="table table-borderless" id="user">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Level</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                            </table>
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
                    url: "{{ url('superadmin/users/showUser') }}",
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
                cancelButtonText: 'no Cancel It')',
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
