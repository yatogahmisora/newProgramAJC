@extends('newmaster')
@section('buttons')

@endsection
@section('content')

<link rel="stylesheet" href="{{ asset('css/tableMaster2.css') }}">

  <div class="sp-breadcrumb">
    <span>Beranda</span>
    <span class="sp-sep">›</span>
    <span>Master</span>
    <span class="sp-sep">›</span>
    <span class="sp-crumb-active">Seting Perusahaan</span>
  </div>

  <div class="sp-page-head">
    <div>
      <h1>Seting Nomor Transaksi dan Perusahaan</h1>
    </div>
  </div>

<div id="contentContainer" class="container-fluid">

  <input type="hidden" name="_token" id="_token" value="{!! csrf_token() !!}" />

  <div class="stp-card">

    <div class="stp-body">

      <div class="stp-side">
        <div class="stp-side-badge">
          <i class="bi bi-buildings"></i>
        </div>
      </div>

      <div class="stp-main">

        <ul class="nav nav-tabs stp-main-tabs" id="stpMainTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="tab-perusahaan-btn" data-bs-toggle="tab" data-bs-target="#tab-perusahaan" type="button" role="tab">Perusahaan</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-nomortransaksi-btn" data-bs-toggle="tab" data-bs-target="#tab-nomortransaksi" type="button" role="tab">Set Nomor Transaksi</button>
          </li>
        </ul>

        <div class="tab-content stp-tab-content">

          <!-- ===================== TAB: PERUSAHAAN ===================== -->
          <div class="tab-pane fade show active" id="tab-perusahaan" role="tabpanel">

            <div class="stp-row">
              <label class="stp-label">Nama</label>
              <input type="text" class="form-control" id="input_nama">
            </div>

            <div class="stp-row">
              <label class="stp-label">Alamat</label>
              <div class="stp-field-stack">
                <input type="text" class="form-control mb-2" id="input_alamat1">
                <input type="text" class="form-control" id="input_alamat2">
              </div>
            </div>

            <div class="stp-row">
              <label class="stp-label">Kota</label>
              <input type="text" class="form-control" id="input_kota">
            </div>

            <div class="stp-row">
              <label class="stp-label">Telpon</label>
              <input type="text" class="form-control stp-input-narrow" id="input_telpon">
            </div>

            <div class="stp-row">
              <label class="stp-label">Fax</label>
              <div class="d-flex align-items-center stp-field-stack" style="gap: 16px;">
                <input type="text" class="form-control stp-input-narrow" id="input_fax">
                <label class="stp-label stp-inline-label mb-0">E-Mail</label>
                <input type="text" class="form-control" id="input_email">
              </div>
            </div>

            <ul class="nav nav-tabs stp-sub-tabs mt-3" id="stpNpwpTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tab-npwp1-btn" data-bs-toggle="tab" data-bs-target="#tab-npwp1" type="button" role="tab">NPWP 1</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab-npwp2-btn" data-bs-toggle="tab" data-bs-target="#tab-npwp2" type="button" role="tab">NPWP 2</button>
              </li>
            </ul>

            <div class="tab-content stp-npwp-content">

              <!-- ---------- NPWP 1 ---------- -->
              <div class="tab-pane fade show active" id="tab-npwp1" role="tabpanel">

                <div class="stp-row">
                  <label class="stp-label">Nama PKP</label>
                  <input type="text" class="form-control" id="input_namapkp_1">
                </div>

                <div class="stp-row">
                  <label class="stp-label">Alamat PKP</label>
                  <div class="stp-field-stack">
                    <input type="text" class="form-control mb-2" id="input_alamatpkp1_1">
                    <input type="text" class="form-control" id="input_alamatpkp2_1">
                  </div>
                </div>

                <div class="stp-row">
                  <label class="stp-label">Kota PKP</label>
                  <input type="text" class="form-control" id="input_kotapkp_1">
                </div>

                <div class="stp-row">
                  <label class="stp-label">NPWP</label>
                  <input type="text" class="form-control stp-input-narrow" id="input_npwp_1">
                </div>

                <div class="stp-row">
                  <label class="stp-label">Tanggal Pengukuhan</label>
                  <input type="date" class="form-control stp-input-narrow" id="input_tglpengukuhan_1">
                </div>

                <div class="stp-row">
                  <label class="stp-label">Penandatanganan FPJ</label>
                  <input type="text" class="form-control" id="input_penandatangan_1">
                </div>

                <div class="stp-row">
                  <label class="stp-label">Jabatan</label>
                  <input type="text" class="form-control stp-input-narrow" id="input_jabatan_1">
                </div>

                <div class="stp-row">
                  <label class="stp-label">&nbsp;</label>
                  <div class="d-flex" style="gap: 32px;">

                    <div>
                      <div class="mb-1" style="font-size: 13px; color: #333;">Ttd Trading Director</div>
                      <div class="d-flex align-items-start" style="gap: 10px;">
                        <label class="btn btn-sm btn-outline-secondary mb-0">
                          <i class="bi bi-folder2-open"></i> Cari
                          <input type="file" accept="image/*" hidden onchange="previewUploadImage(this, 'stp_ttd_box_1')">
                        </label>
                        <div class="stp-upload-box" id="stp_ttd_box_1">
                          <i class="bi bi-image stp-upload-placeholder"></i>
                        </div>
                      </div>
                    </div>

                    <div>
                      <div class="mb-1" style="font-size: 13px; color: #333;">Logo</div>
                      <div class="d-flex align-items-start" style="gap: 10px;">
                        <label class="btn btn-sm btn-outline-secondary mb-0">
                          <i class="bi bi-folder2-open"></i> Cari
                          <input type="file" accept="image/*" hidden onchange="previewUploadImage(this, 'stp_logo_box_1')">
                        </label>
                        <div class="stp-upload-box" id="stp_logo_box_1">
                          <i class="bi bi-image stp-upload-placeholder"></i>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>

              <!-- ---------- NPWP 2 ---------- -->
              <div class="tab-pane fade" id="tab-npwp2" role="tabpanel">

                <div class="stp-row">
                  <label class="stp-label">Nama PKP</label>
                  <input type="text" class="form-control" id="input_namapkp_2">
                </div>

                <div class="stp-row">
                  <label class="stp-label">Alamat PKP</label>
                  <div class="stp-field-stack">
                    <input type="text" class="form-control mb-2" id="input_alamatpkp1_2">
                    <input type="text" class="form-control" id="input_alamatpkp2_2">
                  </div>
                </div>

                <div class="stp-row">
                  <label class="stp-label">Kota PKP</label>
                  <input type="text" class="form-control" id="input_kotapkp_2">
                </div>

                <div class="stp-row">
                  <label class="stp-label">NPWP</label>
                  <input type="text" class="form-control stp-input-narrow" id="input_npwp_2">
                </div>

                <div class="stp-row">
                  <label class="stp-label">Tanggal Pengukuhan</label>
                  <input type="date" class="form-control stp-input-narrow" id="input_tglpengukuhan_2">
                </div>

                <div class="stp-row">
                  <label class="stp-label">Penandatanganan FPJ</label>
                  <input type="text" class="form-control" id="input_penandatangan_2">
                </div>

                <div class="stp-row">
                  <label class="stp-label">Jabatan</label>
                  <input type="text" class="form-control stp-input-narrow" id="input_jabatan_2">
                </div>

                <div class="stp-row">
                  <label class="stp-label">&nbsp;</label>
                  <div class="d-flex" style="gap: 32px;">

                    <div>
                      <div class="mb-1" style="font-size: 13px; color: #333;">Ttd Trading Director</div>
                      <div class="d-flex align-items-start" style="gap: 10px;">
                        <label class="btn btn-sm btn-outline-secondary mb-0">
                          <i class="bi bi-folder2-open"></i> Cari
                          <input type="file" accept="image/*" hidden onchange="previewUploadImage(this, 'stp_ttd_box_2')">
                        </label>
                        <div class="stp-upload-box" id="stp_ttd_box_2">
                          <i class="bi bi-image stp-upload-placeholder"></i>
                        </div>
                      </div>
                    </div>

                    <div>
                      <div class="mb-1" style="font-size: 13px; color: #333;">Logo</div>
                      <div class="d-flex align-items-start" style="gap: 10px;">
                        <label class="btn btn-sm btn-outline-secondary mb-0">
                          <i class="bi bi-folder2-open"></i> Cari
                          <input type="file" accept="image/*" hidden onchange="previewUploadImage(this, 'stp_logo_box_2')">
                        </label>
                        <div class="stp-upload-box" id="stp_logo_box_2">
                          <i class="bi bi-image stp-upload-placeholder"></i>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>

            </div>

          </div>

          <!-- ===================== TAB: SET NOMOR TRANSAKSI ===================== -->
          <div class="tab-pane fade" id="tab-nomortransaksi" role="tabpanel">
            <div class="text-muted py-5 text-center">
              Konten Set Nomor Transaksi belum tersedia.
            </div>
          </div>

        </div>

      </div>

    </div>

    <div class="stp-footer">
      <button type="button" class="btn stp-btn-ok" onclick="submitSetingPerusahaan()">
        <i class="bi bi-check-lg"></i> Ok
      </button>
      <button type="button" class="btn stp-btn-cancel" onclick="batalSetingPerusahaan()">
        <i class="bi bi-x-lg"></i> Batal
      </button>
    </div>

  </div>

