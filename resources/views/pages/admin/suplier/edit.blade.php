@extends('templates.admin.main')
@section('content')
<div class="row modal-group">
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action="{{ url('super-admin/suplier/'$user->id) }}" method="post" enctype="multipart/form-data" name="update_form">
            <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Edit Akun</h5>
              <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              @csrf
              <div class="form-group row">
                            <label class="col-12 font-weight-bold col-form-label">Nama Suplier <span
                                    class="text-danger">*</span></label>
                            <div class="col-12">
                                <input type="text" class="form-control" name="nama_suplier" placeholder="Masukkan Nama">
                            </div>
                            <div class="col-12 error-notice" id="nama_error"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 font-weight-bold col-form-label">Alamat <span
                                    class="text-danger">*</span></label>
                            <div class="col-12">
                                <textarea type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 font-weight-bold col-form-label">Sales <span
                                    class="text-danger">*</span></label>
                            <div class="col-12">
                                <input type="text" class="form-control" name="sales" placeholder="Masukkan Nama Sales">
                            </div>
                            <div class="col-12 error-notice" id="level_error"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 font-weight-bold col-form-label">No HP <span
                                    class="text-danger">*</span></label>
                            <div class="col-12">
                            <input type="text" class="form-control" name="no_hp" placeholder="081230765487">
                            </div>
                            <div class="col-12 error-notice" id="status_error"></div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12 d-flex justify-content-end">
                                <button class="btn simpan-btn btn-sm" type="submit"><i class="mdi mdi-content-save"></i>
                                    Simpan</button>
                                <a href="{{ url('super-admin/suplier') }}" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Batal
                                </a>
                            </div>
                        </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-update"><i class="mdi mdi-content-save"></i> Simpan</button>
              <a href="{{ url('super-admin/suplier') }}" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Batal
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
