@extends('master.newmaster')
@section('buttons')

@endsection
@section('content')
<div class="container-fluid">

  <!-- <div id="qrcode"></div> -->
<div class="row mt-4">
      <div class="col-6 text-left">
        <h2 style="margin-top:-85px;">Master Set Lokasi Barang</h2>
      </div>
      {{-- <div class="col-6 text-right">
        <button type="button" class="btn btn-primary btn-lg" style="
            height: 30px; 
            margin-top: -150px; 
            padding: 4px 12px; 
            border-radius: 20px; 
            font-size: 0.75rem; 
            font-weight: 600; 
            text-transform: uppercase; 
            transition: background-color 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);"
            onclick="buttonAdd()">
          Add Set Lokasi Barang
        </button>
      </div> --}}
      {{-- <div class="col-6 text-right">
        <button type="button" class="btn btn-primary btn-lg" style="
            height: 30px; 
            margin-top: -150px; 
            padding: 4px 12px; 
            border-radius: 20px; 
            font-size: 0.75rem; 
            font-weight: 600; 
            text-transform: uppercase; 
            transition: background-color 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);"
            onclick="loadAll()">
          tes load all
        </button>
      </div> --}}
    </div>
<!-- <button onclick="loadAll()">tes</button> -->
</div>

<div id="contentContainer" class="container-fluid" style="max-width: 1800px; margin-top:-90px;">
  <input type="hidden" id="periode_tahun" value="{!! $periode->tahun !!}" />
  <input type="hidden" id="periode_bulan" value="{!! $periode->bulan !!}" />
  <input type="hidden" name="_token" id="_token" value="{!! csrf_token() !!}" />
          <div class="row mt-4">
              <!-- <div class="col-12 text-right">
                  <button type="button" class="btn btn-primary btn-lg " style="height: 60px; " onclick="buttonAdd()"  >Add Koreksi Stock Gudang</button>
              </div> -->
          </div>
          <div class="row mt-3">
            <div class="col-12" style="overflow:auto;">
              <div class="">

                    <table id="tabel" class="table table-bordered table-striped">
                      <thead id='theadCustom' class="text-center">
                        <tr>
                          <th scope="col">Actions</th>
                          <th scope="col">Kode Barang</th>
                          <th scope="col">Nama Barang</th>
                          <th scope="col">Merk</th>
                          <th scope="col">Kode Lokasi</th>
                          <th scope="col">Nama Lokasi</th>
                          <th scope="col">Sat 1</th>
                          <th scope="col">Sat 2</th>
                          <th scope="col">Isi 2</th>
                          <th scope="col">Sat 3</th>
                          <th scope="col">Isi 3</th>

                        </tr>
                      </thead>

                      <tbody id="tabel_data" class="text-left">
                      </tbody>

                    </table>
              </div>
            </div>
          </div>
</div>

<!-- start modal add -->
<div class="modal fade"  id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered"  role="document" style="max-width: 500px">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          <!-- <h1>Tes Modal</h1> -->

          <div class="container-fluid">
            <input type="hidden" name="noUrut" id="input_add_noUrut" value="" />

              <div class="row">
                <div class="col-4 text-left">
                  <div class="form-group text-left">
                    <label class="text-left">Kode Lokasi</label>
                  </div>
                </div>
                <div class="col-8">
                  <div class="form-group">
                    <input type="text" class="form-control" id="input_add_kode" placeholder="Kode Lokasi">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-4 text-left">
                  <div class="form-group text-left">
                    <label class="text-left">Keterangan</label>
                  </div>
                </div>
                <div class="col-8">
                  <div class="form-group">
                    <input type="text" class="form-control" id="input_add_nama" placeholder="Keterangan">
                  </div>
                </div>
              </div>

          </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" onclick="submitAdd()">Submit</button>
      </div>
    </div>
  </div>
</div>
<!-- End modal add-->

