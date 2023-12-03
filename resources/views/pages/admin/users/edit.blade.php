@extends('templates.admin.main')
@section('content')
<div class="row modal-group">
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action="{{ url('super-admin/users/'$user->id) }}" method="post" enctype="multipart/form-data" name="update_form">
            <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Edit Akun</h5>
              <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              @csrf
              <div class="form-group row mt-4">
                <label class="col-3 col-form-label font-weight-bold">Username</label>
                <div class="col-9">
                  <input type="text" class="form-control" name="username">
                </div>
                <div class="col-9 offset-3 error-notice" id="username_error"></div>
              </div>
              <div class="form-group row">
                <label class="col-3 col-form-label font-weight-bold">Level</label>
                <div class="col-9">
                  <select class="form-control" name="level">
                    <option value="">-- Pilih Level --</option>
                    <option value="supir admin">Super Admin</option>
                    <option value="administrasi">Administrator</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-3 col-form-label font-weight-bold">Status</label>
                <div class="col-9">
                  <select class="form-control" name="status">
                    <option value="aktif">Aktif</option>
                    <option value="tidak aktif">Tidak Aktif</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-update"><i class="mdi mdi-content-save"></i> Simpan</button>
              <a href="{{ url('super-admin/users') }}" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Batal
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
