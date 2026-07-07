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
          Add Posting Piutang
        </button>
      </div>
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
              <div class="">

                    <table id="tabel" class="table table-bordered table-striped"  >
                      <thead id='theadCustom' class="text-center">
                        <tr>
                          <th scope="col">Actions</th>
                          <th scope="col">Perkiraan</th>
                          <th scope="col">Keterangan</th>
                          <th scope="col">Kas dan Bank?</th>

                        </tr>
                      </thead>


                      <tbody id="tabel_data" class="text-left" >
                      </tbody>

                    </table>
              </div>
            </div>
          </div>
</div>


<!-- start modal add -->
<div class="modal fade"  id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered"  role="document" style="max-width: 550px">
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
                  <label class="text-left">Perkiraan</label>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_add_kode" disabled>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                    <button type="button" class="btn btn-primary btn-lg " style="height: 30px; " onclick="buttonSelectPerkiraan()"  >Select</button>
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Kas dan Bank?</label>
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                    <input type="checkbox" id="input_add_nama" value="">
                </select>
                </div>
              </div>

              
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Uang Muka?</label>
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                    <input type="checkbox" id="input_add_uangMuka" value="">
                </select>
                </div>
              </div>

            </div>

            <div class="row">

            </div>


    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal" >Batal</button>
    <button type="button" class="btn btn-primary" onclick="submitAdd()">Submit Add</button>
  </div>
</div>
</div>
</div>
<!-- End modal add-->

<!-- start modal edit -->
<div class="modal fade"  id="formEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered"  role="document" style="max-width: 550px">
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
          <input type="hidden" name="noUrut" id="input_add_noUrut" value="" />

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Perkiraan</label>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_edit_kode" disabled>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                    <button type="button" class="btn btn-primary btn-lg " style="height: 30px; " onclick="buttonEditSelectPerkiraan()"  >Select</button>
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Kas dan Bank?</label>
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                    <input type="checkbox" id="input_edit_nama" value="">
                </div>
              </div>

              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Uang Muka?</label>
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                    <input type="checkbox" id="input_edit_uangMuka" value="">
                </div>
              </div>

            </div>

    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal" >Batal</button>
    <button type="button" class="btn btn-primary" onclick="submitEdit()">Submit Edit</button>
  </div>
</div>
</div>
</div>
<!-- End modal edit-->

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
        <table id="tabelEditAktivaSelectPerkiraan" class="table table-bordered table-striped"  >
          <thead id ='theadCustom' class="text-center">
            <tr>
              <th scope="col">Actions</th>
              <th scope="col">Perkiraan</th>
              <th scope="col">Keterangan</th>

            </tr>
          </thead>

          <tbody id="tabel_dataEditAktivaSelectPerkiraan" class="text-left" >
            <tr>

              <td></td>
              <td></td>

                <td class="text-center">
                  <!-- <button class="btn btn-warning btn-sm" type="button" onclick="" ><i class="bi bi-info-lg"></i></button> -->
                  <button type="button" onclick="buttonEditPilihPerkiraan()"><i class="bi bi-pen">Select</i></button>
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
<!-- End modal edit aktiva select perkiraan-->



@endsection

@section('js')
<script type="text/javascript">

let dataRefresh = []

function loadAll () {
  console.log('asd')
  let _token = $("#_token").val();


  document.getElementById('judulPosting').innerHTML = 'Master Posting Piutang'
  $('#tabel').DataTable().destroy();

  $.ajax({
    url: "{!! url('mastersetpostingpiutangloadall') !!}",
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
    let statusCell = '';
    if (item.IsLokalorExim == 0) {
      statusCell = `<td class="text-danger text-center"><i class="bi bi-x" style="-webkit-text-stroke-width: 2px;"></i></td>`;
    } else {
      statusCell = `<td class="text-success text-center"><i class="bi bi-check2" style="-webkit-text-stroke-width: 2px;"></i></td>`;
    }
    let temp = ""

    rowTable += `<tr>
    <td class="text-center">
      <button class="btn btn-success btn-sm hover-tooltip" data-tooltip='Edit Posting Piutang' type="button" onclick="buttonEdit('${item.Perkiraan}')"><i class="bi bi-pen"></i></button>
      <button class="btn btn-danger btn-sm hover-tooltip" data-tooltip='Delete Posting Piutang' type="button" onclick="buttonDelete('${item.Perkiraan}')"><i class="bi bi-trash"></i></button>
    </td>
    <td>${item.Perkiraan}</td>
    <td>${item.keterangan}</td>
    ${statusCell}
    </tr>`
  });



  document.getElementById("tabel_data").innerHTML = rowTable
  $("#tabel").DataTable({
    "lengthChange": false,
      "paging": false ,
    });

}
//
function buttonAdd () {


  $("#form").modal('toggle')

}