<!-- start modal edit -->
<div class="modal fade" id="formEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered"  role="document" style="max-width: 500px">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- <h1>Tes Modal</h1> -->

        <div class="container-fluid">
          <!-- <input type="hidden" name="noUrut" id="input_add_noUrut" value="" /> -->

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Lokasi Barang</label>
                </div>
              </div>
              <div class="col-8">
                  <div class="input-group">
                      <input type="text" class="form-control" id="input_edit_lokasiBarang" placeholder="Lokasi Barang">
                      <div class="input-group-append">
                          <button type="button" class="btn btn-primary btn-select" onclick="buttonLokasiBarang()">+</button>
                      </div>
                  </div>
              </div>

            </div>


    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
    <button type="button" class="btn btn-primary" onclick="submitEdit()">Submit</button>
  </div>
</div>
</div>
</div>
<!-- End modal edit-->

@endsection

@section('js')
<script type="text/javascript">

let dataRefresh = []

function loadAll () {
  console.log('asd')
  let _token = $("#_token").val();

  $('#tabel').DataTable().destroy();

  $.ajax({
    url: "{!! url('mastersetlokasibarangloadall') !!}",
    type: "get",
    async: false,
    data: {
      _token : _token,
    },
    success: function(res) {
      console.log(res)
      dataRefresh = res
  }})

  let rowTable = ""
  dataRefresh.forEach((item, i) => {
    let temp = ""

    rowTable += `<tr>
    <td class="text-center">
      <button class="btn btn-success btn-sm hover-tooltip" data-tooltip='Edit Lokasi Barang' type="button" onclick="buttonEdit('${item.KODEBRG}')"><i class="bi bi-pen"></i></button>
      <button class="btn btn-primary btn-sm hover-tooltip" data-tooltip='History Lokasi Barang' type="button" onclick="buttonHistory('${item.KODEBRG}')"><i class="bi bi-clock-history"></i></button>
    </td>
    <td>${item.KODEBRG}</td>
    <td>${item.NAMABRG}</td>
    <td>${item.namaMerk}</td>
    <td>${item.Mlokasi}</td>
    <td>${item.KetLokasi}</td>
    <td class='text-right'>${item.SAT1}</td>
    <td>${item.SAT2}</td>
    <td class='text-right'>${item.ISI2}</td>
    <td>${item.SAT3}</td>
    <td class='text-right'>${item.ISI3}</td>
    </tr>`
  });

  document.getElementById("tabel_data").innerHTML = rowTable
  $("#tabel").DataTable({
    "lengthChange": true,
      "paging": true,
    });

}

function buttonAdd () {

  $("#form").modal('toggle')

}

let kodeBarangTemp = ''

function buttonEdit (kode) {

  kodeBarangTemp = kode
  console.log(kodeBarangTemp)

  $("#formEdit").modal('toggle')
}

function buttonDelete (kode) {
  console.log(kode)
  let _token = $("#_token").val();


  alertify.confirm('Hapus Valas', 'Apakah yakin ingin menghapus Kode Valas ' + kode + ' ?',
      function() {
        console.log('yes')

        $.ajax({
          url: "{!! url('masterlokasibarangspdelete') !!}",
          type: "post",
          async: false,
          data: {
            _token : _token,
            kode
          },
          success: function(res) {
            if (res != 1) {
              alertify.warning(res);
            } else {
              console.log(res)
              loadAll()
              alertify.success("Kode Lokasi Barang telah dihapus");

            }
          }})
      }
    ,function(){
      console.log('no')
    });


}

function submitEdit () {

  let _token = $("#_token").val();
  let lokasiBarang = $("#input_edit_lokasiBarang").val();

  if (!lokasiBarang) {
    alertify.warning("Lokasi Barang harus diisi");
    return
  }

  $.ajax({
    url: "{!! url('masterSetLokasiBarangSubmitEdit') !!}",
    type: "post",
    async: false,
    data: {
      _token : _token,
      lokasiBarang,
      kodeBarang : kodeBarangTemp
    },
    success: function(res) {

      if (res != 1) {
        alertify.warning(res);
      }  else {
        console.log(res ,'!')
        // $("#formEdit").modal('toggle')
        alertify.success("Data Lokasi berhasil disimpan.");
        loadAll()
        $("#formEdit").modal('toggle')
      }

    }})

}
//
function submitAdd () {

  let _token = $("#_token").val();
  let kode = $("#input_add_kode").val();
  let nama = $("#input_add_nama").val();

  if (!kode) {
    alertify.warning("Kode harus diisi");
    return
  }

  if (!nama) {
    alertify.warning("Nama harus diisi");
    return
  }

  $.ajax({
    url: "{!! url('masterlokasibarangspadd') !!}",
    type: "post",
    async: false,
    data: {
      _token : _token,
      kode,
      nama
    },
    success: function(res) {

      if (res != 1) {
        alertify.warning(res);
      }  else {
        console.log(res ,'!')
        // $("#formEdit").modal('toggle')
        alertify.success("Data Valas telah ditambah");
        loadAll()
        $("#form").modal('toggle')
      }

    }})

  // console.log(kodearea, namaarea)
}

