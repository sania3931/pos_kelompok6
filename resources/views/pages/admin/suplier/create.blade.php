@extends('templates.admin.main')
@section('content')

<!-- <div class="modal fade" id="createUserModal" tabindex="-1" role="dialog" aria-labelledby="createUserModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createUserModalLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Isi modal sesuai dengan formulir Anda -->
                <form action="{{ url('super-admin/suplier') }}" method="post" name="create_form" enctype="multipart/form-data">
                    <!-- ... (bagian formulir) ... --> -->

                    <div class="row">
        <div class="col-12">
            <div class="card card-noborder b-radius">
                <div class="card-body">
                    <form action="{{ url('super-admin/suplier') }}" method="post" name="create_form"
                        enctype="multipart/form-data">
                        @method('post')
                        @csrf

                    @method('post')
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

                <!-- </form> -->
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button class="btn simpan-btn btn-sm" type="submit" form="create_form">
                                <i class="mdi mdi-content-save"></i> Simpan
                            </button>
                    </div>
                </form>
        </div>
    </div>
</div>


    <!-- <div class="row">
        <div class="col-12">
            <div class="card card-noborder b-radius">
                <div class="card-body">
                    <form action="{{ url('super-admin/suplier') }}" method="post" name="create_form"
                        enctype="multipart/form-data">
                        @method('post')
                        @csrf
                        <div class="form-group row">
                            <label class="col-12 font-weight-bold col-form-label">Username <span
                                    class="text-danger">*</span></label>
                            <div class="col-12">
                                <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
                            </div>
                            <div class="col-12 error-notice" id="nama_error"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 font-weight-bold col-form-label">Password <span
                                    class="text-danger">*</span></label>
                            <div class="col-12">
                                <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                            </div>
                            <div class="col-12 error-notice" id="password_error"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 font-weight-bold col-form-label">Level <span
                                    class="text-danger">*</span></label>
                            <div class="col-12">
                                <select class="form-control" name="level">
                                    <option value="">-- Pilih Level --</option>
                                    <option value="super admin">Super Admin</option>
                                    <option value="administrator">Administrator</option>
                                </select>
                            </div>
                            <div class="col-12 error-notice" id="level_error"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 font-weight-bold col-form-label">Status <span
                                    class="text-danger">*</span></label>
                            <div class="col-12">
                                <select class="form-control" name="status">
                                    <option value="aktif">Aktif</option>
                                    <option value="tidak aktif">Tidak Aktif</option>
                                </select>
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
                    </form>
                </div>
            </div>
        </div>
    </div> -->
@endsection
