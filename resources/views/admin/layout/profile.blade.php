@extends('admin.template.template-admin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="container-xxl flex-grow-1 container-p-y">

            <!-- Basic Layout & Basic with Icons -->
            <div class="row">
              <!-- Basic Layout -->
              <div class="col-xxl">
                <div class="card mb-4">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Personal Info</h5>
                  </div>
                  <div class="card-body">
                    <form>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">Spesialisasi</label>
                        <div class="col-sm-10">
                          <input
                            type="text"
                            class="form-control"
                            id="basic-default-company"
                            placeholder="ACME Inc."
                          />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">Jenis Kelamin</label>
                        <div class="col-sm-10 d-flex align-items-center gap-3">
                            <input
                            name="default-radio-1"
                            class="form-check-input"
                            type="radio"
                            value=""
                            id="defaultRadio1"
                          />
                          <label class="form-check-label" for="defaultRadio1"> Laki - Laki </label>
                          <input
                            name="default-radio-1"
                            class="form-check-input"
                            type="radio"
                            value=""
                            id="defaultRadio1"
                          />
                          <label class="form-check-label" for="defaultRadio1"> Perempuan </label>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-email">Tanggal lahir </label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <input
                              type="date"
                              id="basic-default-email"
                              class="form-control"
                              placeholder="john.doe"
                              aria-label="john.doe"
                              aria-describedby="basic-default-email2"
                            />
                          </div>
                          <div class="form-text">You can use letters, numbers & periods</div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-phone">Phone No</label>
                        <div class="col-sm-10">
                          <input
                            type="text"
                            id="basic-default-phone"
                            class="form-control phone-mask"
                            placeholder="658 799 8941"
                            aria-label="658 799 8941"
                            aria-describedby="basic-default-phone"
                          />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">Foto</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" id="formFile" />
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>

              <div class="col-xxl">
                <div class="card mb-4">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Alamat</h5>
                  </div>
                  <div class="card-body">
                    <form>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Provinsi</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">Kabupaten/kota</label>
                        <div class="col-sm-10">
                          <input
                            type="text"
                            class="form-control"
                            id="basic-default-company"
                            placeholder="ACME Inc."
                          />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-email">Kecamatan</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <input
                              type="text"
                              id="basic-default-email"
                              class="form-control"
                              placeholder="john.doe"
                              aria-label="john.doe"
                              aria-describedby="basic-default-email2"
                            />
                          </div>
                          <div class="form-text">You can use letters, numbers & periods</div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Detail Alamat</label>
                        <div class="col-sm-10">
                          <textarea
                            id="basic-default-message"
                            class="form-control"
                            placeholder="Hi, Do you have a moment to talk Joe?"
                            aria-label="Hi, Do you have a moment to talk Joe?"
                            aria-describedby="basic-icon-default-message2"
                          ></textarea>
                        </div>
                      </div>
                     
                    </form>
                  </div>
                </div>
              </div>
              <div class="row m-auto">

                  <button type="submit" class="btn btn-primary">Send</button>

              </div>
            </div>
          </div>
        
</div>
@endsection