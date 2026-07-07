@extends('master.newmaster')
@section('buttons')

@endsection
@section('content')
<div class="container-fluid">
  

<div class="row mt-4">
      <div class="col-6 text-left">
        <h2 style="margin-top:-85px;">Master Gudang</h2>
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
          Add Gudang
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
                          <th scope="col">Kode Gudang</th>
                          <th scope="col">Nama Gudang</th>
                          <th scope="col">Sample</th>

                        </tr>
                      </thead>


                      <tbody id="tabel_data" class="text-left" >
                        {{-- @for ($i = 0; $i < count($listData); $i++)
                        <tr>
                          <td class="text-center">
                            <button class="btn btn-success btn-sm" type="button" 
                                    data-bs-toggle="tooltip" 
                                    data-bs-placement="top" 
                                    title="Edit Gudang" 
                                    onclick="buttonEdit('{{ $listData[$i]->KODEGDG }}')">
                              <i class="bi bi-pen"></i>
                            </button>
                            <button class="btn btn-danger btn-sm" type="button" 
                                    data-bs-toggle="tooltip" 
                                    data-bs-placement="top" 
                                    title="Delete Gudang" 
                                    onclick="buttonEdit('{{ $listData[$i]->KODEGDG }}')">
                              <i class="bi bi-trash"></i>
                            </button>
                          </td>
                          <td>{{ $listData[$i]->KODEGDG }}</td>
                          <td>{{ $listData[$i]->NAMA }}</td>
                          @if ($listData[$i]->istakeinout == 0)
                            <td class="text-danger text-center"><i class="bi bi-x" style="-webkit-text-stroke-width: 2px;"></i></td>
                          @elseif ($listData[$i]->istakeinout == 1)
                            <td class="text-success text-center"><i class="bi bi-check2" style="-webkit-text-stroke-width: 2px;"></i></td>
                          @endif


                      </tr>
                      @endfor --}}
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
              <div class="col-3 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Kode Gdg</label>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_add_kode" placeholder="Kode Gdg">
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-3 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Nama Gdg</label>
                </div>
              </div>
              <div class="col-9">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_add_nama" placeholder="Nama Gdg">
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-3 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Alamat</label>
                </div>
              </div>
              <div class="col-9">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_add_alamat" placeholder="Alamat">
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-3">

              </div>

              <div class="col-2">
                <div class="form-group ">
                <input type="checkbox" id="input_add_issample" name="" value="">
                <span class="text-left">Sample</span>
              </div>
              </div>

              <div class="col-2">
                <div class="form-group ">
                <input type="checkbox" id="input_add_ispusat" name="" value="">
                <span class="text-left">Pusat</span>
              </div>
              </div>

              <div class="col-2">
                <div class="form-group ">
                <input type="checkbox" id="input_add_issampit" name="" value="">
                <span class="text-left">Sampit</span>
              </div>
              </div>

              <div class="col-2">
                <div class="form-group ">
                <input type="checkbox" id="input_add_isaktif" name="" value="">
                <span class="text-left">Aktif</span>
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
          <!-- <input type="hidden" name="noUrut" id="input_add_noUrut" value="" /> -->

            <div class="row">
              <div class="col-3 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Kode Gdg</label>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <input type="text" class="form-control" disabled id="input_edit_kode" placeholder="Kode Gdg">
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-3 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Nama Gdg</label>
                </div>
              </div>
              <div class="col-9">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_edit_nama" placeholder="Nama Gdg">
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-3 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Alamat</label>
                </div>
              </div>
              <div class="col-9">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_edit_alamat" placeholder="Alamat">
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-3">

              </div>

              <div class="col-2">
                <div class="form-group ">
                <input type="checkbox" id="input_edit_issample" name="" value="">
                <span class="text-left">Sample</span>
              </div>
              </div>

              <div class="col-2">
                <div class="form-group ">
                <input type="checkbox" id="input_edit_ispusat" name="" value="">
                <span class="text-left">Pusat</span>
              </div>
              </div>

              <div class="col-2">
                <div class="form-group ">
                <input type="checkbox" id="input_edit_issampit" name="" value="">
                <span class="text-left">Sampit</span>
              </div>
              </div>

              
              <div class="col-2">
                <div class="form-group ">
                <input type="checkbox" id="input_edit_isaktif" name="" value="">
                <span class="text-left">Aktif</span>
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
  console.log('asd')
  let _token = $("#_token").val();
  
  $('#tabel').DataTable().destroy();

  $.ajax({
    url: "{!! url('mastergudangloadall') !!}",
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
      <button class="btn btn-success btn-sm hover-tooltip" data-tooltip='Edit Gudang' type="button" onclick="buttonEdit('${item.KODEGDG}')"><i class="bi bi-pen"></i></button>
      <button class="btn btn-danger btn-sm hover-tooltip" data-tooltip='Delete Gudang' type="button" onclick="buttonDelete('${item.KODEGDG}')"><i class="bi bi-trash"></i></button>
    </td>
    <td>${item.KODEGDG}</td>
    <td>${item.NAMA}</td>`

    if (item.istakeinout == 0 ) {
      rowTable += `<td class="text-danger text-center"><i class="bi bi-x" style="-webkit-text-stroke-width: 2px;"></i></td>`
    } else {
      rowTable += `<td class="text-success text-center"><i class="bi bi-check2" style="-webkit-text-stroke-width: 2px;"></i></td>`
    }
  });



  document.getElementById("tabel_data").innerHTML = rowTable
  $("#tabel").DataTable({
    "lengthChange": false,
      "paging": false ,
    });

}

function buttonAdd () {


  $("#form").modal('toggle')
  
  document.getElementById('input_add_kode').value = ''
  document.getElementById('input_add_nama').value = ''
  document.getElementById('input_add_alamat').value = ''
  document.getElementById('input_add_issample').value = 0
  document.getElementById('input_add_ispusat').value = 0
  document.getElementById('input_add_issampit').value = 0
}

function buttonEdit (kode) {
  console.log(kode)
  let _token = $("#_token").val();
  $.ajax({
    url: "{!! url('mastergudangspdetail') !!}",
    type: "get",
    async: false,
    data: {
      _token : _token,
      kode
    },
    success: function(res) {

      console.log(res)
      document.getElementById("input_edit_kode").value = res[0].KODEGDG
      document.getElementById("input_edit_nama").value = res[0].NAMA
      document.getElementById("input_edit_alamat").value = res[0].Alamat


      if (Number(res[0].istakeinout)) {
        document.getElementById("input_edit_issample").checked = true
      } else {
        document.getElementById("input_edit_issample").checked = false
      }
      if (Number(res[0].pSampit)) {
        document.getElementById("input_edit_issampit").checked = true
      } else {
        document.getElementById("input_edit_issampit").checked = false
      }
      if (Number(res[0].pPusat)) {
        document.getElementById("input_edit_ispusat").checked = true
      } else {
        document.getElementById("input_edit_ispusat").checked = false
      }
      
      if (Number(res[0].IsAktif)) {
        document.getElementById("input_edit_isaktif").checked = true
      } else {
        document.getElementById("input_edit_isaktif").checked = false
      }

    }})


    $("#formEdit").modal('toggle')
}

function buttonDelete (kode) {
  console.log(kode)
  let _token = $("#_token").val();


  alertify.confirm('Hapus Gudang', 'Apakah yakin ingin menghapus Gudang ' + kode + ' ?',
      function() {
        console.log('yes')

        $.ajax({
          url: "{!! url('mastergudangspdelete') !!}",
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
              alertify.success("Gudang telah dihapus");

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
  let nama = $("#input_edit_nama").val();
  let alamat = $("#input_edit_alamat").val();
  console.log(kode,nama)
  let issample = 0
  let issampit = 0
  let ispusat = 0
  let isAktif = 0

  if (document.getElementById("input_edit_issample").checked) {
    issample= 1
  }
  if (document.getElementById("input_edit_issampit").checked) {
    issampit= 1
  }
  if (document.getElementById("input_edit_ispusat").checked) {
    ispusat= 1
  }
  if (document.getElementById("input_edit_isaktif").checked) {
    isAktif= 1
  }

  if (!kode) {
    alertify.warning("Kode  harus diisi");
    return
  }

  if (!nama) {
    alertify.warning("Nama  harus diisi");
    return
  }
  if (!alamat) {
    alertify.warning("Alamat  harus diisi");
    return
  }

  $.ajax({
    url: "{!! url('mastergudangspedit') !!}",
    type: "post",
    async: false,
    data: {
      _token : _token,
      kode,
      nama,
      alamat,
      issample,
      ispusat,
      issampit,
      isAktif
    },
    success: function(res) {

      if (res != 1) {
        alertify.warning(res);
      }  else {
        console.log(res ,'!')
        // $("#formEdit").modal('toggle')
        alertify.success("Gudang telah diedit");
        loadAll()
        $("#formEdit").modal('toggle')
      }

    }})

}

function submitAdd () {

  let _token = $("#_token").val();
  let kode = $("#input_add_kode").val();
  let nama = $("#input_add_nama").val();
  let alamat = $("#input_add_alamat").val();
  let issample = 0
  let issampit = 0
  let ispusat = 0
  let isAktif = 0

  if (document.getElementById("input_add_issample").checked) {
    issample= 1
  }
  if (document.getElementById("input_add_issampit").checked) {
    issampit= 1
  }
  if (document.getElementById("input_add_ispusat").checked) {
    ispusat= 1
  }
  
  if (document.getElementById("input_add_isaktif").checked) {
    isAktif= 1
  }

  if (!kode) {
    alertify.warning("Kode harus diisi");
    return
  }

  if (!nama) {
    alertify.warning("Nama harus diisi");
    return
  }
  if (!alamat) {
    alertify.warning("Alamat harus diisi");
    return
  }

  $.ajax({
    url: "{!! url('mastergudangspadd') !!}",
    type: "post",
    async: false,
    data: {
      _token : _token,
      kode,
      nama,
      alamat,
      issample,
      ispusat,
      issampit,
      isAktif
    },
    success: function(res) {

      if (res != 1) {
        alertify.warning(res);
      }  else {
        console.log(res ,'!')
        // $("#formEdit").modal('toggle')
        alertify.success("Data Gudang telah ditambah");
        loadAll()
        $("#form").modal('toggle')
      }

    }})

  // console.log(kodearea, namaarea)
}

window.onload = function(){
  loadAll();
}

</script>




@endsection