window.onload = function(){
  loadAll();
}

function buttonHistory (kodeBarang) {
  let _token = $("#_token").val();

   if ($.fn.DataTable.isDataTable('#tabelModalOpen')) {
    $('#tabelModalOpen').DataTable().destroy();
  }

  $.ajax({
    url: "{!! url('masterSetLokasiBarangLoadHistory') !!}",
    type: "get",
    async: false,
    data: {
      _token: _token,
      kodeBarang
    },
    success: function (res) {
      console.log(res);
      dataRefresh = res;
    },
  });

  let rowTable = "";
  dataRefresh.forEach((item, i) => {
    let temp = "";

    rowTable += `<tr>
      <td>${item.lokasi}</td>
      <td>${item.tgl}</td>
      <td>${item.iduser}</td>
    </tr>`;
  });

  document.getElementById("tabel_dataModalOpen").innerHTML = rowTable;

  let headerTable = `
  <tr>
    <th scope="col">Lokasi</th>
    <th scope="col">Tanggal</th>
    <th scope="col">User</th>
  </tr>
  `
  document.querySelector("#theadOpen").innerHTML = headerTable;
  document.getElementById("namaModalOpen").innerHTML = 'History Barang'

  $("#tabelModalOpen").DataTable({
    "lengthChange": true,
    "paging": true,
  });
  
  $("#formModalOpen").modal('toggle')
}

function buttonLokasiBarang () {
  let _token = $("#_token").val();

   if ($.fn.DataTable.isDataTable('#tabelModalOpen')) {
    $('#tabelModalOpen').DataTable().destroy();
  }

  $.ajax({
    url: "{!! url('masterSetLokasiBarangLoadLokasiBarang') !!}",
    type: "get",
    async: false,
    data: {
      _token: _token,
    },
    success: function (res) {
      console.log(res);
      dataRefresh = res;
    },
  });

  let rowTable = "";
  dataRefresh.forEach((item, i) => {
    let temp = "";

    rowTable += `<tr>
      <td class="text-center">
        <button class="btn btn-primary btn-sm" type="button" onclick="buttonSelectLokasi('${item.KODELOKASI}')"><i class="bi bi-plus"></i></button>
      </td>
      <td>${item.KODELOKASI}</td>
    </tr>`;
  });

  document.getElementById("tabel_dataModalOpen").innerHTML = rowTable;

  let headerTable = `
  <tr>
    <th scope="col">Action</th>
    <th scope="col">LOkasi</th>
  </tr>
  `
  document.querySelector("#theadOpen").innerHTML = headerTable;
  document.getElementById("namaModalOpen").innerHTML = 'Lokasi Barang'

  $("#tabelModalOpen").DataTable({
    "lengthChange": true,
    "paging": true,
  });
  
  $("#formModalOpen").modal('toggle')
}

function buttonSelectLokasi(kodeLokasi){

  document.getElementById('input_edit_lokasiBarang').value = kodeLokasi
  
  $("#formModalOpen").modal('toggle')

}

</script>

<!-- start modal select add akumulasi penyusutan -->
<div class="modal fade" id="formModalOpen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document" style="max-width: 1200px">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="namaModalOpen"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="tabelModalOpen" class="table table-bordered table-striped">
          <thead id='theadOpen' class="text-center bg-primary text-white">
            <tr></tr>
          </thead>
          <tbody id="tabel_dataModalOpen" class="text-left">
            <tr></tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>
<!-- End modal select add akumulasi penyusutan-->

@endsection