let perkiraanTemp = ''

function buttonEdit (kode) {
  console.log(kode)
  let _token = $("#_token").val();
  $.ajax({
    url: "{!! url('mastersetpostingpiutangspdetail') !!}",
    type: "get",
    async: false,
    data: {
      _token : _token,
      kode
    },
    success: function(res) {

      console.log(res)
      document.getElementById("input_edit_kode").value = res[0].Perkiraan
      if (Number(res[0].IsLokalorExim)) {
        document.getElementById("input_edit_nama").checked = true
      } else {
        document.getElementById("input_edit_nama").checked = false
      }

      
      if (Number(res[0].IsUM)) {
        document.getElementById("input_edit_uangMuka").checked = true
      } else {
        document.getElementById("input_edit_uangMuka").checked = false
      }

      perkiraanTemp = res[0].Perkiraan

    }})
    $("#formEdit").modal('toggle')
}

function buttonDelete (kode) {
  console.log(kode)
  let _token = $("#_token").val();


  alertify.confirm('Hapus Posting Hutang', 'Apakah yakin ingin menghapus Perkiraan Posting Piutang ' + kode + ' ?',
      function() {
        console.log('yes')

        $.ajax({
          url: "{!! url('mastersetpostingpiutangspdelete') !!}",
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
              alertify.success("Perkiraan Posting Hutang telah dihapus");

            }
          }})
      }
    ,function(){
      console.log('no')
    });


}
//
function submitEdit () {

  let _token = $("#_token").val();
  let kode = $("#input_edit_kode").val();
  
    let nama = 0
  if (document.getElementById("input_edit_nama").checked) {
    nama = 1
  }

  let uangMuka = 0
  if (document.getElementById("input_edit_uangMuka").checked) {
    uangMuka = 1
  }

  if (!kode) {
    alertify.warning("Kode  harus diisi");
    return
  }

  $.ajax({
    url: "{!! url('mastersetpostingpiutangspedit') !!}",
    type: "post",
    async: false,
    data: {
      _token : _token,
      kode,
      nama,
      uangMuka,
      kodeLama : perkiraanTemp
    },
    success: function(res) {

      if (res != 1) {
        alertify.warning(res);
      }  else {
        console.log(res ,'!')
        alertify.success("Data Posting Hutang telah diedit");
        loadAll()
        $("#formEdit").modal('toggle')
      }

    }})

}



function submitAdd () {

  let _token = $("#_token").val();
  let kode = $("#input_add_kode").val();
  let nama = 0
  if (document.getElementById("input_add_nama").checked) {
    nama = 1
  }

  let uangMuka = 0
  if (document.getElementById("input_add_uangMuka").checked) {
    uangMuka = 1
  }
  

  if (!kode) {
    alertify.warning("Kode harus diisi");
    return
  }

  $.ajax({
    url: "{!! url('mastersetpostingpiutangspadd') !!}",
    type: "post",
    async: false,
    data: {
      _token : _token,
      kode,
      nama,
      uangMuka
    },
    success: function(res) {

      if (res != 1) {
        alertify.warning(res);
      }  else {
        console.log(res ,'!')
        // $("#formEdit").modal('toggle')
        alertify.success("Data Posting Hutang telah ditambah");
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
    url: "{!! url('mastersetpostingpiutangloadperkiraan') !!}",
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
        <button class="btn btn-primary btn-sm hover-tooltip" data-tooltip='Pilih Perkiraan' type="button" onclick="buttonPilihPerkiraan('${item.Perkiraan}')"><i class='bi bi-plus'></i></button>
      </td>
      <td>${item.Perkiraan}</td>
      <td>${item.Keterangan}</td>
    </tr>`;
  });

  document.getElementById("tabel_dataAktivaSelectPerkiraan").innerHTML = rowTable;
  $("#tabelAktivaSelectPerkiraan").DataTable({
    "lengthChange": false,
    "paging": false,
  });
}

function buttonPilihPerkiraan(selectedPerkiraan) {
  $("#input_add_kode").val(selectedPerkiraan);
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
    url: "{!! url('mastersetpostingpiutangloadperkiraan') !!}",
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
        
        <button class="btn btn-primary btn-sm hover-tooltip" data-tooltip='Pilih Perkiraan' type="button" onclick="buttonEditPilihPerkiraan('${item.Perkiraan}')"><i class='bi bi-plus'></i></button>
      
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

window.onload = function(){
  loadAll();
};

</script>




@endsection
