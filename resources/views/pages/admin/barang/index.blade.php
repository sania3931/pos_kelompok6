@extends('templates.admin.main')
@section('content')
<!-- index.blade.php -->
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
            <h4 class="page-title">Daftar Barang</h4>
                <div class="btn-group">
                    <button onclick="addForm('{{ route('barang.store') }}')" class="btn btn-success btn-xs btn-flat"><i class="fa fa-plus-circle"></i> Tambah</button>
                    <button onclick="deleteSelected('{{ route('barang.delete_selected') }}')" class="btn btn-danger btn-xs btn-flat"><i class="fa fa-trash"></i> Hapus</button>
                </div>
            </div>
            <div class="box-body table-responsive">
                <form action="" method="post" class="form-barang">
                    @csrf
                    <table class="table table-stiped table-bordered">
                        <thead>
                            <th width="5%">
                                <input type="checkbox" name="select_all" id="select_all">
                            </th>
                            <th width="5%">No</th>
                            <th>Kategori</th>
                            <th>Nama Barang</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Harga Grosir</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                            <th width="15%"><i class="fa fa-cog"></i></th>
                        </thead>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

@includeIf('barang.form')
@endsection

@push('scripts')
<script>
    let table;

    $(function () {
        table = $('.table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: {
                url: '{{ route('barang.data') }}',
            },
            columns: [
                {data: 'select_all', searchable: false, sortable: false},
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'nama_barang'},
                {data: 'nama_kategori'},
                {data: 'harga_beli'},
                {data: 'harga_jual'},
                {data: 'harga_grosir'},
                {data: 'stok'},
                {data: 'aksi', searchable: false, sortable: false},
            ]
        });

        $('#modal-form').validator().on('submit', function (e) {
            if (! e.preventDefault()) {
                $.post($('#modal-form form').attr('action'), $('#modal-form form').serialize())
                    .done((response) => {
                        $('#modal-form').modal('hide');
                        table.ajax.reload();
                    })
                    .fail((errors) => {
                        alert('Tidak dapat menyimpan data');
                        return;
                    });
            }
        });

        $('[name=select_all]').on('click', function () {
            $(':checkbox').prop('checked', this.checked);
        });
    });

    function addForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Tambah Barang');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('post');
        $('#modal-form [name=nama_barang]').focus();
    }

    function editForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit Barang');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');
        $('#modal-form [name=nama_barang]').focus();

        $.get(url)
            .done((response) => {
                $('#modal-form [name=nama_barang]').val(response.nama_barang);
                $('#modal-form [name=id_kategori]').val(response.id_kategori);
                $('#modal-form [name=harga_beli]').val(response.harga_beli);
                $('#modal-form [name=harga_jual]').val(response.harga_jual);
                $('#modal-form [name=harga_grosir]').val(response.harga_grosir);
                $('#modal-form [name=stok]').val(response.stok);
            })
            .fail((errors) => {
                alert('Tidak dapat menampilkan data');
                return;
            });
    }

    function deleteData(url) {
        if (confirm('Yakin ingin menghapus data terpilih?')) {
            $.post(url, {
                    '_token': $('[name=csrf-token]').attr('content'),
                    '_method': 'delete'
                })
                .done((response) => {
                    table.ajax.reload();
                })
                .fail((errors) => {
                    alert('Tidak dapat menghapus data');
                    return;
                });
        }
    }

    function deleteSelected(url) {
        if ($('input:checked').length > 1) {
            if (confirm('Yakin ingin menghapus data terpilih?')) {
                $.post(url, $('.form-barang').serialize())
                    .done((response) => {
                        table.ajax.reload();
                    })
                    .fail((errors) => {
                        alert('Tidak dapat menghapus data');
                        return;
                    });
            }
        } else {
            alert('Pilih data yang akan dihapus');
            return;
        }
    }

    function cetakBarcode(url) {
        if ($('input:checked').length < 1) {
            alert('Pilih data yang akan dicetak');
            return;
        } else if ($('input:checked').length < 3) {
            alert('Pilih minimal 3 data untuk dicetak');
            return;
        } else {
            $('.form-barang')
                .attr('target', '_blank')
                .attr('action', url)
                .submit();
        }
    }
</script>
@endpush



    <!-- <div class="row page-title-header">
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
                                                        <th scope="col">Kategori</th>
                                                        <th scope="col">Nama Barang</th>
                                                        <th scope="col">Harga Beli</th>
                                                        <th scope="col">Harga Jual</th>
                                                        <th scope="col">Harga Grosir</th>
                                                        <th scope="col">Stok</th>
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($barang as $barangs)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $barangs->kategori_id_kategori }}</td>
                                                            <td>{{ $barangs->nama_barang }}</td>
                                                            <td>{{ $barangs->harga_beli }}</td>
                                                            <td>{{ $barangs->harga_jual }}</td>
                                                            <td>{{ $barangs->harga_grosir }}</td>
                                                            <td>{{ $barangs->harga_stok }}</td>
                                                            <td>
                                                                <button type="button" action="{{ url('super-admin/users/'.$userss->id )}}" class="btn btn-success btn-sm mb-1 btn-edit" data-id="{{$userss->id}}">Edit</button>
                                                                <form id="form-delete-{{ $userss->id }}" method="post"
                                                                    action="{{ url('super-admin/users/' . $userss->id) }}">
                                                                    {{-- <a href="{{ url('super-admin/users/'. $userss->id) }}"
                                                                        class="btn btn-success btn-sm">Edit</a> --}}
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="button" class="btn-delete btn btn-danger btn-sm "
                                                                        value="{{ $userss->id }}">Delete</button>

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
            var table = $('#barang').DataTable({
                processing: true,
                serverSide: true,
                searching: true,
                ajax: {
                    url: "{{ url('super-admin/barang/showUser') }}",
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
                    url: {{ url(Auth::user()->level . '/users/${id}') }},
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
@endsection -->
