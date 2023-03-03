@extends('layouts.main')

@section('isi')

<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Wizard</a></li>
    </ol>
</div>
<!-- row -->
<div class="row">
    <div class="col-xl-12 col-xxl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form step</h4>
            </div>
            <div class="card-body">
                <div id="smartwizard" class="form-wizard order-create">
                    <ul class="nav nav-wizard">
                        <li><a class="nav-link" href="#wizard_Service"> 
                            <span class="w-75">Developer</span> 
                        </a></li>
                        <li><a class="nav-link" href="#wizard_Time">
                            <span class="w-75">Pengajuan</span>
                        </a></li>
                        <li><a class="nav-link" href="#wizard_Details">
                            <span class="w-75">Tipe Bangunan</span>
                        </a></li>
                        <li><a class="nav-link" href="#wizard_Payment">
                            <span class="w-75">Berkas</span>
                        </a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="wizard_Service" class="tab-pane" role="tabpanel">
                            <div class="card-body">
                                <div class="basic-form">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Developer</label>
                                        <div class="col-sm-9">
                                            <select class="form-control default-select" id="dev" name="dev">
                                                <option>PT</option>
                                                <option>Developer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Developer</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="nama_dev" name="nama_dev" class="form-control @error('nama_dev') is invalid @enderror" placeholder="Nama Developer">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat Developer</label>
                                        <div class="col-sm-9">
                                            <textarea rows="4" id="alamat_dev" name="alamat_dev" class="form-control @error('alamat_dev') is invalid @enderror" placeholder="Alamat Developer"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                                        <div class="col-sm-9">
                                            <input type="number" id="no_hp" name="no_hp" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Asosiasi</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="asosiasi" name="asosiasi" class="form-control @error('asosiasi') is invalid @enderror" placeholder="asosiasi">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nomor Anggota Asosiasi</label>
                                        <div class="col-sm-9">
                                            <input type="number" id="no_anggota" name="no_anggota" class="form-control @error('no_anggota') is invalid @enderror" placeholder="Nomor Anggota Asosiasi">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="wizard_Time" class="tab-pane" role="tabpanel">
                            <div class="card-body">
                                <div class="basic-form">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Proyek</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="nama_proyek" name="nama_proyek" class="form-control @error('nama_proyek') is invalid @enderror" placeholder="Nama Proyek">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat Proyek</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="alamat_proyek" name="alamat_proyek" class="form-control @error('alamat_proyek') is invalid @enderror" placeholder="Alamat Proyek">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pemohon / Pemberi Kuasa 1</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="pemohon_satu" name="pemohon_satu" class="form-control @error('pemohon_satu') is invalid @enderror" placeholder="Pemohon / Pemberi Kuasa 1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nomor HP </label>
                                        <div class="col-sm-9">
                                            <input type="number" id="hp_satu" name="hp_satu" class="form-control @error('hp_satu') is invalid @enderror" placeholder="Nomor HP Pemohon 1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pemohon / Pemberi Kuasa 2</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="pemohon_duan" name="pemohon_duan" class="form-control @error('pemohon_duan') is invalid @enderror" placeholder="Pemohon / Pemberi Kuasa 2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nomor HP</label>
                                        <div class="col-sm-9">
                                            <input type="number" id="hp_dua" name="hp_dua" class="form-control @error('hp_dua') is invalid @enderror" placeholder="Nomor HP Pemohon 2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Luas PSU</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="psu" name="psu" class="form-control @error('psu') is invalid @enderror" placeholder="Luas PSU">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Luas Kavling</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="kavling" name="kavling" class="form-control @error('kavling') is invalid @enderror" placeholder="Luas Kavling">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Luas Total</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="total" name="total" class="form-control @error('total') is invalid @enderror" placeholder="Luas Total">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="wizard_Details" class="tab-pane" role="tabpanel">
                            <div class="card-body">
                                <div class="basic-form">
                                    <div class="row">
                                        <div class="col-xl-5">
                                            <div class="mb-4">
                                                <div class="form-group">
                                                    <label>Tipe Bangunan</label>
                                                    <input type="text" id="tipe" name="tipe" class="form-control" placeholder="Tipe Bangunan">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="mb-4">
                                                <div class="form-group">
                                                    <label>Jumlah</label>
                                                    <input type="number" id="jumlah_tipe" name="jumlah_tipe" class="form-control" placeholder="Jumlah">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="mb-4">
                                                <div class="form-group">
                                                    <label>Kategori</label>
                                                    <select class="form-control default-select" id="kategori" name="kategori">
                                                        <option>1 - Komersial</option>
                                                        <option>2 - Subsidi</option>
                                                        <option>3 - Ruko</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-1">
                                            <div class="mb-4">
                                                <div class="form-group">
                                                    <label></label>
                                                    <button type="button" class="btn light btn-primary">
                                                        <i class="fa fa-plus color-primary"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <div class="row">
                                        <div class="col-xl-3"></div>
                                        <div class="col-xl-6">
                                            <div class="form-group row">
                                                <label class="mt-2">Total Kavling</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="wizard_Payment" class="tab-pane" role="tabpanel">
                            <div class="card-body">
                                <div class="basic-form">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-responsive-sm">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Persyaratan</th>
                                                    <th>Unggah</th>
                                                    <th>Lihat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>1</th>
                                                    <td>Surat permohonan pengesahan Site Plan
                                                        kepada Bupati Magetan Cq.Kepala Dinas
                                                        Perumahan dan Kawasan Permukiman Kab.
                                                        Magetan </td>
                                                    <td>January 22</td>
                                                    <td class="color-primary">$21.56</td>
                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <td>Fotocopy IPL/ IL/ IPPT </td>
                                                    <td>January 22</td>
                                                    <td class="color-primary">$21.56</td>
                                                </tr>
                                                <tr>
                                                    <th>3</th>
                                                    <td>Fotocopy bukti kepemilikan lahan (Sertifikat Tanah, Akta Jual Beli
                                                        dan pelepasan hak ), di lengkapi dengan scan peta bidang atau gambar hasil
                                                        ukur ulang dari kantor pertanahan</td>
                                                    <td>January 22</td>
                                                    <td class="color-primary">$21.56</td>
                                                </tr>
                                                <tr>
                                                    <th>4</th>
                                                    <td>Fotocopy : Akta Pendirian PT (berbadan Hukum) bergerak di bidang
                                                        perumahan SK Menteri Humum dan HAM beserta angggota asosiasi perumahan
                                                    </td>
                                                    <td>January 22</td>
                                                    <td class="color-primary">$21.56</td>
                                                </tr>
                                                <tr>
                                                    <th>5</th>
                                                    <td>Fotocopy PBB tahun berjalan
                                                    </td>
                                                    <td>January 22</td>
                                                    <td class="color-primary">$21.56</td>
                                                </tr>
                                                <tr>
                                                    <th>6</th>
                                                    <td>Fotocopy SPPL / UKL - UPL / Amdal ( dokumen lingkungan)
                                                    </td>
                                                    <td>January 22</td>
                                                    <td class="color-primary">$21.56</td>
                                                </tr>
                                                <tr>
                                                    <th>7</th>
                                                    <td>Fotocopy KTP
                                                    </td>
                                                    <td>January 22</td>
                                                    <td class="color-primary">$21.56</td>
                                                </tr>
                                                <tr>
                                                    <th>8</th>
                                                    <td>Fotocopy KTP dan SKA Perencanaan ( yang menggambar )
                                                    </td>
                                                    <td>January 22</td>
                                                    <td class="color-primary">$21.56</td>
                                                </tr>
                                                <tr>
                                                    <th>9</th>
                                                    <td>Surat Rekomendasi dari Bidang SDA Dinas PUPR<br>
                                                        a. Jika lahan bangunan berbatasan dengan saluran irigasi<br>
                                                        b. Jika menutupi saluran irigasi
                                                    </td>
                                                    <td>January 22</td>
                                                    <td class="color-primary">$21.56</td>
                                                </tr>
                                                <tr>
                                                    <th>10</th>
                                                    <td>Surat Rekomendasi dari Dinas PU Sumber Daya Air Provinsi<br>
                                                        a. Jika lahan bangunan berbatasan dengan sungai<br>
                                                        b. Jika membuat jembatan
                                                    </td>
                                                    <td>January 22</td>
                                                    <td class="color-primary">$21.56</td>
                                                </tr>
                                                <tr>
                                                    <th>11</th>
                                                    <td>Surat Kuasa / Surat Tugas di atas kertas bermaterai Rp. 6000,- 
                                                        dilengkapi KTP pemegang surat kuasa
                                                    </td>
                                                    <td>January 22</td>
                                                    <td class="color-primary">$21.56</td>
                                                </tr>
                                                <tr>
                                                    <th>12</th>
                                                    <td>Gambar Siteplan beserta rincian fasum, fasos, rencana drainase, dan jalan
                                                        rangkap 2 (dua) beserta file autocad
                                                    </td>
                                                    <td>January 22</td>
                                                    <td class="color-primary">$21.56</td>
                                                </tr>
                                                <tr>
                                                    <th>13</th>
                                                    <td>Surat perjanjian Tertulis antara pemohon dengan pengelola makam di ketahui Kepala Desa /
                                                        Lurah terkait penyedia TPU
                                                    </td>
                                                    <td>January 22</td>
                                                    <td class="color-primary">$21.56</td>
                                                </tr>
                                                <tr>
                                                    <th>14</th>
                                                    <td>Surat keterangan bebas banjir dari dinas terkait (bila diperlukan)
                                                    </td>
                                                    <td>January 22</td>
                                                    <td class="color-primary">$21.56</td>
                                                </tr>
                                                <tr>
                                                    <th>15</th>
                                                    <td>Surat Keterangan lain bila diperlukan
                                                    </td>
                                                    <td>January 22</td>
                                                    <td class="color-primary">$21.56</td>
                                                </tr>
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
<!--**********************************
Content body end
***********************************-->

@endsection