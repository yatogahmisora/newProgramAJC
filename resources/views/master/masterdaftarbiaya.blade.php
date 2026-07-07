@extends('master.newmaster')
@section('buttons')

@endsection
@section('content')

<div class="container-fluid">

  <!-- <div id="qrcode"></div> -->
<div class="row mt-4">
      <div class="col-6 text-left">
        <h2 style="margin-top:-85px;">Master Daftar Biaya</h2>
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
          Add Daftar Biaya
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
                          <th scope="col">Kode Biaya</th>
                          <th scope="col">Keterangan</th>
                          <th scope="col">Perkiraan</th>

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
                  <label class="text-left">Kode Biaya</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_add_kode" placeholder="Kode Biaya">
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

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Perkiraan</label>
                </div>
              </div>
              <div class="col-8">
              
              <div class="input-group">
                  <input type="text" class="form-control" id="input_add_perkiraan" placeholder="Kode Cost" readonly>
                  <div class="input-group-append">
                      <button type="button" class="btn btn-primary btn-select" onclick="buttonSelectPerkiraan()">+</button>
                  </div>
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
                  <label class="text-left">Kode Biaya</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_edit_kode" placeholder="Kode Biaya" disabled>
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
                  <input type="text" class="form-control" id="input_edit_nama" placeholder="Keterangan">
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Perkiraan</label>
                </div>
              </div>
              <div class="col-8">
              
              <div class="input-group">
                  <input type="text" class="form-control" id="input_edit_perkiraan" placeholder="Kode Cost" readonly>
                  <div class="input-group-append">
                      <button type="button" class="btn btn-primary btn-select" onclick="buttonSelectPerkiraan()">+</button>
                  </div>
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

<!-- start modal perkiraan add -->
<div class="modal fade"  id="formPerkiraan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered"  role="document" style="max-width: 1000px">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Perkiraan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- <h1>Tes Modal</h1> -->

        <div class="container-fluid">
          <!-- <input type="hidden" name="noUrut" id="input_add_noUrut" value="" /> -->

          <div class="col-12" style="overflow:auto;">
            <div class="">

                  <table id="tabelPerkiraan" class="table table-bordered table-striped"  >
                    <thead id='theadCustom' class="text-center">
                      <tr>
                        <th scope="col">Actions</th>
                        <th scope="col">Perkiraan</th>
                        <th scope="col">Keterangan</th>

                      </tr>
                    </thead>


                    <tbody id="tabelData_perkiraan" class="text-left" >
                      @for ($i = 0; $i < count($listData); $i++)
                      <tr >

                        <td>{{ $listData[$i]->Perkiraan }}</td>
                        <td>{{ $listData[$i]->Keterangan }}</td>


                          <td class="text-center">
                            <!-- <button class="btn btn-warning btn-sm" type="button" onclick="" ><i class="bi bi-info-lg"></i></button> -->
                            <button class="btn btn-success btn-sm" type="button" onclick="buttonEdit('{{ $listData[$i]->Perkiraan }}')"><i class="bi bi-pen"></i></button>
                          </td>
                    </tr>
                    @endfor
                    </tbody>


                  </table>
            </div>
          </div>


    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal" >Batal</button>
  </div>
</div>
</div>
</div>
<!-- End modal perkiraan add -->


@endsection

@section('js')
<script type="text/javascript">

let dataRefresh = []

