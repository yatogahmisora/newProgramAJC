@extends('master.newmaster')
@section('buttons')

@endsection
@section('content')
<div class="container-fluid">

  <!-- <div id="qrcode"></div> -->
<div class="row mt-4">
      <div class="col-6 text-left">
        <h2 style="margin-top:-85px;">Master Barang Jasa</h2>
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
          Add Barang Jasa
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
<!-- <button onclick="loadAll()">tes</button>
<button onclick="loadAll()">tes</button>
<button onclick="loadAll()">tes</button -->
</div>

<div id="printContainer" style="display:none">

</div>
<div id="contentContainer" class="container-fluid" style='margin-top:-95px;' >
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
                          <th scope="col">Kode Brg</th>
                          <th scope="col">Nama Brg</th>
                          <th scope="col">Group</th>
                          <th scope="col">Header Group</th>
                          <th scope="col">Sub Group</th>

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
  <div class="modal-dialog modal-lg modal-dialog-centered"  role="document">
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
          <!-- <input type="hidden" name="noUrut" id="input_add_noUrut" value="" /> -->

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Group</label>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_add_kodegroup" value='JS' disabled>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <span>Jasa</span>
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">HeadGroup</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <select id="input_add_kodeheadgroup" onchange="changeInputHeadGroup()" class="form-control" aria-label="Default select example">
                    <option selected value="" disabled>Pilih HeadGroup</option>
                  </select>
                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">SubGroup</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <select id="input_add_kodesubgroup" onchange="changeInputSubGroup()"  class="form-control" aria-label="Default select example" >
                    <option selected disabled value="">Pilih SubGroup</option>
                  </select>
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Kode Barang</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_add_kodebarang" disabled >
                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Nama Barang</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_add_namabarang" >
                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Nama Barang 2</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_add_namabarang2" >
                </div>
              </div>

            </div>

            <!-- <br/> -->



            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Satuan</label>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_add_satuan" >
                </div>
              </div>


            </div>

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Isi</label>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <input type="text" value=1 disabled class="form-control" id="input_add_isi" >
                </div>
              </div>


            </div>



            <!-- <br/> -->


            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Status</label>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <select id="input_add_isaktif" class="form-control" aria-label="Default select example">
                    <option value=1>Aktif</option>
                    <option value=0>NonAktif</option>
                  </select>
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
                  <input type="text" class="form-control text-left" id="input_add_keterangan" >
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
  <div class="modal-dialog modal-lg modal-dialog-centered"  role="document">
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
          <!-- <input type="hidden" name="noUrut" id="input_add_noUrut" value="" /> -->

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Group</label>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_edit_kodegroup" value='JS' disabled>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <span>Jasa</span>
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">HeadGroup</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <select disabled id="input_edit_kodeheadgroup" onchange="changeInputHeadGroup()" class="form-control" aria-label="Default select example">
                    <option selected value="" disabled>Pilih HeadGroup</option>
                  </select>
                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">SubGroup</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <select disabled id="input_edit_kodesubgroup" onchange="changeInputSubGroup()"  class="form-control" aria-label="Default select example" >
                    <option selected disabled value="">Pilih SubGroup</option>
                  </select>
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Kode Barang</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_edit_kodebarang" disabled >
                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Nama Barang</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_edit_namabarang" >
                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Nama Barang 2</label>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_edit_namabarang2" >
                </div>
              </div>

            </div>

            <!-- <br/> -->



            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Satuan</label>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="input_edit_satuan" >
                </div>
              </div>


            </div>

            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Isi</label>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <input type="text" value=1 disabled class="form-control" id="input_edit_isi" >
                </div>
              </div>


            </div>



            <!-- <br/> -->


            <div class="row">
              <div class="col-4 text-left">
                <div class="form-group text-left">
                  <label class="text-left">Status</label>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <select id="input_edit_isaktif" class="form-control" aria-label="Default select example">
                    <option value=1>Aktif</option>
                    <option value=0>NonAktif</option>
                  </select>
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
                  <input type="text" class="form-control text-left" id="input_edit_keterangan" >
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