</div>

@endsection

@section('css')
<style>

  .stp-card {
    background: #fff;
    border: 1px solid #d9d9d9;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.06);
    overflow: hidden;
  }

  .stp-body {
    display: flex;
    min-height: 560px;
  }

  .stp-side {
    width: 190px;
    flex-shrink: 0;
    background: linear-gradient(160deg, #0d1b3d 0%, #1c3f8f 55%, #4f83e0 100%);
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .stp-side-badge {
    width: 84px;
    height: 84px;
    border-radius: 50%;
    background: rgba(255,255,255,0.12);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 34px;
    color: #fff;
  }

  .stp-main {
    flex: 1;
    padding: 18px 24px 0 24px;
  }

  .stp-main-tabs .nav-link {
    font-weight: 600;
    color: #555;
    border: none;
    border-bottom: 2px solid transparent;
  }

  .stp-main-tabs .nav-link.active {
    color: #0d1b3d;
    border-bottom: 2px solid #0d1b3d;
    background: transparent;
  }

  .stp-tab-content {
    padding-top: 18px;
  }

  .stp-row {
    display: flex;
    align-items: flex-start;
    margin-bottom: 12px;
  }

  .stp-label {
    width: 160px;
    flex-shrink: 0;
    font-size: 14px;
    color: #333;
    padding-top: 7px;
  }

  .stp-inline-label {
    width: auto;
    padding-top: 7px;
    white-space: nowrap;
  }

  .stp-field-stack {
    flex: 1;
  }

  .stp-input-narrow {
    max-width: 260px;
  }

  .stp-sub-tabs .nav-link {
    font-size: 13.5px;
    padding: 6px 16px;
    color: #555;
    border: 1px solid transparent;
  }

  .stp-sub-tabs .nav-link.active {
    background: #f4f6fb;
    border: 1px solid #d9d9d9;
    border-bottom-color: #f4f6fb;
    color: #0d1b3d;
    font-weight: 600;
  }

  .stp-npwp-content {
    background: #f4f6fb;
    border: 1px solid #d9d9d9;
    border-top: none;
    border-radius: 0 0 6px 6px;
    padding: 20px 20px 24px;
  }

  .stp-upload-box {
    width: 150px;
    height: 130px;
    border: 1px solid #c9c9c9;
    border-radius: 6px;
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    flex-shrink: 0;
  }

  .stp-upload-box img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
  }

  .stp-upload-placeholder {
    color: #bbb;
    font-size: 26px;
  }

  .stp-footer {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
    padding: 14px 24px;
    border-top: 1px solid #e5e5e5;
    background: #fafafa;
  }

  .stp-btn-ok {
    background: #f1f1f1;
    border: 1px solid #b9b9b9;
    color: #1a7a1a;
    font-weight: 600;
    padding: 6px 22px;
  }

  .stp-btn-ok:hover {
    background: #e6f4e6;
  }

  .stp-btn-cancel {
    background: #f1f1f1;
    border: 1px solid #b9b9b9;
    color: #b02a2a;
    font-weight: 600;
    padding: 6px 22px;
  }

  .stp-btn-cancel:hover {
    background: #fbe9e9;
  }

</style>
@endsection

@section('js')
<script type="text/javascript">

function previewUploadImage(inputEl, targetBoxId) {
  let file = inputEl.files && inputEl.files[0];
  if (!file) return;

  let reader = new FileReader();
  reader.onload = function (e) {
    document.getElementById(targetBoxId).innerHTML = `<img src="${e.target.result}" alt="preview">`;
  };
  reader.readAsDataURL(file);
}

function submitSetingPerusahaan() {
  // TODO: wire this up to the actual save endpoint later
  console.log('submitSetingPerusahaan - UI only for now');
}

function batalSetingPerusahaan() {
  // TODO: decide navigation/close behavior later
  console.log('batalSetingPerusahaan - UI only for now');
}

function loadAll(){
  
}

window.onload = function(){
  loadAll();
};


</script>
@endsection