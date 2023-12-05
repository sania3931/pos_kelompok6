@extends('templates.admin.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-noborder b-radius">
                <div class="card-body">
                    <form action="{{ url('super-admin/users') }}" method="post" name="create_form"
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
                                <a href="{{ url('super-admin/users') }}" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Batal
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