let listSelectHeadGroup = []
let listSelectSubGroup = []
let dataRefresh = []

function buttonAdd () {
  console.log('buttonAdd')

  $("#form").modal('toggle')
}

function loadAll() {
  $('#tabel').DataTable().destroy();

  $('#tabel').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
      url: "{!! url('masterbarangjasaloadall') !!}",
      type: "GET"
    },
    columns: [
      {
        data: null,
        className: "text-center",
        render: function (data, type, row) {
          return `
            <div class="action-buttons text-center" style="position: relative;">
              <button class="btn btn-success btn-sm hover-tooltip" type="button" onclick="buttonEdit('${row.KODEBRG}')" data-tooltip="Edit Barang">
                <i class="bi bi-pen"></i>
              </button>
              <button class="btn btn-danger btn-sm hover-tooltip" type="button" onclick="buttonDelete('${row.KODEBRG}')" data-tooltip="Delete Barang">
                <i class="bi bi-trash"></i>
              </button>
            </div>
          `;
        }
      },
      { data: 'KODEBRG' },
      { data: 'NAMABRG' },
      { data: 'nNAMAGROUP' },
      { data: 'nNAMAHDGROUP' },
      { data: 'nNAMASUBGROUP' }
    ],
    createdRow: function (row, data, dataIndex) {
      if (data.ISAKTIF == 0) {
        $(row).addClass('text-danger');
      }
    },
    lengthChange: true,
    paging: true
  });
}

function submitEdit () {
  let _token = $("#_token").val();
  console.log('submitEdit')
  let kodegroup = $("#input_edit_kodegroup").val();
  let kodeheadgroup = $("#input_edit_kodeheadgroup").val();
  let kodesubgroup = $("#input_edit_kodesubgroup").val();
  let kodebarang = $("#input_edit_kodebarang").val();
  let namabarang = $("#input_edit_namabarang").val();
  let namabarang2 = $("#input_edit_namabarang2").val();
  let satuan = $("#input_edit_satuan").val();
  let isi = $("#input_edit_isi").val();
  let isaktif = $("#input_edit_isaktif").val();
  let keterangan = $("#input_edit_keterangan").val();

  console.log('kodegroup', kodegroup)
  console.log('kodeheadgroup', kodeheadgroup)
  console.log('kodesubgroup', kodesubgroup)
  console.log('kodebarang', kodebarang)
  console.log('namabarang', namabarang)
  console.log('namabarang2', namabarang2)
  console.log('satuan', satuan)
  console.log('isi', isi)
  console.log('isaktif', isaktif)
  console.log('keterangan', keterangan)

  if (!kodegroup) {
    alertify.warning("KodeGroup harus diisi");
    return
  }
  if (!kodeheadgroup) {
    alertify.warning("KodeHeadGroup  harus diisi");
    return
  }
  if (!kodesubgroup) {
    alertify.warning("KodeSubGroup harus diisi");
    return
  }
  if (!kodebarang) {
    alertify.warning("KodeBarang harus diisi");
    return
  }
  if (!namabarang) {
    alertify.warning("NamaBarang harus diisi");
    return
  }
  if (!satuan) {
    alertify.warning("Satuan 1 harus diisi");
    return
  }
  if (!isi) {
    alertify.warning("Isi 1 harus diisi");
    return
  }
  $.ajax({
    url: "{!! url('masterbarangjasaspedit') !!}",
    type: "post",
    async: false,
    data: {
      _token : _token,
      namabarang,
      namabarang2,
      kodebarang,
      satuan,
      isi,
      isaktif,
      keterangan

    },
    success: function(res) {

    console.log(res)

    if (res != 1) {
      alertify.warning(res);
    }  else {
      alertify.success('Barang telah diedit');
      loadAll()
      $("#formEdit").modal('toggle')
    }

    }})

}

