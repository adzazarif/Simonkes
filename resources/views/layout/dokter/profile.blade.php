@extends('template.template-admin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="container-xxl flex-grow-1 container-p-y">

            <!-- Basic Layout & Basic with Icons -->
            <form action="/dokter" method="post">
                @method('POST')
                @csrf
                <div class="row">
                    <!-- Basic Layout -->
                    <div class="col-xxl">
                        <div class="card mb-4">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="mb-0">Personal Info</h5>
                            </div>
                            <div class="card-body">
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama_dokter" class="form-control" id="basic-default-name" placeholder="Masukan nama" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-company">Spesialisasi</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="spesialisasi" class="form-control" id="basic-default-company" placeholder="Masukan spesialisasi." />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-company">Jenis Kelamin</label>
                                    <div class="col-sm-10 d-flex align-items-center gap-3">
                                        <input name="jenis_kelamin" class="form-check-input" type="radio" value="laki-laki" id="defaultRadio1" />
                                        <label class="form-check-label" for="defaultRadio1"> Laki - Laki </label>
                                        <input name="jenis_kelamin" class="form-check-input" type="radio" value="perempuan" id="defaultRadio1" />
                                        <label class="form-check-label" for="defaultRadio1"> Perempuan </label>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-email">Tanggal lahir </label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <input type="date" name="tgl_lahir" id="basic-default-email" class="form-control" aria-label="john.doe" aria-describedby="basic-default-email2" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-phone">Phone No</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="no_telepon" id="basic-default-phone" class="form-control phone-mask" placeholder="Masukan Nomor telepon" aria-label="658 799 8941" aria-describedby="basic-default-phone" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-company">Foto</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="foto" type="file" id="formFile" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xxl">
                        <div class="card mb-4">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="mb-0">Alamat</h5>
                            </div>
                            <div class="card-body">


                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Provinsi</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="provinsi" class="form-control" id="basic-default-name" placeholder="Masukan provinsi" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-company">Kabupaten/kota</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="kab_kota" class="form-control" id="basic-default-company" placeholder="Masukan kabupaten." />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-email">Kecamatan</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="basic-default-email" name="kecamatan" class="form-control" placeholder="Masukan kecamatan" aria-label="john.doe" aria-describedby="basic-default-email2" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-message">Detail Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea id="basic-default-message" name="detail_alamat" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="row m-auto">

                        <button type="submit" class="btn btn-primary">Send</button>

                    </div>
                </div>
        </div>
        </form>

    </div>
    @endsection