@extends('master.newmaster')
@section('buttons')

@endsection
@section('content')
<div class="container-fluid">

@include('master/partials/sidebarPosting')
  <!-- <div id="qrcode"></div> -->
  <div class="row mt-4">
      <div class="col-6 text-left">
      </div>
      <div class="col-6 text-right">
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
          Add Posting UM Hutang
        </button>
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
            onclick="loadAll()">
          tes load all
        </button>
      </div> --}}
    </div>

<div id="printContainer" style="display:none">

</div>
<div id="contentContainer" class="container-fluid" style="max-width: 900px; margin-top:-100px;">
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

      <table id="tabel" class="table table-bordered table-striped"  >
        <thead id='theadCustom' class="text-center">
          <tr>
            <th scope="col">Actions</th>
            <th scope="col">Perkiraan</th>
            <th scope="col">Keterangan</th>

          </tr>
        </thead>
        <tbody id="tabel_data" class="text-left">
        </tbody>
      </table>

    </div>
  </div>
</div>

<!-- start modal add -->
<div class="modal fade"  id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered"  role="document" style="max-width: 550px">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulTipeModal">Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body container-fluid">
          <input type="hidden" name="noUrut" id="input_add_noUrut" value="" />

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Perkiraan</label>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_kode" disabled>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                    <button type="button" class="btn btn-primary btn-lg" style="height: 30px; " onclick="buttonSelectPerkiraan()">Select</button>
                </div>
              </div>

            </div>

      </div>
      <div class="modal-footer" id='buttonTipeModal'>
      </div>
    </div>
  </div>
</div>
<!-- End modal add-->

<!-- start modal aktiva select perkiraan -->
<div class="modal fade"  id="formSelectPerkiraan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered"  role="document" style="max-width: 1200px">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select Perkiraan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="tabelAktivaSelectPerkiraan" class="table table-bordered table-striped"  >
          <thead id='theadCustom' class="text-center">
            <tr>
              <th scope="col">Actions</th>
              <th scope="col">Perkiraan</th>
              <th scope="col">Keterangan</th>

            </tr>
          </thead>

          <tbody id="tabel_dataAktivaSelectPerkiraan" class="text-left" >
            <tr>

              <td></td>
              <td></td>

                <td class="text-center">
                  <!-- <button class="btn btn-warning btn-sm" type="button" onclick="" ><i class="bi bi-info-lg"></i></button> -->
                  <button type="button" onclick="buttonPilihPerkiraan()"><i class="bi bi-pen">Select</i></button>
                </td>
          </tr>
          </tbody>

        </table>

    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" >Batal</button>
        </div>
  </div>
</div>
</div>
<!-- End modal aktiva select perkiraan-->

<!-- start modal edit aktiva select perkiraan -->
<div class="modal fade"  id="formEditSelectPerkiraan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered"  role="document" style="max-width: 1200px">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select Perkiraan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="tabelEdiAktivaSelectPerkiraan" class="table table-bordered table-striped"  >
          <thead id='theadCustom' class="text-center">
            <tr>
              <th scope="col">Actions</th>
              <th scope="col">Perkiraan</th>
              <th scope="col">Keterangan</th>

            </tr>
          </thead>

          <tbody id="tabel_dataEditAktivaSelectPerkiraan" class="text-left" >
            <tr>
            </tr>
          </tbody>

        </table>

    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" >Batal</button>
        </div>
  </div>
</div>
</div>
{{-- End modal edit aktiva select perkiraan  --}}

@endsection

@section('js')
<script type="text/javascript">

let dataRefresh = []

