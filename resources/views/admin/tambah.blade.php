      <!--**********************************
            Modal Tambah
        ***********************************-->
        <div class="modal fade" id="tambahModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah User</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('tambahadmin') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="name" name="name" class="form-control @error('name') is invalid @enderror" placeholder="Nama" >
                                        @error('name')
                                        <div class="alert alert-danger mb-1">{{ $message }}
                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                            </button>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="username" name="username" class="form-control @error('username') is invalid @enderror" placeholder="Username">
                                        @error('username')
                                        <div class="alert alert-danger mb-1">{{ $message }}
                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                            </button>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" id="password" name="password" class="form-control @error('password') is invalid @enderror" placeholder="Password">
                                        @error('password')
                                        <div class="alert alert-danger mb-1">{{ $message }}
                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                            </button>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No HP</label>
                                    <div class="col-sm-9">
                                        <input type="number" id="no_hp" name="no_hp" class="form-control @error('no_hp') is invalid @enderror" placeholder="No HP">
                                        @error('no_hp')
                                        <div class="alert alert-danger mb-1">{{ $message }}
                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                            </button>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Role</label>
                                    <div class="col-sm-9">
                                        <select class="form-control default-select" id="role" name="role">
                                            <option selected>Role</option>
                                            <option value="admin">admin</option>
                                            <option value="pemohon">pemohon</option>
                                            <option value="verifikator berkas">verifikator berkas</option>
                                            <option value="verifikator lapangan">verifikator lapangan</option>
                                            <option value="pemberi rekomendasi">pemberi rekomendasi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Status User</label>
                                    <div class="col-sm-9">
                                        <select class="form-control default-select" id="status_users" name="status_users">
                                            <option value="aktif">aktif</option>
                                            <option value="tidak aktif">tidak aktif</option>
                                        </select>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
                </div>
            </div>

        <!--**********************************
            Modal Tambah End
        ***********************************-->