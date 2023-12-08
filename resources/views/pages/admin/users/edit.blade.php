{{-- <div class="modal-header">
    <h5 class="modal-title" id="editModalLabel">Edit Akun</h5>
    <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form action="" method="post" enctype="multipart/form-data" name="update_form">
    @csrf
    @method('get')
    <div class="modal-body">
        <div class="row form-group">
            <div class="col col-md-3">
                <label class=" form-control-label">Username</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="text-input" name="username" placeholder="Username"
                    class="form-control @error('username') is-invalid @enderror" value="{{ $user->username }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="password-input" class=" form-control-label">password</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="password-input" name="password" placeholder="password"
                    class="form-control @error('password') is-invalid @enderror">
                <span>*kosongkan jika tidak diubah</span>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="select" class=" form-control-label">Level</label>
            </div>
            <div class="col-12 col-md-9">
                <select name="level" id="select" class="form-control @error('level') is-invalid @enderror">
                    <option selected hidden value="{{ $user->level }}">
                        {{ $user->level }}
                    </option>
                    <option value="member">Super Admin</option>
                    <option value="admin">Administrator</option>
                </select>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="select" class=" form-control-label">Status</label>
            </div>
            <div class="col-12 col-md-9">
                <select name="status" id="select" class="form-control @error('status') is-invalid @enderror">
                    <option selected hidden value="{{ $user->status }}">
                        {{ $user->status }}
                    </option>
                    <option value="member">Aktif</option>
                    <option value="admin">Tidak Aktif</option>
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
</form> --}}

{{-- <div class="modal-header">
    <h5 class="modal-title" id="mediumModalLabel">Edit User</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div> --}}
{{-- <form action="" method="POST" id="form-edit-user">
    @method('put')
    @csrf
    <div class="modal-body">
            <div class="form-group ">
                <label class=" form-control-label">Username</label>
                <input type="hidden" name="user_id" value="{{$user ->id }}">
                <input type="text" id="name" name="name" placeholder="username" class="form-control mb-3 @error('username') is-invalid @enderror" required value="{{ $user ->username }}">
                @error('username')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
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
              </div> --}}
{{-- <div class="modal-footer"> --}}
{{-- <a href="{{ url('pages.admin.tag.index') }}" class="btn btn-success">@lang('button.cancel')</a> --}}
{{-- <button type="reset" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
        <button class="btn btn-primary btn-sm" type="button" onclick="saveData({{$tags ->id }});">Simpan</button> --}}
{{-- <button type="submit" class="btn btn-primary">@lang('button.save')</button> --}}
{{--
    </div>
</form> --}}
@extends('templates.admin.main')
@section('content')
    <form action="{{ route('users.update', $user->id_user) }}" method="post" enctype="multipart/form-data" name="update_form">
    @csrf
    @method('put')
    <div class="modal-header">
      <h5 class="modal-title" id="#modalEditData">Edit Akun</h5>
      <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="modal-body">
        <div class="row form-group">
            <div class="col col-md-3">
                <label class=" form-control-label">Username</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="text-input" name="username" placeholder="Username"
                    class="form-control @error('username') is-invalid @enderror" value="{{ $user->username }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="password-input" class=" form-control-label">password</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="password-input" name="password" placeholder="password"
                    class="form-control @error('password') is-invalid @enderror">
                <span>*kosongkan jika tidak diubah</span>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="select" class=" form-control-label">Level</label>
            </div>
            <div class="col-12 col-md-9">
                <select name="level" id="select" class="form-control @error('level') is-invalid @enderror">
                    <option selected hidden value="{{ $user->level }}">
                        {{ $user->level }}
                    </option>
                    <option value="member">Super Admin</option>
                    <option value="admin">Administrator</option>
                </select>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="select" class=" form-control-label">Status</label>
            </div>
            <div class="col-12 col-md-9">
                <select name="status" id="select" class="form-control @error('status') is-invalid @enderror">
                    <option selected hidden value="{{ $user->status }}">
                        {{ $user->status }}
                    </option>
                    <option value="member">Aktif</option>
                    <option value="admin">Tidak Aktif</option>
                </select>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="{{ url('super-admin/users') }}" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Batal
        </a>
        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
    </div>
  </form>
</div>
    {{-- <form action="{{ url('super-admin/kategori') }}" method="post" name="create_form" enctype="multipart/form-data">
        @method('post')
        @csrf
        <div class="modal fade" id="modalTambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Username</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="username" placeholder="Username"
                                    class="form-control @error('username') is-invalid @enderror"
                                    value="{{ $user->username }}">
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="password-input" class=" form-control-label">password</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="password-input" name="password" placeholder="password"
                                    class="form-control @error('password') is-invalid @enderror">
                                <span>*kosongkan jika tidak diubah</span>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="select" class=" form-control-label">Level</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="level" id="select"
                                    class="form-control @error('level') is-invalid @enderror">
                                    <option selected hidden value="{{ $user->level }}">
                                        {{ $user->level }}
                                    </option>
                                    <option value="member">Super Admin</option>
                                    <option value="admin">Administrator</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="select" class=" form-control-label">Status</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="status" id="select"
                                    class="form-control @error('status') is-invalid @enderror">
                                    <option selected hidden value="{{ $user->status }}">
                                        {{ $user->status }}
                                    </option>
                                    <option value="member">Aktif</option>
                                    <option value="admin">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form> --}}
@endsection
