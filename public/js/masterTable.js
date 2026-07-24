
$("#tabel_filter_visual").on("keyup", function () {
  $("#tabel").DataTable().search(this.value).draw();
});

$("#tabel_length_visual").on("change", function () {
  $("#tabel").DataTable().page.len(Number(this.value)).draw();
});