function submitAdd () {
  let _token = $("#_token").val();
  console.log('submitAdd')
  let kodegroup = $("#input_add_kodegroup").val();
  let kodeheadgroup = $("#input_add_kodeheadgroup").val();
  let kodesubgroup = $("#input_add_kodesubgroup").val();
  let kodebarang = $("#input_add_kodebarang").val();
  let namabarang = $("#input_add_namabarang").val();
  let namabarang2 = $("#input_add_namabarang2").val();
  let satuan = $("#input_add_satuan").val();
  let isi = $("#input_add_isi").val();
  let isaktif = $("#input_add_isaktif").val();
  let keterangan = $("#input_add_keterangan").val();

  console.log('kodegroup', kodegroup)
  console.log('kodeheadgroup', kodeheadgroup)
  console.log('kodesubgroup', kodesubgroup)
  console.log('kodebarang', kodebarang)
  console.log('namabarang', namabarang)
  console.log('namabarang2', namabarang2)
  console.log('satuan', satuan)
  console.log('isi', isi)
  console.log('isaktif', isaktif)
  console.log('keterangan', keterangan)

  if (!kodegroup) {
    alertify.warning("KodeGroup harus diisi");
    return
  }
  if (!kodeheadgroup) {
    alertify.warning("KodeHeadGroup  harus diisi");
    return
  }
  if (!kodesubgroup) {
    alertify.warning("KodeSubGroup harus diisi");
    return
  }
  if (!kodebarang) {
    alertify.warning("KodeBarang harus diisi");
    return
  }
  if (!namabarang) {
    alertify.warning("NamaBarang harus diisi");
    return
  }
  if (!satuan) {
    alertify.warning("Satuan 1 harus diisi");
    return
  }
  if (!isi) {
    alertify.warning("Isi 1 harus diisi");
    return
  }


    $.ajax({
      url: "{!! url('masterbarangjasaspadd') !!}",
      type: "post",
      async: false,
      data: {
        _token : _token,
        kodegroup,
        kodeheadgroup,
        kodesubgroup,
        namabarang,
        namabarang2,
        kodebarang,
        satuan,
        isi,
        isaktif,
        keterangan

      },
      success: function(res) {

      console.log(res)

      if (res != 1) {
        alertify.warning(res);
      }  else {
        alertify.success('Barang telah ditambah');
        loadAll()
        $("#form").modal('toggle')
      }

      }})



}



function buttonAdd () {


    $.ajax({
      url: "{!! url('masterbarangjasalistselect') !!}",
      type: "get",
      async: false,
      data: {
      },
      success: function(res) {

        console.log(res)
        // console.log(res.listHeadGroup)
        // console.log(res.listSubGroup)
        // console.log(res.listSubKategori);
        // console.log(res.listSubKategori);

        listSelectHeadGroup = res.listHeadGroup
        listSelectSubGroup = res.listSubGroup

      }})

      console.log('================')
      console.log(listSelectHeadGroup)
      console.log(listSelectSubGroup)

      let rowSelect = `<option selected disabled value="">Pilih HeadGroup</option>`
      listSelectHeadGroup.forEach((item, i) => {
        rowSelect += `
          <option value="${item.KODEHDGRP}">${item.NAMAHDGRP}</option>
        `
      });
      document.getElementById("input_add_kodeheadgroup").innerHTML = rowSelect
      document.getElementById("input_add_kodesubgroup").innerHTML =  `<option selected disabled value="">Pilih SubGroup</option>`

      // let rowSelectSubGroup = `<option selected disabled value="">Pilih SubGroup</option>`

      // document.getElementById("input_add_kodesubkategori").innerHTML =  `<option selected disabled value="">Pilih SubKategori</option>`

    $("#form").modal('toggle')
}

