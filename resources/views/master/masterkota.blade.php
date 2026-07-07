@extends('master.newmaster')
@section('buttons')

@endsection
@section('content')
<div class="container-fluid">

  <!-- <div id="qrcode"></div> -->
<div class="row mt-4">
      <div class="col-6 text-left">
        <h2 style="margin-top:-85px;">Master Kota</h2>
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
          Add Kota
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
<!-- <button onclick="loadAll()">tes</button> -->
</div>

<div id="printContainer" style="display:none">

</div>
<div id="contentContainer" class="container-fluid" style="max-width: 900px; margin-top:-95px;">
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
                          <th scope="col">Kode Kota</th>
                          <th scope="col">Nama Kota</th>
                          <th scope="col">Kode Area</th>

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
                  <label class="text-left">Kode Kota</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_add_kodekota" placeholder="Kode Kota">
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Nama Kota</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_add_namakota" placeholder="Nama Kota">
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Kode Area</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <!-- <input type="text" class="form-control" id="input_add_namaarea" placeholder="Nama Area"> -->
                  <select id="input_add_kodearea" class="form-control" aria-label="Default select example">
                    <option selected value="0">Pilih Area</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
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





<!-- start modal edit -->
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
          <!-- <input type="hidden" name="noUrut" id="input_add_noUrut" value="" /> -->

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Kode kota</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_edit_kodekota" placeholder="Kode Kota" disabled>
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Nama Kota</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_edit_namakota" placeholder="Nama Kota">
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Kode Area</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <!-- <input type="text" class="form-control" id="input_add_namaarea" placeholder="Nama Area"> -->
                  <select id="input_edit_kodearea" class="form-control" aria-label="Default select example">
                    <option selected value="0">Pilih Area</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
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
<!-- End modal edit-->

@endsection

@section('js')
<script type="text/javascript">

let dataRefresh = []

function loadAll () {
  let _token = $("#_token").val();


  $('#tabel').DataTable().destroy();

  $.ajax({
    url: "{!! url('masterkotaloadall') !!}",
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
      <button class="btn btn-success btn-sm hover-tooltip" type="button" onclick="buttonEdit('${item.KodeKota}')" data-tooltip="Edit Kota">
        <i class="bi bi-pen"></i>
      </button>
      <button class="btn btn-danger btn-sm hover-tooltip" type="button" onclick="buttonDelete('${item.KodeKota}')" data-tooltip="Delete Kota">
        <i class="bi bi-trash"></i>
      </button>
    </td>
    <td>${item.KodeKota}</td>
    <td>${item.NamaKota}</td>
    <td>${item.KodeArea}</td>
    </tr>`
  });

  document.getElementById("tabel_data").innerHTML = rowTable
  $("#tabel").DataTable({
    "lengthChange": false,
      "paging": false ,
    });

}

function buttonAdd () {

  $.ajax({
    url: "{!! url('masterkotalistarea') !!}",
    type: "get",
    async: false,
    data: {
    },
    success: function(res) {

      console.log(res)
      let rowTable = `<option selected value=0>Pilih Area</option>`
      res.forEach((item, i) => {
        rowTable += `
          <option value="${item.KODEAREA}">${item.NAMAAREA}</option>
        `
      });

      document.getElementById("input_add_kodearea").innerHTML = rowTable
    }})



  $("#form").modal('toggle')

}

function buttonEdit (kodekota) {
  console.log(kodekota)
  let _token = $("#_token").val();
  let tempkodearea = ""

  $.ajax({
    url: "{!! url('masterkotaspdetail') !!}",
    type: "post",
    async: false,
    data: {
      _token : _token,
      kodekota
    },
    success: function(res) {

      console.log(res)
      // document.getElementById("input_edit_kodearea").value = res[0].KodeArea
      document.getElementById("input_edit_namakota").value = res[0].NamaKota
      document.getElementById("input_edit_kodekota").value = res[0].KodeKota
      tempkodearea = res[0].KodeArea

    }})

    console.log(tempkodearea , '>>>>')

    $.ajax({
      url: "{!! url('masterkotalistarea') !!}",
      type: "get",
      async: false,
      data: {
      },
      success: function(res) {

        console.log(res)
        let rowTable = ``
        res.forEach((item, i) => {
          rowTable += `
            <option value="${item.KODEAREA}">${item.NAMAAREA}</option>
          `
        });

        document.getElementById("input_edit_kodearea").innerHTML = rowTable

      }})
      document.getElementById("input_edit_kodearea").value = tempkodearea

    $("#formEdit").modal('toggle')
}

function buttonDelete (kodekota) {
  console.log(kodekota)
  let _token = $("#_token").val();


  alertify.confirm('Hapus Kota', 'Apakah yakin ingin menghapus Kota ' + kodekota + ' ?',
      function() {
        console.log('yes')

        $.ajax({
          url: "{!! url('masterkotaspdelete') !!}",
          type: "post",
          async: false,
          data: {
            _token : _token,
            kodekota
          },
          success: function(res) {
            if (res != 1) {
              alertify.warning(res);
            } else {
              console.log(res)
              loadAll()
              alertify.success("Kota telah dihapus");



            
          }
          }})
      }
    ,function(){
      console.log('no')
    });


}

function submitEdit () {

  let _token = $("#_token").val();
  let kodearea = $("#input_edit_kodearea").val();
  let namakota = $("#input_edit_namakota").val();
  let kodekota = $("#input_edit_kodekota").val();

  console.log(kodearea,namakota, kodekota)
  if (!kodearea) {
    alertify.warning("Kode area harus diisi");
    return
  }

  if (!namakota) {
    alertify.warning("Nama kota harus diisi");
    return
  }

  if (!kodekota) {
    alertify.warning("Kode kota harus diisi");
    return
  }

  $.ajax({
    url: "{!! url('masterkotaspedit') !!}",
    type: "post",
    async: false,
    data: {
      _token : _token,
      kodearea,
      namakota,
      kodekota
    },
    success: function(res) {

      if (res != 1) {
        alertify.warning(res);
      }  else {
        console.log(res ,'!')
        // $("#formEdit").modal('toggle')
        alertify.success("Kota telah diedit");
        loadAll()
        $("#formEdit").modal('toggle')
      }

    }})

}

function submitAdd () {

  let _token = $("#_token").val();
  let kodearea = $("#input_add_kodearea").val();
  let namakota = $("#input_add_namakota").val();
  let kodekota = $("#input_add_kodekota").val();

  console.log(kodekota,namakota,kodearea)
  // return
  if (!kodekota) {
    alertify.warning("Kode kota harus diisi");
    return
  }
  if (!namakota) {
    alertify.warning("Nama kota harus diisi");
    return
  }
  if (kodearea == 0) {
    alertify.warning("Kode area harus diisi");
    return
  }





  $.ajax({
    url: "{!! url('masterkotaspadd') !!}",
    type: "post",
    async: false,
    data: {
      _token : _token,
      kodearea,
      namakota,
      kodekota
    },
    success: function(res) {

      if (res != 1) {
        alertify.warning(res);
      }  else {
        console.log(res ,'!')
        // $("#formEdit").modal('toggle')
        alertify.success("Kota telah ditambah");
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
