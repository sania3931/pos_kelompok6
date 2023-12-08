@extends('templates.admin.main')
@section('content')
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header d-flex justify-content-between align-items-center">
                <h4 class="page-title">Daftar Penjualan</h4>
            </div>
            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createDataModal">
                        Tambah <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </button>
                    <div class="main">
                        <div class="content-wrapper">
                            <div class="row">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            {{-- Alert --}}
                                            @if (session('success'))
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    {{ session('success') }}
                                                    <button type="button" class="btn-close" data-coreui-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            @endif
                                            @if ($errors->any())
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                    <button type="button" class="btn-close" data-coreui-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            @endif
                                            {{-- List Data --}}
                                            <table class="table table-sm table-hover table-bordered rounded overflow-hidden"
                                                id="table" style="width:100%">
                                                <thead class="table-secondary">
                                                    <tr>
                                                        <th class="text-center col-1">No</th>
                                                        <th class="text-center">Tanggal Penjualan</th>
                                                        <th class="text-center">Tanggal Input</th>
                                                        <th class="text-center">Total Harga</th>
                                                        <th class="text-center">Kasir</th>
                                                        <th class="text-center col-1">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if ($kategori->count())
                                                        @foreach ($pembelian as $row)
                                                            <tr class="text-center">
                                                                <td>{{ $loop->index + 1 }}</td>
                                                                <td>{{ $row->tgl_penjualan }}</td>
                                                                <td>{{ $row->tgl_input }}</td>
                                                                <td>{{ $row->total }}</td>
                                                                <td>{{ $row->id_user }}</td>
                                                                <td>
                                                                    <form
                                                                        action="{{ route('penjualan.destroy', $row->id_penjualan) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <div class="btn-group" role="group">
                                                                            <a href="{{ route('penjualan.edit', $row->id_penjualan) }}"
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
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <tr class="text-center">
                                                            <td colspan="3">Tidak Ada Data</td>
                                                            <td class="d-none"></td>
                                                            <td class="d-none"></td>
                                                        </tr>
                                                    @endif
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
    <form action="{{ route('pembelian.store') }}" method="POST">
        @csrf
        <div class="modal fade" id="createDataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ url('super-admin/kategori') }}" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Batal
                        </a>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
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
@endsection