function loadAll () {
  console.log('asd')
  let _token = $("#_token").val();

  $('#tabel').DataTable().destroy();

  $.ajax({
    url: "{!! url('masterdaftarbiayaloadall') !!}",
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
      <button class="btn btn-success btn-sm hover-tooltip" type="button" onclick="buttonEdit('${item.Kodebiaya}')" data-tooltip="Edit Biaya">
        <i class="bi bi-pen"></i>
      </button>
      <button class="btn btn-danger btn-sm hover-tooltip" type="button" onclick="buttonDelete('${item.Kodebiaya}')" data-tooltip="Delete Biaya">
        <i class="bi bi-trash"></i>
      </button>
    </td>
    <td>${item.Kodebiaya}</td>
    <td>${item.Keterangan}</td>
    <td>${item.Perkiraan}</td>
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

  document.getElementById('input_add_kode').value = ''
  document.getElementById('input_add_nama').value = ''
  document.getElementById('input_add_perkiraan').value = ''

  $("#form").modal('toggle')

}

function buttonEdit (kode) {
  console.log(kode)
  let _token = $("#_token").val();
  $.ajax({
    url: "{!! url('masterdaftarbiayaspdetail') !!}",
    type: "get",
    async: false,
    data: {
      _token : _token,
      kode
    },
    success: function(res) {

      console.log(res)
      document.getElementById("input_edit_kode").value = res[0].Kodebiaya
      document.getElementById("input_edit_nama").value = res[0].Keterangan
      document.getElementById("input_edit_perkiraan").value = res[0].Perkiraan

    }})
    $("#formEdit").modal('toggle')
}

function buttonDelete (kode) {
  console.log(kode)
  let _token = $("#_token").val();


  alertify.confirm('Hapus Area', 'Apakah yakin ingin menghapus Data ' + kode + ' ?',
      function() {
        console.log('yes')

        $.ajax({
          url: "{!! url('masterdaftarbiayaspdelete') !!}",
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
              alertify.success("Data Biaya telah dihapus");

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
  let perkiraan = $("#input_edit_perkiraan").val();

  console.log(kode,nama,perkiraan)
  if (!kode) {
    alertify.warning("Kode harus diisi");
    return
  }

  if (!nama) {
    alertify.warning("Keterangan harus diisi");
    return
  }

  if (!perkiraan) {
    alertify.warning("Perkiraan harus diisi");
    return
  }

  $.ajax({
    url: "{!! url('masterdaftarbiayaspedit') !!}",
    type: "post",
    async: false,
    data: {
      _token : _token,
      kode,
      nama,
      perkiraan
    },
    success: function(res) {

      if (res != 1) {
        alertify.warning(res);
      }  else {
        console.log(res ,'!')
        // $("#formEdit").modal('toggle')
        alertify.success("Data Biaya telah diedit");
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
  let perkiraan = $("#input_add_perkiraan").val();

  if (!kode) {
    alertify.warning("Kode harus diisi");
    return
  }

  if (!nama) {
    alertify.warning("Keterangan harus diisi");
    return
  }

  if (!perkiraan) {
    alertify.warning("Perkiraan harus diisi");
    return
  }

  $.ajax({
    url: "{!! url('masterdaftarbiayaspadd') !!}",
    type: "post",
    async: false,
    data: {
      _token : _token,
      kode,
      nama,
      perkiraan
    },
    success: function(res) {

      if (res != 1) {
        alertify.warning(res);
      }  else {
        console.log(res ,'!')
        // $("#formEdit").modal('toggle')
        alertify.success("Data Biaya telah ditambah");
        loadAll()
        $("#form").modal('toggle')
      }

    }})

  // console.log(kodearea, namaarea)
}

function buttonSelectPerkiraan (kode) {
  console.log(kode);

  $('#tabelPerkiraan').DataTable().destroy();

  let _token = $("#_token").val();
  $.ajax({
    url: "{!! url('masterdaftarbiayaselectperkiraan') !!}",
    type: "get",
    async: false,
    data: {
      _token: _token,
      kode: kode // Make sure 'kode' is passed correctly
    },
    success: function (dataRefresh) {
      let rowTable = "";

      dataRefresh.forEach((item, i) => {
        rowTable += `<tr>
          <td class="text-center">
            <button class="btn btn-primary btn-sm" type="button" onclick="buttonSelect('${item.perkiraan}')"><i class='bi bi-plus'></i></button>
          </td>
          <td>${item.perkiraan}</td>
          <td>${item.keterangan}</td>
        </tr>`;
      });

      $("#tabelData_perkiraan").html(rowTable); // Update the table content

      $("#tabelPerkiraan").DataTable({
        "lengthChange": false,
        "paging": true,
        "searching":true
      });

      // Close the modal if needed
      $("#formPerkiraan").modal("toggle");
    }
  });
}

function buttonSelect(selectedPerkiraan) {
  // Get the input element by ID
  document.getElementById('input_add_perkiraan').value = selectedPerkiraan
  document.getElementById('input_edit_perkiraan').value = selectedPerkiraan

  $("#formPerkiraan").modal("hide");
}

window.onload = function(){
  loadAll();
};

</script>




@endsection
