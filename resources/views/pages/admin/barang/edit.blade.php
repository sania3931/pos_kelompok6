{{-- <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-header">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <form action="" method="POST" class="form-horizontal">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama_barang" class="col-lg-2 col-lg-offset-1 control-label">Nama Barang</label>
                        <div class="col-lg-6">
                            <input type="text" name="nama_barang" id="nama_barang" class="form-control" required
                                autofocus>
                            <span class="help-block with-errors">Nama Barang</span>
                        </div>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="form-group row">
                        <label for="kategori_id_kategori" class="col-lg-2 col-lg-offset-1 control-label">Kategori</label>
                        <div class="col-lg-6">
                        <select class="form-control" name="kategori_id_kategori">
                        <option value="Obat">Obat</option>
                        <option value="Pupuk">Pupuk</option>
                        <option value="Pestisida">Pestisida</option>
                        <option value="Alat Pertanian">Alat Pertanian</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                            <span class="help-block with-errors">Kategori</span>
                        </div>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="form-group row">
                        <label for="harga_beli" class="col-lg-2 col-lg-offset-1 control-label">Harga Beli</label>
                        <div class="col-lg-6">
                            <input type="text" name="harga_beli" id="harga_beli" class="form-control" required
                                autofocus>
                            <span class="help-block with-errors">Harga Beli</span>
                            <span class="input-group-text">Rp. </span>
                        </div>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="form-group row">
                        <label for="harga_jual" class="col-lg-2 col-lg-offset-1 control-label">Harga Jual</label>
                        <div class="col-lg-6">
                            <input type="text" name="harga_jual" id="harga_jual" class="form-control" required
                                autofocus>
                            <span class="help-block with-errors">Harga Jual</span>
                            <span class="input-group-text">Rp. </span>
                        </div>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="form-group row">
                        <label for="stok" class="col-lg-2 col-lg-offset-1 control-label">Stok</label>
                        <div class="col-lg-6">
                            <input type="text" name="stok" id="stok" class="form-control" required
                                autofocus>
                            <span class="help-block with-errors">Stok</span>
                        </div>
                    </div>
                </div>


                <div class="modal-footer">
                    <button class="btn btn-sm btn-flat btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    <button type="button" class="btn btn-sm btn-flat btn-warning" data-dismiss="modal"><i
                            class="fa fa-arrow-circle-left"></i> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}
<!-- Modal -->
{{-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Edit Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST" class="form-horizontal" id="exampleModalCenter">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama_kategori" class="col-lg-2 col-lg-offset-1 control-label">Barang</label>
                        <div class="col-lg-6">
                            <input type="text" name="kategori" id="kategoris" class="form-control" required
                                autofocus>
                            <span class="help-block with-errors">Kategori</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}
<!-- @extends('templates.admin.main')
@section('content') -->
<!-- <form action="{{ route('barang.edit', $kategori->id_kategori) }}" method="post" enctype="multipart/form-data" name="update_form">
    @method('put')
    @csrf
    <div class="modal-header">
      <h5 class="modal-title" id="editModalLabel">Edit Akun</h5>
      <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="modal-body">
        <div class="form-group row">
            <label for="nama_kategori" class="form-control-label">Nama Kategori</label>
            <input type="text" id="name" name="kategori" placeholder="Nama Kategori" class="form-control mb-3 @error ('kategori') is-invalid @enderror" required value="{{( $kategori->kategori )}}">
                @error ('kategori')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
        </div>
    </div>
    <div class="modal-footer">
        <a href="{{ url('super-admin/kategori') }}" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Cancel
        </a>
        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
    </div>
  </form>
</div>
@endsection -->