function changeInputHeadGroup () {
  // console.log('tes')
  // let valueGroup = $("#input_add_kodegroup").val();
  let valueHeadGroup = $("#input_add_kodeheadgroup").val();
  console.log(valueHeadGroup)

  let temp = listSelectSubGroup.filter (function (el) {
    return el.KodeHDGrp == valueHeadGroup
  })

  let rowSelect = `<option selected disabled value="">Pilih SubGroup</option>`
  temp.forEach((item, i) => {
    rowSelect += `
    <option value="${item.KodeSubGrp}">${item.NamaSubGrp}</option>
    `
  });

  document.getElementById("input_add_kodesubgroup").innerHTML = rowSelect
  // document.getElementById("input_add_kodesubkategori").innerHTML =  `<option selected disabled value="">Pilih SubKategori</option>`
  document.getElementById("input_add_kodebarang").value = ''


  console.log(temp)
}

function changeInputSubGroup () {
  let valueHeadGroup = $("#input_add_kodeheadgroup").val();
  let valueSubGroup = $("#input_add_kodesubgroup").val();
  console.log(valueHeadGroup, valueSubGroup)

  let kodebarang = 'JS.' + valueSubGroup + '.'
  console.log(kodebarang)

  // masterbarangjasaspcheckdbbarang

  let _token = $("#_token").val();
  $.ajax({
    url: "{!! url('masterbarangjasaspcheckdbbarang') !!}",
    type: "post",
    async: false,
    data: {
      _token : _token,
      kodebarang: kodebarang + '%'
    },
    success: function(res) {

      console.log(res)

      if(!res.length) {
        console.log('+ 001')
        kodebarang += '001'
      } else {
        console.log(res[0].KODEBRG)
        let tes = res[0].KODEBRG
        // let temp = tes.slice(-4)
        let temp = tes.slice(kodebarang.length , kodebarang.length + 3)
        console.log(temp)
        console.log(Number(temp))
        let tempUrut = '0000' + (Number(temp) + 1)
        console.log(tempUrut.slice(-3))
        kodebarang += tempUrut.slice(-3)
      }

    }})

  document.getElementById("input_add_kodebarang").value = kodebarang
}

function buttonEdit (kodebarang) {
  console.log('buttonEdit')
  console.log(kodebarang)
  let _token = $("#_token").val();

  $.ajax({
    url: "{!! url('masterbarangjasaspdetail') !!}",
    type: "get",
    async: false,
    data: {
      _token : _token,
      kodebarang: kodebarang
    },
    success: function(res) {

      console.log(res)

      // document.getElementById("input_add_kodebarang").value = ''
      document.getElementById("input_edit_kodebarang").value = res[0].KODEBRG
      document.getElementById("input_edit_namabarang").value = res[0].NAMABRG
      document.getElementById("input_edit_namabarang2").value = res[0].NamaBrg2
      document.getElementById("input_edit_satuan").value = res[0].SAT1
      document.getElementById("input_edit_isi").value = res[0].ISI1
      document.getElementById("input_edit_keterangan").value = res[0].Keterangan
      document.getElementById("input_edit_isaktif").value = res[0].ISAKTIF
      let temp1 = `<option selected value='${res[0].KodeHdGrp}' >${res[0].nNAMAHDGROUP}</option>`
      let temp2 = `<option selected value='${res[0].KODESUBGRP}' >${res[0].nNAMASUBGROUP}</option>`


      document.getElementById("input_edit_kodeheadgroup").innerHTML = temp1
      document.getElementById("input_edit_kodesubgroup").innerHTML = temp2
    }})
    $("#formEdit").modal('toggle')
}


function buttonDelete (kodebarang) {
  console.log('buttonDeleteHarga')
  console.log(kodebarang)

  let _token = $("#_token").val();
// return
  alertify.confirm('Hapus Harga', 'Apakah yakin ingin menghapus Barang ' + kodebarang + ' ?',
      function() {
        console.log('yes')

        $.ajax({
          url: "{!! url('masterbarangjasaspdelete') !!}",
          type: "post",
          async: false,
          data: {
            _token : _token,
            kodebarang,
          },
          success: function(res) {
            if (res != 1) {
              alertify.warning(res);
            } else {
              console.log(res)
              loadAll()
              alertify.success("Barang telah dihapus");




          }
          }})
      }
    ,function(){
      console.log('no')
    });
}

window.onload = function() {
  loadAll();
}




</script>




@endsection
