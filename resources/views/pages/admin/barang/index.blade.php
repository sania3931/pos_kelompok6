@extends('templates.admin.main')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="m-0">Barang</h5>
                <button type="button" class="btn btn-primary d-flex align-items-center" data-coreui-toggle="modal"
                    data-coreui-target="#createDataModal">
                    <i class="cil-plus"></i> Tambah Barang
                </button>
            </div>
            <div class="card-body">
                {{-- Alert --}}
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-coreui-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-coreui-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                {{-- List Data --}}
                <table class="table table-sm table-hover table-bordered rounded overflow-hidden" id="table"
                    style="width:100%">
                    <thead class="table-secondary">
                        <tr>
                            <th class="text-center col-1">No</th>
                            <th class="text-center">Kode Barang</th>
                            <th class="text-center">Nama Barang</th>
                            <th class="text-center">Kategori</th>
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
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $row->kode_barang }}</td>
                            <td>{{ $row->nama_barang }}</td>
                            <td>{{ $row->kategori_id_kategori}}</td>
                            <td>{{ $row->harga_beli}}</td>
                            <td>{{ $row->harga_jual}}</td>
                            <td>{{ $row->stok}}</td>
                            <td>
                                <form action="{{ route('barang.destroy', $row->id_barang) }}" method="POST">
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
<!-- Modal -->
<form action="{{ route('barang.store') }}" method="POST">
    @csrf
    <div class="modal fade" id="createDataModal" tabindex="-1" aria-labelledby="createDataModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createDataModalLabel">Tambah Data</h5>
                    <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama_barang" class="col-lg-2 col-lg-offset-1 control-label">Nama</label>
                        <div class="col-lg-6">
                            <input type="text" name="nama_barang" id="nama_barang" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kategori_id_kategori" class="col-lg-2 col-lg-offset-1 control-label">Kategori</label>
                        <div class="col-lg-6">
                            <select name="id_kategori" id="kategori_id_kategori" class="form-control" required>
                                <option value="">Pilih Kategori</option>
                                @foreach ($kategori as $key => $kategori)
                                <option value="{{ $key }}">{{ $kategori }}</option>
                                @endforeach
                            </select>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga_beli" class="col-lg-2 col-lg-offset-1 control-label">Harga Beli</label>
                        <div class="col-lg-6">
                            <input type="number" name="harga_beli" id="harga_beli" class="form-control" required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga_jual" class="col-lg-2 col-lg-offset-1 control-label">Harga Jual</label>
                        <div class="col-lg-6">
                            <input type="number" name="harga_jual" id="harga_jual" class="form-control" required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-lg-2 col-lg-offset-1 control-label">Stok</label>
                        <div class="col-lg-6">
                            <input type="number" name="stok" id="stok" class="form-control" required value="0">
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    $(document).ready(function () {
        var table = $("#table").DataTable({
            columnDefs: [
                {
                    searchable: false,
                    orderable: false,
                    targets: 0
                }
            ],
            responsive: true,
        });
    });
</script>
@endsection

