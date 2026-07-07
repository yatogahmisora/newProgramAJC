@extends('master.newmaster')
@section('buttons')

@endsection
@section('content')

<link rel="stylesheet" href="public/css/tabelCustom.css">

<div class="container-fluid">

  <!-- <div id="qrcode"></div> -->
<div class="row mt-4">
      <div class="col-6 text-left">
        <h2 style="margin-top:-85px;">Master Nilai Faktur Pajak</h2>
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
          Add Nilai Faktur Pajak
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
                          <th scope="col">Kode</th>
                          <th scope="col">No Seri</th>
                          <th scope="col">No Awal</th>
                          <th scope="col">No Akhir</th>
                          <th scope="col">Is Penuh?</th>

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
  <div class="modal-dialog modal-lg modal-dialog-centered"  role="document" style="max-width: 800px">
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
          <input type="hidden" name="noUrut" id="input_add_noUrut" value= />

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Kode Faktur Pajak</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_add_kode" placeholder="Kode Faktur Pajak"disabled>
                </div>
              </div>

            </div>

            <div class="row">
            <div class="col-4 text-left">
              <div class="form-group text-left">
                <label class="text-left">No. Seri</label>
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <input type="text" class="form-control" id="seri1" maxlength="3" placeholder="Seri 1">
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <input type="text" class="form-control" id="seri2" maxlength="2" placeholder="Seri 2">
              </div>
            </div>
            <div class="col-3">
              <div class="form-group">
                <input type="text" class="form-control" id="input_add_nama" placeholder="No. Seri" disabled>
              </div>
            </div>
          </div>

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">No Awal</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <input type="number" class="form-control" id="input_add_noawal" placeholder="No Awal">
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">No Akhir</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <input type="number" class="form-control" id="input_add_noakhir" placeholder="No Akhir">
                </div>
              </div>

            </div>

            <div class="row">
            <div class="col-4 text-left">
                <div class="form-group text-left">
                    <label class="text-left">Is Penuh?</label>
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                    <input type="checkbox" class="form-check-input" id="input_add_penuh">
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
                  <label class="text-left">Kode Faktur Pajak</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_edit_kode" placeholder="Kode Jenis" disabled>
                </div>
              </div>

            </div>

            <div class="row">
            <div class="col-4 text-left">
              <div class="form-group text-left">
                <label class="text-left">No. Seri</label>
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <input type="text" class="form-control" id="seri1edit" maxlength="3" placeholder="Seri 1">
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <input type="text" class="form-control" id="seri2edit" maxlength="2" placeholder="Seri 2">
              </div>
            </div>
            <div class="col-3">
              <div class="form-group">
                <input type="text" class="form-control" id="input_edit_nama" placeholder="No. Seri" disabled>
              </div>
            </div>
          </div>

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">No. Awal</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <input type="number" class="form-control" id="input_edit_noawal" placeholder="No Awal">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">No. Akhir</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <input type="number" class="form-control" id="input_edit_noakhir" placeholder="No Akhir">
                </div>
              </div>
            </div>

            <div class="row">
            <div class="col-4 text-left">
                <div class="form-group text-left">
                    <label class="text-left">Is Penuh?</label>
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                    <input type="checkbox" class="form-check-input" id="input_edit_penuh">
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
  console.log('asd')
  let _token = $("#_token").val();

  $('#tabel').DataTable().destroy();

  $.ajax({
    url: "{!! url('masternomorfakturpajakloadall') !!}",
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
      <button class="btn btn-success btn-sm hover-tooltip" data-tooltip='Edit No. Faktur Pajak' type="button" onclick="buttonEdit('${item.Kode}')"><i class="bi bi-pen"></i></button>
      <button class="btn btn-danger btn-sm hover-tooltip" data-tooltip='Delete No. Faktur Pajak' type="button" onclick="buttonDelete('${item.Kode}')"><i class="bi bi-trash"></i></button>
    </td>
    <td>${item.Kode}</td>
    <td>${item.NoSeri}</td>
    <td>${item.NoAwal}</td>
    <td>${item.NoAkhir}</td>
    <td class="text-center">
    <input type="checkbox" class="is-penuh-checkbox" data-kode="${item.Kode}" ${item.IsPenuh === 1 ? 'checked' : ''}>
    </td>

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

function buttonEdit(kode) {
  console.log(kode);
  let _token = $("#_token").val();
  $.ajax({
    url: "{!! url('masternomorfakturpajakspdetail') !!}",
    type: "get",
    async: false,
    data: {
      _token: _token,
      kode: kode
    },
    success: function (res) {
      console.log(res);
      document.getElementById("input_edit_kode").value = res[0].Kode;

      // Split the NoSeri into seri1 and seri2
      const noSeriParts = res[0].NoSeri.split('.');
      const seri1Value = noSeriParts[0].substring(0, 3);
      const seri2Value = noSeriParts[1].substring(0, 2);

      console.log(seri1Value);
      console.log(seri2Value);

      document.getElementById("seri1edit").value = seri1Value;
      document.getElementById("seri2edit").value = seri2Value;
      document.getElementById("input_edit_noawal").value = res[0].NoAwal;
      document.getElementById("input_edit_noakhir").value = res[0].NoAkhir;
      document.getElementById("input_edit_penuh").checked = res[0].IsPenuh === true;
    }
  });
  $("#formEdit").modal('toggle');
}


function buttonDelete (kode) {
  console.log(kode)
  let _token = $("#_token").val();


  alertify.confirm('Hapus Area', 'Apakah yakin ingin menghapus Jenis ' + kode + ' ?',
      function() {
        console.log('yes')

        $.ajax({
          url: "{!! url('masternomorfakturpajakspdelete') !!}",
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
              alertify.success("Jenis telah dihapus");

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
  let noawal = $("#input_edit_noawal").val();
  let noakhir = $("#input_edit_noakhir").val();
  const isPenuh = $('#input_edit_penuh').prop('checked') ? 1 : 0;

  console.log(kode,nama)
  if (!kode) {
    alertify.warning("Kode  harus diisi");
    return
  }

  if (!nama) {
    alertify.warning("Nama  harus diisi");
    return
  }

  if (!noawal) {
    alertify.warning("Nama  harus diisi");
    return
  }

  if (!noakhir) {
    alertify.warning("Nama  harus diisi");
    return
  }

  $.ajax({
    url: "{!! url('masternomorfakturpajakspedit') !!}",
    type: "post",
    async: false,
    data: {
      _token : _token,
      kode,
      nama,
      noawal,
      noakhir,
      isPenuh: isPenuh,

    },
    success: function(res) {

      if (res != 1) {
        alertify.warning(res);
      }  else {
        console.log(res ,'!')
        // $("#formEdit").modal('toggle')
        alertify.success("Jenis telah diedit");
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
  let noawal = $("#input_add_noawal").val();
  let noakhir = $("#input_add_noakhir").val();
  const isPenuh = $('#input_add_penuh').prop('checked') ? 1 : 0;

  if (!kode) {
    alertify.warning("Kode harus diisi");
    return
  }

  if (!nama) {
    alertify.warning("Nama harus diisi");
    return
  }

  if (!noawal) {
    alertify.warning("Nama harus diisi");
    return
  }

  if (!noakhir) {
    alertify.warning("Nama harus diisi");
    return
  }

console.log(isPenuh);
  $.ajax({
    url: "{!! url('masternomorfakturpajakspadd') !!}",
    type: "post",
    async: false,
    data: {
      _token : _token,
      kode,
      nama,
      noawal,
      noakhir,
      isPenuh: isPenuh,
    },
    success: function(res) {

      if (res != 1) {
        alertify.warning(res);
      }  else {
        console.log(res ,'!')
        // $("#formEdit").modal('toggle')
        alertify.success("Jenis telah ditambah");
        loadAll()
        $("#form").modal('toggle')
      }

    }})

  // console.log(kodearea, namaarea)
}

    // Function to set the default Urut value
    function setDefaultUrut() {
      // Make an asynchronous request to get the highest Urut value from the database
      $.ajax({
        url: 'masternomorfakturpajakdefault',
        method: 'GET',
        success: function (data) {
          const highestUrut = Number(data.highestUrut) || 0;
          const newUrut = highestUrut + 1;

          console.log('Retrieved highestUrut:', highestUrut);
          console.log('New Urut:', newUrut);
          $("#input_add_kode").val(newUrut);
        },
        error: function (error) {
          console.error('Error fetching highest Urut value:', error);
        },
      });
    }

    // Call the setDefaultUrut function when the modal is opened
    $("#form").on("show.bs.modal", function () {
      setDefaultUrut();
    });

    const seri1Input = document.getElementById("seri1");
    const seri2Input = document.getElementById("seri2");
    const concatenatedSeriInput = document.getElementById("input_add_nama");

    // Add event listeners to both input fields
    seri1Input.addEventListener("input", updateConcatenatedSeri);
    seri2Input.addEventListener("input", updateConcatenatedSeri);

    // Function to update the concatenated value
    function updateConcatenatedSeri() {
      const seri1Value = seri1Input.value;
      const seri2Value = seri2Input.value;

      // Concatenate seri1, ".", and seri2
      const concatenatedSeri = `${seri1Value}.${seri2Value}.`;

      // Set the concatenated value to the input field
      concatenatedSeriInput.value = concatenatedSeri;
    }

    // Initialize the concatenated value when the page loads
    updateConcatenatedSeri();


    // Get references to the input fields
        const seri1InputEdit = document.getElementById("seri1edit");
        const seri2InputEdit = document.getElementById("seri2edit");
        const concatenatedSeriInputEdit = document.getElementById("input_edit_nama");

        // Add event listeners to both input fields
        seri1InputEdit.addEventListener("input", updateConcatenatedSeriEdit);
        seri2InputEdit.addEventListener("input", updateConcatenatedSeriEdit);

        // Function to update the concatenated value
        function updateConcatenatedSeriEdit() {
          const seri1Value = seri1InputEdit.value;
          const seri2Value = seri2InputEdit.value;

          // Concatenate seri1, ".", and seri2
          const concatenatedSeri = `${seri1Value}.${seri2Value}.`;

          // Set the concatenated value to the input field
          concatenatedSeriInputEdit.value = concatenatedSeri;
        }

        // Initialize the concatenated value when the page loads
        updateConcatenatedSeriEdit();

window.onload = function (){
  loadAll();
};

</script>



@endsection
