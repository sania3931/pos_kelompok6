@extends('templates.admin.main')

@section('content')
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header d-flex justify-content-between align-items-center">
                <h4 class="page-title">Daftar Suplier</h4>
            </div>
            <div class="row m-t-30">
                <div class="col-md-12">
                <a href="{{ url('super-admin/suplier/create') }}" type="button" class="btn btn-primary mb-3">Tambah</a>
                    <div class="main">
                        <div class="content-wrapper">
                            <div class="row">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered" id="user" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Nama Suplier</th>
                                                        <th scope="col">Alamat</th>
                                                        <th scope="col">Sales</th>
                                                        <th scope="col">No Hp</th>
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
    </div>
@endsection

@section('script')

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            var table = $('#user').DataTable({
                processing: true,
                serverSide: true,
                searching: true,
                ajax: {
                    url: "{{ url('super-admin/suplier/showUser') }}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}"
                    }
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'nama_suplier', name: 'nama_suplier'},
                    {data: 'alamat', name: 'alamat'},
                    {data: 'sales', name: 'sales'},
                    {data: 'no_hp', name: 'no_hp'},
                    { data: 'action', name: 'action', orderable: false, searchable: false } // Add this line if you have actions (edit/delete)
                ]
            });
        });

        function destroyUser(id) {
            Swal.fire({
                title: 'Are You Sure?',
                text: "You Will Delete This Data!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Delete It',
                cancelButtonText: 'No, Cancel It'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: {{ url(Auth::user()->level . '/suplier/${id}') }},
                        type: "post",
                        data: {
                            'id': id,
                            '_method': 'DELETE',
                            '_token': "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            if (response.success == true) {
                                Swal.fire(
                                    'Deleted',
                                    'Your File Has Been Deleted',
                                    'success'
                                ).then(function() {
                                    window.location.reload();
                                });
                            } else {
                                Swal.fire(
                                    'Data Saved',
                                    'Data Is Not Deleted',
                                    'error'
                                ).then(function() {
                                    window.location.reload();
                                });
                            }
                        },
                        error: function() {
                            // Handle error if needed
                        }
                    });
                }
            });
        }
    </script>
@endsection