function loadAll () {
  console.log('asd')
  let _token = $("#_token").val();

  document.getElementById('judulPosting').innerHTML = 'Master Posting UM Hutang'

  $('#tabel').DataTable().destroy();

  $.ajax({
    url: "{!! url('mastersetpostingumhutangloadall') !!}",
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
      <button class="btn btn-success btn-sm hover-tooltip" data-tooltip='Edit Posting UM Hutang'type="button" onclick="buttonEdit('${item.Perkiraan}')"><i class="bi bi-pen"></i></button>
      <button class="btn btn-danger btn-sm hover-tooltip" data-tooltip='Delete Posting UM Hutang'type="button" onclick="buttonDelete('${item.Perkiraan}')"><i class="bi bi-trash"></i></button>
    </td>
    <td>${item.Perkiraan}</td>
    <td>${item.keterangan}</td>
    </tr>`
  });

  document.getElementById("tabel_data").innerHTML = rowTable
  $("#tabel").DataTable({
    "lengthChange": false,
      "paging": false ,
    });

}

function buttonAdd () {
  document.getElementById('judulTipeModal').innerHTML =  'Add'
  document.getElementById('input_kode').value = ''
  
  isiButton = `
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Batal</button>
        <button type="button" class="btn btn-primary" onclick="submitAdd()">Submit Add</button>
        `

  document.getElementById('buttonTipeModal').innerHTML = isiButton;

  $("#form").modal('toggle')

}

function buttonEdit (kode) {

  document.getElementById('judulTipeModal').innerHTML =  'Edit'

  isiButton = `
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Batal</button>
        <button type="button" class="btn btn-primary" onclick="submitEdit()">Submit Edit</button>
        `

  document.getElementById('buttonTipeModal').innerHTML = isiButton;

  console.log(kode)
  let _token = $("#_token").val();
  $.ajax({
    url: "{!! url('mastersetpostingumhutangspdetail') !!}",
    type: "get",
    async: false,
    data: {
      _token : _token,
      kode
    },
    success: function(res) {

      console.log(res)
      document.getElementById("input_kode").value = res[0].Perkiraan
      perkiraanTemp = res[0].Perkiraan

    }})
    $("#form").modal('toggle')
}

function buttonDelete (kode) {
  console.log(kode)
  let _token = $("#_token").val();


  alertify.confirm('Hapus Perkiraan', 'Apakah yakin ingin menghapus Perkiraan Posting UM Hutang ' + kode + ' ?',
      function() {
        console.log('yes')

        $.ajax({
          url: "{!! url('mastersetpostingumhutangspdelete') !!}",
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
              alertify.success("Perkiraan Posting Kas telah dihapus");

            }
          }})
      }
    ,function(){
      console.log('no')
    });


}

let perkiraanTemp = ''

function submitEdit () {

  let _token = $("#_token").val();
  let kode = $("#input_kode").val();

  if (!kode) {
    alertify.warning("Kode harus diisi");
    return
  }

  $.ajax({
    url: "{!! url('mastersetpostingumhutangspedit') !!}",
    type: "post",
    async: false,
    data: {
      _token : _token,
      kode,
      kodeLama: perkiraanTemp
    },
    success: function(res) {
      if (res != 1) {
        alertify.warning(res);
      }  
      else 
      {
        console.log(res ,'!')
        alertify.success("Data Posting Kas telah diedit");
        loadAll()
        $("#form").modal('toggle')
      }
    }})
}

function submitAdd () {

  let _token = $("#_token").val();
  let kode = $("#input_kode").val();

  if (!kode) {
    alertify.warning("Kode harus diisi");
    return
  }

  $.ajax({
    url: "{!! url('mastersetpostingumhutangspadd') !!}",
    type: "post",
    async: false,
    data: {
      _token : _token,
      kode
    },
    success: function(res) {

      if (res != 1) {
        alertify.warning(res);
      }  else {
        console.log(res ,'!')
        // $("#formEdit").modal('toggle')
        alertify.success("Data Posting Kas telah ditambah");
        loadAll()
        $("#form").modal('hide')
      }

    }})

  // console.log(kodearea, namaarea)
}

function backToSetPosting() {
  window.location.href = "{{ ('mastersetposting') }}";
}

function buttonSelectPerkiraan () {
  loadSelectPerkiraan()
  $("#formSelectPerkiraan").modal('toggle')
}

function loadSelectPerkiraan() {
  console.log('asd');
  let _token = $("#_token").val();

  $('#tabelAktivaSelectPerkiraan').DataTable().destroy();

  $.ajax({
    url: "{!! url('mastersetpostingumhutangloadperkiraan') !!}",
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
        <button class="btn btn-primary btn-sm" type="button" onclick="buttonPilihPerkiraan('${item.Perkiraan}')"><i class='bi bi-plus'></i></button>
      </td>
      <td>${item.Perkiraan}</td>
      <td>${item.Keterangan}</td>
    </tr>`;
  });

  document.getElementById("tabel_dataAktivaSelectPerkiraan").innerHTML = rowTable;
  $("#tabelAktivaSelectPerkiraan").DataTable({
    "lengthChange": true,
    "paging": true,
  });
}

function buttonPilihPerkiraan(selectedPerkiraan) {
  $("#input_kode").val(selectedPerkiraan);
  $("#formSelectPerkiraan").modal("hide");

}

function buttonEditSelectPerkiraan () {
  loadEditSelectPerkiraan()
  $("#formEditSelectPerkiraan").modal('toggle')
}

function loadEditSelectPerkiraan() {
  console.log('asd');
  let _token = $("#_token").val();

  $('#tabelEditAktivaSelectPerkiraan').DataTable().destroy();

  $.ajax({
    url: "{!! url('mastersetpostingumhutangloadperkiraan') !!}",
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
        <button class="btn btn-primary btn-sm" type="button" onclick="buttonEditPilihPerkiraan('${item.Perkiraan}')"><i class='bi bi-plus'></i></button>
      </td>
      <td>${item.Perkiraan}</td>
      <td>${item.Keterangan}</td>
    </tr>`;
  });

  document.getElementById("tabel_dataEditAktivaSelectPerkiraan").innerHTML = rowTable;
  $("#tabelEditAktivaSelectPerkiraan").DataTable({
    "lengthChange": true,
    "paging": true,
  });
}

function buttonEditPilihPerkiraan(selectedPerkiraan) {
  $("#input_edit_kode").val(selectedPerkiraan);
  $("#formEditSelectPerkiraan").modal("hide");

}

window.onload = function() {
loadAll();
}

</script>




@endsection
