@extends('master.newmaster')
@section('buttons')

@endsection
@section('content')

{{-- end tampilan search bar 1 --}}
<div class="container-fluid">

  <!-- <div id="qrcode"></div> -->
  <div class="row mt-4">
      <div class="col-6 text-left">
        <h2 style="margin-top:-85px;">Master Supplier Bank Account</h2>
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
          Add Valas
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

<div id="printContainer" style="display:none">

</div>
<div id="contentContainer" class="container-fluid" style="max-width: 1800px; margin-top:-95px">
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
                      <thead id='theadCustom' class="text-center text-white">
                        <tr>
                          <th scope="col">Actions</th>
                          <th scope="col">Kode Supplier</th>
                          <th scope="col">Nama Supplier</th>
                          <th scope="col">Bank</th>
                          <th scope="col">No. Acc</th>
                          <th scope="col">ATN</th>
                          <th scope="col">Bank Temp</th>
                          <th scope="col">No ACC Temp</th>
                          <th scope="col">AN Temp</th>

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

            <div class="row mb-1">
              <div class="col-4 text-left">
                <div class="form-group text-left mb-1">
                  <label class="text-left">Kode Valas</label>
                </div>
              </div>
              <div class="col-8 mb-1">
                <div class="form-group mb-1">
                  <input type="text" class="form-control" id="input_add_kode" placeholder="Kode Valas">
                </div>
              </div>

            </div>

            <div class="row mb-1">
              <div class="col-4 text-left">
                <div class="form-group text-left mb-1">
                  <label class="text-left">Nama Valas</label>
                </div>
              </div>
              <div class="col-8 mb-1">
                <div class="form-group mb-1">
                  <input type="text" class="form-control" id="input_add_nama" placeholder="Nama Valas">
                </div>
              </div>

            </div>

            <div class="row mb-1">
              <div class="col-4 text-left">
                <div class="form-group text-left mb-1">
                  <label class="text-left">Kurs</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group mb-1">
                  <input type="text" class="form-control text-right" id="input_add_kurs" 
                    value="0.00" 
                    style="font-variant-numeric: tabular-nums;" 
                    oninput="formatNumber(this)">
                </div>
              </div>

            </div>

            <div class="row mb-1">
              <div class="col-4 text-left">
                <div class="form-group text-left mb-1">
                  <label class="text-left">Simbol</label>
                </div>
              </div>
              <div class="col-8 mb-1">
                <div class="form-group mb-1">
                  <input type="text" class="form-control" id="input_add_simbol" placeholder="Simbol">
                </div>
              </div>

            </div>

    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal" >Batal</button>
    <button type="button" class="btn btn-primary" onclick="submitAdd()">Submit</button>
  </div>
</div>
</div>
</div>
<!-- End modal add-->

<!-- start modal add -->
<div class="modal fade"  id="formEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <input type="hidden" name="noUrut" id="input_edit_noUrut" value="" />

            <div class="row mb-1">
              <div class="col-4 text-left">
                <div class="form-group text-left mb-1">
                  <label class="text-left">Kode Supplier</label>
                </div>
              </div>
              <div class="col-8 mb-1">
                <div class="form-group mb-1">
                  <input type="text" class="form-control" id="input_edit_kode"disabled>
                </div>
              </div>
            </div>

            <div class="row mb-1">
              <div class="col-4 text-left">
                <div class="form-group text-left mb-1">
                  <label class="text-left">Bank Temp</label>
                </div>
              </div>
              <div class="col-8 mb-1">
                <div class="form-group mb-1">
                  <input type="text" class="form-control" id="input_edit_bankTemp">
                </div>
              </div>
            </div>

            <div class="row mb-1">
              <div class="col-4 text-left">
                <div class="form-group text-left mb-1">
                  <label class="text-left">No. ACC Temp</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group mb-1">
                  <input type="text" class="form-control" id="input_edit_noAccTemp">
                </div>
              </div>

            </div>

            <div class="row mb-1">
              <div class="col-4 text-left">
                <div class="form-group text-left mb-1">
                  <label class="text-left">ATN Temp</label>
                </div>
              </div>
              <div class="col-8 mb-1">
                <div class="form-group mb-1">
                  <input type="text" class="form-control" id="input_edit_atnTemp">
                </div>
              </div>

            </div>

    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal" >Batal</button>
    <button type="button" class="btn btn-primary" onclick="submitEdit()">Submit</button>
  </div>
</div>
</div>
</div>
<!-- End modal add-->

@endsection

@section('js')
<script type="text/javascript">

let dataRefresh = []

