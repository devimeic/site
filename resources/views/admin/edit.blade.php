      <!--**********************************
            Modal Edit
        ***********************************-->
        <div class="modal fade" id="editModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah User</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Nama" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No HP</label>
                                    <div class="col-sm-9">
                                        <input type="number" id="no_hp" name="no_hp" class="form-control" placeholder="No HP" required>
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
                                            <option value="tidak aktif">tidak aktif</option>\
                                        </select>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
        

        <!--**********************************
            Modal Edit End
        ***********************************-->

        