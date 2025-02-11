@extends('templates.admin.main')
@section('content')
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header d-flex justify-content-between align-items-center">
                <h4 class="page-title">Daftar Barang</h4>
            </div>
            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createDataModal">
                        Tambah
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
                                                        <th class="text-center">Kategori</th>
                                                        <th class="text-center">Nama Barang</th>
                                                        <th class="text-center">Harga Beli</th>
                                                        <th class="text-center">Harga Jual</th>
                                                        <th class="text-center">Stok</th>
                                                        <th class="text-center col-1">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if ($barang->count())
                                                        @foreach ($barang as $row)
                                                            <tr class="text-center">
                                                                <td>{{ $loop->index + 1 }}</td>
                                                                <td>{{ $row->kategori_id_kategori }}</td>
                                                                <td>{{ $row->nama_barang }}</td>
                                                                <td>{{ $row->harga_beli }}</td>
                                                                <td>{{ $row->harga_jual }}</td>
                                                                <td>{{ $row->stok }}</td>
                                                                <td>
                                                                    <form
                                                                        action="{{ route('barang.destroy', $row->id_barang) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <div class="btn-group" role="group">
                                                                            <a href="{{ route('barang.edit', $row->id_barang) }}"
                                                                                class="btn btn-sm btn-primary d-flex align-items-center">
                                                                                <i class="cil-pencil me-1"></i> Ubah
                                                                            </a>
                                                                            <button type="submit"
                                                                                class="btn btn-sm btn-danger text-white d-flex align-items-center"
                                                                                onclick="return confirm('Apakah Anda yakin menghapus data ini?');">
                                                                                <i class="cil-trash me-1"></i> Hapus
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
    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <div class="modal fade" id="createDataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukkan Nama Barang" required>
                        </div>
                    </div>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="kategori_id_kategori" class="form-label">Kategori</label>
                            <select class="form-control" name="kategori_id_kategori">
                                <option value="Obat">Obat</option>
                                <option value="Pupuk">Pupuk</option>
                                <option value="Pestisida">Pestisida</option>
                                <option value="Alat Pertanian">Alat Pertanian</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="harga_beli" class="form-label">Harga Beli</label>
                            <input type="text" class="form-control" id="harga_beli" name="harga_beli" required>
                            <span class="input-group-text">Rp. </span>
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="harga_jual" class="form-label">Harga Jual</label>
                            <input type="text" class="form-control" id="harga_jual" name="harga_jual" required>
                            <span class="input-group-text">Rp. </span>
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="text" class="form-control" id="stok" name="stok" placeholder="Masukkan Stok Barang" required>
                        </div>
                    </div>
                    </div>

                    <div class="modal-footer">
                        <a href="{{ url('super-admin/barang') }}" class="btn btn-danger btn-sm">
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