function loadAll () {
  let _token = $("#_token").val();
  $('#tabel').DataTable().destroy();

  $.ajax({
    url: "{!! url('mastersupplierbankloadall') !!}",
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

    rowTable += `<tr class='theadCustom'>
    <td style="white-space:nowrap;" class='text-center'>
      <button class="btn btn-primary btn-sm hover-tooltip" type="button" onclick="buttonUpdateBank('${item.KODECUSTSUPP}')" data-tooltip="Update Bank Acc">
            <i class="bi bi-send"></i>
          </button>
      <button class="btn btn-success btn-sm hover-tooltip" type="button" onclick="buttonEdit('${item.KODECUSTSUPP}')" data-tooltip="Edit Bank Acc">
            <i class="bi bi-pen"></i>
          </button>
      <button class="btn btn-danger btn-sm hover-tooltip" type="button" onclick="buttonDelete('${item.KODECUSTSUPP}')" data-tooltip="Delete Bank Acc">
            <i class="bi bi-trash"></i>
          </button>
    </td>
    <td>${item.KODECUSTSUPP || ''}</td>
    <td>${item.NAMACUSTSUPP || ''}</td>
    <td>${item.bank || ''}</td>
    <td>${item.NoAcc || ''}</td>
    <td>${item.ATN || ''}</td>
    <td>${item.bankTemp || ''}</td>
    <td>${item.NoAccTemp || ''}</td>
    <td>${item.ATNTemp || ''}</td>
    </tr>`

  });

  document.getElementById("tabel_data").innerHTML = rowTable
  $("#tabel").DataTable({
    "lengthChange": false,
      "paging": false
    });

}

function buttonAdd () {
  document.getElementById("input_add_kode").value = ""
  document.getElementById("input_add_nama").value = ""
  document.getElementById("input_add_kurs").value = ""
  document.getElementById("input_add_simbol").value = ""

  $("#form").modal('toggle')

}

function buttonEdit (kode) {
  console.log(kode)
  let _token = $("#_token").val();
  $.ajax({
    url: "{!! url('mastersupplierbankspdetail') !!}",
    type: "get",
    async: false,
    data: {
      _token : _token,
      kode
    },
    success: function(res) {

      console.log(res)
      document.getElementById("input_edit_kode").value = res[0].KodeCustSupp
      document.getElementById("input_edit_bankTemp").value = res[0].BankTemp
      document.getElementById("input_edit_noAccTemp").value = res[0].NoaccTemp
      document.getElementById("input_edit_atnTemp").value = res[0].ATNTemp

    
    }})
    $("#formEdit").modal('toggle')
}


function buttonDelete (kode) {
  console.log(kode)
  let _token = $("#_token").val();


  alertify.confirm('Hapus Cust SUpp', 'Apakah yakin ingin menghapus Cust Supp ' + kode + ' ?',
      function() {
        console.log('yes')

        $.ajax({
          url: "{!! url('mastersupplierbankspdelete') !!}",
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
              alertify.success("Data Cust Supp telah dihapus");

            }
          }})
      }
    ,function(){
      console.log('no')
    });


}

function buttonUpdateBank (kode) {
  console.log(kode)
  let _token = $("#_token").val();

  alertify.confirm('Update Bank Account', 'Update Bank Account ' + kode + ' ?',
      function() {
        console.log('yes')

        $.ajax({
          url: "{!! url('mastersupplierbankspupdate') !!}",
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
              alertify.success("Data telah di-update");

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
  let bankTemp = $("#input_edit_bankTemp").val();
  let noAccTemp = $("#input_edit_noAccTemp").val();
  let atnTemp = $("#input_edit_atnTemp").val();

  $.ajax({
    url: "{!! url('mastersupplierbankspedit') !!}",
    type: "post",
    async: false,
    data: {
      _token : _token,
      kode,
      bankTemp,
      noAccTemp,
      atnTemp
    },
    success: function(res) {

      if (res != 1) {
        alertify.warning(res);
      }  else {
        console.log(res ,'!')
        // $("#formEdit").modal('toggle')
        alertify.success("Data Supplier Bank Acc. telah diedit");
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
  let kurs = parseFloat(($("#input_add_kurs").val() || 0).toString().replace(/,/g, '')) || 0;
  let simbol = $("#input_add_simbol").val();

  if (!kode) {
    alertify.warning("Kode harus diisi");
    return
  }

  if (!nama) {
    alertify.warning("Nama harus diisi");
    return
  }

  if (!kurs) {
    alertify.warning("Nama harus diisi");
    return
  }

  if (!simbol) {
    alertify.warning("Nama harus diisi");
    return
  }

  $.ajax({
    url: "{!! url('mastervalasspadd') !!}",
    type: "post",
    async: false,
    data: {
      _token : _token,
      kode,
      nama,
      kurs,
      simbol
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

}

window.onload = function(){
  loadAll();
};

</script>



@endsection
